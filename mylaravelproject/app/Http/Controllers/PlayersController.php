<?php
 
namespace App\Http\Controllers;
 
use App\Player;
use Illuminate\Http\Request;
 
class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
 
        return view('players.index',compact('players'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //dd('1');
         return view('players.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player();
 
        $player->name = request('name');
        $player->sport = request('sport');
        $player->country = request('country');
 
        $player->save();
 
        return redirect('/players');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('players.show',compact('player')); 
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $players = Player::findOrFail($id);
         return view('players.edit',compact('players')); 
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //dd('grttt');
       
        $player = Player::findOrFail($id);
 
        $player->name = request('name');
        $player->sport = request('sport');
        $player->country = request('country');
 
        $player->save();
 
        return redirect('/players');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd('dele');
       Player::findOrFail($id)->delete();
       return redirect('/players');
    }
}