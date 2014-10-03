@extends('layouts.default')
@section('content')
<h1>Welcome to Rustic.com</h1>
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
        {{link_to_route('register_path', 'Register', null, ['class' => 'btn btn-primary'])}}
        </p>
      </div>
@stop