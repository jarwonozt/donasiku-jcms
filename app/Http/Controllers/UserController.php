<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Users';

        // module name
        $this->module_name = 'users';

        // directory path of the module
        $this->module_path = 'users';
    }


    public function index()
    {
        $data = [
            'title' => $this->module_name,
            'create' => Lang::get('user.create_user'),
            'action' => 'users.create',
        ];

        return view('backend.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => $this->module_name,
            'action'    => Lang::get('user.create_user'),
            'route'     => route('users.store'),
            'row'     => null,
        ];

        return view('backend.users.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // dd($request);
        $module_title = $this->module_title;
        $module_action = 'Store';

        try {
            $user = User::create(array_merge($request->except('role'), ['password' => Hash::make('cdaaptnia')]));
            $user->assignRole($request->role);

            Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

            return redirect()->route('users.index')->with('message', $request->name.' Created successfully.');
        } catch (Exception $error) {
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
        $isAdmin = auth()->user()->getRoleNames()[0] == 'admin';

        if($isAdmin || $id == auth()->user()->id)
        {
            $data = [
                'title'     => $this->module_name,
                'action'    => Lang::get('user.edit_user'),
                'route'     => route('users.update', $id),
                'row'       => User::find($id),
            ];

            return view('backend.users.edit', $data);

        }else{
            dd('cant access');
            return back();
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        // dd($request);
        $module_title = $this->module_title;
        $module_action = 'Update';

        try {
            $user   = User::findOrFail($id);
            $update = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $request->image,
                'status' => $request->status,
            ]);
            $user->syncRoles($request->role);

            Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

            return redirect()->route('users.index')->with('message', $request->name.' Updated successfully.');
        } catch (Exception $error) {
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
