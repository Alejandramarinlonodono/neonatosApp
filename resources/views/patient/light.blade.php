@extends('layouts.app')

@section("sidebar")
    @include("layouts.sidebar")
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
     <div class="row" style="margin-top:80px; margin-left:100px">
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <img src="img/btn_red.png" height="50px"><label for=""> Pacientes en estado critico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</label><br><br>
                    <img src="img/btn_yellow.png" height="50px"><label for=""> Pacientes en estado intermedio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</label><br><br>
                    <img src="img/btn_green.png" height="50px"><label for=""> Pacientes en estado normal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</label>
                </div>
                
            </div>
            <div class="col-lg-6 semaforo">
                
            </div>
        </div>
        </div>     
    </div>
</div>
@endsection
