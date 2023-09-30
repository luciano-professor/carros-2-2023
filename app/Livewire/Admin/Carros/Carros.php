<?php

namespace App\Livewire\Admin\Carros;

use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Carros extends Component
{

    //Vai armazenar os carros que serão exibidos em uma tabela na view
    public $carros;

    //Vai armazenar o texto da pesquisa (campo de pesquisa)
    public $pesquisa = '';

    public function filtrarDados()
    {

        if(empty($this->pesquisa))
        {
            $this->carros = Car::all();
        }
        else{

            //Montar a consulta usando o query builder
            $this->carros = Car::where("modelo", "like", "%$this->pesquisa%")
                                ->orWhere("marca", "like", "%$this->pesquisa%")
                                ->orWhere("placa", "like", "%$this->pesquisa%")
                                ->orWhere("cor", "like", "%$this->pesquisa%")
                                ->get(); //no fim da consulta sempre precisa do get

        }
    }

    public function render()
    {

        //Filtrar
        $this->filtrarDados();

        return view('livewire.admin.carros.carros');
    }
}
