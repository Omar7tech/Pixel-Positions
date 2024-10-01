<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;
use App\Models\Tag;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(!request()->has("search")){
        $positions = Position::with(['employer:id,name' , "tags"])->get();
        $featured_positions = $positions->where('featured', 1);
        $positions = $positions->where('featured', 0);
        $tags = Tag::select('id', 'name')->get();
        }else{
            $positions = Position::where("title" , "LIKE" , "%".request()->get("search")."%")->with(['employer:id,name' , "tags"])->get();
            return view('positions.index', data: compact('positions'));

        }
        return view('positions.index', data: compact('positions', 'tags', 'featured_positions'));
    }


    public function tagged_index(Tag $tag){


        $positions = $tag->positions()->get();
        return view('tags.index', compact('positions' , 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePositionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
{
    return view('positions.show', compact('position'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        //
    }
}
