@extends('layouts.master')

@section('title', 'Persona')

@section('content')
<tr>
	<td colspan="4"> Código: {{ $persona->nPerCodigo }} </td> <br>
	<td colspan="4"> Apellido: {{ $persona->cPerApellido }} </td> <br>
	<td colspan="4"> Nombre: {{ $persona->cPerNombre }} </td> <br>
	<td colspan="4"> Fecha Nacimiento: {{ $persona->dPerFecNac }} </td> <br>
	<td colspan="4"> Edad: {{ $persona->nPerEdad }} </td> <br>
</tr>
@endsection
