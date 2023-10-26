<?php

namespace App\Livewire\Admin\Carros;

use App\Livewire\Forms\Admin\CarrosFormObject;
use App\Models\Car;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CarrosForm extends Component
{

    public CarrosFormObject $form;

    public function salvar() {

        //Vai validar o formulário de acordo com as regras configuradas
        //Se tiver algum erro uma exceção é lançada e esse método para de executar
        //as mensagens de erro são enviadas automaticamente para a view
        $this->validate();

        //usando outra forma de salvar no BD
        //Chamado de Mass Assignment
        Car::create(
            $this->form->all()
        );

        //Vou gravar mensagem na sessão
        //O flash é para que a mensagem seja apagada da sessão logo após ser exibida
        session()->flash('toast', 'Carro salvo com sucesso!');

        //Redireciona para a lista de carros
        $this->redirect('/carros', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.carros.carros-form');
    }
}
