<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center flex-wrap">
                    <div class=" m-3 text-center bg-[url(https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/NCI_Visuals_Food_Hamburger.jpg/640px-NCI_Visuals_Food_Hamburger.jpg)] border border-red-500 rounded-sm p-16">
                        <h1><a class="p-8" href="#personal">Personal</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-20">
                        <h1><a href="#para_picar">Para Picar</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#postres">Postres</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#bebidas_calientes">Bebidas Calientes</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#bebidas_frias">Bebidas Frias</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#cervezas">Cervezas</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#cocteles">Cocteles</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#licores">Licores</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#vinos">Vinos</a></h1>
                    </div>
                    <div class=" m-3 text-center border border-red-500 rounded-sm p-8">
                        <h1><a href="#tragos">Tragos</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
