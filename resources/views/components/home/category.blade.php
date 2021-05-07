<section class="sectionCategory">
    <div class="row rowOne">
        <div class="col s12">
            <h1>
                {{$webInfo[0]->name}}
            </h1>
            <h2>
                {{$webInfo[0]->text}}
            </h2>
        </div>
        @foreach($category as $c)
            <div class="col s12 m6 l6">
                <a href="{{url('category/'.$c->id)}}">
                    <div class="element">
                        <img src="{{asset($c->img)}}" alt="">
                        <h3>
                            {{$c->name}}
                        </h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
