<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $book = Book::find($id);
        return view("reserve", compact("book"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        Book::find($id)->update([
            "reservationStatus" => "I",
        ]);

        $reserve = new Reserve();
        $reserve["book_id"] = $id;
        $reserve["user_id"] = Auth::user()->id;
        $reserve["reserve"] = $request->get("reserve");
        $reserve->save();
        alert()->success('success', '¡reservasion creada con exito!');
        return redirect("/Account");
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
    public function destroy($id)
    {
        Reserve::find($id)->delete();
        alert()->success('success', '¡reservasion eliminada con exito!');
        return back();
    }
}
