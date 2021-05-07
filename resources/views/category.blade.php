@extends('template.layout')
@section('title')
    {{$category->name}}
@endsection
@section('style')
@endsection
@section('content')
    @component('components.category.filter',[
        'products'=>$products,
        'colors'=>$colors,
        'category'=>$category
    ])
    @endcomponent
    @component('components.galery.list',[
        'products'=>$products
    ])
    @endcomponent
@endsection
@section('script')
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.js')}}"></script>
    <script>
        var min = 0,
            max = 40000000,
            name = '0',
            category = '{{$category->id}}',
            color = 0,
            order = 0;
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 40000000,
            step: 100000,
            values: [ 0, 40000000 ],
            stop: function( event, ui ) {
                searchProductsFilter();
            },
            slide: function( event, ui ) {
                $( "#minimum" ).text(addCommas(ui.values[ 0 ]));
                $( "#maximum" ).text(addCommas(ui.values[ 1 ]));
                $( "#min" ).val(ui.values[ 0 ]);
                $( "#max" ).val(ui.values[ 1 ]);
                min = $("#min").val();
                max = $("#max").val();
            }
        });
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1 + x2;
        }
        //searchProductsFilter();
        $('#loader').hide();
        $('.clickNameFilter').click(function () {
            if($('#nameFilter').val() == ''){
                name = '0';
            }else{
                name = $('#nameFilter').val();
            }
            searchProductsFilter();
        });
        $('#nameFilter').keypress(function (e) {
            if(e.which == 13) {
                if($('#nameFilter').val() == ''){
                    name = '0';
                }else{
                    name = $('#nameFilter').val();
                }
                searchProductsFilter();
            }
        });
        $('#orderFilter').change(function () {
            order = this.value;
            searchProductsFilter();
        });
        $('.colorFilter').click(function () {
            $('.colorFilter').removeClass('active_svg');
            $(this).addClass('active_svg');
            color = this.id;
            searchProductsFilter();
        });
        function searchProductsFilter()
        {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: '{{url('/')}}/searchProductsFilter/'+min+"/"+max+"/"+name+"/"+category+"/"+color+"/"+order,
                data: {},
                beforeSend: function() {
                    $('#productlist').hide();
                    $('#loader').show();
                },
                complete: function(){
                    setTimeout(function () {
                        $('#loader').hide();
                        $('#productlist').show();
                        $('html, body').animate({
                            scrollTop: $('#productlist').offset().top - 200
                        }, 1000);
                    },2000);
                },
                success: function( msg ) {
                    setTimeout(function () {
                        $("#productlist").html(msg);
                        $(".span_cant_less").html($('#cant_less').val());
                        $(".span_cant_plus").html($('#cant_plus').val());
                    },0);
                }
            });
        }
    </script>
@endsection
