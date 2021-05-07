<section class="sectionListGalery">
    <div id="loader" class="notProductos">
        <h6>
            Cargando ...
        </h6>
        <div class="progress">
            <div class="indeterminate">
            </div>
        </div>
    </div>
    <div class="row" id="artistList">
        @foreach($artist as $a)
            <div class="column">
                <a href="{{url('artist/'.$a->id)}}">
                <div class="element">
                    <div class="img">
                        <div>
                            <img src="{{asset($a->product[0]->img)}}" alt="">
                        </div>
                    </div>
                    <div class="float">
                        <h1>
                            {{$a->name}}
                        </h1>
                        <h2>
                            {{$a->category->name}}
                        </h2>
                        <a href="{{url('artist/'.$a->id)}}" class="waves-effect waves-light btn">
                            VER PERFIL
                        </a>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
