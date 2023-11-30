<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guest.index',['guests' => $guests]);
    }

    public function add()
    {
        return view('guest.add');
    }

    public function create(Request $request)
    {
        // $this->validate($request, Guest::$rules);
        $guest = new Guest;
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return view('reservation.add',['guest_id'=>$guest->id]);
    }
}
