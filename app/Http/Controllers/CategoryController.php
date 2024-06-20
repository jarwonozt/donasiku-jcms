<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Category';

        // module name
        $this->module_name = 'category';

        // directory path of the module
        $this->module_path = 'App\Models\Category';
    }

    public function index()
    {
        $data = [
            'title' => $this->module_name,
            'create' => Lang::get('category.create'),
            'action' => 'categories.create',
        ];

        return view('backend.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => [
                'required',
                'unique:categories',
                'string',
                'max:255',
            ],
        ]);
        try {
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'status' => 'active',
            ]);

            return redirect()->route('categories.index')->with('message', Lang::get('category.create_success'));
        } catch (Exception $e) {
            dd($e->getMessage());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
