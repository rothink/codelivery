@extends('app')

@section('content')
<div class="container">
    <h3>Editando cliente: {{$client->user->name}}</h3>
    <br>
    @include('errors._check')

    {!! Form::model($client , ['route'=>['admin.clients.update', $client->id]]) !!}

        @include('admin.clients._form')

        <div class="form-group">
            {!! Form::submit('Alterar Cliente',['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection
