@extends('layouts.app')

@section('content')
	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Message</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($messages as $message)
	    <tr>
	      <th scope="row">{{ $message->id }}</th>
	      <td>{{ $message->name }}</td>
	      <td>{{ $message->email }}</td>
	      <td>{{ str_limit($message->message, 10) }}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
	{{ $messages->links() }}
@endsection