<x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="py-6 mt-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-zinc-500 bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("Upcoming events") }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-zinc-500 bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("How to get") }}
                            <iframe class=" w-full mt-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15901.780604665653!2d-75.6189274!3d4.8648315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3883d048094ad9%3A0x1b7fd67b11809482!2sCampoalegre%20bailador!5e0!3m2!1ses-419!2sco!4v1700716567740!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
