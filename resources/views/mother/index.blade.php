@extends('layouts.app')

@section("sidebar")
    @include("layouts.sidebar")
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
          <div class="card">
            <div class="card-header"><a href="{{ route('mother.create') }}" role="button" class="btn btn-outline-success">Crear</a></div>
            <div class="card-body">
              <table class="table table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Fecha de creación</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mothers as $mother)
                    <tr>
                      <th scope="row">{{$mother->name}}</th>
                      <td>{{$mother->lastname}}</td>
                      <td>{{$mother->age}}</td>
                      <td>{{$mother->created_at}}</td>
                      <td>
                        <form action="{{ route('mother.destroy', $mother) }}" method="post">
                          @csrf
                          @method('delete')
                          <a rel="tooltip" class="btn btn-success btn-link"
                          href="{{ route('mother.edit', $mother) }}">
                          Editar</a>
                          <button type="button" class="btn btn-danger btn-link"
                              data-original-title="" title=""
                              onclick="confirm('{{ __('Estas seguro que deseas eliminar este elemento?') }}') ? this.parentElement.submit() : ''">
                              Eliminar
                          </button>
                          <div class="ripple-container"></div>
                        </form>
                    </a>
                      </td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
        </div>     
    </div>
</div>
@endsection
