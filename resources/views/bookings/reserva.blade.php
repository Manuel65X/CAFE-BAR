<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>
    <main>
        <div class=" mt-14 bg-white max-w-7xl ml-28 mx-20 sm:px-6 lg:px-4 overflow-hidden shadow-sm sm:rounded-lg dark:bg-black dark:bg-opacity-75 mb-10">
            <div class="p-6 text-gray-900 dark:text-black font-semibold text-center">
                <h2 class=" text-white text-center text-2xl font-semibold mb-5">Haz tu Reserva</h2>
            <form class="flex flex-col" action="">

                    <x-forms.text-input id="primerNombre" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="text"
                                placeholder="Ingrese Primer Nombre"
                                required autocomplete="current-name" />

                    <x-forms.text-input id="segundoNombre" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="text"
                                placeholder="Ingrese Segundo Nombre"/>

                    <x-forms.text-input id="primerApellido" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="text"
                                placeholder="Ingrese Primer Apellido"
                                required autocomplete="current-lastname" />

                    <x-forms.text-input id="segundoApellido" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="text"
                                placeholder="Ingrese Segundo Apellido"
                                required autocomplete="current-secondLastName" />
                    
                    <x-forms.text-input id="nroIdentificacion" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="text"
                                placeholder="Ingrese Nro Identificacion"
                                required autocomplete="current-secondLastName" />

                    <x-forms.text-input id="fechaCita" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="date"
                                required autocomplete="current-secondLastName" />

                    <x-forms.text-input id="email" class="block p-2 mt-1 w-full h-8 mb-5"
                                type="email"
                                placeholder="Ingrese Email"
                                required autocomplete="current-email" />

                    <div>
                        <button class=" bg-custom-color text-white text-xl p-2 rounded-lg w-full mb-5" id="submit" type="button" onclick="message()">Enviar</button>
                        <button class=" bg-red-600 hover:bg-red-800 text-white text-xl p-2 rounded-lg w-full " type="reset" value="reset">Reestablecer</button>
                    </div>
            </form>
            </div>
        </div>
        <script>
            function message() {
            let primerNombre = document.getElementById('primerNombre').value;
            let fechaCita = document.getElementById('fechaCita').value;

            let mensaje = 'Hola ' + primerNombre + '! Usted ha agendado una cita para el día ' + fechaCita;
            alert(mensaje);
        }
        </script>
    </main>
</x-app-layout>