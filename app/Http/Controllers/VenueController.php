<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;


class VenueController extends Controller
{




    public function index()
    {
        $venue = Venue::orderBy('name')->get();
        return view ('venue.index', ['venue'=> $venue]);
    }



    public function create(){
        return view ('venue.create');
    }

    public function subedit(Venue $venue){
        return view ('venue.subedit',[
            'venue' => $venue
        ]);
    }

    public function confirm(Venue $venue){
        return view ('venue.confirm',[
            'venue' => $venue

        ]);

    }

    public function subconfirm(Venue $venue){
        return view ('venue.confirm',[
            'venue' => $venue

        ]);
    }

    public function edit(Venue $venue){

        return view ('venue.edit',[
            'venue' => $venue
        ]);
    }

    public function update(Request $request, $venue){
        $input = $request->all();
        $venue = Venue::find($venue);
        $venue->name=$input['name'];
        $venue->address=$input['address'];
        $venue->capacity=$input['capacity'];
        $venue->price=$input['price'];



        $venue->save();
        return redirect('/');
    }

    public function delete($venue){
        Venue::find($venue)->delete();
        return redirect('/');
    }



    public function store(Request $request){
        $this->validate($request, [

            'name'=> 'required',
            'address'=> 'required',
            'capacity'=> 'required',
            'price'=> 'required',
        ]);

        Venue::create([

            'name' => $request['name'],
            'address' => $request['address'],
            'capacity' => $request['capacity'],
            'price' => $request['price'],
        ]);

        return redirect ('/')->with('info', 'A new venue has beed Added');

    }
}
