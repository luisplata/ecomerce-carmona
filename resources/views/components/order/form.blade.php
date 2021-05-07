<section class="sectionFormOrder">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                Finalizar compra
            </h1>
            @if(!session()->has('id'))
                <h2 class="openLogin">
                    ¿Ya estás registrado?
                </h2>
            @endif
        </div>
        <div class="col s12">
            <form action="" id="orderForm">
                @php
                    $type_user = 'normal';
                @endphp
                @if(session()->has('id'))
                    @php
                        $user = \App\User::find(session()->get('id'));
                        $type_user = $user->type;
                        $address = \App\Models\Address::where('user_id',session()->get('id'))->first();
                    @endphp
                @endif
                <div class="row">
                    @if(!session()->has('id'))
                        <input type="hidden" value="normal" id="typeChangeOrder" name="typeChangeOrder">
                        <!--
                        <div class="col s12 m2 l2">
                            <h2 class="h2">
                                TIPO DE <br>USUARIO <span>*</span>
                            </h2>
                        </div>
                        <div class="col s12 m10 l10 input">
                            <select class="browser-default" id="typeChangeOrder" name="typeChangeOrder">
                                <option value="normal" selected>Normal</option>
                                <option value="artista">Artista</option>
                            </select>
                        </div>
                        -->
                    @endif
                    <div class="col s12 m2 l2">
                        <h2>
                            NOMBRE <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="nameOrder" name="nameOrder" value="{{$user->name}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            APELLIDO <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="lastnameOrder" name="lastnameOrder" value="{{$user->lastname}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            DIRECCIÓN <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="addressOrder" name="addressOrder" value="{{$address->address}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 CLASS="h2">
                            TIPO DE DIRECCIÓN <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select class="browser-default" id="nameAddressOrder" name="nameAddressOrder">
                            <option value="">Seleccionar</option>
                            <option value="Oficina" {{$address->name=='Oficina'?'selected':''}}>Oficina</option>
                            <option value="Apartamento" {{$address->name=='Apartamento'?'selected':''}}>Apartamento</option>
                            <option value="Casa" {{$address->name=='Casa'?'selected':''}}>Casa</option>
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            PAÍS <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="countryOrder" id="countryOrder" class="browser-default">
                            <option value="">Seleccionar</option>
                            @foreach($country as $c)
                                <option
                                    value="{{$c->PaisCodigo}}"
                                    {{session()->get('country_order')==$c->PaisCodigo?'selected':''}}>
                                    {{$c->PaisNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            ESTADO/
                            DEPARTAMENTO <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="statesOrder" id="statesOrder" class="browser-default">
                            <option value="">Seleccionar</option>
                            @foreach($states as $s)
                                <option
                                    value="{{$s->DisCodigo}}"
                                    {{session()->get('state_order')==$s->DisCodigo?'selected':''}}
                                    class="opctionsstatesOrder">
                                    {{$s->DisNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            CIUDAD/
                            POBLACIÓN <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="citiesOrder" id="citiesOrder" class="browser-default">
                            <option value="">Ciudad</option>
                            @foreach($cities as $c)
                                <option
                                    value="{{$c->CiuCodigo}}"
                                    {{session()->get('city_order')==$c->CiuCodigo?'selected':''}}
                                    class="opctionscitiesOrder">
                                    {{$c->CiuNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            CÓDIGO POSTAL <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="postalOrder" name="postalOrder" value="{{session()->get('postal_order')}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            COMPAÑIA
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="companyOrder" name="companyOrder" value="{{$user->company}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            TELÉFONO <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="phoneOrder" name="phoneOrder" value="{{$user->phone}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            EMAIL <span>*</span>
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="emailOrder" name="emailOrder" value="{{$user->email}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Notas del pedido (Opcional)
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <textarea
                            id="descriptionOrder"
                            name="descriptionOrder"
                            class="materialize-textarea"
                            placeholder="Notas sobre tu pedido, por ejemplo, notas especiales para la entrega."
                        >{{$address->description}}</textarea>
                    </div>
                    <div class="col s12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th class="none">Cantidad</th>
                                    <th class="none">Subtotal</th>
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
                                                    <h3 class="h3 tdborder tdborder_2">
                                                        <span>{{$producto->name}}</span> <br>
                                                        ({{$producto->artist->name}})
                                                    </h3>
                                                </td>
                                                <td>
                                                    <h3 class="h3">
                                                        <span class="cantidad">Cantidad:</span>{{$_SESSION['cant'][$i]}}
                                                    </h3>
                                                </td>
                                                <td>
                                                    <h3 class="h3 tdborder">
                                                        ${{$precioTotal}}
                                                    </h3>
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                @endif
                                <tr>
                                    @php
                                        $total = $subtotal;
                                        $total = str_replace(",", ".", number_format($total));
                                    @endphp
                                    <td class="td_total">
                                        <h3 class="total">
                                            Total
                                        </h3>
                                    </td>
                                    <td class="td_total none">

                                    </td>
                                    <td class="td_total">
                                        <h3 class="h3 h3_total">
                                            ${{$total}}
                                            @if(session()->get('id_price') ==  1)
                                                COP
                                            @else
                                                USD
                                            @endif
                                        </h3>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" id="terms" name="terms"/>
                                <span>He leído y acepto los términos y condiciones y políticas de privacidad de Carmona
                                    Virtual Gallery.</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" id="checksOrder"/>
                                <span>Acepto suscribirme al Newsletter, para estar al tanto de nuevas actualizaciones
                                    y promociones.</span>
                            </label>
                        </p>
                    </div>
                    <input type="hidden" id="typeOrder" name="typeOrder" value="{{$type_user}}">
                    <input type="hidden" id="newsOrder" name="newsOrder" value="0">
                    <input type="hidden" name="price_type" id="price_type" value="{{session()->get('id_price')}}">
                    <input type="hidden" name="dolar" id="dolar" value="{{$dolar}}">
                    <div class="col s12 button">
                        @if($contarPro > 0)
                            <a class="waves-effect btn goPedido">REALIZAR PEDIDO</a>
                        @else
                            <a class="waves-effect btn notPedido">REALIZAR PEDIDO</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
