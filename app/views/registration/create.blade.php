
@extends('layouts.default')
@section('content')
<h1>Register to get new offers for Rustic places in Europe</h1>
{{ Form::open(['route' => 'register_path']) }}
<div class="form-group">
{{ Form::label('username', 'Username') }}
{{ Form::text('username', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('email', 'Email') }}
{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::password('password',  ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Register', ['class' => 'btn btn-sm btn-info']) }}
</div>
{{ Form::close() }}
@stop