@extends('adminlte::page')
@section('title','VInfo')
@section('content_header')
    <h1>Bienvenido a la vista Inventario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="#" class="btn btn-success">Export CSV</a>
    </div>
    <div class="card-body">
        <table id="vinfo" class="table table-dark table-hover mt-4 text-center">
            <thead class="table-primary">
                <tr>

                    <th scope="col">Server_Name</th>
                    <th scope="col">IP_Primaria</th>
                    <th scope="col">Ambiente</th>
                    <th scope="col">Sistema_Operativo</th>

                </tr>
            </thead>
            <tbody>
                @foreach($vinfos as $vinfo)
                <tr>
                    <td>{{$vinfo->Server_Name}}</td>
                    <td>{{$vinfo->IP_Primaria}}</td>
                    <td>{{$vinfo->Ambiente}}</td>
                    <td>{{$vinfo->Sistema_Operativo}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Server Name</th>
                    <th>IP Primaria</th>
                    <th>Ambiente</th>
                    <th>Sistema Operativo</th>
                </tr>
            </tfoot>
            </table>
    </div>
</div>



@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
<link href="/css/mycss.css" rel="stylesheet" type="text/css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script src="/js/myjs.js"></script>
@stop
