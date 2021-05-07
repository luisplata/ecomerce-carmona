<?php
namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Artist;
use App\Models\Banners;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Country;
use App\Models\Info;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductPurchase;
use App\Models\Questions;
use App\Models\State;
use App\Models\Users;
use App\Models\WebInfo;
use App\Models\Wishes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
    public function home()
    {
        $info = Info::find(1);
        $banner = Banners::where('status','activo')->get();
        $webInfo = WebInfo::all();
        $category = Category::where('status','activo')
            ->orderBy(DB::raw('RAND()'))
            ->take(6)
            ->get();
        $obras = Product::where('status','activo')
            ->orderBy('id','desc')
            ->take(6)
            ->get();
        $artist = Artist::where('status','activo')
            ->where('featured','si')
            ->orderBy(DB::raw('RAND()'))
            ->take(6)
            ->get();
        return view('index',[
            'info'=>$info,
            'banner'=>$banner,
            'webInfo'=>$webInfo,
            'category'=>$category,
            'obras'=>$obras,
            'artist'=>$artist
        ]);
    }

    public function terms()
    {
        $info = Info::find(1);
        $webInfo = WebInfo::all();
        return view('terms',[
            'info'=>$info,
            'webInfo'=>$webInfo,
        ]);
    }

    public function privacy()
    {
        $info = Info::find(1);
        $webInfo = WebInfo::all();
        return view('privacy',[
            'info'=>$info,
            'webInfo'=>$webInfo,
        ]);
    }


    public function galery()
    {
        $info = Info::find(1);
        $products = Product::where('status','activo')->get();
        $category = Category::where('status','activo')->get();
        $colors = Color::all();
        return view('galery',[
            'info'=>$info,
            'products'=>$products,
            'category'=>$category,
            'colors'=>$colors
        ]);
    }

    public function artist()
    {
        $info = Info::find(1);
        $artist = Artist::where('status','activo')->get();
        $category = Category::where('status','activo')->get();
        return view('artist',[
            'info'=>$info,
            'artist'=>$artist,
            'category'=>$category,
        ]);
    }

    public function category($id)
    {
        $info = Info::find(1);
        $category = Category::find($id);
        if($category->name == ''){
            return redirect('/');
        }else{
            $products = Product::where('status','activo')
                ->where('category_id',$id)
                ->get();
            $colors = Color::all();
            return view('category',[
                'info'=>$info,
                'products'=>$products,
                'category'=>$category,
                'colors'=>$colors
            ]);
        }
    }

    public function artistId($id)
    {
        $info = Info::find(1);
        $artist = Artist::find($id);
        if($artist->name == ''){
            return redirect('/');
        }else{
            $products = Product::where('status','activo')
                ->where('artist_id',$id)
                ->get();
            return view('artistId',[
                'info'=>$info,
                'artist'=>$artist,
                'products'=>$products
            ]);
        }
    }

    public function product($id)
    {
        $info = Info::find(1);
        $product = Product::find($id);
        if($product->name == ''){
            return redirect('/galery');
        }else{
            $related = Product::where('status','activo')
                ->where('category_id',$product->category_id)
                ->where('id','<>',$product->id)
                ->orderBy(DB::raw('RAND()'))
                ->take(10)
                ->get();
            return view('product',[
                'info'=>$info,
                'product'=>$product,
                'related'=>$related
            ]);
        }
    }

    public function about()
    {
        $info = Info::find(1);
        $webInfo = WebInfo::all();
        return view('about',[
            'info'=>$info,
            'webInfo'=>$webInfo
        ]);
    }

    public function contact()
    {
        $info = Info::find(1);
        return view('contact',[
            'info'=>$info,
        ]);
    }

    public function howbuy()
    {
        $info = Info::find(1);
        $questions = Questions::where('status','activo')
            ->get();
        return view('howbuy',[
            'info'=>$info,
            'questions'=>$questions
        ]);
    }

    public function account()
    {
        if(session()->has('id')){
            $info = Info::find(1);
            $user = Users::find(session()->get('id'));
            $address = Address::where('user_id',session()->get('id'))->first();
            $country = Country::all();
            $states = State::where('CodPais',$user->country_id)->get();
            $cities = City::where('CodDistrito',$user->states_id)->get();
            return view('account',[
                'info'=>$info,
                'user'=>$user,
                'country'=>$country,
                'states'=>$states,
                'cities'=>$cities,
                'address'=>$address
            ]);
        }else{
            return redirect('/');
        }
    }

    public function historial()
    {
        $info = Info::find(1);
        if(session()->has('id')){
            $order = Order::where('user_id',session()->get('id'))
                ->where('status',1)
                ->get();
            return view('historial',[
                'info'=>$info,
                'order'=>$order
            ]);
        }else{
            return redirect('/');
        }
    }

    public function wishlist()
    {
        $info = Info::find(1);
        if(session()->has('id')){
            $wishes = Wishes::where('users_id',session()->get('id'))->get();
            return view('wishlist',[
                'info'=>$info,
                'wishes'=>$wishes
            ]);
        }else{
            return redirect('/');
        }
    }

    public function sell()
    {
        $info = Info::find(1);
        $webInfo = WebInfo::all();
        return view('sell',[
            'info'=>$info,
            'webInfo'=>$webInfo
        ]);
    }

    public function shop()
    {
        $info = Info::find(1);
        return view('shop',[
            'info'=>$info,
        ]);
    }

    public function order()
    {
        $info = Info::find(1);
        session_start();
        $contador = 0;
        for($i=1;$i<=session()->get('car');$i++){
            if($_SESSION['id_product'][$i] <> ""){
                $contador =  $contador + 1;
            }
        }
        if($contador == 0){
            return redirect('/shop');
        }else{
            $city = City::find(session()->get('city_order'));
            $country = Country::all();
            $states = State::where('CodPais',session()->get('country_order'))->get();
            $cities = City::where('CodDistrito',session()->get('state_order'))->get();
            return view('order',[
                'info'=>$info,
                'city'=>$city,
                'country'=>$country,
                'states'=>$states,
                'cities'=>$cities,
            ]);
        }
    }

    //order_payu
    public function Payu()
    {
        $info = Info::find(1);
        $order = Order::find(session()->get('id_pedido_payu'));
        $user = User::find($order->user_id);
        return view('payu',[
            'info' => $info,
            'order' => $order,
            'user' => $user,
        ]);
    }

    public function ResponsePayu()
    {
        $info = Info::find(1);
        return view('responsePayu',[
            'info' => $info,
        ]);
    }

}
