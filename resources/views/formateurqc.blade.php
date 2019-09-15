@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>FormateurQc</title>
</head>

<body>

	<h1>QCMS</h1>
	<div>
		@foreach($name as $data){
					<tr>
						<th>titre : {{ $data -> titre}}</th>
						<th>description : {{ $data -> description}}</th> 
						<th>session : {{ $data -> session}}</th> 
						<th>Annee : {{ $data -> annee}}</th> 
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.html">Prendre QCM</a>
						<a href="{{url('/formateurcr')}}">Supprimer</a>
					</tr>
					}
		@endforeach	
	</div>

	<div>
		<a href="{{url('/ajouter')}}"> Ajouter QCM</a>
	</div>
</body>
</html>

@endsection
