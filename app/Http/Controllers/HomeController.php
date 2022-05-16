<?php

namespace App\Http\Controllers;

use App\Models\Policlinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\user;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {

        $sliderdata=Policlinic::limit(4)->get();
//        dd($sliderdata);
        $policlinicList=Policlinic::limit(6)->get();
        return view('home.index', [
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

}
