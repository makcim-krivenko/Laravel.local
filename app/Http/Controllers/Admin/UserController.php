<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Gate;
use DB;
use Storage;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Contracts\Filesystem\Factory;

class UserController extends Controller
{
    /**
     * Display Add New User form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        if (Gate::allows('superadmin') || Gate::allows('admin')) {
            return view('admin.users.create');
        }
        return redirect('/admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = User::find($id);
        if ($check['user_type'] <= Auth::user()->user_type) {
            User::destroy($id);
            return redirect('/admin/users/');
        }
        return redirect('/admin/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =  User::find($id);
        if (Gate::allows('superadmin') || Gate::allows('admin') || $user['id'] == Auth::user()->id) {
            if (Storage::exists('images/avatars/1.jpg')) {
                $avatar = Storage::get('images/avatars/1.jpg');
            }

            return view('admin.users.edit', ['user' => $user, 'avatar' => $avatar]);
        }

        return redirect('/admin/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('superadmin')){
            $users =  DB::select("select * from users where user_type = 5 OR user_type = 10 OR user_type IS NULL");
            return view('admin.users.users', ['users' => $users]);
        }

        if (Gate::allows('admin')) {
            $users =  DB::select('select * from users where user_type = 5 OR user_type IS NULL');

            return view('admin.users.users', ['users' => $users]);
        }

        return redirect('/admin/');

    }

    /*
     * Insert data into Db
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        if ($request['user_type'] <= Auth::user()->user_type) {
            $rules = array('name' => 'required|max:255', 'email' => 'required|email|max:255|unique:users', 'user_type' => 'required',
                'password' => 'required|min:5|confirmed');

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $this->throwValidationException(
                    $request, $validator
                );
            }
            User::create($request->all());
            return redirect('/admin/users');
        }
        return redirect('/admin/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request['user_type'] <= Auth::user()->user_type) {
            $data  = array('name' => $request['name'], 'email' => $request['email'], 'user_type' => $request['user_type']);
            $rules = array('name' => 'required|max:255', 'email' => 'required|email|max:255', 'user_type' => 'required',);

            if (!empty($request['password'])) {
                $data  = ['password' => $request['password'], 'password_confirmation' => $request['password_confirmation']];
                $rules = ['password' => 'required|min:5|confirmed'];
            }

            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                $this->throwValidationException(
                    $request, $validator
                );
            }

            unset($data['password_confirmation']);
            unset($data['password']);

            if (!empty($request['password'])) {
                $data = ['password' => bcrypt($request['password'])];
            }

            DB::table('users')
                ->where('id', $id)
                ->update($data);

            return redirect('/admin/users/');
        }
        return redirect('/admin/');
    }
}
