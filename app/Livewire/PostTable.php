<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class PostTable extends DataTableComponent
{
    protected $model = Post::class;

    public $selected_id;
    public $title, $slug, $content, $preview, $category, $tags, $image, $author;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
        // $this->setCurrentlyReorderingEnabled();
        $this->setLoadingPlaceholderEnabled();
        $this->setLoadingPlaceholderStatus(true);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Title', 'title')->searchable()
                ->format(fn($value, $row, $column) => "<a href=\"#\" wire:click=\"show($row->id)\">$value</a>")
                ->html(),
            Column::make('Category', 'category.name')->searchable()
                ->format(fn($value) => "<a href=\"".route('categories.show', Str::slug($value))."\"><span class=\"badge badge-sm badge-primary\">".$value."</span></a>")->html(),
            Column::make('Tags', 'id')
                ->format(function($value) {
                    $postTag = PostTag::where('post_tag_id', $value)->with('tag')->get();
                    if($postTag->count() > 0) {
                        foreach ($postTag as $key => $item) {
                            $tag[$key] = "<a href=\"".route('tags.show', $item->tag->slug)."\"><span class=\"badge badge-sm badge-secondary\">".$item->tag->name."</span></a>";

                        }

                        return implode(' ', $tag);
                    }else{
                        return '';
                    }
                })->html(),
            Column::make('Created By', 'createdBy.name'),
            Column::make('Edited By', 'editedBy.name'),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Action', 'id')
            ->view('backend.posts.table.action'),
        ];
    }

    public function builder(): Builder
    {
        if(auth()->user()->getRoleNames()[0] != 'admin') {
            return Post::query()->with('createdBy')->where('created_by', auth()->user()->id)->orderBy('id', 'desc');
        }else{
            return Post::query()->with('createdBy');
        }
    }

    public function show($id)
    {
        $data = Post::with('category', 'tags')->findOrFail($id);

        $this->title = $data->title;
        $this->slug  = $data->slug;
        $this->preview  = $data->preview;
        $this->content  = $data->content;
        $this->category  = $data->category->name;
        $this->tags      = $data->tags;
        $this->image     = $data->image;
        $this->author    = $data->createdBy->name;

        $this->dispatch('showPostModal', ['post' => $data]);

    }

    public function delete($id)
    {
        $this->selected_id =  $id;
        $this->dispatch('deleteConfirmModal');
    }

    public function deleted()
    {
        Post::findOrFail($this->selected_id)->delete();
        $this->dispatch('closeDeleteConfirmModal');
    }

    public function customView():string
    {
        return 'backend.posts.modal';
    }
}
