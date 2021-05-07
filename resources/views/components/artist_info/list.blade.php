<section class="sectionListGalery sectionListArtistInfo">
    <h1 class="title">
        <hr>
        OBRAS
        <hr class="hr">
    </h1>
    <div class="sliderObras" id="sliderObras">
        @php
            $number = 6;
            $cont = 0;
            $contPlus = $number - 1;
        @endphp
        @for($j=1;$j<=ceil($products->count()/$number);$j++)
            <div>
                <div class="row">
                    @if($products[0]->name == '')
                        <div class="column larger">
                            <h6>
                                No hay productos
                            </h6>
                        </div>
                    @endif
                    @foreach($products as $key => $pro)
                        @php
                            $keyMore= 0;
                        @endphp
                        @if($key >= $cont && $key <= $contPlus)
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
                                            @if($keyMore <=1)
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
                            @php
                                $keyMore++;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
            @php
                $cont = $cont + $number;
                $contPlus = $contPlus + $number;
            @endphp
        @endfor
    </div>
</section>
