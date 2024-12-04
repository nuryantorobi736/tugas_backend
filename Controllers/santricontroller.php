<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class santricontroller extends Controller
{
   public function dataSantri(){
    $mhs1 = 'fawwaz' ; $asal1 = 'Jakarta';
    $mhs2 = 'Inaya ' ; $asal2 = ' Depok';
    $mhs3 = 'Zidan'  ; $asal3 = 'Binjai';
    $mhs4 = 'Bambang'; $asal4 = 'mojokerto';
    $mhs5 = 'Unyil'  ; $asal5 = 'Bandung';

    return view(' data_santri',
           compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5')
        );
   }

}
