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
        return view('rooms.create')->with(['rooms'=>$rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rooms_id = $request->input('room_id');

        room::create(
            [
                'room_id' => $rooms_id,
                'room_type' => $room_type,
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

    public function api_rooms()
    {
        return room::all();
    }

    public function api_update(Request $request)
    {
        $rooms = room::find($request->input('id'));
        if ($rooms == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $rooms->name = $request->input('room_id');
        if ($rooms->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $rooms = room::find($request->input('id'));

        if ($rooms == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($rooms->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}