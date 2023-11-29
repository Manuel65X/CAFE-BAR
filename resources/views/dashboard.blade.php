<x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }} 
                </h2>
            </x-slot>
            <h2 class=" font-bold text-center text-2xl mb-6 mt-10">{{ __("Sobre Nosotros") }}</h2>
            <div class="bg-white max-w-7xl ml-28 mx-20 sm:px-6 lg:px-4 overflow-hidden shadow-sm sm:rounded-lg dark:bg-zinc-500 dark:bg-opacity-25 mb-10">
                <div class="p-6 text-gray-900 dark:text-black font-semibold text-center">
                    <p>
                        ¡Bienvenido a Campo Alegre Bailador! En el corazón de nuestra pasión por el café y el ambiente acogedor, creamos un espacio único donde cada taza cuenta una historia. En nuestro rincón, fusionamos la esencia de las mejores variedades de granos cuidadosamente seleccionados con la calidez de un entorno que invita a la relajación y la conexión. Nuestro equipo dedicado se esfuerza por ofrecer no solo bebidas excepcionales, sino también momentos inolvidables. Ya sea que busques un lugar tranquilo para trabajar, compartir risas con amigos o simplemente disfrutar de un momento de paz, nuestro café bar es el refugio perfecto. En cada sorbo, descubrirás el arte y la pasión que dedicamos a cada detalle, haciendo que tu experiencia sea más que una simple visita; será un viaje sensorial que recordarás con cada aroma y cada sonrisa compartida. ¡Te damos la bienvenida a nuestra familia de amantes del café, donde cada encuentro se convierte en una experiencia única!
                    </p>
                </div>
            </div>
            
            <h2 class=" font-bold text-center text-2xl mb-6">{{ __("How to get") }}</h2>
            <div class="bg-white max-w-7xl ml-28 mx-20 sm:px-6 lg:px-4 overflow-hidden shadow-sm sm:rounded-lg dark:bg-zinc-500 dark:bg-opacity-25 mb-10">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <iframe class="w-full mt-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15901.780604665653!2d-75.6189274!3d4.8648315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3883d048094ad9%3A0x1b7fd67b11809482!2sCampoalegre%20bailador!5e0!3m2!1ses-419!2sco!4v1700716567740!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class=" bg-black">
                <h2 class=" text-center text-white pt-10 pb-10  text-xl">Todos los derechos reservados para Campo Alegre Bailador</h2>
            </div>
</x-app-layout>
