@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<h1>User Creds</h1>
                    @foreach($name as $data){
					<tr>
						<th>nom : {{ $data -> nom}}</th> <br>
						<th>prenom : {{ $data -> prenom}}</th> <br>
						<th>email : {{ $data -> email}}</th> <br>
						<th>{{ $data -> formateur}}</th>
					</tr>
					}
					@endforeach	
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
