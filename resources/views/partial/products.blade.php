@if($products[0]->name == '')
    <div class="column larger notProductos">
        <h6>
            No hay productos
        </h6>
    </div>
    @php
        $cant_less = 0;
        $cant_plus = 0;
    @endphp
@else
    @php
        $cant_less = 1;
        $cant_plus = $products->count();
    @endphp
@endif
@foreach($products as $pro)
    <div class="column">
        <a href="{{url('/product/'.$pro->id)}}">
        <div class="element">
            @if($pro->descount > 0)
            <div class="descount">
                <h6>
                    {{$pro->descount}}%
                </h6>
                <img src="{{asset('img/obras/descount.svg')}}" alt="">
            </div>
            @endif
            <div class="img">
                <div>
                    <img src="{{asset($pro->img)}}" alt="">
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
<input type="hidden" id="cant_less" value="{{$cant_less}}">
<input type="hidden" id="cant_plus" value="{{$cant_plus}}">
