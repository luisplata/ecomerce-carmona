<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\DomicileCost;
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

class AccountController extends Controller
{
    public function accountChange(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $user = User::find(session()->get('id'));
                $user->name = $request->input("nameAccount");
                $user->lastname = $request->input("lastnameAccount");
                $user->visible_name = $request->input("visibleNameAccount");
                $user->email = $request->input("emailAccount");
                $user->phone = $request->input("phoneAccount");
                $user->address = $request->input("addressAccount");
                $user->country_id = $request->input("countryAccount");
                $user->states_id = $request->input("statesAccount");
                $user->cities_id = $request->input("citiesAccount");
                $user->cod_postal = $request->input("postalAccount");
                $user->company = $request->input("companyAccount");
                $user->save();
                $address = Address::where('user_id',$user->id)->first();
                if($address->name != ''){
                    $address->name = $request->input("nameAddressAccount");
                    $address->address = $user->address;
                    $address->city = $user->cities_id;
                    $address->state = $user->states_id;
                    $address->phone = $user->phone;
                    $address->save();
                }else{
                    $address = new Address();
                    $address->user_id = $user->id;
                    $address->name = $request->input("nameAddressAccount");
                    $address->address = $user->address;
                    $address->city = $user->cities_id;
                    $address->state = $user->states_id;
                    $address->phone = $user->phone;
                    $address->save();
                }

                session(['id' => $user->id]);
                session(['name' => $user->visible_name]);
                session(['country_order' => $user->country_id]);
                session(['state_order' => $user->states_id]);
                session(['city_order' => $user->cities_id]);
                session(['postal_order' => $user->cod_postal]);

                return 'complet';
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function passwordChange(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $user = User::find(session()->get('id'));
                if($user->password != $request->input("passwordChange")){
                    return 'La contraseña actual no coincide';
                }
                if($request->input("newPasswordChange") != $request->input("new2PasswordChange")){
                    return 'Los campos de contraseña nueva deben coincidir';
                }
                $cont = strlen($request->input("newPasswordChange"));
                if($cont<6){
                    return 'La contraseña nueva debe ser mayor a 5 caracteres';
                }
                $user->password = $request->input("newPasswordChange");
                $user->save();
                return 'complet';
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }


}
