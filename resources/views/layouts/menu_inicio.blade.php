



@if(Session::get('tipo_user')=='admin' )
@include('layouts.menu_admin')
@else
<div id="sidebar-scroll">
    <ul class="" id="sidebar-menu">
        <li class="main">
            <a href="/proyectos">
                <i class="fa fa fa-home"></i>
                <span>Inicio</span>
            </a>
        </li>
    </ul>
</div>

@endif
