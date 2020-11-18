<?php session_start(); ?>

<x-app-layout>
<div class="flex flex-col sm:justify-center items-center mb-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Unidades') }}
        </h2>
    </x-slot>

    <div class="greetings sm:justify-center items-center">
        <h3>Bem vindo ao FIFO</h3>
        <p>Selecione a unidade que você está</p>
    </div>

    <div class="grid sm:grid-cols-1 md:grid-cols-2 sm:justify-center items-center mb-4">
        <a class="option max-w-sm md:w-1/2 rounded overflow-hidden shadow-lg bg-gray-200 tracking-widest
                    bg-gray-500 hover:bg-gray-600 text-white font-bold border-none rounded" href="/unidade/santos">Santos</a>
        
        <a class="option max-w-sm md:w-1/2  rounded overflow-hidden shadow-lg bg-gray-200 tracking-widest
                bg-gray-500 hover:bg-gray-600 text-white font-bold border-none rounded" href="/unidade/saopaulo">São Paulo</a>
    </div>
    
</div>
  

</x-app-layout>
