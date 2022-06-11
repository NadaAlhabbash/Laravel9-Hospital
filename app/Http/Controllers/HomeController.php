<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Policlinic;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\user;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id',0)->with('children')->get();
    }

    public function index()
    {
        $page='home';
        $sliderdata=Policlinic::limit(4)->get();
//        dd($sliderdata);
        $policlinicList=Policlinic::limit(6)->get();
        $setting=Setting::first();
        return view('home.index', [
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'policlinicList'=>$policlinicList
        ]);
    }
    public function about()
    {

        $setting=Setting::first();
        return view('home.about', [
            'setting'=>$setting
        ]);
    }
    public function reference()
    {

        $setting=Setting::first();
        return view('home.reference', [
            'setting'=>$setting
        ]);
    }
    public function contact()
    {

        $setting=Setting::first();
        return view('home.contact', [
            'setting'=>$setting
        ]);
    }
    public function faq()
    {

        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq', [
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request)
    {
//dd($request);
        $data = new Message();
        $data->name = $request->input( 'name');
        $data->email = $request->input('email');
        $data->phone = $request->input( 'phone');
        $data->subject = $request->input( 'subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route(  'contact')->with('success', 'Your message has been sent, Thank you.');
    }

    public function storecomment(Request $request)
    {
//dd($request);
        $data = new Comment();
        $data->user_id =Auth::id(); //logged in user  id
        $data->policlinic_id = $request->input('policlinic_id');
        $data->subject = $request->input( 'subject');
        $data->comment = $request->input( 'comment');
        $data->rate = $request->input( 'rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route(  'policlinic',['id'=> $request->input('policlinic_id')])->with('info', 'Your comment has been sent, Thank you.');
    }

    public function policlinic($id)
    {
        $images=DB::table('images')->where('policlinic_id', $id)->get();
        $data=Policlinic::find($id);
        $reviews=Comment::where('policlinic_id',$id)->where('status','True')->get();
        return view('home.policlinic', [
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
        ]);
    }
    public function categorypoliclinic($id)
    {

        $category=Category::find($id);
        $policlinic=DB::table('policlinics')->where('category_id', $id)->get();
        return view('home.categorypoliclinic', [
            'category'=>$category,
            'policlinic'=>$policlinic
        ]);
    }

}
