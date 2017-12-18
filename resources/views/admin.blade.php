@extends('layouts.app')

@section('content')
<div class="container">
<table>
		<tr>
		<th></th>
		<th></th>
		<th></th>
		</tr> 
@foreach($users as $user)
		<tr>
			<tb>{{$user->name}}{{$user->name}}</tb><br>
			<tb>{{$user->email}}</tb><br>
			<hr> <tb> <form></form></tb>
		</tr>
@endforeach
</table>
</div>
@endsection