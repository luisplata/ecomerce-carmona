<section class="sectionBannerArtistInfo" style="background-image: url('{{asset($artist->product[0]->img)}}')">
    <div class="back">
    </div>
    <div class="row rowOne">
        <div class="col s12 m4 l4">
            <div class="text">
                <div class="img">
                    <div>
                        @if($products->count() > 1)
                            <img src="{{asset($artist->product[1]->img)}}" alt="">
                        @else
                            <img src="{{asset($artist->product[0]->img)}}" alt="">
                        @endif
                    </div>
                </div>
                <h1>
                    {{$artist->name}}
                </h1>
                <h2>
                    {{$artist->info}}
                </h2>
                <h3>
                    {{$artist->city}}, {{$artist->country}}.
                </h3>
            </div>
        </div>
    </div>
</section>
