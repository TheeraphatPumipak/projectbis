<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function list()
    {
        $users = DB::table('users')
            ->orderBy('id', 'desc')
            ->get();

        return view('users.list', compact('users'));
    }
    public function form()
    {
        $id = null;
        $name = null;
        $email = null;
        $password = null;
        return view('users.form', compact('id', 'name', 'email', 'password'));
    }
    public function register()
    {
        return view('users.register');
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone'=>'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('users/form')
                ->withErrors($validator)
                ->withInput();
        }
        $user = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'password' => $request->password
        ]);
        return  redirect('/user/signIn');
    }
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if (isset($user)) {
            $id = $user->id;
            $name = $user->name;
            $email = $user->password;
            $password = $user->password;
        }
        return view('users.form', compact('id', 'name', 'email', 'password'));
    }
    public function update($id, Request $request)
    {
        $user = DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/users/list');
    }
    public function remove($id)
    {
        $user = DB::table('users')->where('id', $id)->delete();
        return redirect('/users/list');
    }
    public function signIn()
    {
        return view('users.signIn');
    }
    public function signInProcess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/user/signIn')
                ->withErrors($validator)
                ->withInput();
        }
        $user=DB::table('users')
        ->select('id')
        ->where('email', $request->email)
        ->where('password',$request->password)
        ->first();
        if(isset($user)){
            session(['user_id'=>$user->id]);
            return redirect('/backoffice');
        }else{
            return redirect('/user/signIn')
            ->withErrors(['Search'=>'Invalid email or password'])
            ->withInput();
        }
    }
    public function signOut()
    {
        session()->forget('user_id');
        return redirect('/user/signIn');
    }
    public function info() {
        $user_id=session('user_id');
        $user=DB::table('users')
        ->select('id','name','email')
        ->where('id',$user_id)->first();
        return view('users.info',compact('user'));
    }
}
