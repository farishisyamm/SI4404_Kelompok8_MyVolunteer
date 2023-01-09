<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Session;

class UserController extends Controller
{
    public function index()
    {
        return view("pages.authentication.login");
    }

    public function create()
    {
        return view("pages.authentication.register");
    } 

    public function store(Request $request)
    {
        try {   
            $user = User::where('user_email', $request->email)->first();

            if(empty($user)){
                User::create([
                    'user_email' => $request->email,
                    'user_full_name' => $request->name,
                    'user_password' => Hash::make($request->password),
                    'level' => 0,
                    'status' => $is_org = !empty($request->is_org)? $request->is_org : 'V'
                ]);

                Session::flash('success', "Berhasil Registrasi, Silahkan Login");
                return redirect("/login");
            } else {
                Session::flash('error', "Email Sudah Terdaftar, Silahkan Login!!!");
            }
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return view("pages.authentication.register");
    } 

    public function login(Request $request){
        try {  
            $email = $request->email;
            $password = $request->password;
            $is_org = !empty($request->is_org)? $request->is_org : 'V';
            $user = User::where(['user_email' => $email, 'status' => $is_org])->first();

            if(!empty($user)){
                if (Hash::check($password, $user->user_password)) {
                    $request->session()->put('id', $user->user_id);
                    $request->session()->put('status_user', $user->status);
                    if($request->remember_me == 'Y'){
                        setcookie("email", $email, time() + 3600, "/");
                        setcookie("password", $password, time() + 3600, "/");
                    } else {
                        setcookie('email', '', 0, '/');
                        setcookie('password', '', 0, '/');
                    }

                    return redirect("/dashboard");
                } else {
                    Session::flash('error', "Password Anda Salah!!!");
                }
            } else {
                Session::flash('error', "Email Belum Terdaftar, Silahkan Daftar Terlebih Dahulu!!!");
            }
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }
        
        return redirect("/login");
    }

    public function show()
    {
        $user = User::where('user_id', Session::get('id'))->first();

        return view("pages.dashboard.profile")->with(['user' => $user, 'position' => 'profile', 'name' => $user->user_full_name]);
    } 

    public function update(Request $request)
    {
        try {  
            
            if(isset($request->password)){
                User::where('user_id', Session::get('id'))->update([
                    'user_full_name' => $request->name,
                    'user_password' => Hash::make($request->password)
                ]);
            } else {
                User::where('user_id', Session::get('id'))->update([
                    'user_full_name' => $request->name
                ]);
            }

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
        }

        return redirect("/profile");
    } 

    public function logout(){
        Session::forget('id');
        Session::forget('status_user');

        return redirect("/login");
    }
}
