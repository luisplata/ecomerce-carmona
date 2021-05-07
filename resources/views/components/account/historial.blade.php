<section class="sectionAccount sectionAccountHistorial">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                MI CUENTA
            </h1>
        </div>
        <div class="col s12 m9 l9">
            <div class="contentDiv">
                <h2>
                    Historial de compras
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre de la pieza</th>
                            <th>Precio</th>
                            <th class="none">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $o)
                            @foreach($o->purchase as $p)
                                <tr>
                                    <td>
                                        <h3>
                                            <span>{{$p->product->name}}</span> <br>
                                            ({{$p->product->artist->name}})
                                        </h3>
                                    </td>
                                    <td>
                                        <h3 class="h3 tdborder">
                                            @php
                                                $precio = str_replace(".", "", $p->total);
                                                $precio = str_replace(",", ".", number_format($precio));
                                            @endphp
                                            ${{$precio}}
                                        </h3>
                                    </td>
                                    <td class="none">
                                        <h3 class="h3">
                                            {{$o->date}}
                                        </h3>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="menu">
                <a href="{{Route('account')}}" class="waves-effect waves-light btn">MIS DATOS</a>
                <a href="{{Route('historial')}}" class="waves-effect waves-light btn active">HISTORIAL</a>
                <a href="{{Route('wishlist')}}" class="waves-effect waves-light btn">WISHLIST</a>
                <a href="{{Route('LogOut')}}" class="waves-effect waves-light btn">SALIR</a>
            </div>
        </div>
    </div>
</section>
