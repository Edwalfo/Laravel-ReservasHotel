<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $data = [

            'title' => 'Dashboard',
        ]; 
        return view('admin.dashboard',$data);
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','El logged out ha sido exitoso');
    }
}
