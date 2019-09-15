@extends('layouts.app')
@section('content')

<html lang="{{ app()->getLocale() }}">
<head>
	<title>Stagiaire</title>
</head>

<body>


                                

<a href="{{ url('/stagiairecr') }}">Cours</a>
<a href="{{ url('/stagiairecc') }}">Cas Cliniques</a>
<a href="{{ url('/stagiaireqc') }}">qcms</a>

</body>
</html>

@endsection
