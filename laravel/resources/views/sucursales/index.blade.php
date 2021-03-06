@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sucursal</h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Acciones</th>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Sucursal</th>
                    </tr>  
                      @foreach ($sucursales as $sucursal)
                    <tr>
                        <td>                        
                         {!!link_to_route('sucursal.edit', $title = '', $parameters = $sucursal->sucursalId, $attributes = ['class'=>'fa fa-edit'] )!!}  
                         {!!Form::open(['route'=>['sucursal.destroy', $sucursal->sucursalId], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>   
                          {!!Form::close()!!}
                        </td>
                        <td>{!!$sucursal->sucursalId!!}</td>
                        <td>{!!$estados[$sucursal->sucursalEstadoId]!!}</td>  
                        <td>{!!$sucursal->sucursal!!}  </td>
                    </tr>
                  @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection