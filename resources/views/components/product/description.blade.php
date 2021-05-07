<section class="sectionDescriptionProduct">
    <div class="row rowOne">

        <div class="col s12 m8 l8 hide-on-med-and-up">
            <div class="sliders">
                <div id="sliderBig_mobile" class="sliderBig">
                    <div>
                        <div class="img">
                            <div>
                                <img src="{{asset($product->img)}}" alt="">
                            </div>
                        </div>
                    </div>
                    @foreach($product->images as $i)
                        <div>
                            <div class="img">
                                <div>
                                    <img src="{{asset($i->img)}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="sliderSmall_mobile" class="sliderSmall">
                    <div>
                        <div class="img">
                            <div>
                                <img src="{{asset($product->img)}}" alt="">
                            </div>
                        </div>
                    </div>
                    @foreach($product->images as $i)
                        <div>
                            <div class="img">
                                <div>
                                    <img src="{{asset($i->img)}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="text">
                @php
                    $entrar = 0;
                    if(!session()->has('id_price')){
                        $entrar = 1;
                    }
                @endphp
                <h1>
                    {{$product->name}}
                </h1>
                <h3>
                    {{$product->artist->name}}
                </h3>
                <h2>
                    <div class="price">
                        <h4 id="2" class="changePrice {{(session()->get('id_price') == 2)?'active':''}}">
                            $USD
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.392" height="14.66" viewBox="0 0 15.392 14.66">
                                <g id="Polígono_3" data-name="Polígono 3" transform="translate(10.392 14.66) rotate(-150)" fill="#fff">
                                    <path d="M 11.11690044403076 9.5 L 0.8830999732017517 9.5 L 6 0.971833348274231 L 11.11690044403076 9.5 Z" stroke="none"/>
                                    <path d="M 6 1.943650245666504 L 1.766189575195313 9 L 10.23381042480469 9 L 6 1.943650245666504 M 6 0 L 12 10 L 0 10 L 6 0 Z" stroke="none" fill="#707070"/>
                                </g>
                            </svg>
                        </h4>
                        <h4 id="1" class="changePrice {{(session()->get('id_price') == 1 || $entrar == 1)?'active':''}}">
                            $COP
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.392" height="14.66" viewBox="0 0 15.392 14.66">
                                <g id="Polígono_3" data-name="Polígono 3" transform="translate(10.392 14.66) rotate(-150)" fill="#fff">
                                    <path d="M 11.11690044403076 9.5 L 0.8830999732017517 9.5 L 6 0.971833348274231 L 11.11690044403076 9.5 Z" stroke="none"/>
                                    <path d="M 6 1.943650245666504 L 1.766189575195313 9 L 10.23381042480469 9 L 6 1.943650245666504 M 6 0 L 12 10 L 0 10 L 6 0 Z" stroke="none" fill="#707070"/>
                                </g>
                            </svg>
                        </h4>
                    </div>
                    @php
                        if(session()->get('id_price') ==  1 || $entrar == 1){
                            $precio = str_replace(".", "", $product->price);
                            if($product->descount > 0)
                            {
                                $descuento = $precio - ( $precio * $product->descount / 100);
                                $precio = str_replace(",", ".", number_format($descuento));
                            }else{
                                $precio = str_replace(",", ".", number_format($precio));
                            }
                        }elseif(session()->get('id_price') ==  2){
                            $url="https://www.dolar-colombia.com/";
                            $url = "https://themoneyconverter.com/ES/COP/USD";
                            $client = new \GuzzleHttp\Client();
                            $res = $client->get($url);
                            $file = (string) $res->getBody();
                            $get = explode('<output id="res1" for="ta">1 COP = ',$file);
                            $get2 = explode('USD',$get[1]);
                            $dolar = str_replace([' ','$'], "", $get2[0]);
                            $dolar = str_replace([',',], ".", $get2[0]);

                            $precio = str_replace(".", "", $product->price);
                            if($product->descount > 0)
                            {
                                $precio = $precio - ( $precio * $product->descount / 100);
                            }
                            $precio = intval($precio * $dolar);
                            $precio = str_replace(",", ".", number_format($precio));
                        }
                    @endphp
                    ${{$precio}}
                </h2>
                @if($product->uniqued == 'si')
                    <h3 class="h3">
                        Pieza Única
                    </h3>
                @endif
                <h3 class="h3">
                    Año: <span>{{$product->year}}</span>
                </h3>
                <h3 class="h3">
                    Técnica: <span>{{$product->technique}}</span>
                </h3>
                <h3 class="h3">
                    Dimensiónes: <span>{{$product->dimensions}}</span>
                </h3>
                <form action="" id="selectProduct">
                    <input type="hidden" id="idProduct" name="idProduct" value="{{$product->id}}">
                    <input type="hidden" id="cantproduct" name="cantproduct" value="1">
                </form>
                @if($product->uniqued != 'si')
                    <h3>
                        Cantidad:
                        <a class="waves-effect waves-light btn cant">
                            <i class="material-icons left less">-</i>
                            <span>&ensp;1&ensp;</span>
                            <i class="material-icons right plus">+</i>
                        </a>
                    </h3>
                @endif
                <a class="waves-effect waves-light btn buyProduct">Añade al carro</a>

                @if(session()->has('id'))
                    <a class="waves-effect waves-light btn addWishes" id="{{$product->id}}">Wishlist</a>
                @else
                    <a class="waves-effect waves-light btn notWishes" id="{{$product->id}}">Wishlist</a>
                @endif
            </div>
        </div>

        <div class="col s12 m8 l8 hide-on-small-only">
            <div class="sliders">
                <div id="sliderBig" class="sliderBig">
                    <div>
                        <div class="img">
                            <div>
                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset($product->img)}}); background-position: 86.8% 69.5035%;">
                                    <img src="{{asset($product->img)}}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    @foreach($product->images as $i)
                        <div>
                            <div class="img">
                                <div>
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset($i->img)}}); background-position: 86.8% 69.5035%;">
                                        <img src="{{asset($i->img)}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="sliderSmall" class="sliderSmall">
                    <div>
                        <div class="img">
                            <div>
                                <img src="{{asset($product->img)}}" alt="">
                            </div>
                        </div>
                    </div>
                    @foreach($product->images as $i)
                        <div>
                            <div class="img">
                                <div>
                                    <img src="{{asset($i->img)}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
<style>
    figure.zoom {
        background-position: 50% 50%;
        position: relative;
        width: auto;
        overflow: hidden;
        cursor: zoom-in;
    }
    figure.zoom img:hover {
        opacity: 0;
    }
    figure.zoom img {
        transition: opacity 0.5s;
        display: block;
        width: 100%;
    }
</style>
<script>
    function zoom(e){
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
        var x = offsetX/zoomer.offsetWidth*100;
        var y = offsetY/zoomer.offsetHeight*100;
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }
</script>
