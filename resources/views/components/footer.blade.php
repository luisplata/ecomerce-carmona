<section class="sectionFooter">
    <div class="row rowOne">
        <div class="col s12 m3 l2">
            <h1>
                Información
            </h1>
            <a href="{{Route('terms')}}">
                <h2>
                    Términos y condiciones
                </h2>
            </a>
            <a href="{{Route('Privacy')}}" target="_blank">
                <h2>
                    Avisos de privacidad
                </h2>
            </a>
            <a href="{{Route('about')}}">
                <h2>
                    ¿Quién es Carmona?
                </h2>
            </a>
        </div>
        <div class="col s12 m3 l2">
            <h1>
                Vende tu arte
            </h1>
            <a href="{{Route('sell')}}">
                <h2>
                    ¿Qué debo saber?
                </h2>
            </a>
            <a href="{{url('/about#curators')}}">
                <h2>
                    Nuestros curadores
                </h2>
            </a>
            <h2 class="openRegister">
                ¡Inscríbete!
            </h2>
        </div>
        <div class="col s12 m3 l2">
            <h1>
                Comprar arte
            </h1>
            <a href="{{Route('howbuy')}}">
                <h2>
                    ¿Cómo comprar arte?
                </h2>
            </a>
            <a href="{{Route('galery')}}">
                <h2>
                    Galería de obras
                </h2>
            </a>
            <div class="buy">
                <img src="{{asset('img/footer/buy.svg')}}" alt="">
            </div>
        </div>
        <div class="col s12 m3 l6">
            <div class="row">
                <div class="col s12">
                    <h3>
                        Newsletter
                    </h3>
                </div>
                <form action="" id="formNewsletter">
                    <div class="col s8 m8 l8">
                        <input type="text" id="emailNews" name="emailNews" placeholder="Correo electrónico...">
                    </div>
                    <div class="col s4 m4 l4">
                        <a class="waves-effect waves-light btn btnNewsletter">Suscribir</a>
                    </div>
                </form>
                <div class="col s12">
                    <div class="redes">
                        <a href="{{$info->facebook}}" target="_blank">
                            <img class="face" src="{{asset('img/footer/face.svg')}}" alt="">
                        </a>
                        <a href="{{$info->instagram}}" target="_blank">
                            <img src="{{asset('img/footer/ins.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
