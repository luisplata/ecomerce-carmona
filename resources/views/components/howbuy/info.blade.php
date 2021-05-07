<section class="sectionHowBuyInfo">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                ¿CÓMO COMRPAR ARTE?
            </h1>
            <div class="text">
                @foreach($questions as $q)
                    <h2>
                        {{$q->name}}
                    </h2>
                    <h3>{!! $q->text !!}
                        @if($q->img != '')
                            <img src="{{asset($q->img)}}" alt="">
                        @endif
                    </h3>
                @endforeach
            </div>
        </div>
    </div>
</section>
