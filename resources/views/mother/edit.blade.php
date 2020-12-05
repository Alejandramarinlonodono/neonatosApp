@extends('layouts.app')

@section("sidebar")
    @include("layouts.sidebar")
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-dark text-white">Editar madre</div>
            <div class="card-body">
            <div class='row' style='margin-bottom:20px'>
                <div class='col-lg-7'>
                    <h3>Ingrese los siguientes datos: </h3><br>
                </div>
        <form id='formularioMadre' action="{{ route('mother.update', $mother) }}"  method='POST'>  
            @csrf
            @method('put')

	        <div class='row'>
                <div class='col-lg-4'>
                    <label for=''>Nombre<span class='require'> *</span></label>
                    <input type='text' class="form-control @error('name') is-invalid @enderror" name='name' id='name' maxlength='30' placeholder='Nombre Madre' value="{{ old('name', $mother->name) }}"><br>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>               

                <div class='col-lg-4'>
                    <label for=''>Apellidos<span class='require'> *</span></label>
                    <input type='text' class="form-control @error('lastname') is-invalid @enderror" name='lastname' id='lastname' maxlength='30' placeholder='Apellidos' value="{{ old('lastname', $mother->lastname) }}"><br>
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class='col-lg-4'>
                    <label>Edad<span class='require'> *</span></label>
                    <input type='number' class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $mother->age) }}" name='age' id='age' placeholder='Edad'><br>
                    @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror	
                </div>
                <div class='col-lg-4'>
                    <label for=''>Escolaridad</label>                   
                        <select name='scholarship_id' id='scholarship' class="form-control @error('scholarship_id') is-invalid @enderror" value="{{ old('scholarship_id', $mother->scholarship_id) }}">
                            @foreach($scholarships as $scholarship)
                                <option value='{{$scholarship->id}}'>{{$scholarship->name}}</option>        
                            @endforeach
                        </select>
                        @error('scholarship_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>
                </div>               

                <div class='col-lg-4'>
                    <label for=''>Estado Civil</label>                   
                        <select name='civilstate_id' id='civilS' class="form-control @error('civilstate_id') is-invalid @enderror" value="{{ old('civilstate_id', $mother->civilstate_id) }}">
                            @foreach($civilstates as $civilstate)
                                <option value='{{$civilstate->id}}'>{{$civilstate->name}}</option>        
                            @endforeach
                        </select>
                        @error('civilstate_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>
                </div>

                <div class='col-lg-4'>
                    <label for=''>Tipo de Anestesia<span class='require'> *</span></label>                   
                        <select name='anesthesiatype_id' id='anesthesiatype' class="form-control @error('anesthesiatype_id') is-invalid @enderror" value="{{ old('anesthesiatype_id', $mother->anesthesiatype_id) }}">
                            @foreach($anesthesiatypes as $anesthesiatype)
                                <option value='{{$anesthesiatype->id}}'>{{$anesthesiatype->name}}</option>        
                            @endforeach
                        </select>
                        @error('anesthesiatype_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>  
                </div>                
	    </div>
	    <div class='row'>
                <div class='col-lg-4'>
                    <label for=''>Esteroides Prenatales</label>
                    <input type='number' class="form-control @error('steroids') is-invalid @enderror" value="{{ old('steroids', $mother->steroids) }}" name='steroids' id='steroids' maxlength='15' placeholder='Esteroides'><br>
                    @error('steroids')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror<br>  
                </div>
                <div class='col-lg-6'>
                    <label for=''>Finalización trabajo de Parto<span class='require'> *</span></label>
                    <textarea class="form-control @error('finalizarionlabor') is-invalid @enderror" name='finalizarionlabor' id='finalitationL' maxlength='50'>{{ old('finalizarionlabor', $mother->finalizarionlabor) }}</textarea>
                    @error('finalizarionlabor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror<br>  
                </div>                     
        </div>
       
        <div class='row'>
                <div class='col-lg-6'>
                    <button type='submit' class='btn btn-success btn-sm' >Guardar</button>
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
