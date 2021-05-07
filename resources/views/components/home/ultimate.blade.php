<section class="sectionUltimateHome">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                ÚLTIMAS PIEZAS AGREGADAS
            </h1>
        </div>
        <div class="col s12">
            <div class="sliderUltimate">
                <img class="arrowLeft" src="{{asset('img/obras/left.svg')}}" alt="">
                <img class="arrowRight" src="{{asset('img/obras/right.svg')}}" alt="">
                <div id="sliderUltimate">
                    @foreach($obras as $o)
                        <div class="column">
                            <a href="{{url('product/'.$o->id)}}">
                                <div class="element">
                                    @if($o->descount > 0)
                                        <div class="descount">
                                            <h6>
                                                {{$o->descount}}%
                                            </h6>
                                        </div>
                                    @endif
                                    <div class="img">
                                        <div>
                                            <img class="lazy" data-src="{{asset($o->img)}}" alt="">
                                        </div>
                                    </div>
                                    <h2>
                                        {{$o->name}}
                                    </h2>
                                    @php
                                        $precio = str_replace(".", "", $o->price);
                                        if($o->descount > 0)
                                        {
                                            $descuento = $precio - ( $precio * $o->descount / 100);
                                            $descuento = str_replace(",", ".", number_format($descuento));
                                        }
                                        $precio = str_replace(",", ".", number_format($precio));
                                    @endphp
                                    @if($o->descount > 0)
                                        <h3>
                                            ${{$descuento}} <br>
                                            <span>${{$precio}}</span>
                                        </h3>
                                    @else
                                        <h3>
                                            ${{$precio}}
                                        </h3>
                                    @endif
                                    <a href="{{url('product/'.$o->id)}}" class="waves-effect waves-light btn">
                                        Añade al carro
                                    </a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
