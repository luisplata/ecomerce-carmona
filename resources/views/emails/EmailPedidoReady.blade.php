<?php
$http = url('/');
$info = \App\Models\Info::find(1);
$pedido = \App\Models\Order::find($id_pedido);
$productoPurchase = \App\Models\ProductPurchase::where('order_id','=',$id_pedido)
    ->get();

$reference_ped = substr($pedido->reference, 2, 10);
$reference_ped = $pedido->reference;
setlocale(LC_ALL,"es_CO");
$date =  strftime("%#e %B  de %Y", strtotime($pedido->date));
$total = str_replace(",", ".", number_format($pedido->total));
$subtotal = str_replace(",", ".", number_format($pedido->subtotal));
$envio = str_replace(",", ".", number_format($pedido->shipping));

$address = \App\Models\Address::find($pedido->address_id);
$deparment = \App\Models\State::find($address->state);
$city = \App\Models\City::find($address->city);
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <style>
        .divAddress{
            width: 86%;
            text-align: center;
            margin-bottom: 10px;
            border: 1px solid rgba(153,153,153,0.2);
            background: white;
            padding: 10px 20px 0px 35px;
        }
        .divAddress h6 {
            text-transform: uppercase;
            line-height: 1.5em;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 10pt;
            color: #D1A044;
            margin-bottom: -15px;
        }
        .divAddress h5 {
            line-height: 2px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 10pt;
            color: #808080;
        }
    </style>
</head>
<body>
<table cellpadding="0" cellspacing="0" align="center" border="0" width="100%" >
    <tr>
        <td width="600" border="0"  align="center">
            <table cellpadding="0" cellspacing="0" border="0" width="600" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
                <tr>
                    <td width="100%" style="width:100%; text-align: center; border:0; padding: 0;">
                        <a target="_blank" href="{{$http}}"><img src="{{$http}}/img/seo.jpg" style="width:100%; display: block" alt="43-05"></a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" bgcolor="#F2F2F2" width="100%" style="width:100%; text-align: center; border:0; padding: 0; background-color: #F2F2F2;">
                        <table cellpadding="0" align="center" cellspacing="0" border="0" width="400">
                            <tr>
                                <td align="center" border="0" style="padding-top: 20px; padding-bottom: 20px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13pt; color: #808080; line-height: 1.5em;">
                                    <span style="color: #FEA950; font-weight: bold; font-size: 12pt">Hola {{$user->name}}<br> </span>
                                    <br>
                                    <br>
                                    Buenas, usted ha comenzado el proceso de pedido en <a target="_blank" href='{{$http}}/' style='text-decoration: none'><span style='font-weight:700;font-size: 16px;color: #FEA950;'>{{$http}}</span></a>.<br>
                                    Queremos informarle que los datos seran suministrados aqui.
                                    <br>
                                    <div style='background: #FEA950; color: #F0F0F0;width: 98%; padding: 5px 10px;'>INFORMACIÓN BÁSICA</div>
                                    <br>
                                    <div style='padding-left: 10px'>
                                        Estado: Pago Realizado <br>
                                        Referencia: {{$reference_ped}} <br>
                                        Fecha: {{$date}} <br>
                                        Total: ${{$total}} <br>
                                        Forma de pago: {{$pedido->pay_mod}} <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table style="width: 100%; padding-bottom: 20px">
                                        <tr style="font-weight: 600;padding: 20px 0px;background: #F9F9F9;border: 1px solid rgba(244,244,244,1);border-right: none;border-left: none;">
                                            <td style="padding: 10px 0px">Producto</td>
                                            <td>Nombre</td>
                                            <td>Precio</td>
                                            <td>Descuento</td>
                                            <td>cant</td>
                                            <td>total</td>
                                        </tr>
                                        @foreach($productoPurchase as $key => $proP)
                                            @php
                                                $producto = \App\Models\Product::find($proP->products_id);
                                                $precio_pro = str_replace(",", ".", number_format($proP->price_pro));
                                                $total_pro = str_replace(",", ".", number_format($proP->total));
                                            @endphp
                                            <tr style="color: #0a0a0a;font-weight: 400">
                                                <td>
                                                    <img style="width: 100px" src="{{$http}}/{{$producto->img}}" alt="">
                                                </td>
                                                <td>
                                                    {{$producto->name}} <br>
                                                    Talla: {{$proP->name}} <br>
                                                    Tipo de letra: {{$proP->name}} <br>
                                                    Nombre de bebe: {{$proP->name}}
                                                </td>
                                                <td>
                                                    ${{$precio_pro}}
                                                </td>
                                                <td>
                                                    {{$proP->discount}} %
                                                </td>
                                                <td>
                                                    {{$proP->cant}}
                                                </td>
                                                <td>
                                                    ${{$total_pro}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="position: relative">
                                    <div class="divAddress">
                                        <h6>Envio a domicilio <br>
                                            Dirección: {{$address->name}}
                                        </h6>
                                        <h5>Descripcion: {{$address->description}}</h5>
                                        <h5 style="line-height: inherit;margin-top: -10px;margin-bottom: -10px">Dirección: {{$address->address}}</h5>
                                        <h5>Ciudad: {{$city->CiuNombre}}</h5>
                                        <h5>Departamento: {{$deparment->DisNombre}}</h5>
                                        <h5>Teléfono: {{$address->phone}}</h5> <br>
                                    </div>
                                    <div class="divAddress">
                                        <h5 style="padding-bottom: 10px;text-align: center">Subtotal: ${{$subtotal}}</h5>
                                        <h5 style="text-align: center;padding: 20px 0px;border-bottom: 2px dotted rgba(185,180,178,0.2);border-top: 2px dotted rgba(185,180,178,0.2);">Envio: ${{$envio}}</h5>
                                        <h5 style="padding-top: 10px;text-align: center">Total: ${{$total}}</h5>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="color: #FEA950">Mensaje automatico desde Carmona.</span> <i></i>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" width="100%" bgcolor="" style="width:100%; border:0; padding-top: 20px;padding-bottom: 20px;">
                        <table cellpadding="0" cellspacing="0" align="center" border="0" width="550" style="width: 550px; border-collapse: collapse;">
                            <tr>
                                <td align="left" valign="bottom" width="50%" bgcolor="#ffffff" style="width: 50%; line-height: 1.3em; letter-spacing: 1px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 8pt; color: #ffffff;background-image: url('{{$http}}/img/footer/background.png')">
                                    <a target="_blank" href="{{$http}}"><img style="padding-bottom: 20px;width: 120px;" src="{{$http}}/img/logo_big.svg" alt="2-04"></a><br>
                                </td>
                                <td align="right" valign="bottom" width="50%" bgcolor="#ffffff" style="width: 50%; line-height: 1.3em; letter-spacing: 1px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 8pt; color: #FEA950;">
                                    <a  style="color: #FEA950; text-decoration: none" href="{{$http}}"><b>CONTÁCTENOS</b></a><br><br>
                                    Carmona,<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
