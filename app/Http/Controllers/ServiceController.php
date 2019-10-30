<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::paginate(10);

        return view('services.index', compact('services'));
    }

    public function category(Request $request)
    {
        $category= $request->input('categories');
        $price= $request->input('price');
        $location= $request->input('location');
//        return $category;
        $All_service = Service::all();
        $result=Service::where(['category'=>$category,'price'=>$price,'location'=>$location])->get();
        return $result ;
//        return $this->index($result);
//        return view('Service.all_service', compact('All_service','category'));
    }
}
