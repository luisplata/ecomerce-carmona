@if($artist[0]->name == '')
    <div class="column larger notProductos">
        <h6>
            No hay resultados
        </h6>
    </div>
    @php
        $cant_less = 0;
        $cant_plus = 0;
    @endphp
@else
    @php
        $cant_less = 1;
        $cant_plus = $artist->count();
    @endphp
@endif
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
<input type="hidden" id="cant_less" value="{{$cant_less}}">
<input type="hidden" id="cant_plus" value="{{$cant_plus}}">
