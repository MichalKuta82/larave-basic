@extends('layouts.app')

@section('content')
	<h1>Contact</h1>
	{!! Form::open(['url' => 'contact']) !!}
		<div class="form-group {{$errors->has('name') ?? 'has-error' }}">
			{!! Form::label('name', 'Enter Name:', ['for' => 'name']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'name' => 'name']) !!}
			@if($errors->has('name'))
		    	<p class="text-danger">{{$errors->first('name')}}</p>
		    @endif
		</div>
		<div class="form-group {{$errors->has('email') ?? 'has-error' }}">
			{!! Form::label('email', 'Email Address:', ['for' => 'email']) !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address', 'name' => 'email']) !!}
			@if($errors->has('email'))
		    	<p class="text-danger">{{$errors->first('email')}}</p>
		    @endif
		</div>
		<div class="form-group {{$errors->has('message') ?? 'has-error' }}">
			{!! Form::label('message', 'Enter Message:', ['for' => 'message']) !!}
			{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Enter Message', 'name' => 'message']) !!}
			@if($errors->has('message'))
		    	<p class="text-danger">{{$errors->first('message')}}</p>
		    @endif
		</div>
		{!! Form::submit('Submit', ['class' => 'btn btn-primary', 'name' => 'submit']) !!}
	{!! Form::close() !!}
@endsection