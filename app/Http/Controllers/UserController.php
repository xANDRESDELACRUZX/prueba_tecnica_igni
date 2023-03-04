<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $datos['email']    = $request->get('email');
        $datos['password'] = $request->get('password');
        if (!Auth::attempt($datos)) {
            alert()->error('Error', 'Datos equivocados');
            return redirect('/');
        }
        $request->session()->regenerate();
        alert()->success('¡Inicio de sesion con exito!');
        return redirect('/Account');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserve = Reserve::where("user_id", Auth::user()->id)->get();
        $total = Reserve::where("user_id", Auth::user()->id)->count();
        return view("account", compact("reserve","total"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("validation.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user["name"] = $request->get("name");
        $user["password"] = Hash::make($request->get("password"));
        $user["email"] = $request->get("email");
        if (!empty($request->img)) {
            $img = rand(0, 20) . '_' . time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images'), $img);
            $user["img"] = $img;
        }
        $user->save();
         alert()->success('¡Cuenta creada con exito!');
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
