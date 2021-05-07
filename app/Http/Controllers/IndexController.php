<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\Artist;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Product;
use App\Models\State;
use App\Models\Users;
use App\Models\Wishes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Mail;
use Swift_SwiftException;

class IndexController extends Controller
{
    public function Newsletter(Request $request)
    {
        try
        {
            $email = $request->input('emailNews');
            $news = Newsletter::all();
            foreach ($news as $key => $n)
            {
                if($n->mail == $email)
                {
                    return 2;
                }
            }
            $new = new Newsletter();
            $new->mail = $email;
            if ($new->save())
            {
                return 1;
            } else {
                return 0;
            }
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function contactGo(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $name = $request->input('nameContact');
                $lastname = $request->input('lastnameContact');
                $mail = $request->input('mailContact');
                $messague = $request->input('messagueContact');

                $contact = new Contact();
                $contact->name = $name;
                $contact->lastname = $lastname;
                $contact->message = $messague;
                $contact->mail = $mail;

                if ($contact->save()) {
                    try {
                        $titulo = '¡Nuevo contacto!';
                        Mail::send('emails.emailContact', [
                            'name' => $name,
                            'lastname' => $lastname,
                            'mail' => $mail,
                            'messague' => $messague,
                        ],
                            function ($m) use ($titulo) {
                                $m->from('no-reply@carmona.co', 'Carmona');
                                $m->to('info@carmonagallery.com', 'Nuevo contacto')->subject($titulo);
                        });
                        return 1;
                    }catch (\Exception $e){
                        return 1;
                    }
                } else {
                    return 0;
                }
            }else{
                return 0;
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function RegisterUser(Request $request)
    {
        try
        {
            $veri = $request->input("emailRegister");
            $veri_2 = $request->input("typeRegister");

            $email = Users::select('email')
                ->get();

            $num = 0;
            foreach ($email as $key => $row){
                if($row->email == $veri && $row->type == $veri_2){
                    $num = $num + 1 ;
                }
            }

            if($num == 0){
                $user = new Users();
                $user->name = $request->input("nameRegister");
                $user->lastname = $request->input("lastNameRegister");
                $user->visible_name = $request->input("nameRegister");
                $user->email = $request->input("emailRegister");
                $user->password = $request->input("passwordRegister");
                $user->type = $request->input("typeRegister");

                if ($user->save()) {
                    session(['id' => $user->id]);
                    session(['name' => $user->visible_name]);
                    session(['country_order' => 48]);
                    session(['state_order' => 120]);
                    session(['city_order' => 4242]);
                    session(['postal_order' => '']);
                    try{
                        $titulo = '¡Registro exitoso!';
                        \Mail::send('emails.EmailRegistro', ['user'=>$user], function ($m) use ($titulo,$user) {
                            $m->from('no-reply@carmona.co', 'Carmona');
                            $m->to($user->email, 'Registro exitoso')->subject($titulo);
                        });
                    } catch(Swift_SwiftException $e) {
                    }
                    return 1;
                } else {
                    return 0;
                }
            }else{
                return 2;
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function LogOut(Request $request)
    {
        $request->session()->forget('id');
        $request->session()->forget('country_order');
        $request->session()->forget('state_order');
        $request->session()->forget('city_order');
        $request->session()->forget('postal_order');
        return redirect('/');
    }

    public function Login(Request $request)
    {
        try
        {
            if ($request->isMethod('post')){
                $type = $request->input('type');
                $email = $request->input("email");
                $password = $request->input('pass');
                $user = User::where('email', $email)
                    ->get();
                $users = User::where('email', $email)
                    ->where('type',$type)
                    ->count();
                if($users > 0){
                    if($user[0]->password == $password){
                        session(['id' => $user[0]->id]);
                        session(['name' => $user[0]->visible_name]);
                        if($user[0]->type == 2){
                            session(['country_order' => $user[0]->country_id]);
                            session(['state_order' => $user[0]->states_id]);
                            session(['city_order' => $user[0]->cities_id]);
                            session(['postal_order' => $user[0]->cod_postal]);
                        }
                        return "1";
                    }else{
                        return "Usuario o contraseña incorrecta";
                    }
                }else{
                    return "usuario no registrado";
                }
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function ForgetPassword(Request $request){
        try
        {
            $email = $request->data;
            $type = $request->type;
            $users = Users::where('email', $email)
                ->where('type',$type)
                ->count();
            if($users > 0){
                $user =  Users::where('email', $email)->take(1)->get();
                try{
                    $titulo ='¡Recuperacion de contraseña!';
                    Mail::send('emails.EmailForgetPassword', ['user'=>$user], function ($m) use ($titulo,$user) {
                        $m->from('no-reply@carmona.co', 'Carmona');
                        $m->to($user[0]->email, 'Recuperacion de contraseña')->subject($titulo);
                    });
                    return 1;
                } catch(Swift_SwiftException $e) {
                    return 0;
                }
            }else{
                return 2;
            }
            return 0;
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function GetStates(Request $request)
    {
        try
        {
            $data= State::where('CodPais', $request->id)
                ->orderBy("DisNombre")
                ->get();
            return response(json_encode($data), 200)->header('Content-Type', 'text/json');
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function GetCities(Request $request)
    {
        try
        {
            $data= City::where('CodDistrito', $request->id)
                ->orderBy("CiuNombre")
                ->get();
            return response(json_encode($data), 200)->header('Content-Type', 'text/json');
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function AddWishes(Request $request)
    {
        try{
            $id_product = $request->input('id_product');

            $news = Wishes::where('users_id',session()->get('id'))->get();
            foreach ($news as $key => $n)
            {
                if($n->product_id == $id_product)
                {
                    return 'Este producto ya se ha agregado antes a su lista de deseos';
                }
            }

            $wishes = new Wishes();
            $wishes->users_id = session()->get('id');
            $wishes->product_id = $id_product;
            if ($wishes->save())
            {
                return 1;
            } else {
                return 'No se ha podido guardar el producto';
            }
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function DeleteWishes(Request $request)
    {
        try{
            $id_wishes = $request->input('id_wishes');
            $wishes = Wishes::find($id_wishes);
            if ($wishes->delete())
            {
                return 1;
            } else {
                return 'No se ha podido eliminar el producto';
            }
        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function SearchProductsFilter($min,$max,$name,$category,$color,$order)
    {
        if(intval($color) == 0){
            $query = Product::where('id', '>', 0);
            $query->where('price', '>=', intval($min));
            $query->where('price', '<=', intval($max));
            if ($name != '0') {
                $query->where('name', 'LIKE', '%' . $name . '%');
            }
            if (intval($category) != 0) {
                $query->where('category_id', intval($category));
            }
            if($order == '1'){
                $query->orderBy('id','desc');
            }elseif($order == '2'){
                $query->orderBy('name','asc');
            }elseif($order == '3'){
                $query->orderBy('name','desc');
            }elseif($order == '4'){
                $query->orderBy('descount','desc');
            }
            $products = $query->where('status','activo')->get();
        }else{
            $query = Product::join('product_color', 'product.id' ,'=', 'product_color.product_id')
                ->where('product_color.color_id',intval($color));
            $query->where('product.price', '>=', intval($min));
            $query->where('product.price', '<=', intval($max));
            if ($name != '0') {
                $query->where('product.name', 'LIKE', '%' . $name . '%');
            }
            if (intval($category) != 0) {
                $query->where('product.category_id', intval($category));
            }
            if($order == '1'){
                $query->orderBy('product.id','desc');
            }elseif($order == '2'){
                $query->orderBy('product.name','asc');
            }elseif($order == '3'){
                $query->orderBy('product.name','desc');
            }elseif($order == '4'){
                $query->orderBy('product.descount','desc');
            }
            $products = $query->where('product.status','activo')
                ->select('product.*')
                ->get();
        }
        return view('partial.products',[
            'products'=>$products,
        ]);
    }

    public function SearchArtistFilter($name,$category,$order)
    {
        $query = Artist::where('id', '>', 0);
        if ($name != '0') {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }
        if (intval($category) != 0) {
            $query->where('category_id', intval($category));
        }
        if($order == '1'){
            $query->orderBy('id','desc');
        }elseif($order == '2'){
            $query->orderBy('name','asc');
        }elseif($order == '3'){
            $query->orderBy('name','desc');
        }
        $artist = $query->where('status','activo')->get();
        return view('partial.artist',[
            'artist'=>$artist,
        ]);
    }

    public function ChangePrice($id)
    {
        if(session()->has('id')){
            $user = Users::find(session()->get('id'));
            $user->price = $id;
            $user->save();
            session(['id_price' => $id]);
        }else{
            session(['id_price' => $id]);
        }
        return Redirect::back()->with('message','Operation Successful !');
    }


}
