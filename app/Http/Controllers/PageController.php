<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use DB;
use App\Quotation;

class PageController extends Controller
{
    public function index()
    {
        $page = DB::table('pages')->find(1);

        return view('includes.page', ['page' => $page]);
    }
	
	public function getView($alias='home')
	{
		$page = DB::table('pages')->where('alias','=',$alias)->first();

		if (empty($page)) return abort('404');

		return view('includes.page', ['page' => $page]);
	}
}
