
@if(Session::get('id_proyecto')==1)
<div class="panel-body">
    <div class="col-lg-12 ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div>
                    <div class="btn-group">
                        <a href="/pronosticos" class="btn btn-primary">MAPA</a>
                        <a href="/neuronales" class="btn btn-primary">NEURONALES</a>
                        <a href="/estadisticos" class="btn btn-primary">ESTADISTICOS</a>
                        <a href="/numericos" class="btn btn-primary">NUMERICOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="panel-body">
    <div class="col-lg-12 ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div>
                    <div class="btn-group">
                        
                        @if (Session::get('id_user')==66)
                        <a href="/pronosticos" class="btn btn-primary">MAPA</a>
                        @endif
                        <a href="/neuronales" class="btn btn-primary">NEURONALES</a>
                        <a href="/estadisticos" class="btn btn-primary">ESTADISTICOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif