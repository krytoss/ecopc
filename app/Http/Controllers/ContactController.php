<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Mail;

class ContactController extends Controller
{
    
	public function index() {
		return view('contact');
	}

	public function send(ContactFormRequest $request) {

		Mail::send('email', 
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'msg' => $request->get('message')
			),
			function($message) {
				$message->to(config('admin.email'))->subject('Nová správa z ecopc.sk');
			});

		return back()->with('success', 'Správa úspešne odoslaná.');

	}

}
