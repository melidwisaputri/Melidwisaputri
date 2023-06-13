<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $Film;
    //step 3 membuat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Film = new FilmModel();
    }

    public function index()
    {
        //step 4
        $data['data_film'] = $this -> film -> getFilm();
        return view("film/index", $data);
    }
    public function all(){
        $data['semuaFilm'] = $this -> Film -> getAllData(); 
        return view("film/semuaFilm", $data);
    }
    
    public function find_byid(){
        dd($this->film -> getDataById(1));
    }

    public function find_bywhere(){
        dd($this->film -> getDataBy('laskar pelangi'));
    }

    public function find_orderby(){
        dd($this->film -> getOrderBy()); 
    }
    public function find_limit(){
        dd($this->film -> getLimit());
    }
    public function find_kolom(){
        dd($this->film -> getFilmAll());
    }

    }
    
