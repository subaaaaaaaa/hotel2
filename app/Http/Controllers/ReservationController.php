<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation::all();
        return view('reservation.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('reservation.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Reservation::$rules);
        $reservation = new Reservation();
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();
        return redirect('/guest/reserve');
    }
}
