@extends('app')

@section('content')
<div class="container">
    <h3>Novo Cliente</h3>
    <br>

    @include('errors._check')

    {!! Form::Open(['route' => 'admin.clients.store', 'class' => 'form']) !!}

        @include('admin.clients._form')

        <div class="form-group">

            {!! Form::submit('Criar Cliente',['class' => 'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection
