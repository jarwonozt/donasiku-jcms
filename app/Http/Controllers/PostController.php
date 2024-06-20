<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Blog';

        // module name
        $this->module_name = 'posts';

        // directory path of the module
        $this->module_path = 'App\Models\Post';
    }

    public function index()
    {
        $data = [
            'title' => $this->module_name,
            'create' => Lang::get('blog.create'),
            'action' => 'posts.create',
        ];

        return view('backend.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => $this->module_name,
            'action' => Lang::get('blog.create'),
            'route' => route('posts.store'),
            'row' => null,
            'categories' => Category::where('status', 'active')->get(),
            'tags' => Tag::where('status', 'active')->get(),
        ];

        return view('backend.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();

        try {
            // Generate slug form the title
            $slug = Str::slug($validatedData['title']);

            $post = new Post();
            $post->fill($validatedData);
            $post->slug = $slug;
            $post->created_by = auth()->user()->id;
            $post->edited_by = auth()->user()->id;
            $post->save();

            // Save tags separately
            $post->tags()->attach($request->input('tags'));

            return redirect()->route('posts.index')->with('message', 'Post add successfully.');
        } catch (Exception $error) {
            DB::rollBack();
            dd($error->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'title' => $this->module_name,
            'action' => Lang::get('blog.edit'),
            'route' => route('posts.update', $id),
            'row' => $post,
            'categories' => Category::where('status', 'active')->get(),
            'tags' => Tag::whereNotIn('id', $post->tags()->pluck('tag_id'))->where('status', 'active')->get(),
        ];

        return view('backend.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        // dd($request);
        $validatedData = $request->validated();

        try {
            // Generate slug form the title
            $slug = Str::slug($validatedData['title']);

            $post = Post::findOrFail($id);
            $post->fill($validatedData);
            $post->slug = $slug;
            $post->edited_by = auth()->user()->id;
            $post->save();

            if ($request->input('tags') === null) {
                $tags_list = [];
            } else {
                $tags_list = $request->input('tags');
            }
            $post->tags()->sync($tags_list);

            return redirect()->route('posts.index')->with('message', $post->title.' UPDATED');
        } catch (Exception $error) {
            DB::rollBack();
            dd($error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
