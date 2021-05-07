@extends('template.layout')
@section('title', 'Payu')
@section('style')
    <style>
        .contentImg{
            text-align: center;
            padding: 10% 0%;
            background-image: url({{asset('img/banner/image.jpg')}});
            margin-bottom: 0px !important;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            margin: 0 auto;
        }
        .spaceador{
            display: none;
        }
        form{
            display: block;
        }
    </style>
@endsection

@section('content')
    <div class="row contentImg">
        <div class="col s12">
            <img src="{{asset('img/payu.png')}}" alt="">
        </div>
        <div class="col s12">
            @php
                $merchant_id = $_REQUEST['merchantId'];
                $referenceCode = $_REQUEST['referenceCode'];
                $TX_VALUE = $_REQUEST['TX_VALUE'];
                $New_value = number_format($TX_VALUE, 1, '.', '');
                $currency = $_REQUEST['currency'];
                $transactionState = $_REQUEST['transactionState'];
                $firma = $_REQUEST['signature'];
                $reference_pol = $_REQUEST['reference_pol'];
                $cus = $_REQUEST['cus'];
                $extra1 = $_REQUEST['description'];
                $pseBank = $_REQUEST['pseBank'];
                $lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
                $transactionId = $_REQUEST['transactionId'];

                if ($_REQUEST['transactionState'] == 4 ) {
                    $estadoTx = "Transacción aprobada";
                    $cod_response = 1;
                }

                else if ($_REQUEST['transactionState'] == 6 ) {
                    $estadoTx = "Transacción rechazada";
                    $cod_response = 2;
                }

                else if ($_REQUEST['transactionState'] == 104 ) {
                    $estadoTx = "Error";
                    $cod_response = 4;
                }

                else if ($_REQUEST['transactionState'] == 7 ) {
                    $estadoTx = "Transacción pendiente";
                    $cod_response = 3;
                }

                else {
                    $estadoTx=$_REQUEST['mensaje'];
                }

            @endphp
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        if ({{$cod_response}} == 1) {
            //Codigo personalizado
            validarPagoEpayco(1);
        }
        //Transaccion Rechazada
        if ({{$cod_response}} == 2) {
            validarPagoEpayco(2);
        }
        //Transaccion Pendiente
        if ({{$cod_response}} == 3) {
            validarPagoEpayco(3);
        }
        //Transaccion Fallida
        if ({{$cod_response}} == 4) {
            validarPagoEpayco(4);
        }

        function validarPagoEpayco(value)
        {
            swal({
                text: "Gracias por su compra \n Espere un momento",
                icon: imageURL,
                button: false,
            });

            $.ajaxSetup({
                beforeSend: function(xhr, type) {
                    if (!type.crossDomain) {
                        xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                    }
                },
            });

            $.ajax({
                url: "{{url('/validarPagoPayu')}}",
                method: "POST",
                data: {value:value},
                success: function (data) {
                    if (/^([0-9])*$/.test(data)) {
                        //location.href = '{{url('/resumen')}}/'+data;
                        location.href = '{{url('/')}}';
                    }else {
                        swal({
                            text: "Error, hubo problemas",
                            icon: "warning",
                            button: "OK!",
                        });
                    }
                }
            });
        }
    </script>
@endsection
