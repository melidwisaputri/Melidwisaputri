<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table        = 'film';
    protected $primarykey   = 'id';
    protected $useAutoIncrement = true;
    protected $allowFields  = [];
    public function getFilm(){

        $data=[
            [
                "nama_film" => "sewu dino",
                "genre" => "horor" ,
                "duration"=>"1 jam 43 menit"
            ],
            [
                "nama_film" => "fast and forius",
                "genre" => "action" ,
                "duration"=>"2 jam 9 menit"
            ],
            [
                "nama_film" => "teletabisb the movie",
                "genre" => "scient fiction" ,
                "duration"=>"1 jam 9 menit"
            ],
            [
                "nama_film" => "ayah mengapa aku berbeda",
                "genre" => "drama" ,
                "duration"=>"9 jam 9 menit"
            ],
            [
                "nama_film" => "annabelle",
                "genre" => "horor" ,
                "duration"=>"2 jam 10 menit"
            ],
            [
                "nama_film" => "coldplay",
                "genre" => "music" ,
                "duration"=>"5 jam 9 menit"
            ]
        ];

        return $data;
    }

    public function getAllData(){
       return $this->FindAll();
    }

    public function getDataByID($id){
        return $this -> find ($id);
    }

    public function  getDataBy($data)
    {
        return $this -> where('nama_film', $data)-> findAll();
    }

    public function  getOrderBy()
        {
            return $this -> where('nama_film', $data)-> findAll();
        }

        public function getLimit(){
            return $this -> limit (5) -> get() -> getResultArray();
        }
    }

