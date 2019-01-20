@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Formateur</title>
</head>

<body>


<a href="{{ url('/formateurcr') }}">Cours</a>
<a href="{{ url('/formateurcc') }}">Cas Cliniques</a>
<a href="{{ url('/formateurqc') }}">qcms</a>

<a href="{{ url('/ajouter') }}">Ajouter Contenu</a>


</body>
</html>

@endsection
