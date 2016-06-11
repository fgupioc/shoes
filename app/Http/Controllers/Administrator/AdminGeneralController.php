<?php

namespace shoes\Http\Controllers\Administrator;

use Illuminate\Http\Request;

use shoes\Http\Requests;
use shoes\Http\Controllers\Controller;

class AdminGeneralController extends Controller
{
    public function institution_list()
    {
      return view('admin-general.institucion-list');
    }
}
