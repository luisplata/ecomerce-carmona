<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CuponPurchase;
use App\Models\DomicileCost;
use App\Models\Info;
use App\Models\Newsletter;
use App\Models\Order;
use App\Models\ProductPurchase;
use App\Models\Product;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mail;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Monolog\Handler\FilterHandler;
use App\Http\Controllers\Controller;
use Swift_SwiftException;

class PayController extends Controller
{
    public function GoPedido(Request $request){
        try
        {
            if ($request->isMethod('post')){

                //newsletter user
                $emailNewsletter = $request->input('emailOrder');
                $newsletter = Newsletter::all();
                $numNewsletter = 0;
                foreach ($newsletter as $key => $n)
                {
                    if($n->mail == $emailNewsletter)
                    {
                        $numNewsletter = $numNewsletter + 1;
                    }
                }
                if($numNewsletter == 0){
                    $newsletter = new Newsletter();
                    $newsletter->mail = $emailNewsletter;
                    if ($newsletter->save())
                    {
                        //complet
                    } else {
                        return 'Error, hubo problemas';
                    }
                }
                //register user
                if(!session()->has('id')){
                    $veri = $request->input("emailOrder");
                    $email = User::select('email')
                        ->get();
                    $num = 0;
                    foreach ($email as $key => $row){
                        if($row->email == $veri){
                            $num = $num + 1 ;
                        }
                    }
                    if($num == 0){
                        $password = $request->input("countryOrder").$request->input("statesOrder");
                        $password = uniqid("LV{$password}");
                        $user = new User();
                        $user->name = $request->input("nameOrder");
                        $user->lastname = $request->input("lastnameOrder");
                        $user->visible_name = $request->input("nameOrder");
                        $user->email = $request->input("emailOrder");
                        $user->phone = $request->input("phoneOrder");
                        $user->address = $request->input("addressOrder");
                        $user->country_id = $request->input("countryOrder");
                        $user->states_id = $request->input("statesOrder");
                        $user->cities_id = $request->input("citiesOrder");
                        $user->cod_postal = $request->input("postalOrder");
                        $user->password = $password;
                        $user->company = $request->input("companyOrder");
                        $user->type = $request->input("typeOrder");
                        if ($user->save()) {
                            $address = new Address();
                            $address->user_id = $user->id;
                            $address->name = $request->input("nameAddressOrder");
                            $address->description = $request->input("descriptionOrder");
                            $address->address = $user->address;
                            $address->city = $user->cities_id;
                            $address->state = $user->states_id;
                            $address->phone = $user->phone;
                            $address->save();
                            try{
                                $titulo = '¡Registro exitoso!';
                                \Mail::send('emails.EmailRegistro', ['user'=>$user], function ($m) use ($titulo,$user) {
                                    $m->from('no-reply@carmona.co', 'Carmona');
                                    $m->to($user->email, 'Registro exitoso')->subject($titulo);
                                });
                            } catch(Swift_SwiftException $e) {
                            }
                        } else {
                            return 'Error, hubo problemas';
                        }
                    }else{
                        return 'Correo Electrónico ya registrado';
                    }
                }else{
                    $user = User::find(session()->get('id'));
                    $user->name = $request->input("nameOrder");
                    $user->lastname = $request->input("lastnameOrder");
                    $user->visible_name = $request->input("nameOrder");
                    $user->email = $request->input("emailOrder");
                    $user->phone = $request->input("phoneOrder");
                    $user->address = $request->input("addressOrder");
                    $user->country_id = $request->input("countryOrder");
                    $user->states_id = $request->input("statesOrder");
                    $user->cities_id = $request->input("citiesOrder");
                    $user->cod_postal = $request->input("postalOrder");
                    $user->company = $request->input("companyOrder");
                    $user->save();
                    $address = Address::where('user_id',$user->id)->first();
                    if($address->name == ''){
                        $address = new Address();
                        $address->user_id = $user->id;
                        $address->name = $request->input("nameAddressOrder");
                        $address->description = $request->input("descriptionOrder");
                        $address->address = $user->address;
                        $address->city = $user->cities_id;
                        $address->state = $user->states_id;
                        $address->phone = $user->phone;
                        $address->save();
                    }else{
                        $address->name = $request->input("nameAddressOrder");
                        $address->description = $request->input("descriptionOrder");
                        $address->address = $user->address;
                        $address->city = $user->cities_id;
                        $address->state = $user->states_id;
                        $address->phone = $user->phone;
                        $address->save();
                    }
                }

                session(['id' => $user->id]);
                session(['name' => $user->visible_name]);
                session(['country_order' => $user->country_id]);
                session(['state_order' => $user->states_id]);
                session(['city_order' => $user->cities_id]);
                session(['postal_order' => $user->cod_postal]);

                $subtotal = 0;
                $dolar = $request->input("dolar");
                $type_price =  $request->input("price_type");
                $payMod = 'COP';
                if($type_price == 2){
                    $payMod = 'USD';
                }

                session_start();
                if(session()->has('car')){
                    for($i=1;$i<=session()->get('car');$i++){
                        if($_SESSION['id_product'][$i] <> ""){
                            $producto = Product::find($_SESSION['id_product'][$i]);

                            if($producto->cant <= 0){
                                return $producto->name. ' Se encuentra agotado';
                            }

                            if($producto->cant <= $_SESSION['cant'][$i]){
                                return 'No tenemos la cantidad solicitada para '.$producto->name;
                            }

                            $precio = str_replace(".", "", $producto->price);
                            if($producto->descount > 0){
                                $suma = $precio - ($precio * $producto->descount / 100);
                            }else{
                                $suma = $precio;
                            }

                            if($type_price == 2){
                                $suma = intval($suma * $dolar);
                            }

                            $precioTotal = $suma * $_SESSION['cant'][$i];
                            $subtotal = $subtotal + $precioTotal;
                        }
                    }
                }

                $address = Address::where('user_id',session()->get('id'))->first();
                $total = $subtotal ;

                setlocale(LC_ALL,"es_ES");
                $date = date("Y-m-d");

                $id = DB::table('order')->insertGetId(
                    [
                        'user_id' => session()->get('id'),
                        'subtotal' => $subtotal,
                        'shipping' => 0,
                        'total' => $total,
                        'date' => $date,
                        'address_id' => $address->id,
                        'city'=>$address->city,
                        'status' => 3,
                        'validate' => 1,
                        'notes'=>$address->description,
                        'pay_mod' => $payMod,
                    ]
                );

                if($id > 0){
                    //$reference_ped = uniqid("MCA{$id}");
                    $reference_ped = "CM".$id;

                    DB::table('order')
                        ->where('id',$id)
                        ->where('user_id',session()->get('id'))
                        ->update(['reference' => $reference_ped]);

                    if(session()->has('car')){
                        for($i=1;$i<=session()->get('car');$i++){
                            if($_SESSION['id_product'][$i] <> ""){
                                $producto = Product::find($_SESSION['id_product'][$i]);
                                $id_producto = $producto->id;
                                $price = str_replace(".", "", $producto->price);
                                $descuento = $producto->descount;
                                if($descuento > 0){
                                    $total = $price - ($price * $descuento / 100);
                                }else{
                                    $total = $price;
                                }

                                if($type_price == 2){
                                    $price = $price * $dolar;
                                    $total = $total * $dolar;
                                }

                                $total = $total * $_SESSION['cant'][$i];
                                $proPur = new ProductPurchase();
                                $proPur->order_id = $id;
                                $proPur->products_id = $id_producto;
                                $proPur->price_pro = $price;
                                $proPur->discount = $descuento;
                                $proPur->cant = $_SESSION['cant'][$i];
                                $proPur->total = $total;
                                $proPur->save();
                                $_SESSION['id_product'][$i] = "";
                                $_SESSION['cant'][$i] = "";
                            }
                        }
                    }

                    session(['id_pedido_payu' => $id]);

                    $titulo ='¡Pago pendiente!';

                    $user = User::find(session()->get('id'));

                    try{
                        \Mail::send('emails.EmailPedido', ['user'=>$user,'id_pedido'=>$id], function ($m) use ($titulo,$user) {
                            $m->from('no-reply@carmona.co', 'Carmona');
                            $m->to($user->email, 'Pago pendiente')->subject($titulo);
                        });
                    } catch(Swift_SwiftException $e) {

                    }
                    return 'complet';
                }
            }
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    function ValidarPagoPayu(Request $request){
        try
        {
            if ($request->isMethod('post')){
                $state = $request->value;
                $id = session()->get('id_pedido_payu');
                DB::table('order')
                    ->where('id',$id)
                    ->update(['status' => $state]);

                if($state == 1){
                    $order = Order::find($id);
                    if( $order->validate == 1 ){
                        $order->validate = 2;
                        $order->save();
                        $productoP = ProductPurchase::where('order_id',$id)->get();
                        foreach ($productoP as $key => $proP){
                            $producto = Product::find($proP->products_id);
                            $producto->cant = $producto->cant - $proP->cant;
                            $producto->save();
                        }

                        $titulo ='¡Pago realizado!';
                        $user = User::find($order->user_id);
                        try{
                            \Mail::send('emails.EmailPedidoReady', ['user'=>$user,'id_pedido'=>$id], function ($m) use ($titulo,$user) {
                                $m->from('no-reply@carmona.co', 'Carmona');
                                $m->to($user->email, 'Pago realizado')->subject($titulo);
                            });
                            $titulo ='¡Nuevo pedido!';
                            \Mail::send('emails.EmailPedidoCarmona', ['user'=>$user,'id_pedido'=>$order->id], function ($m) use ($titulo,$user) {
                                $m->from('no-reply@carmona.co', 'Carmona');
                                $m->to('info@carmonagallery.com', 'Nuevo pedido')->subject($titulo);
                            });
                        } catch(Swift_SwiftException $e) {

                        }
                    }
                }

                return $id;
            }
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    function ConfirmationPayu(Request $request){
        Log::info('Hay ConfirmationPayu');
        $state_pol = $request->state_pol;
        $reference = $request->reference_sale;

        if($state_pol == ""){
            $state_pol = $request['state_pol'];
            $reference = $request['reference_sale'];
        }

        if($state_pol == 4){
            $state = 1;
            $validate = 2;
        }else if($state_pol == 6){
            $state = 2;
            $validate = 1;
        }else if($state_pol == 5){
            $state = 4;
            $validate = 1;
        }else{
            $state = 3;
            $validate = 1;
        }

        $order = Order::where('reference',$reference)->first();
        if($validate == 1){
            $order->status = $state;
            $order->validate = $validate;
            $order->save();
            if ($state == 1) {
                $productoP = ProductPurchase::where('order_id',$order->id)->get();
                foreach ($productoP as $key => $proP){
                    $producto = Product::find($proP->products_id);
                    $producto->cant = $producto->cant - $proP->cant;
                    $producto->save();
                }

                $titulo ='¡Pago realizado!';
                $user = User::find($order->user_id);
                try{
                    \Mail::send('emails.EmailPedidoReady', ['user'=>$user,'id_pedido'=>$order->id], function ($m) use ($titulo,$user) {
                        $m->from('no-reply@carmona.co', 'Carmona');
                        $m->to($user->email, 'Pago realizado')->subject($titulo);
                    });
                    $titulo ='¡Nuevo pedido!';
                    \Mail::send('emails.EmailPedidoCarmona', ['user'=>$user,'id_pedido'=>$order->id], function ($m) use ($titulo,$user) {
                        $m->from('no-reply@carmona.co', 'Carmona');
                        $m->to('info@carmonagallery.com', 'Nuevo pedido')->subject($titulo);
                    });
                } catch(Swift_SwiftException $e) {

                }
            }
        }
    }
}
