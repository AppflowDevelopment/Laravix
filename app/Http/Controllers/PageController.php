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
        $page = DB::table('lv_pages')->find(1);

        return view('includes.page', ['page' => $page]);
    }
}
