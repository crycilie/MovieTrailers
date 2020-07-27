@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-9">
                <div class="card">
                    {{-- <div class="card-header">Trailer {{ $trailer->id }}</div> --}}
                    <div class="card-body">
                    <h4>{{$trailer->nombre}}</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        {{-- <td>{{ $trailer->id }}</td> --}}
                                    </tr>
                                    <tr>
                                        <th> Foto </th>
                                        <td><img src="{{ asset('storage') . '/' . $trailer->foto }}" width="150px"
                                                height="150px" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $trailer->nombre }} </td>
                                    </tr>
                                    {{-- <tr>
                                        <th> LinktTrailer </th>
                                        <td> {{ $trailer->linktTrailer }} </td>
                                    </tr> --}}
                                      <tr>
                                        <th> Descripcion </th>
                                        <td> {{ $trailer->descripcion }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        <a href="{{ url('/trailers') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                {{-- <a href="{{ url('/trailers/' . $trailer->id . '/edit') }}" title="Edit Trailer"><button
                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Editar</button></a> --}}

                <form method="POST" action="{{ url('trailers' . '/' . $trailer->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    {{-- {{ method_field('DELETE') }}
                    {{ csrf_field() }} --}}
                    {{-- <button type="submit" class="btn btn-danger btn-sm" title="Delete Trailer"
                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                            aria-hidden="true"></i> Eliminar</button> --}}
                </form>

                           
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mivideo">
            <iframe width="1106" height="622" src="{{'https://www.youtube.com/embed/'.$trailer->linktTrailer}}"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection
