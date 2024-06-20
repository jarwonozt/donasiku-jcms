<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryTable extends DataTableComponent
{
    protected $model = Category::class;

    public $selected_id;
    public $name, $status;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")->searchable(),
            Column::make("Status", "status")
                ->format(
                    function($value, $column, $row) {
                        $color = $value == 'active' ? 'success' : 'danger';
                        return "<a wire:click=\"updateStatus('$value', '$column->id')\" class=\"badge badge-soft-$color ms-1 text-uppercase\">$value</a>";
                    }
                )
                ->html(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Action", "id")
            ->view('backend.categories.table.action'),
        ];
    }

    // UPDATE STATUS
    public function updateStatus($value, $id)
    {
        Category::find($id)->update(['status' => $value == 'active' ? 'inactive' : 'active']);
    }

    // EDIT CATEGORY
    public function edit($id)
    {
        $this->selected_id =  $id;
        $data = Category::findOrFail($this->selected_id);
        $this->name = $data->name;

        $this->dispatch('editCategoryModal');
    }

    public function edited()
    {
        Category::findOrFail($this->selected_id)->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
        $this->dispatch('closeEditedConfirmModal');
    }

    // DELETE CATEGORY
    public function delete($id)
    {
        $this->selected_id =  $id;
        $this->dispatch('deleteConfirmModal');
    }

    public function deleted()
    {
        Category::findOrFail($this->selected_id)->delete();
        $this->dispatch('closeDeleteConfirmModal');
    }

    public function customView():string
    {
        return 'backend.categories.modal';
    }
}
