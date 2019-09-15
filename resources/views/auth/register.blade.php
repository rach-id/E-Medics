@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>

                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						
						<div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prebon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('formateur') ? ' has-error' : '' }}">
                            <label for="formateur" class="col-md-4 control-label">Formateur/Stagiaire</label>

                            <div class="col-md-6">
                                <!-- <input id="formateur" type="checkbox"  name="formateur" value="1" autofocus> 
                                
                                 <input type="text" name="formateur" value="{{ old('formateur') }}"/> -->
                                 
                                <input type="radio" name="formateur" value="Formateur" checked> Formateur
                				<input type="radio" name="formateur" value="Stagiaire"> Stagiaire

                                @if ($errors->has('formateur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formateur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                    <div class="form-group{{ $errors->has('annee') ? ' has-error' : '' }}">
                            <label for="annee" class="col-md-4 control-label">Annee</label>

                            <div class="col-md-6">
                                <!-- <input id="formateur" type="checkbox"  name="formateur" value="1" autofocus> 
                                
                                 <input type="text" name="formateur" value="{{ old('formateur') }}"/> -->
                                 
						    	<input type="radio" name="annee" value="1" checked> 1
						    	<input type="radio" name="annee" value="2"> 2
						    	<input type="radio" name="annee" value="3"> 3
						    	<input type="radio" name="annee" value="4"> 4
						    	<input type="radio" name="annee" value="5"> 5
						    	<input type="radio" name="annee" value="6"> 6
						    	<input type="radio" name="annee" value="7"> 7 <br>
                                @if ($errors->has('formateur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formateur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                
                        
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
