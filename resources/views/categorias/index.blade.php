<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    <div class=" flex justify-evenly m-10 pl-44 pr-44 flex-wrap">
        <a href="#personalModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://osojimix.com/wp-content/uploads/2021/04/hamburguesa-500x500.jpg)] bg-cover relative transition-transform duration-300"> <h1>Personal</h1></div></a>
        <a href="#picarModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://simonparrilla.com.co/wp-content/uploads/2022/06/SIMON-PARRILLA-PARA-COMENZAR-Y-COMPARTIR-PICADA-COLOMBIANA-X4.webp)] bg-cover relative transition-transform duration-300"> <h1>Para Picar</h1></div></a>
        <a href="#postresModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://i.pinimg.com/originals/88/0f/4c/880f4c4d6dbd78e9cfbe01db361f6b6d.jpg)] bg-cover relative transition-transform duration-300"> <h1>Postres</h1></div></a>
        <a href="#calientesModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://www.comedera.com/wp-content/uploads/2022/09/Mocaccino-shutterstock_2086443826.jpg)] bg-cover relative transition-transform duration-300"> <h1>Bebidas Calientes</h1></div></a>
        <a href="#friasModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://badun.nestle.es/imgserver/v1/80/1290x742/82c0d9edbe53-frapuccino-de-chocolate.jpg)] bg-cover relative transition-transform duration-300"> <h1>Bebidas Frias</h1></div></a>
        <a href="#cervezasModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://eldiariony.com/wp-content/uploads/sites/2/2023/08/Cervezas-shutterstock_284297423.jpg?w=2600)] bg-cover relative transition-transform duration-300"> <h1>Cervezas</h1></div></a>
        <a href="#coctelesModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://ik.imagekit.io/bhug69xts/tr:h-1200,w-1200/caipirinha.png)] bg-cover relative transition-transform duration-300"> <h1>Cocteles</h1></div></a>
        <a href="#licoresModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://sonymelona.com/wp-content/uploads/2022/04/RON-VIEJO-CALDAS.png)] bg-cover relative transition-transform duration-300"> <h1>Licores</h1></div></a>
        <a href="#vinosModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://hips.hearstapps.com/hmg-prod/images/los-20-mejores-tintos-del-m-1623767757.jpg?crop=0.564xw:1.00xh;0.436xw,0&resize=1200:*)] bg-cover relative transition-transform duration-300"> <h1>Vinos</h1></div></a>
        <a href="#tragosModal"><div class=" hover:scale-125 border p-20 m-2 rounded-2xl text-white bg-[url(https://i0.wp.com/shakeadito.com/wp-content/uploads/2021/09/Shots-Vintage_PORTADA-NOTA-scaled.jpg?fit=2560%2C1736&ssl=1)] bg-cover relative transition-transform duration-300"> <h1>Tragos</h1></div></a>
    </div>
</x-app-layout>
