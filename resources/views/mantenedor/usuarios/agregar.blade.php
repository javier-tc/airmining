@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Registrar Nuevo Usuario</h1>
        </div>
        <div class="panel-body">
        <div class="card card-primary card-outline">
    <div class="card-body">
    <div class="col-lg-6 ">

    <div class="card card-info ">
      



<form action=" {{ route('musuarios.store') }}" method="post" onsubmit="return VL_usuario();">
        @csrf

        <br>
<br>
        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" id="password_confirmation" name="password_confirmation"
                   class="form-control @error('password_confirmation') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>



        <div class="input-group mb-3">
        <select class="form-control " id="tipouser" name="tipouser">
					<option selected value="2">Tipo Usuario</option>
                    <option  value="1">Tipo Administrador</option>
					</select>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-solid fa-users {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
    

        </div>





        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            Registrar
        </button>
      

    </form>


	</div>
    </div>



    <div>
</div>







        </div>
    </div>
</div>

@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop
    
    
