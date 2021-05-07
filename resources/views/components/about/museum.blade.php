<section class="sectionMuseumAbout">
    <div class="row rowOne">
        <div class="col s12 m6 l6">
            <div class="img">
                <img class="image_1" src="{{asset($webInfo[4]->img)}}" alt="">
                <img class="image_2" src="{{asset($webInfo[5]->img)}}" alt="">
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="text">
                <h1>{!! $webInfo[4]->name !!}</h1>
                <h2>{!! $webInfo[4]->text !!}</h2>
                <div class="buttons">
                    <a href="https://museocarmona.com/" class="waves-effect waves-light btn" target="_blank">
                        Conoce más
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
