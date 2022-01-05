<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\room;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = reservation::all();
        $reservations = reservation::all()->sortByDesc('cid');
        return view('reservations.index')->with(['reservations'=>$reservations]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = room::all()->sortBy('id');
        return view('reservations.create')->with(['rooms'=>$rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->input('date');
        $card_id = $request->input('card_id');
        $cid = $request->input('cid');
        $start_at = $request->input('start_at');
        $end_of = $request->input('end_of');
        $memo = $request->input('memo');

        Reservation::create(
            [
                'date' => $date,
                'card_id' => $card_id,
                'cid' => $cid,
                'start_at' => $start_at,
                'end_of' => $end_of,
                'memo' => $memo,
            ]
        );
        return redirect('reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservations=reservation::findOrFail($id);
        return view('reservations.show') -> with(['reservations'=>$reservations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservations=reservation::findOrFail($id);
        return view('reservations.edit') -> with(['reservations'=>$reservations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservations=reservation::findOrFail($id);
        $reservations->date = $request->input('date');
        $reservations->cid = $request->input('cid');
        $reservations->start_at = $request->input('start_at');
        $reservations->end_of = $request->input('end_of');
        $reservations->memo = $request->input('memo');
        $reservations->save();

        return redirect('reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations=reservation::findOrFail($id);
        $reservations->delete();
        return redirect('reservations');
    }

    public function cid()
    {
        $reservations = reservation::cid()->get();
        return view('reservations.index', ['reservations' => $reservations]);
    }
}
