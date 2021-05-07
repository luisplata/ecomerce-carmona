<section class="sectionShopInfo">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                Carro de compras
            </h1>
            <table>
                <thead>
                <tr>
                    <th class="th td10"></th>
                    <th class="th">Producto</th>
                    <th class="th">Precio</th>
                    <th class="th">Cantidad</th>
                    <th class="th">Subtotal</th>
                    <th class="th"></th>
                </tr>
                </thead>
                <tbody>
                @php
                    $dolar = 0;
                @endphp
                @if(session()->has('car'))
                    @php
                        session_start();
                        $contarPro = 0;
                        $subtotal = 0;
                        if(session()->get('id_price') ==  2){
                            $url="https://www.dolar-colombia.com/";
                            $url = "https://themoneyconverter.com/ES/COP/USD";
                            $client = new \GuzzleHttp\Client();
                            $res = $client->get($url);
                            $file = (string) $res->getBody();
                            $get = explode('<output id="res1" for="ta">1 COP = ',$file);
                            $get2 = explode('USD',$get[1]);
                            $dolar = str_replace([' ','$'], "", $get2[0]);
                            $dolar = str_replace([',',], ".", $get2[0]);
                        }
                    @endphp
                    @for($i=1;$i<=session()->get('car');$i++)
                        @if($_SESSION['id_product'][$i] <> "")
                            @php
                                $contarPro = $contarPro + 1
                            @endphp
                            @php
                                $producto = \App\Models\Product::find($_SESSION['id_product'][$i]);
                                $precio = str_replace(".", "", $producto->price);
                                if($producto->descount > 0){
                                    $suma = $precio - ($precio * $producto->descount / 100);
                                    $precio = $precio - ($precio * $producto->descount / 100);
                                }else{
                                    $suma = $precio;
                                }

                                if(session()->get('id_price') ==  2){
                                    $precio = intval($precio * $dolar);
                                    $suma =  intval($suma * $dolar);
                                }

                                $precio = str_replace(",", ".", number_format($precio));
                                $precioTotal = $suma * $_SESSION['cant'][$i];
                                $subtotal = $subtotal + $precioTotal;
                                $precioTotal = str_replace(",", ".", number_format($precioTotal));
                            @endphp
                            <tr>
                                <td>
                                    <div class="img">
                                        <div>
                                            <img src="{{asset($producto->img)}}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h3 class="tdborder h3">
                                        <span>{{$producto->name}}</span> <br>
                                        ({{$producto->artist->name}})
                                    </h3>
                                </td>
                                <td>
                                    <h3 class="tdborder tdborder_2 h3">
                                        ${{$precio}}
                                    </h3>
                                </td>
                                <td>
                                    <h3 class="tdborder tdborder_2 h3">
                                        <a class="waves-effect waves-light btn cant">
                                            <i
                                                id="{{$i}}"
                                                id_product="{{$_SESSION['id_product'][$i]}}"
                                                class="material-icons left less"
                                            >-</i>
                                            <span class="productCant{{$i}}">&ensp;{{$_SESSION['cant'][$i]}}&ensp;</span>
                                            <i
                                                id="{{$i}}"
                                                id_product="{{$_SESSION['id_product'][$i]}}"
                                                class="material-icons right plus"
                                            >+</i>
                                        </a>
                                    </h3>
                                </td>
                                <td>
                                    <h3 class="tdborder tdborder_2 h3 priceTotal{{$i}}">
                                        ${{$precioTotal}}
                                    </h3>
                                </td>
                                <td>
                                    <img
                                        class="scross align-center delete"
                                        id="{{$_SESSION['id_product'][$i]}}"
                                        src="{{asset('img/account/scross.svg')}}" alt=""
                                    />
                                </td>
                            </tr>
                        @endif
                    @endfor
                @endif
                </tbody>
            </table>
        </div>
        <input type="hidden" id="price_type" value="{{session()->get('id_price')}}">
        <input type="hidden" id="dolar" value="{{$dolar}}">
        <div class="col s12">
            <div class="border">
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
                    <h4 id="1" class="changePrice {{(session()->get('id_price') == 1)?'active':''}}">
                        $COP
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.392" height="14.66" viewBox="0 0 15.392 14.66">
                            <g id="Polígono_3" data-name="Polígono 3" transform="translate(10.392 14.66) rotate(-150)" fill="#fff">
                                <path d="M 11.11690044403076 9.5 L 0.8830999732017517 9.5 L 6 0.971833348274231 L 11.11690044403076 9.5 Z" stroke="none"/>
                                <path d="M 6 1.943650245666504 L 1.766189575195313 9 L 10.23381042480469 9 L 6 1.943650245666504 M 6 0 L 12 10 L 0 10 L 6 0 Z" stroke="none" fill="#707070"/>
                            </g>
                        </svg>
                    </h4>
                </div>
                <a class="waves-effect waves-light btn" href="">Actualizar</a>
            </div>
        </div>
        <div class="col s12 m7 l7">
        </div>
        @php
            $total = $subtotal;
            $total = str_replace(",", ".", number_format($total));
        @endphp
        <div class="col s12 m5 l5">
            <div class="row">
                <div class="col s6 m5 l5">
                    <h5>
                        Total
                    </h5>
                </div>
                <div class="col s6 m7 l7">
                    <h5 class="h5 total">
                        ${{$total}}
                        @if(session()->get('id_price') ==  1)
                            COP
                        @else
                            USD
                        @endif
                    </h5>
                </div>
                <div class="col s12">
                    <h6>
                        En este precio, están incluidos los costos de envío, como lo específica
                        la clausula octava de los Términos y condiciones.
                    </h6>
                    <div class="button">
                        @if($contarPro>0)
                            <a class="waves-effect waves-light btn" href="{{url('/order')}}">Finalizar compra</a>
                        @else
                            <a class="waves-effect waves-light btn notPedido">Finalizar compra</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
