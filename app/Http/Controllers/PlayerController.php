<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function dettaglio($name){

    $arraytennisti=[

['name'=>'Jannik','surname'=>'Sinner' ,'gender'=>'M'],
['name'=>'Lorenzo','surname'=>'Musetti','gender'=>'M'],
['name'=>'Flavio','surname'=>'Cobolli','gender'=>'M'],
['name'=>'Luciano','surname'=>'Darderi','gender'=>'M'],


];
    foreach($arraytennisti as $player){
        if($name==$player['name']){
                    return view('player.dettaglioGiocatore',['player'=>$player]);

        }
    }

    }
}
