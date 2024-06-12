@extends('layouts.master')

@section('title', 'Personas')

@section('content')
<td>Personas en tabla: </td> <br> <br>
@if($personas)
	@foreach($personas as $persona)
	<td>{{ $persona->cPerApellido }}, {{ $persona->cPerNombre }}</td> <br>
	@endforeach
@endif
@endsection
