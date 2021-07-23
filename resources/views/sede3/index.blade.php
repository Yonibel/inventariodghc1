@extends('adminlte::page')

@section('title', 'Sede 3')

@section('content_header')
    <h1>Relevamiento</h1>
@stop

@section('content')
<a href="sede3s/create" class="btn btn-primary mb-3">AGREGAR</a>

<table id="sede3s" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">IP</th>
            <th scope="col">SECTOR</th>
            <th scope="col">USUARIO</th>
            <th scope="col">PC</th>
            <th scope="col">SERIAL</th>
            <th scope="col">DISPONIBLE</th>
            <th scope="col">ACCIONES</th>
        </tr>    
    </thead>
    <tbody>
        @foreach ($sede3s as $sede3)
        <tr> 
           <td>{{$sede3->id}}</td>
           <td>{{$sede3->ip}}</td>
           <td>{{$sede3->sector}}</td>
           <td>{{$sede3->usuario}}</td>
           <td>{{$sede3->pc}}</td>
           <td>{{$sede3->serial}}</td>
           <td>{{$sede3->disponible}}</td>
           <td>

               <form action="{{ route ('sede3s.destroy',$sede3->id)}}" method="POST">
               <a href="/sede3s/{{ $sede3->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')              
               <button type="submit" class="btn btn-danger">Borrar</button> 
               </form>
           </td>       
       </tr>
    @endforeach
    </tbody>
</table>
    <p>Bienvenido al panel administrativo.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#sede3s').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    
} );
</script>
@stop