@extends('adminlte::page')

@section('title', 'Sede 5')

@section('content_header')
    <h1>Relevamiento</h1>
@stop

@section('content')
<a href="sede5s/create" class="btn btn-primary mb-3">AGREGAR</a>

<table id="sede5s" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
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
        @foreach ($sede5s as $sede5)
        <tr> 
           <td>{{$sede5->id}}</td>
           <td>{{$sede5->ip}}</td>
           <td>{{$sede5->sector}}</td>
           <td>{{$sede5->usuario}}</td>
           <td>{{$sede5->pc}}</td>
           <td>{{$sede5->serial}}</td>
           <td>{{$sede5->disponible}}</td>
           <td>

               <form action="{{ route ('sede5s.destroy',$sede5->id)}}" method="POST">
               <a href="/sede5s/{{ $sede5->id}}/edit" class="btn btn-info">Editar</a>
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