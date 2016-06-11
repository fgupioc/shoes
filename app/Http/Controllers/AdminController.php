<?php

namespace shoes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use shoes\Http\Requests;

class AdminController extends Controller
{ 

	public function index(){
		if (\Auth::check())
		{				
			return redirect('admin/panel');
		}
			return view('auth.login');
	}

    public function panel()
    {
    	 $type_admin = Auth::user()->administrador->type_admin->abreviado;
		
		if ($type_admin == 'AG'){
			return view('admin.home');
		}elseif ($type_admin == 'AI') {
			return view('admin.home');
		}elseif ($type_admin == 'AL') {
			return view('admin.home');
		}
		return redirect('home');
    }
}
