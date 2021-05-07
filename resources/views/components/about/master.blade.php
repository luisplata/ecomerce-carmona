<section class="sectionMasterAbout">
    <div class="row rowOne">
        <div class="col s12 m6 l6 hide-on-med-and-up">
            <img src="{{asset($webInfo[3]->img)}}" alt="">
        </div>
        <div class="col s12 m6 l6">
            <div class="text">
                <h1>{!! $webInfo[3]->name !!}</h1>
                <h2>{!! $webInfo[3]->text !!}</h2>
                <div class="buttons">
                    <a href="https://museocarmona.com/" class="waves-effect waves-light btn" target="_blank">
                        Conoce más
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6 hide-on-small-only">
            <img src="{{asset($webInfo[3]->img)}}" alt="">
        </div>
    </div>
</section>
