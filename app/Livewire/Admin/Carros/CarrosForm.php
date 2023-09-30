<?php

namespace App\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;

class CarrosForm extends Component
{

    public $placa;
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    public $chassi;
    public $diaria;
    public $descricao;

    public function salvar() {
        //cria o objeto do modelo
        $carro = new Car();

        //copia os dados sincronazidos do formulario para o objeto
        $carro->placa = $this->placa;
        $carro->modelo = $this->modelo;
        $carro->marca = $this->marca;
        $carro->ano = $this->ano;
        $carro->cor = $this->cor;
        $carro->chassi = $this->chassi;
        $carro->diaria = $this->diaria;
        $carro->descricao = $this->descricao;

        //mando salvar no BD
        $carro->save();

        //Redireciona para a lista de carros
        $this->redirect('/carros', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.carros.carros-form');
    }
}
