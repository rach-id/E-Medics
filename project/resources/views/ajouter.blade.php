@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Ajouter un contenu</h1>
            <form action="/submit" enctype="multipart/form-data" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Veuillez corriger ces erreurs
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                
                <div>
                	<label for="type">Type contenu</label> <br>
                	<input type="radio" name="type" value="1" checked> Cours
                	<input type="radio" name="type" value="2"> Cas Clinique
                	<input type="radio" name="type" value="3"> QCM
                </div>
                
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                
                    <label for="urls">Lien</label>
                    
                    <input id="url" name="url" placeholder="URL" type="file" class="file-select" accept=".pdf"/>
  	
                    @if($errors->has('url'))
                        <span class="help-block">{{ $errors->first('url') }}</span>
                    @endif
                </div>
                
                <div>
                	<label for="annee">Annee</label> <br>
                	<input type="radio" name="annee" value="1" checked> 1
                	<input type="radio" name="annee" value="2"> 2
                	<input type="radio" name="annee" value="3"> 3
                	<input type="radio" name="annee" value="4"> 4
                	<input type="radio" name="annee" value="5"> 5
                	<input type="radio" name="annee" value="6"> 6
                	<input type="radio" name="annee" value="7"> 7
                </div>
                
                <div>
                	<label for="session">Session</label> <br>
                	<input type="radio" name="session" value="1" checked> 1
                	<input type="radio" name="session" value="2"> 2
                </div>
                
                
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
