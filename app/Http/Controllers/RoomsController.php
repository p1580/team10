<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = room::all();
        return view('rooms.index')->with(['rooms'=>$rooms]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = room::all()->sortBy('id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_id = $request->input('room_id');

        room::create(
            [
                'room_id' => $room_id,
            ]
        );
        return redirect('rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rooms=room::findOrFail($id);
        return view('rooms.show') -> with(['rooms'=>$rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms=room::findOrFail($id);
        return view('rooms.edit') -> with(['rooms'=>$rooms]);
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
        $rooms=room::findOrFail($id);
        return redirect('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms=room::findOrFail($id);
        $rooms->delete();
        return redirect('rooms');
    }
}