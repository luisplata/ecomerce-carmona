@extends('template.layout')
@section('title', 'Artistas')
@section('style')
@endsection
@section('content')
    @component('components.artist.filter',[
        'category'=>$category,
        'artist'=>$artist,
    ])
    @endcomponent
    @component('components.artist.list',[
        'artist'=>$artist,
    ])
    @endcomponent
@endsection
@section('script')
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script>
        var name = '0',
            category = 0,
            order = 0;
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
        $('.categoryFilter').click(function () {
            $('.categoryFilter').removeClass('active');
            $(this).addClass('active');
            category = this.id;
            searchProductsFilter();
        });
        $('#orderFilter').change(function () {
            order = this.value;
            searchProductsFilter();
        });
        function searchProductsFilter()
        {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: '{{url('/')}}/searchArtistFilter/'+name+"/"+category+"/"+order,
                data: {},
                beforeSend: function() {
                    $('#artistList').hide();
                    $('#loader').show();
                },
                complete: function(){
                    setTimeout(function () {
                        $('#loader').hide();
                        $('#artistList').show();
                        $('html, body').animate({
                            scrollTop: $('#artistList').offset().top - 200
                        }, 1000);
                    },2000);
                },
                success: function( msg ) {
                    setTimeout(function () {
                        $("#artistList").html(msg);
                        $(".span_cant_less").html($('#cant_less').val());
                        $(".span_cant_plus").html($('#cant_plus').val());
                    },0);
                }
            });
        }
    </script>
@endsection
