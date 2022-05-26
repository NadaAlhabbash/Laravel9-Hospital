<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Policlinic;
use App\Models\Setting;
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

    public function policlinic($id)
    {
        $images=DB::table('images')->where('policlinic_id', $id)->get();
        $data=Policlinic::find($id);
        return view('home.policlinic', [
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function categorypoliclinic($id)
    {
        echo"Category Policlinic";
        exit();
        $category=Policlinic::find($id);
        $policlinic=DB::table('policlinic')->where('category_id', $id)->get();
        return view('home.categorypoliclinic', [
            'category'=>$category,
            'policlinic'=>$policlinic
        ]);
    }

}
