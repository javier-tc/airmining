<div id="sidebar-scroll">
    <ul class="" id="sidebar-menu">
        <li class="main">
            <a href="/proyectos">
                <i class="fa fa fa-home"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li class=" main">
            <a href="/dashboard">
                <i class="fa fa-desktop"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="main">
            <a href="/pronosticos">
                <i class="fa fa-sun"></i>
                <span>Pronósticos</span>
            </a>
        
        </li>
        @if(Session::get('id_proyecto')==1)
        <li class="    main">
            <a href="/resumenpro">
                <i class="fa fa-info-circle"></i>
                <span>Resumen Pronósticos</span>
            </a>
        </li>
        @endif
       
        <li class="    main">
            <a href="/infoproyecto">
                <i class="fa fa-info-circle"></i>
                <span>Información del proyecto</span>
            </a>
        </li>

    </ul>
</div>