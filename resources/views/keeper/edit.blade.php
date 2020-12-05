@extends('layouts.app')

@section("sidebar")
    @include("layouts.sidebar")
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cuidador</div>
            <div class="card-body">
            <div class='row' style='margin-bottom:20px'>
                <div class='col-lg-7'>
                    <h3>Ingrese los siguientes datos: </h3><br>
                </div>
                <form id='formularioCuidador' action="{{ route('keeper.update', $keeper) }}"  method='POST'> 
                @csrf 
                @method('put')
                    <div class='row'>
                        <div class='col-lg-4'>
                            <label for=''>Nombre<span class='require'> *</span></label>
                            <input type='text' class="form-control @error('name') is-invalid @enderror" name='name' id='name' maxlength='30' placeholder='Nombre Cuidador' value="{{ old('name', $keeper->name) }}"><br>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>               

                        <div class='col-lg-4'>
                            <label for=''>Apellidos<span class='require'> *</span></label>
                            <input type='text' class="form-control @error('lastname') is-invalid @enderror" name='lastname' id='lastname' maxlength='30' placeholder='Apellidos' value="{{ old('lastname', $keeper->lastname) }}"><br>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class='col-lg-4'>
                            <label>Teléfono<span class='require'> *</span></label>
                            <input type='number' class="form-control @error('lastname') is-invalid @enderror" name='cellphone' id='cellphone' placeholder='Celular' value="{{ old('cellphone', $keeper->cellphone) }}"><br>	
                            @error('cellphone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                    
                        <div class='col-lg-4'>
                            <button type='submit' class='btn btn-success btn-sm'>Guardar</button>
                        </div>    
                    </div>		
                </form>
            </div>
            </div>
            </div>
        </div>     
     </div>
</div>
@endsection
