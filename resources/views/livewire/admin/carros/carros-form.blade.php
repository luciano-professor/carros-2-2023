<div>
    <h1 class="text-2xl text-amber-500 font-medium">Carros - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Placa --}}
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input wire:model="placa" type="text" />
        </label>

        {{-- Marca --}}
        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input wire:model="marca" type="text" />
        </label>

        {{-- Modelo --}}
        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input wire:model="modelo" type="text" />
        </label>

        {{-- Ano --}}
        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input wire:model="ano" type="number" />
        </label>

        {{-- Cor --}}
        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input wire:model="cor" type="text" />
        </label>

        {{-- Chassi --}}
        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input wire:model="chassi" type="text" />
        </label>

        {{-- Diária --}}
        <label>
            <span class="text-gray-700">Diária</span>
            <x-admin.input wire:model="diaria" type="number" step="any" min="0" />
        </label>

        {{-- Descricao --}}
        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.textarea wire:model="descricao" />
        </label>

        {{-- Botao Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>

    </form>
</div>
