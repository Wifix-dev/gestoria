@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

<!-- Importación de Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<div class="w-full" style="">
    <div class=" w-full relative overflow-hidden" id="default-carousel">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative h-full m-0 p-0">
                <div
                    class="absolute w-full h-full  bg-[url('public/page_web/volunteer-6772196_1920.jpg')] bg-cover bg-center z-0">
                </div>
                <div class="flex h-full w-full relative justify-center bg-gray-900 bg-opacity-70  items-center z-10">
                    <div class="text-center max-w-6xl h-full mx-10 py-36">
                        <p class="my-3 text-sm tracking-widest text-blue-500 uppercase">Central Noticias Tamaulipas</p>
                        <h1
                            class="my-3 text-3xl font-extrabold tracking-tight text-gray-100 md:text-5xl dark:text-gray-100">
                            Gestoria Central
                        </h1>
                        <div>
                            <p
                                class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl dark:text-gray-400">
                                Esta página, gestionada por Central Noticias Tamaulipas, se dedica a atender peticiones
                                y denuncias de la comunidad en diferentes áreas de interés ciudadano.
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row"><a
                                class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-full shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:-tranneutral-y-px "
                                href="">Registrarse
                            </a>
                            <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all bg-gray-700 dark:bg-white dark:text-gray-800 rounded-full shadow-xl sm:w-auto hover:bg-gray-900 hover:text-white hover:-tranneutral-y-px"
                                href="">Crear Peticion
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide relative h-full m-0 p-0">
                <div
                    class="absolute w-full h-full  bg-[url('public/page_web/volunteer-6772196_1920.jpg')] bg-cover bg-center z-0">
                </div>
                <div class="flex h-full w-full relative justify-center bg-blue-900 bg-opacity-50  items-center z-10">
                    <div class="text-center max-w-6xl h-full mx-10 py-36">
                        <p class="my-3 text-sm tracking-widest text-blue-500 uppercase">Central Noticias Tamaulipas</p>
                        <h1
                            class="my-3 text-3xl font-extrabold tracking-tight text-gray-100 md:text-5xl dark:text-gray-100">
                            Gestoria Central
                        </h1>
                        <div>
                            <p
                                class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl dark:text-gray-400">
                                Esta página, gestionada por Central Noticias Tamaulipas, se dedica a atender peticiones
                                y denuncias de la comunidad en diferentes áreas de interés ciudadano.
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row"><a
                                class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b dark:shadow-blue-900 shadow-blue-200 hover:shadow-2xl hover:shadow-blue-400 hover:-tranneutral-y-px "
                                href="">Browse All Examples
                            </a>
                            <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all bg-gray-700 dark:bg-white dark:text-gray-800 rounded-md shadow-xl sm:w-auto hover:bg-gray-900 hover:text-white shadow-neutral-300 dark:shadow-neutral-700 hover:shadow-2xl hover:shadow-neutral-400 hover:-tranneutral-y-px"
                                href="">Seach Examples
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative h-full m-0 p-0">
                <div
                    class="absolute w-full h-full  bg-[url('public/page_web/volunteer-6772196_1920.jpg')] bg-cover bg-center z-0">
                </div>
                <div class="flex h-full w-full relative justify-center bg-blue-900 bg-opacity-50  items-center z-10">
                    <div class="text-center max-w-6xl h-full mx-10 py-36">
                        <p class="my-3 text-sm tracking-widest text-blue-500 uppercase">Central Noticias Tamaulipas</p>
                        <h1
                            class="my-3 text-3xl font-extrabold tracking-tight text-gray-100 md:text-5xl dark:text-gray-100">
                            Gestoria Central
                        </h1>
                        <div>
                            <p
                                class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl dark:text-gray-400">
                                Esta página, gestionada por Central Noticias Tamaulipas, se dedica a atender peticiones
                                y denuncias de la comunidad en diferentes áreas de interés ciudadano.
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row"><a
                                class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b dark:shadow-blue-900 shadow-blue-200 hover:shadow-2xl hover:shadow-blue-400 hover:-tranneutral-y-px "
                                href="">Browse All Examples
                            </a>
                            <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all bg-gray-700 dark:bg-white dark:text-gray-800 rounded-md shadow-xl sm:w-auto hover:bg-gray-900 hover:text-white shadow-neutral-300 dark:shadow-neutral-700 hover:shadow-2xl hover:shadow-neutral-400 hover:-tranneutral-y-px"
                                href="">Seach Examples
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative h-full m-0 p-0">
                <div
                    class="absolute w-full h-full  bg-[url('public/page_web/volunteer-6772196_1920.jpg')] bg-cover bg-center z-0">
                </div>
                <div class="flex h-full w-full relative justify-center bg-blue-900 bg-opacity-50  items-center z-10">
                    <div class="text-center max-w-6xl h-full mx-10 py-36">
                        <p class="my-3 text-sm tracking-widest text-blue-500 uppercase">Central Noticias Tamaulipas</p>
                        <h1
                            class="my-3 text-3xl font-extrabold tracking-tight text-gray-100 md:text-5xl dark:text-gray-100">
                            Gestoria Central
                        </h1>
                        <div>
                            <p
                                class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl dark:text-gray-400">
                                Esta página, gestionada por Central Noticias Tamaulipas, se dedica a atender peticiones
                                y denuncias de la comunidad en diferentes áreas de interés ciudadano.
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row"><a
                                class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b dark:shadow-blue-900 shadow-blue-200 hover:shadow-2xl hover:shadow-blue-400 hover:-tranneutral-y-px "
                                href="">Registrarse
                            </a>
                            <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all bg-gray-700 dark:bg-white dark:text-gray-800 rounded-md shadow-xl sm:w-auto hover:bg-gray-900 hover:text-white shadow-neutral-300 dark:shadow-neutral-700 hover:shadow-2xl hover:shadow-neutral-400 hover:-tranneutral-y-px"
                                href="">Crear Peticion
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <!-- Add Navigation -->
        <div class="swiper-button-next bg-gray-500 rounded-full flex items-center p-8 opacity-20 cursor-pointer z-10">
        </div>
        <div class="swiper-button-prev bg-gray-500 rounded-full flex items-center p-8 opacity-20 cursor-pointer z-10">
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<section class="bg-white">
    <div class="max-w-7xl mx-auto p-4 ">
        <div class="container mx-auto  bg-white">
            <div class="my-8 text-center">
                <h4 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Problemas que podemos dar</h4>
                <p class="mt-2 text-5xl lg:text-7xl font-bold tracking-tight text-gray-900">Solucion

                </p>
            </div>
            <div class="flex flex-wrap my-12">
                <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-7">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-indigo-500">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Servicios Públicos</div>
                    </div>
                    <p class="leading-relaxed text-gray-500">Mantén nuestras calles seguras y bien iluminadas. Reporta problemas con el alumbrado público en tu área y sigue el progreso de las reparaciones, Falta de recolección regular de basura o acumulación de
                    desechos.
                    </p>
                </div>
                <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-7">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-indigo-500">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Animales Perdidos</div>
                    </div>
                    <p class="leading-relaxed text-gray-500">
                    ¿Has perdido a tu mascota? Nuestra sección dedicada te conecta con recursos y comunidades que pueden ayudarte a reunir a las mascotas perdidas con sus dueños. Publica un anuncio y busca entre los reportes recientes.
                    </p>
                </div>
                <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-7">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-indigo-500">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Donaciones de Sangre</div>
                    </div>
                    <p class="leading-relaxed text-gray-500">Salva vidas con solo un gesto. Encuentra información sobre bancos de sangre locales y cómo puedes hacer una diferencia al donar sangre. Publica una solicitud de donación o encuentra dónde donar cerca de ti.
                    </p>
                </div>
                <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-7">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-indigo-500">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Personas Desaparecidas</div>
                    </div>
                    <p class="leading-relaxed text-gray-500">
                    Cada segundo cuenta cuando una persona está desaparecida. Accede a recursos y protocolos de acción inmediata para reportar personas desaparecidas, y únete a nuestra comunidad para ayudar en la búsqueda.
                    </p>
                </div>
                <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-7">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-indigo-500">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Transparencia y Gobierno Abierto</div>
                    </div>
                    <p class="leading-relaxed text-gray-500">
                        Fomentar la participación ciudadana en los procesos de toma de decisiones públicas y mejorar el
                        acceso a datos y documentos gubernamentales. </p>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 p-8">
                    <div class="flex items-center justify-center mb-6">
                    <p class="leading-relaxed text-gray-500">
                    Desde ruido excesivo hasta problemas de seguridad, <span class="text-blue-500 font-bold">Central Noticias Tamaulipas</span> está aquí para ayudarte a encontrar soluciones efectivas. Reporta cualquier otro problema que afecte a tu vecindario y colabora con nosotros para mejorarlo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- component -->
