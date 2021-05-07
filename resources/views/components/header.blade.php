<nav class="header">
    @php
        session_start();
        $contador = 0;
       for($i=1;$i<=session()->get('car');$i++){
           if($_SESSION['id_product'][$i] <> ""){
               $contador =  $contador + 1;
           }
       }
    @endphp
    <ul id="nav-mobile" class="right hide-on-large-only">
        <li>
            <a class="finish open-shop" href="{{Route('shop')}}">
                <span id="numberCarShopMobile">{{$contador}}</span>
                <img class="shop" src="{{asset('img/header/shop.svg')}}" alt="">
            </a>
        </li>
        <li>
            @if(session()->has('id'))
                <a data-target="mobile_account" class="sidenav-trigger">
                    <img class="user" src="{{asset('img/header/user.svg')}}" alt="">
                </a>
            @else
                <a class="openLogin">
                    <img class="user" src="{{asset('img/header/user.svg')}}" alt="">
                </a>
            @endif
        </li>
        <li>
            <a data-target="mobile_menu" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
        </li>
    </ul>
    <a href="{{Route('home')}}" class="brand-logo">
        <img class="logo_white" src="{{asset('img/header/logo.svg')}}" alt="">
        <img class="logo_blue" src="{{asset('img/header/logo.svg')}}" alt="">
    </a>
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{url('/')}}">Inicio</a></li>
            <li><a href="{{url('/galery')}}">Galería</a></li>
            <li><a href="{{url('/artist')}}">Artistas</a></li>
            <li><a href="{{url('/about')}}">Acerca de</a></li>
            <li><a href="{{url('/contact')}}">Contacto</a></li>
            <li>
                <a class="finish open-shop" href="{{Route('shop')}}">
                    <span id="numberCarShop">{{$contador}}</span>
                    <img class="shop img_car" src="{{asset('img/header/shop.svg')}}" alt="">
                </a>
            </li>
            <li class="li">
                <a>
                    <img class="user" src="{{asset('img/header/user.svg')}}" alt="">
                </a>
            </li>
            <li>
                @if(session()->has('id'))
                    @php
                        $user = \App\Models\Users::find(session()->get('id'));
                        session(['id_price' => $user->price ]);
                    @endphp
                    <a href="{{Route('account')}}">
                        <h6>&ensp;{{session()->get('name')}}&ensp;</h6>
                    </a>
                @else
                    @if(!session()->has('id_price'))
                        @php
                            session(['id_price' => 1 ]);
                        @endphp
                    @endif
                    <a>
                        <h6 class="openLogin">&ensp;Acceso o registro&ensp;</h6>
                    </a>
                @endif
            </li>
            <li class="li">
                <a href="{{$info->facebook}}" target="_blank">
                    <img class="redes face" src="{{asset('img/header/face.svg')}}" alt="">
                </a>
            </li>
            <li class="li">
                <a href="{{$info->instagram}}" target="_blank">
                    <img class="redes ins" src="{{asset('img/header/ins.svg')}}" alt="">
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="spaceador">
</div>

@component('components.modal.login')
@endcomponent
@component('components.modal.register')
@endcomponent

<ul id="mobile_menu" class="sidenav">
    <h1>
        <span class="close-menu">X</span>
    </h1>
    <li>
        <a class="close-menu" href="{{url('/')}}">
            Inicio
        </a>
    </li>
    <li>
        <a class="close-menu" href="{{url('/galery')}}">
            Galería
        </a>
    </li>
    <li>
        <a class="close-menu" href="{{url('/artist')}}">
            Artistas
        </a>
    </li>
    <li>
        <a class="close-menu" href="{{url('/about')}}">
            Acerca de
        </a>
    </li>
    <li class="li">
        <a class="close-menu" href="{{url('/contact')}}">
            Contacto
        </a>
    </li>
    <div class="redes">
        <a href="{{$info->facebook}}" target="_blank">
            <img class="face" src="{{asset('img/header/face.svg')}}" alt="">
        </a>
        <a href="{{$info->instagram}}" target="_blank">
            <img src="{{asset('img/header/ins.svg')}}" alt="">
        </a>
    </div>
</ul>

<ul id="mobile_account" class="sidenav">
    <h1>
        <span class="close-menu">X</span>
    </h1>
    <div class="menu">
        <a href="{{Route('account')}}" class="waves-effect waves-light btn">MIS DATOS</a>
        <a href="{{Route('historial')}}" class="waves-effect waves-light btn">HISTORIAL</a>
        <a href="{{Route('wishlist')}}" class="waves-effect waves-light btn">WISHLIST</a>
        <a href="{{Route('LogOut')}}" class="waves-effect waves-light btn">SALIR</a>
    </div>
</ul>

