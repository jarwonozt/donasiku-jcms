<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class SettingController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Settings';

        // module name
        $this->module_name = 'settings';

        // directory path of the module
        $this->module_path = 'settings';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting_model = Setting::latest()->first();

        $data = [
            'title' => $this->module_name,
            'create' => null,
            'action' => null,
            'store' => route('settings.store'),
            'update' => route('settings.update', $setting_model->id ?? 0),
            'row' => $setting_model ?? null,
            'authors' => User::where('status', 'active')->role('admin')->get(),
        ];
        // dd($data);
        return view('backend.settings.index', $data);
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
        // dd($request);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'logo' => 'required',
            'address' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'author' => 'required',
        ]);

        try{
            Setting::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'logo' => $request->logo,
                'address' => $request->address,
                'description' => $request->description,
                'keyword' => $request->keyword,
                'author_id' => $request->author,
            ]);

            return back()->with('message', 'Setting Data Created.');
        }catch (Exception $e) {
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'logo' => 'required',
            'address' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'author' => 'required',
        ]);

        try{
            Setting::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'logo' => $request->logo,
                'address' => $request->address,
                'description' => $request->description,
                'keyword' => $request->keyword,
                'author_id' => $request->author,
            ]);

            return back()->with('message', 'Setting Data Updated.');
        }catch (Exception $e) {
            dd($e->getMessage());
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
