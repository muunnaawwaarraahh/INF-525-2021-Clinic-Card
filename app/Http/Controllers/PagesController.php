<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login/login');
    }

    
    public function regis()
    {
        return view('login/register');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
               
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // ddd($request);
        
        $validateData =  $request->validate([
            'name'=>'required',
            'username'=> 'required|unique:users,username',
            'password'=> 'required|min:5',
            'password2'=> 'required|min:5|same:password',
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        $query = $user->save();
        
        if($query){
            return back()->with('success', 'Selamat registrasi berhasil!!!');
        }
        else{
            return back()->with('fail', 'Gagal melakukan registrasi!');
        }
    }
    
    
    public function check(Request $request){
        $request->validate([
            'username'=> 'required|exists:users,username',
            'password'=> 'required|min:5',
        ],[
            'username.exists'=>'Username tidak ditemukan'
        ]);
        
        $creds = $request->only('username','password');
        if( Auth::guard('web')->attempt($creds) ){

            return redirect('/user/home');
            
        }else{
            return redirect('/user/login')->with('fail','Inputan Anda Salah!');
        }

        
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/user/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    // public function autenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'username' => ['required'],
    //         'password' => ['required'],
    //     ]);
    
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    
    //         return redirect()->intended('/home');
    //     }
    
    //     return back()->with('loginError', 'Login gagal!');
    
    // }
}
