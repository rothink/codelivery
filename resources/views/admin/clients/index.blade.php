@extends('app')

@section('content')
<div class="container">
    <h3>Clients</h3>
    <br>
    <a href="{{route('admin.clients.create')}}" class="btn btn-default">Novo Cliente</a>
    <br><br>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Zipcode</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->user->name}}</td>
                <td>{{$client->user->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->city}}</td>
                <td>{{$client->state}}</td>
                <td>{{$client->zipcode}}</td>
                <td>
                    <a href="{{route('admin.clients.edit', ['id' => $client->id])}}" class="btn btn-default">Editar</a>
                    <a href="{{route('admin.clients.destroy', ['id' => $client->id])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $clients->render() !!}
    


    <ul>

    </ul>
</div>



@endsection
