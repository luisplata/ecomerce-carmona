<section class="sectionFilterGalery">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                ARTISTAS
            </h1>
        </div>
        <div class="col s12 m11 l11">
            <input type="text" id="nameFilter" placeholder="¿Conoces la obra? búscala aquí...">
        </div>
        <div class="col s12 m1 l1">
            <a class="waves-effect waves-light btn clickNameFilter"><img src="{{asset('img/filter/search.svg')}}" alt=""></a>
        </div>
    </div>
    <div class="row rowOne row2">
        <div class="col s12 m2 l2">
            <h2>
                Categoría
            </h2>
        </div>
        <div class="col s12 m10 l10">
            <div class="contenedor">
                @foreach($category as $c)
                    <div class="column">
                        <a class="waves-effect waves-light btn categoryFilter" id="{{$c->id}}">
                            {{$c->name}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="row rowOne row2">
        <div class="col s12 m2 l2">
        </div>
        <div class="col s12 m4 l4">
        </div>
        <div class="col s12 m3 l3">
            <h3 class="h3 h3_1">
                Resultados <span class="span_cant_less">1</span> A <span class="span_cant_plus">{{$artist->count()}}</span>
            </h3>
        </div>
        <div class="col s12 m3 l3">
            <h3>
                Ordenado por:
                <select id="orderFilter" class="browser-default">
                    <option value="0" selected>Selecciona</option>
                    <option value="1">Más reciente</option>
                    <option value="2">A-Z</option>
                    <option value="3">Z-A</option>
                </select>
            </h3>
        </div>
    </div>

</section>
