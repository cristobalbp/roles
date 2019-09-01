@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Productos
                    @can('products.create')
                    <a href="{{ Route('products.create') }}" class="btn btn-sm btn-primary pull-right"> Crear </a>
                    @endcan
                </div>

                <div class="panel-body">
                   <table class="table table-striped table-hover"> 
                       <thead>
                           <tr>
                               <th width="10px">id</th>
                               <th>Nombre</th>
                               <th colspan="3">&nbsp;</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($products as $product)
                           <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name  }}</td>
                                <td width="10px">
                                    @can('products.show')
                                    <a href="{{ Route('products.show', $product->id) }}" class="btn btn-sm btn-default">Ver</a>
                                    @endcan
                                <td>
                                <td width="10px">
                                    @can('products.edit')
                                    <a href="{{ Route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Editar</a>
                                    @endcan
                                <td>
                                <td width="10px">
                                    @can('products.destroy')
                                    {!! Form::open(['route' => ['products.destroy', $product->id],
                                    'method' => 'DELETE' ]) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                <td>    

                           </tr>
                        @endforeach
                       </tbody>
                   </table>
                   {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 