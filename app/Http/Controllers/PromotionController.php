<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = JWTAuth::authenticate();
        $name = $request->get('name');
        $promotions = Promotion::where('user_id', $user->id)->orderBy('id', 'Desc')->name($name)->get();
      
        return $promotions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = JWTAuth::authenticate();
        $promotion = new Promotion();
        $promotion -> name = $request->name;
        $promotion -> user_id = $user->id;
        $saved = $promotion -> save();

        $data=[];
        $data['success'] = $saved;
        $data['promotion'] = $promotion;
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrfail($id);
        return $promotion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = JWTAuth::authenticate();
        $id = $request->id;
        $promotion = Promotion::find($id);
        $promotion->update($request->all());
        $promotions = Promotion::where('user_id', $user->id)->orderBy('id', 'Desc')->get();
        return $promotions;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion= Promotion::findOrFail($id);
        $promotion->delete();
    }
}
