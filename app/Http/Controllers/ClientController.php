<?php

namespace App\Http\Controllers;

use App\Client;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
//        return Auth::id();
// // TODO: fix bug handle if user not exist
        $role = Auth::user()->role;

        if ($role == 'client')
            redirect('/');

        $user = Client::findOrFail(Auth::id()); // logged user id;
        $services = $user->services()->paginate(9);

        return view('client.dashboard', compact('services'));
    }

    public function create()
    {
        return view('client.create-service');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
            'time' => 'required',
            'category' => 'required'
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'location' => $request->location,
            'time' => $request->time,
            'category' => $request->category,
            'client_id' => Auth::id()
        ]);

        return redirect('/home');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('/client/service', compact('service'));
    }
}
