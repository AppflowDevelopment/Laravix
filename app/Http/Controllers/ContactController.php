<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	public function index(Request $request)
	{
		return view('includes.contact');
	}
	
	public function send(Request $request)
	{
		\Mail::send('emails.contact',
				array(
					'user_name' => $request->get('name'),
					'user_email' => $request->get('email'),
					'user_message' => $request->get('message')
				), function($message)
			{
				$message->from(settings('email'));
				$message->to(settings('email'), 'Admin')->subject('Laravix Feedback');
			});

		  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
	}
}