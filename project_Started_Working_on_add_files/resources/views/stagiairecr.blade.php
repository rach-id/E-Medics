@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>StagiaireCr</title>
</head>

<body>


                           
                           
	<h1>Cours</h1>
	<div>
		@foreach($name as $data){
					<tr>
						<th>titre : {{ $data -> titre}}</th> <br>
						<th>description : {{ $data -> description}}</th> <br>
						<th>session : {{ $data -> session}}</th> <br>
						<th>Annee : {{ $data -> annee}}</th> <br>
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.html">Visualiser</a>
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.pdf">Telecharger</a>
					</tr>
					}
		@endforeach	
	</div>

</body>
</html>

@endsection
