<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;
    //step 3 membuat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Genre = new genreModel();
    }

    
    public function all(){
        $data['semuagenre'] = $this -> Genre -> getAllData(); 
        return view("film/semuagenre", $data);
        
    }


    }
    
