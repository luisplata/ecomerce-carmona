<section class="sectionArtistHome" style="background-image: url('{{asset('img/artist/back.jpg')}}')">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                ARTISTAS DESTACADOS
            </h1>
        </div>
        <div class="col s12">
            <div class="sliderArtist">
                <img class="arrowLeft" src="{{asset('img/artist/left.svg')}}" alt="">
                <img class="arrowRight" src="{{asset('img/artist/right.svg')}}" alt="">
                <div id="sliderArtist">
                    @foreach($artist as $a)
                        <div>
                            <a href="{{url('artist/'.$a->id)}}">
                                <div class="element">
                                    <div class="img">
                                        <div>
                                            <img src="{{asset($a->product[0]->img)}}" alt="">
                                        </div>
                                    </div>
                                    <h2>
                                        {{$a->name}}
                                    </h2>
                                    <h3>
                                        {{$a->country}}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
