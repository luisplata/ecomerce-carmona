<section class="sectionFilterGalery">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                GALERÍA DE OBRAS
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
            <h2>
                Precio
            </h2>
        </div>
        <div class="col s12 m4 l4">
            <input type="hidden" class="caja" placeholder="Desde" id="min" value="100000">
            <input type="hidden" class="caja" placeholder="Hasta" id="max" value="40000000">
            <div class="number">
                $<span id="minimum"><?=number_format(0, 0, ',', '.')?></span>

                <span2>$<span id="maximum"><?=number_format(40000000, 0, ',', '.')?></span></span2>
            </div>
            <div class="filter">
                <div id="slider-range"></div>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <h3 class="h3">
                Resultados <span class="span_cant_less">1</span> A <span class="span_cant_plus">{{$products->count()}}</span>
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
                    <option value="4">Descuento</option>
                </select>
            </h3>
        </div>
    </div>


    <div class="row rowOne row2">
        <div class="col s12 m2 l2">
            <h2>
                Color
            </h2>
        </div>
        <div class="col s12 m10 l10">
            <div class="contenedor">
                @foreach($colors as $c)
                    <div class="column small">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                            <g class="colorFilter" id="{{$c->id}}" data-name="Rectángulo 276" fill="#{{$c->hex}}" stroke="#707070" stroke-width="1">
                                <rect width="30" height="30" stroke="none"/>
                                <rect x="0.5" y="0.5" width="29" height="29" fill="none"/>
                            </g>
                        </svg>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
