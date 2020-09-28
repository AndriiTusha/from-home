<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;
use App\Contacts;
use Mail;

class MainController extends Controller
{
    function test() {
        //something here
    }

    public function index ()
    {
    	//$title = 'Home page';
    	//$subtitle = '<em>My first laravel projec</em>';
        //find - метод , который делает выборку из БД по айди
        // $category = Category::find(1);
        // $products = $category->products;
        // dd($products);

        // $product = Product::find(1);
        // dd($product->category->name);

        $categories = Category::with('products')->get();
        $products = Product::with('category')->get();
        $years = Product::all()->pluck('year')->unique()->sortDesc();
        $reviews = Review::latest()->limit(5)->get();
        $latests = Product::with('category')->latest()->paginate(6);
        //Product::where('recommended','=',1)->where('price','>',100)->where('category_id','=',2) -- можно так писать запросы к базе данных. Заканчивать нужно методом get() или first() - если возвращается одно значение
    	return view('main.index-new', compact('categories', 'products','reviews', 'years', 'latests'));
    }

    public function category (string $slug) 
    {
        //return $slug;
        $category = Category::firstWhere('slug',$slug);
        //dd($category);
        $products = Product::where('category_id', $category->id)->SimplePaginate(8);
        //get();
        return view('shop.category',compact('category','products'));
    }

    public function getCategory (string $slug)
    {
        $category = Category::firstWhere('slug',$slug);
        $productsName = Product::where('category_id','=' ,$category->id)->pluck('name')->unique();
        // $productsSlug = Product::where('category_id','=' ,$category->id)->pluck('slug');
        return $productsName;
    }

    public function findYourCar (Request $request) {
        //$request = Product::with('category')->get();
        $mark = $request->mark;
        $model = $request->model;
        $fromYear = $request->fromYear;
        $toYear =  $request->toYear;
       // return $request;
       // return compact('mark', 'model', 'fromYear', 'toYear');


        $categoryId = Category::firstWhere('slug',$mark)->id;
        //return $categoryId;
        $nameOfModel = Category::firstWhere('slug',$mark)->name;
        $choosenCars = Product::where('category_id', '=' , $categoryId);
      
       // return view('main.search', compact('choosenCars'));
        if(!empty($model))
            $choosenCars =  $choosenCars->where('name', '=' , $model);
    
        if(!empty($fromYear))
            $choosenCars =  $choosenCars->where('year', '>=' , $fromYear);

        if(!empty($toYear))
            $choosenCars =  $choosenCars->where('year', '<=' , $toYear);
         
      $choosenCars =  $choosenCars->get();
 
       return view('main.search', compact('choosenCars', 'nameOfModel'));
    }

    public function getProduct () {
        $latestsAdded = Product::with('category')->latest()->limit(3)->get();
        return $latestsAdded;
    }

    public function product (string $slug) 
    {
        $products = Product::firstWhere('slug',$slug);
        $reviews = Review::where('product_id','=',$products->id)->get();
       // $category = Category::all();
        return view('shop.product', compact('products', 'reviews'));
    }

    public function contacts()
    {
    	$title = 'Our staff';
    	$message = 'Some message here...';
    	return view('main.contacts', compact('title', 'message'));
    }

      public function about()
    {
        $title = 'This is a short story about our company';
        return view('main.about', compact('title'));
    }

     public function europe()
    {
        $title = 'This is an europe cars page';
        return view('main.europe', compact('title'));
    }

     public function usa()
    {
        $title = 'This is an usa cars page';
        return view('main.usa', compact('title'));
    }

     public function japan()
    {
        $title = 'This is a japan cars page';
        return view('main.japan', compact('title'));
    }

    public function getReview(Request $request)
    {
        $review = new Review();
        $review->review = $request->comment;
        $review->user_id = $request->user;
        $review->product_id = $request->product;
        $review->save(); //сохраняет данные модели в бд

        return back(); //функция возврата на предыдущ страницу
    }

    public function sendContacts (Request $request)
    {
     $contacts = new Contacts();
     $contacts->name =  $request->yourName ;
     $contacts->company = $request->companyName ;
     $contacts->phone = $request->phoneNumber ;
     $contacts->request = $request->yourRequest ;

     $contacts->save();

     Mail::send('email.info', compact('contacts'), function($m) {
            $m->to('4tai81@gmail.com');
        });
     return redirect('/contacts')->with('success', 'Thanks for your cooperation! We`ll contact you soon.');



    }

    
}
