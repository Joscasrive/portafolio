@extends('layouts.app')

@section('template_title')
    Proyectos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyectos') }}
                            </span>

                                <div class="float-right">
                                    <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        <i class="fa-solid fa-file-circle-plus"></i> {{ __('Create New') }}
                                    </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Name</th>
									<th >Img</th>
									<th >Description</th>
									<th >Url</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $proyecto->name }}</td>
										<td ><img  class="img-fluit rounded mb-5" style="width:150px; height:100px" src="{{asset('storage')."/".$proyecto->img}}"></td>
										<td >{{ $proyecto->description }}</td>
										<td >{{ $proyecto->url }}</td>

                                            <td>
                                                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show', $proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit', $proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
    @if(!$file->url)
    <div class="float-right m-5">
        <form action="{{route('files.subir')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2 mb20">
          
            <label for="img" class="form-label">{{ __('Pdf:') }}</label>
            <br>
           
            <input type="file" name="pdf" class="form-control @error('pdf') is-invalid @enderror"  id="pdf" placeholder="Pdf">
            {!! $errors->first('pdf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <button type="submit" class="mt-2">Subir</button>
    </form>
  </div>
    @endif
    
@endsection
