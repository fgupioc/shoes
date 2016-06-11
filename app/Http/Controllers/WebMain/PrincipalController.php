<?php

namespace shoes\Http\Controllers\WebMain;

use Illuminate\Http\Request;

use shoes\Http\Requests;
use shoes\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function index()
    {
    	return view('web_home.index');
    }
}
