@extends('layouts.master')

@section('title', 'Personas')

@section('content')
<td>Personas en tabla: </td> <br> <br>

@if($personas)
	@foreach($personas as $persona)
		<td>
			<a href="{{ route('people.show', $persona->nPerCodigo)  }}">{{ $persona->cPerApellido }}, {{ $persona->cPerNombre }}</a>
		</td>
		<br>
	@endforeach
@else
	<td colspan="4"> No hay personas que mostrar </td>
@endif
<tr>
	<td colspan="4"> {{ $personas->links() }} </td>
</tr>
@endsection
