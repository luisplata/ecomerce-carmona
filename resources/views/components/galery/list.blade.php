<section class="sectionListGalery">
    <div id="loader" class="notProductos">
        <h6>
            Cargando ...
        </h6>
        <div class="progress">
            <div class="indeterminate">
            </div>
        </div>
    </div>
    <!--
        <div class="loader" id="loader">
            <img src="{{asset('img/loader.svg')}}" alt="">
        </div>
    -->
    <div class="row" id="productlist">
        @if($products[0]->name == '')
            <div class="column larger notProductos">
                <h6>
                    No hay productos
                </h6>
            </div>
        @endif
        @foreach($products as $key => $pro)
            <div class="column">
                <a href="{{url('/product/'.$pro->id)}}">
                    <div class="element">
                        @if($pro->descount > 0)
                            <div class="descount">
                                <h6>
                                    {{$pro->descount}}%
                                </h6>
                                <img class="lazy" data-src="{{asset('img/obras/descount.svg')}}" alt="">
                            </div>
                        @endif
                        <div class="img">
                            <div>
                                @if($key <=2)
                                    <img src="{{asset($pro->img)}}" alt="">
                                @else
                                    <img class="lazy" data-src="{{asset($pro->img)}}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="float">
                            <h1>
                                {{$pro->name}}
                            </h1>
                            <h2>
                                {{$pro->artist->name}}
                            </h2>
                            @php
                                $precio = str_replace(".", "", $pro->price);
                                if($pro->descount > 0)
                                {
                                    $descuento = $precio - ( $precio * $pro->descount / 100);
                                    $descuento = str_replace(",", ".", number_format($descuento));
                                }
                                $precio = str_replace(",", ".", number_format($precio));
                            @endphp
                            @if($pro->descount > 0)
                                <h3>
                                    ${{$descuento}} <br>
                                    <span>${{$precio}}</span>
                                </h3>
                            @else
                                <h3>
                                    ${{$precio}}
                                </h3>
                            @endif
                            <a href="{{url('/product/'.$pro->id)}}" class="waves-effect waves-light btn">
                                Añade al carro
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
