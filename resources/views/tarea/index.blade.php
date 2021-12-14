@extends('layouts.app')

@section('template_title')
    Tarea
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color: transparent">
                    <div class="card-header text-white">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tarea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva tarea') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body text-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead text-white">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Proyecto</th>
										<th>Nombre Tarea</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    @foreach ($tareas as $tarea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>

                                                {{ $tarea->proyecto->titulo }}
                                            </td>


											<td>{{ $tarea->nombre_tarea }}</td>
											<td>{{ $tarea->descripcion }}</td>
											<td>{{ $tarea->fecha }}</td>
											<td>{{ $tarea->estado }}</td>

                                            <td>
                                                <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tareas.show',$tarea->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tareas.edit',$tarea->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tareas->links() !!}
            </div>
        </div>
    </div>
@endsection
