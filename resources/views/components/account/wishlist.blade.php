<section class="sectionAccount sectionAccountWishlist">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                MI CUENTA
            </h1>
        </div>
        <div class="col s12 m9 l9">
            <div class="contentDiv">
                <h2>
                    Wishlist
                </h2>
                <table>
                    <thead>
                    <tr>
                        <th class="none"></th>
                        <th class="th td10"></th>
                        <th class="th">Nombre de la pieza</th>
                        <th class="th">Precio</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($wishes as $w)
                            <tr>
                                <td class="border_none">
                                    <a href="{{url('product/'.$w->product->id)}}">
                                        <img class="shop align-center" src="{{asset('img/account/shop.png')}}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <div class="img">
                                        <div>
                                            <img src="{{asset($w->product->img)}}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td class="none">
                                    <h3 class="tdborder">
                                        <span>{{$w->product->name}}</span> <br>
                                        ({{$w->product->artist->name}})
                                    </h3>
                                </td>
                                <td>
                                    @php
                                        $precio = str_replace(".", "", $w->product->price);
                                        if($w->product->descount > 0)
                                        {
                                            $descuento = $precio - ( $precio * $w->product->descount / 100);
                                            $descuento = str_replace(",", ".", number_format($descuento));
                                        }
                                        $precio = str_replace(",", ".", number_format($precio));
                                    @endphp
                                    <h3 class="h3">
                                        ${{$precio}}
                                    </h3>
                                </td>
                                <td class="border_none">
                                    <img class="scross align-center delete_wishes" id="{{$w->id}}" src="{{asset('img/account/scross.svg')}}" alt="">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="menu">
                <a href="{{Route('account')}}" class="waves-effect waves-light btn">MIS DATOS</a>
                <a href="{{Route('historial')}}" class="waves-effect waves-light btn">HISTORIAL</a>
                <a href="{{Route('wishlist')}}" class="waves-effect waves-light btn active">WISHLIST</a>
                <a href="{{Route('LogOut')}}" class="waves-effect waves-light btn">SALIR</a>
            </div>
        </div>
    </div>
</section>
