<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class Files extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $file;
    public $module_name = 'Files';

    public function render()
    {

        if($this->search)
        {
            $files = File::search($this->search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $files = File::orderBy('created_at', 'desc')->paginate(10);
        }

        $data = [
            'title' => $this->module_name,
            'create' => Lang::get('user.create_user'),
            'action' => 'users.create',
            'files' => $files,
        ];

         return view('livewire.files', $data);
    }

    public function delete($id)
    {
        File::findOrFail($id)->delete();
        session()->flash('delete', 'File deleted.');
        $this->redirect('files');
    }
}
