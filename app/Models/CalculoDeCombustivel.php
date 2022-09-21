<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;
    public function calcular(){

        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];
        $combustivel = $_GET['combustivel'];

        if($combustivel == "Gasolina"){
            $precocombustivel = 7.25;
        } elseif ($combustivel == "Etanol") {
            $precocombustivel = 6.99;
        } elseif ($combustivel == "Diesel") {
            $precocombustivel = 7.42;
        }

        $consumoGasolina = ($distancia / $autonomia ) * $precocombustivel;

        return $consumoGasolina;
    }
    public function combustivel() {
        $combustivel = $_GET['combustivel'];
        return $combustivel;
    }
}

