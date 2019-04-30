<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'min:10',
    	]);

    	// $message = Message::create($request->all());

		// $message = new Message();
		// $message->create($request->all());

    	// create message
    	$message = new Message();
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	// save message
    	$message->save();

    	return redirect('/')->with('success', 'Message Sent');
    }

    public function index()
    {
    	$messages = Message::paginate(5);

    	return view('index', compact('messages'));
    }
}
