<?php

namespace App\Http\Controllers;

use App\Models\Policlinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\user;



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

}
