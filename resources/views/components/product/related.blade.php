<section class="sectionRelatedProduct">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                Obras Relacionadas
            </h1>
        </div>
        <div class="col s12">
            <div class="sliderRelated">
                <img class="arrowLeft" src="{{asset('img/obras/left.svg')}}" alt="">
                <img class="arrowRight" src="{{asset('img/obras/right.svg')}}" alt="">
                <div id="sliderRelated">
                    @foreach($related as $p)
                        <div>
                            <a href="{{url('product/'.$p->id)}}">
                                <div class="element">
                                    @if($p->descount > 0)
                                        <div class="descount">
                                            <h6>
                                                {{$p->descount}}%
                                            </h6>
                                        </div>
                                    @endif
                                    <div class="img">
                                        <div>
                                            <img src="{{asset($p->img)}}" alt="">
                                        </div>
                                    </div>
                                    <h2>
                                        {{$p->name}}
                                    </h2>
                                    <!--
                                    <h3>
                                        {{$p->artist->name}}
                                    </h3>
                                    -->
                                    @php
                                        $precio = str_replace(".", "", $p->price);
                                        if($p->descount > 0)
                                        {
                                            $descuento = $precio - ( $precio * $p->descount / 100);
                                            $descuento = str_replace(",", ".", number_format($descuento));
                                        }
                                        $precio = str_replace(",", ".", number_format($precio));
                                    @endphp
                                    @if($p->descount > 0)
                                        <h3>
                                            ${{$descuento}} <br>
                                            <span>${{$precio}}</span>
                                        </h3>
                                    @else
                                        <h3>
                                            ${{$precio}}
                                        </h3>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
