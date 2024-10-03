<div id="sidebar-scroll">
    <ul class="" id="sidebar-menu">
        <li class="main">
            <a href="/proyectos">
                <i class="fa fa fa-home"></i>
                <span>Inicio</span>
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
       

    </ul>
</div>