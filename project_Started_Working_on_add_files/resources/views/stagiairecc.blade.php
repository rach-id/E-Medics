@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Stagiairecc</title>
</head>

<body>


                           
                           
	<h1>Cas cliniques</h1>
	<div>
		@foreach($name as $data){
					<tr>
						<th>titre : {{ $data -> titre}}</th>
						<th>description : {{ $data -> description}}</th> 
						<th>session : {{ $data -> session}}</th> 
						<th>Annee : {{ $data -> annee}}</th> 
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.html">Visualiser</a>
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.pdf">Telecharger</a>
					</tr>
					}
		@endforeach	
	</div>

</body>


@endsection
