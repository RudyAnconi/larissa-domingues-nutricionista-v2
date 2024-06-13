<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exames Laboratoriais') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- foreach -->
                <div class="bg-gray-200 rounded border p-5">
                    <div class="text-gray-900 text-center text-4xl">
                        Nome
                    </div>
                    <div>
                        @foreach (range(0,5) as $item)
                        <div class="bg-white border rounded  my-5 p-5">
                            <div class="flex text-gray-900">
                                <div class="text-2xl font-bold flex-grow">Nome grande para o Marcador {{$item}}</div>
                                <div class="flex justify-center items-center gap-2">
                                    <div>Unidade</div>
                                    <div><input type="text"></div>
                                </div>
                            </div>
                            <div class="my-10">
                                <div class="text-gray-900 text-center text-lg my-5 font-bold">
                                    Valor de Referência
                                </div>
                                <div class="grid grid-cols-4 grid-rows-2 items-center gap-2">
                                    <span class="text-right">Homem</span>
                                    <input type="text">
                                    <input type="text">
                                    <span></span>
                                    <span class="text-right">Mulher</span>
                                    <input type="text">
                                    <input type="text">
                                    <span></span>
                                </div>
                            </div>
                            <div>
                                <div class="text-gray-900 text-center text-lg  font-bold my-5">
                                    Valor Ideal
                                </div>
                                <div class="grid grid-cols-6 grid-rows-4 items-center gap-2 text-center">
                                    <div></div>
                                    <div>Baixo risco</div>
                                    <div>Leve</div>
                                    <div>Moderado</div>
                                    <div>Alto</div>
                                    <div>Muito Alto</div>
                                  

                                    <div>Homem</div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>

                                    <div>Mulher</div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                               

                                    <div>Observação</div>
                                    <div class="col-span-5">
                                        <input class="w-full" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
