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
            display: none;
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
                $apiKey = '0V30oGDG1sS65zqq6I4LGBa1G2';
                $merchantId = '879241';
                $accountId = '886976';
                $description = 'Compra en Carmona de productos';
                $referenceCode = $order->reference;
                //$referenceCode = 'TestPayU';
                $amount = $order->total;
                $currency = $order->pay_mod;
                $signature = $apiKey.'~'.$merchantId.'~'.$referenceCode.'~'.$amount.'~'.$currency;
                $signature = md5($signature);
            @endphp
            <form id="formPayu" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
                <input name="merchantId"    type="hidden"  value="{{$merchantId}}"   >
                <input name="accountId"     type="hidden"  value="{{$accountId}}" >
                <input name="description"   type="hidden"  value="{{$description}}"  >
                <input name="referenceCode" type="hidden"  value="{{$referenceCode}}" >
                <input name="amount"        type="hidden"  value="{{$amount}}"   >
                <input name="tax"           type="hidden"  value="0"  >
                <input name="taxReturnBase" type="hidden"  value="0" >
                <input name="currency"      type="hidden"  value="{{$currency}}" >
                <input name="signature"     type="hidden"  value="{{$signature}}"  >
                <input name="test"          type="hidden"  value="1">
                <input name="buyerEmail"    type="hidden"  value="{{$user->email}}" >
                <input name="buyerFullName"    type="hidden"  value="{{$user->nameMother}}" >
                <input name="mobilePhone"    type="hidden"  value="{{$user->cellphone}}" >
                <input name="responseUrl"    type="hidden"  value="{{url('responsePayu')}}" >
                <input name="confirmationUrl"    type="hidden"  value="{{url('payUconfirm.php')}}" >
                <input name="Submit"        type="submit"  value="Enviar" >
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById("formPayu").submit();
    </script>
@endsection
