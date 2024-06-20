<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class FileController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Files',
            'create' => Lang::get('files.create'),
            'action' => 'files.create',
        ];

        return view('backend.files.index', $data);
    }
}
