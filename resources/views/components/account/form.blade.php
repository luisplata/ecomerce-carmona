<section class="sectionAccount sectionAccountForm">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                Bienvenido {{session()->get('name')}}
            </h1>
        </div>
        <div class="col s12 m9 l9">
            <form action="" id="accountForm">
                <div class="row">
                    <div class="col s12 m2 l2">
                        <h2>
                            NOMBRE
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="nameAccount" name="nameAccount" value="{{$user->name}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            APELLIDO
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="lastnameAccount" name="lastnameAccount" value="{{$user->lastname}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            NOMBRE VISIBLE
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" name="visibleNameAccount" id="visibleNameAccount" value="{{$user->visible_name}}">
                        <h6 class="h6">
                            Así será como se mostrará tu nombre en la sección de tu cuenta
                        </h6>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            E-MAIL
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="emailAccount" name="emailAccount" value="{{$user->email}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Codigo Postal
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="postalAccount" name="postalAccount" value="{{session()->get('postal_order')}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            Teléfono
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="phoneAccount" name="phoneAccount" value="{{$user->phone}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            Dirección
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="addressAccount" name="addressAccount" value="{{$address->address}}">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Tipo de Dirección
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select class="browser-default" id="nameAddressAccount" name="nameAddressAccount">
                            <option value="">Seleccionar</option>
                            <option value="Oficina" {{$address->name=='Oficina'?'selected':''}}>Oficina</option>
                            <option value="Apartamento" {{$address->name=='Apartamento'?'selected':''}}>Apartamento</option>
                            <option value="Casa" {{$address->name=='Casa'?'selected':''}}>Casa</option>
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            País/Región
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="countryAccount" id="countryAccount" class="browser-default">
                            <option value="">Seleccionar</option>
                            @foreach($country as $c)
                                <option
                                    value="{{$c->PaisCodigo}}"
                                    {{$user->country_id==$c->PaisCodigo?'selected':''}}>
                                    {{$c->PaisNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Estado/<br>
                            Departamento
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="statesAccount" id="statesAccount" class="browser-default">
                            <option value="">Seleccionar</option>
                            @foreach($states as $s)
                                <option
                                    value="{{$s->DisCodigo}}"
                                    {{$user->states_id==$s->DisCodigo?'selected':''}}
                                    class="opctionsstatesAccount">
                                    {{$s->DisNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Ciudad/<br>
                            POBLACIÓN
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <select name="citiesAccount" id="citiesAccount" class="browser-default">
                            <option value="">Ciudad</option>
                            @foreach($cities as $c)
                                <option
                                    value="{{$c->CiuCodigo}}"
                                    {{$user->cities_id==$c->CiuCodigo?'selected':''}}
                                    class="opctionscitiesAccount">
                                    {{$c->CiuNombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2>
                            Compañia
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="text" id="companyAccount" name="companyAccount" value="{{$user->company}}">
                    </div>
                    <div class="col s12 button">
                        <a class="waves-effect btn accountBtnForm">Guardar Cambios</a>
                    </div>
                </div>
            </form>
            <form id="passwordChangeForm">
                <div class="row">
                    <div class="col s12">
                        <h3>
                            CAMBIO DE CONTRASEÑA
                        </h3>
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Contraseña actual
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="password" id="passwordChange" name="passwordChange">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Nueva contraseña
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="password" id="newPasswordChange" name="newPasswordChange">
                    </div>
                    <div class="col s12 m2 l2">
                        <h2 class="h2">
                            Confirmar contraseña
                        </h2>
                    </div>
                    <div class="col s12 m10 l10 input">
                        <input type="password" id="new2PasswordChange" name="new2PasswordChange">
                    </div>
                    <div class="col s12 button">
                        <a class="waves-effect btn btnPasswordChangeForm">CAMBIAR CONTRASEÑA</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m3 l3">
            <div class="menu">
                <a href="{{Route('account')}}" class="waves-effect waves-light btn active">MIS DATOS</a>
                <a href="{{Route('historial')}}" class="waves-effect waves-light btn">HISTORIAL</a>
                <a href="{{Route('wishlist')}}" class="waves-effect waves-light btn">WISHLIST</a>
                <a href="{{Route('LogOut')}}" class="waves-effect waves-light btn">SALIR</a>
            </div>
        </div>
    </div>
</section>
