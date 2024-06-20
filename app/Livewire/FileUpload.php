<?php

namespace App\Livewire;

use App\Models\File;
use Exception;
use Illuminate\Support\Facades\Lang;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class FileUpload extends Component
{
    use WithFileUploads;

    public $files;

    public function render()
    {
        $data = [
            'title' => 'Upload File',
            'create' => Lang::get('file.create'),
            'action' => 'files.create',
            // 'files' => $files,
        ];

        return view('livewire.file-upload', $data);
    }

    public function save()
    {
        $this->validate([
            'files' => 'required|file|mimes:txt,pdf,docx,doc,xlsx,xls,jpg,jpeg,gif,png|max:10240', //Maks file size 10 MB
        ]);

        try {
            $upload = $this->files->storePublicly('files/file-manager', 'public');

            if ($upload) {
                File::create([
                    'name' => $this->files->getClientOriginalName(),
                    'slug' => Str::slug($this->files->getClientOriginalName()),
                    'type' => $this->files->getClientOriginalExtension(),
                    'size' => $this->files->getSize(),
                    'path' => $upload,
                    'status' => true,
                    'upload_by' => auth()->user()->id,
                ]);
            }
            session()->flash('success', 'File uploaded successfully.');
            $this->redirect('files');
        } catch (Exception $e) {
            // dd($e->getMessage());
            session()->flash('error', 'File upload error occurred.');
        }
    }
}