<div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full bg-whit border-gray-200 px-5 py-12 md:py-16 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.</h1>
                <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
            </div>
            <div class="-mx-3 md:flex items-start">
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=1" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=2" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Dolore quod necessitatibus, labore sapiente, est, dignissimos ullam error ipsam sint quam tempora vel.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=3" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=4" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore voluptatum nostrum atque, corrupti, vitae esse id accusamus dignissimos neque reprehenderit natus, hic sequi itaque dicta nisi voluptatem! Culpa, iusto.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=5" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatem porro obcaecati dicta, quibusdam sunt ipsum, laboriosam nostrum facere exercitationem pariatur deserunt tempora molestiae assumenda nesciunt alias eius? Illo, autem!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                <img src="https://i.pravatar.cc/100?img=6" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, explicabo, cupiditate quas totam!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('#default-carousel', {
        effect: 'fade', // Cambia el efecto de transición
        fadeEffect: {
            crossFade: true
        },
        slidesPerView: 1,
        spaceBetween: 0, // Espacio entre slides
        autoplay: {
            delay: 30000,
            disableOnInteraction: false
        },
        speed: 700,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
});
</script>
<style>
.swiper-slide {
    transition: opacity 0.7s ease-in-out;
}

.swiper-button-next,
.swiper-button-prev {
    color: RGBA(255, 255, 255, .5);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 24px;
}

.swiper-pagination-bullet {
    background: #fff;
}
</style>


@endsection
