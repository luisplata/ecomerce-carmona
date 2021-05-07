<section class="sectionBanner">
    <div class="row rowOne">
        <div class="col s12">
            <div class="sliderBanner" id="sliderBanner">
                @foreach($banner as $b)
                    <div>
                        <div>
                            <img class="desktop" src="{{asset($b->img)}}" alt="">
                            <img class="mobile" src="{{asset($b->mobile)}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
