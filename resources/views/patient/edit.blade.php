@extends('layouts.app')

@section("sidebar")
    @include("layouts.sidebar")
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-dark text-white">Editar paciente</div>
            <div class="card-body">
            <div class='row' style='margin-bottom:20px'>
        <div class='col-lg-7 col-lg-offset-3'>
            <h3>Ingrese los siguientes datos: </h3><br>
        </div>
        <form id='formularioPaciente' action="{{ route('patient.update', $patient) }}"  method='POST'>
        @csrf
        @method('put')
            <div class='row'>               
                <div class='form-group col-lg-4'>
                    <label for=''>Nombre del Paciente<span class='require'> *</span></label>
                    <input type='text' class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $patient->name) }}" name='name' id='name' maxlength='30' placeholder='Nombre Paciente'><br>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>               

                <div class='form-group col-lg-4'>
                    <label for=''>Apellidos<span class='require'> *</span></label>
                    <input type='text' class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname', $patient->lastname) }}" name='lastname' id='lastname' maxlength='30' placeholder='Apellidos' required='true'><br>
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class='form-group col-lg-4'>
                    <label>Registro Civil<span class='require'> *</span></label>
                    <input type='number' class="form-control @error('civilregistration') is-invalid @enderror" value="{{ old('civilregistration', $patient->civilregistration) }}" name='civilregistration' id='civilregistration' placeholder='Registro' required='true'><br>	
                    @error('civilregistration')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class='row'>               
                <div class='col-lg-4'>
                    <label for=''>Género</label>                   
                        <select name='genre_id' id='genre_id' class="form-control @error('genre_id') is-invalid @enderror" value="{{ old('genre_id', $patient->genre_id) }}" required='true'>
                            <option value='{{$patient->genre_id}}'>{{$patient->genre_id}}</option>
                            @foreach($genres as $genre)
                                <option value='{{$genre->id}}'>{{$genre->name}}</option>        
                            @endforeach       
                        </select>
                        @error('genre_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>  
                </div>               

                <div class='col-lg-4'>
                    <label for=''>Cuidador</label>                   
                        <select name='keeper_id' id='keeper_id' class="form-control @error('keeper_id') is-invalid @enderror" value="{{ old('keeper_id', $patient->keeper_id) }}" required='true'>
                            <option value='{{$patient->keeper_id}}'>{{$patient->keeper_id}}</option>
                            @foreach($keepers as $keeper)
                                <option value='{{$keeper->id}}'>{{$keeper->name}}</option>        
                            @endforeach        
                        </select>
                        @error('keeper_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br> 
                </div>
                <div class='col-lg-4'>
                    <label for=''>Estado</label>                   
                        <select name='state_id' id='state_id' class="form-control @error('state_id') is-invalid @enderror" value="{{ old('state_id', $patient->state_id) }}">
                            <option value='{{$patient->state_id}}'>{{$patient->state_id}}</option>
                            @foreach($states as $state)
                                <option value='{{$state->id}}'>{{$state->name}}</option>        
                            @endforeach        
                        </select>
                        @error('state_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br> 
                </div>
	        </div>
	        <div class='row'>
                <div class='col-lg-4'>
                    <label for=''>Institución de Nacimiento</label>                   
                        <select name='institutionB_id' id='institutionB_id' class="form-control @error('institutionB_id') is-invalid @enderror" value="{{ old('institutionB_id', $patient->institutionB_id) }}">
                            <option value='{{$patient->institutionB_id}}'>{{$patient->institutionB_id}}</option>
                            @foreach($institutions as $institution)
                                <option value='{{$institution->id}}'>{{$institution->name}}</option>        
                            @endforeach    
                        </select>
                        @error('institutionB_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br> 
                </div>
                <div class='col-lg-4'>
                    <label for=''>Institución de Hospitalización</label>                   
                        <select name='institutionH_id' id='institutionH_id' class="form-control @error('institutionH_id') is-invalid @enderror" value="{{ old('institutionH_id', $patient->institutionH_id) }}">
                            <option value='{{$patient->institutionH_id}}'>{{$patient->institutionH_id}}</option>    
                            @foreach($institutions as $institution)
                                <option value='{{$institution->id}}'>{{$institution->name}}</option>        
                            @endforeach        
                        </select>
                        @error('institutionH_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>   
                </div>
                <div class='col-lg-4'>
                    <label for=''>Nombre de la Madre</label>                   
                        <select name='mother_id' id='mother_id' class="form-control @error('mother_id') is-invalid @enderror" value="{{ old('mother_id', $patient->mother_id) }}">
                            <option value='{{$patient->mother_id}}'>{{$patient->mother_id}}</option>
                            @foreach($mothers as $mother)
                                <option value='{{$mother->id}}'>{{$mother->name}}{{$mother->lastname}}</option>        
                            @endforeach        
                        </select>
                        @error('mother_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror<br>   
                </div>                
                <div class='col-lg-4'>
                    <label for=''>Vía de finalización del Parto<span class='require'> *</span></label>
                    <input type='text' class="form-control @error('laborcompletion') is-invalid @enderror" value="{{ old('laborcompletion', $patient->laborcompletion) }}" name='laborcompletion' id='laborcompletion' maxlength='30' placeholder='Vía trabajo de Parto'><br>
                    @error('laborcompletion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class='col-lg-4'>
                    <label for=''>Puntaje de Apgar</label>
                    <input type='number' class="form-control @error('score') is-invalid @enderror" value="{{ old('score', $patient->score) }}" name='score' id='score' maxlength='15' placeholder='Apgar'><br>
                    @error('score')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                
	    </div>
	    <div class='row'>
                <div class='col-lg-6'>
                    <label for=''>Instrumentación del Parto<span class='require'> *</span></label>
                    <textarea class="form-control @error('toolbirth') is-invalid @enderror" name='toolsbirth' id='toolsbirth' maxlength='50'>{{ old('toolsbirth', $patient->toolsbirth) }}</textarea><br>
                    @error('toolbirth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class='col-lg-6'>
                    <label for=''>Diagnóstico durante la Hospitalización<span class='require'> *</span></label>
                    <textarea class="form-control @error('diagnostics') is-invalid @enderror"  name='diagnostics' id='diagnostics' maxlength='50'>{{ old('diagnostics', $patient->diagnostics) }}</textarea><br>
                    @error('diagnostics')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
        <div class='row'>
                <div class='col-lg-6'>
                    <label for=''>Valoración Oftalmología<span class='require'> *</span></label>
                    <textarea class="form-control @error('diagnostics') is-invalid @enderror"  name='assessment' id='assessment' maxlength='50'>{{ old('assessment', $patient->assessment) }}</textarea><br>
                    @error('assessment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class='col-lg-3'>
                    <label for=''>Días solicitud de oxígeno<span class='require'> *</span></label>
                    <input type='number' class="form-control @error('oxigendays') is-invalid @enderror" value="{{ old('oxigendays', $patient->oxigendays) }}" name='oxigendays' id='oxigendays' maxlength='50'><br>
                    @error('oxigendays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class='col-lg-3'>
                    <label for=''>Días tratamiento de oxígeno<span class='require'> *</span></label>
                    <input type='number' class="form-control @error('treatmentdays') is-invalid @enderror" value="{{ old('treatmentdays', $patient->treatmentdays) }}" name='treatmentdays' id='treatmentdays' maxlength='50'><br>
                    @error('treatmentdays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
        <div class='row'>
                <div class='col-lg-6'>
                    <label for=''>Entrega de insumos a la familia<span class='require'> *</span></label>
                    <textarea class="form-control @error('supplies') is-invalid @enderror" name='supplies' id='supplies' maxlength='50'>{{ old('supplies', $patient->supplies) }}</textarea><br>
                    @error('supplies')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
        </div>
        <div class='row'>
                <div class='col-lg-6'>
                    <button type='submit' class='btn btn-success btn-sm'>Guardar</button>
                </div>    
		</div>
		
        </form>
    </div>

    </div>
    </div>     
    </div>
</div>
@endsection
