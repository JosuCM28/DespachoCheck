@extends('layouts.appHome')

@section('content')
    <div class="h-30 min-sm:h-[20rem]">
        <header>
            <div class="flex justify-end flex-col lg:flex-row">
                @if (Route::has('login'))
                    <nav class="flex flex-col lg:flex-row justify-end">
                        <p
                            class="rounded-md px-2 lg:px-4 pt-2  lg:py-4 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                            Llámanos sin costo: 226-316-1354
                            <span class="lg:hidden"> <br /> </span>
                            <span class="hidden lg:inline"> </span>
                        </p>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-2 lg:px-4 pb-2 lg:py-4 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>
        <nav class="navbar shadow  top-0 left-0   bg-white py-4 shadow-md navar-trans scrolling" id="navbar"
            style="z-index: 1;">
            <div class="navbar-start lg:mt-0 mt-0 py-0 ">
                <a class="link text-base-content/90 link-neutral pt-2 text-xl no-underline montecarlo-regular  lg:text-3xl"
                    href="#">
                    Despacho Contable BM
                </a>
            </div>
            <div class="navbar-center max-sm:hidden">
                <ul class="menu menu-horizontal gap-2 p-0 text-base rtl:ml-20">
                    <li><a href="#" class="btn btn-text link-animated">Inicio</a></li>
                    <li><a href="#" class="btn btn-text link-animated">Acerca de</a></li>
                    <li><a href="#" class="btn btn-text link-animated">Ubicación</a></li>
                    <li><a href="#" class="btn btn-text link-animated">Contacto</a></li>
                    <li
                        class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end] max-sm:[--placement:bottom]">
                        <button id="dropdown-end" type="button"
                            class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-sm:px-2 btn btn-text link-animated"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Servicios
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu"
                            aria-orientation="vertical" aria-labelledby="nested-dropdown">
                            <li><a class="dropdown-item text-sm  truncate overflow-hidden w-48 "
                                    title="Contabilidad general" href="#"><span
                                        class="text-difuminado hover:text-blue-600"> Contabilidad general</span></a></li>
                            <li><a class="dropdown-item" href="#">Declaraciones fiscales </a></li>
                            <li><a class="dropdown-item" href="#">Nómina y recursos humanos</a></li>
                            <li><a class="dropdown-item text-xs hover:text-blue-600" href="#">Más servicios...</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-end items-center gap-4">
                <div class="dropdown relative inline-flex sm:hidden rtl:[--placement:bottom-end]">
                    <button id="dropdown-default" type="button"
                        class="dropdown-toggle btn btn-text btn-secondary btn-square" aria-haspopup="menu"
                        aria-expanded="false" aria-label="Dropdown">
                        <span class="icon-[tabler--menu-2] dropdown-open:hidden size-5"></span>
                        <span class="icon-[tabler--x] dropdown-open:block hidden size-5"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                        aria-orientation="vertical" aria-labelledby="dropdown-default">
                        <li><a href="#" class="btn btn-text link-animated">Inicio</a></li>
                        <li><a href="#" class="btn btn-text link-animated">Acerca de</a></li>
                        <li><a href="#" class="btn btn-text link-animated">Ubicación</a></li>
                        <li><a href="#" class="btn btn-text link-animated">Contacto</a></li>
                        <li>
                            <a id="dropdown-end" href="#" class="btn btn-text link-animated">
                                Servicios
                            </a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <header id="inicio" class="text-white"
        style="background-size: cover; background-position: center; background-image: url({{ asset('img/fondoo.jpg') }}); background-color: #333333;">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave" style="transform:rotate(180deg); transition: 0.3s"
            viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="#2E4053" offset="0%" />
                    <stop stop-color="#2E4053" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1 z-index: 0;" fill="url(#sw-gradient-0)"
                d="M0,60L30,50C60,40,120,20,180,13.3C240,7,300,13,360,26.7C420,40,480,60,540,80C600,100,660,120,720,136.7C780,153,840,167,900,153.3C960,140,1020,100,1080,83.3C1140,67,1200,73,1260,66.7C1320,60,1380,40,1440,56.7C1500,73,1560,127,1620,150C1680,173,1740,167,1800,150C1860,133,1920,107,1980,90C2040,73,2100,67,2160,80C2220,93,2280,127,2340,126.7C2400,127,2460,93,2520,76.7C2580,60,2640,60,2700,60C2760,60,2820,60,2880,70C2940,80,3000,100,3060,116.7C3120,133,3180,147,3240,143.3C3300,140,3360,120,3420,106.7C3480,93,3540,87,3600,73.3C3660,60,3720,40,3780,30C3840,20,3900,20,3960,43.3C4020,67,4080,113,4140,126.7C4200,140,4260,120,4290,110L4320,100L4320,200L4290,200C4260,200,4200,200,4140,200C4080,200,4020,200,3960,200C3900,200,3840,200,3780,200C3720,200,3660,200,3600,200C3540,200,3480,200,3420,200C3360,200,3300,200,3240,200C3180,200,3120,200,3060,200C3000,200,2940,200,2880,200C2820,200,2760,200,2700,200C2640,200,2580,200,2520,200C2460,200,2400,200,2340,200C2280,200,2220,200,2160,200C2100,200,2040,200,1980,200C1920,200,1860,200,1800,200C1740,200,1680,200,1620,200C1560,200,1500,200,1440,200C1380,200,1320,200,1260,200C1200,200,1140,200,1080,200C1020,200,960,200,900,200C840,200,780,200,720,200C660,200,600,200,540,200C480,200,420,200,360,200C300,200,240,200,180,200C120,200,60,200,30,200L0,200Z" />
        </svg>


        <div class="container mx-auto grid md:grid-cols-2 items-center py-16 px-4 sm:px-6 lg:px-8">

            <div>

                <h1 class="text-4xl font-bold mb-4 leading-tight">
                    Más de 10 años asegurando tu tranquilidad financiera
                </h1>
                <p class="text-lg mb-6">
                    Brindamos soluciones contables y fiscales a más de 70 clientes en Altotonga Veracruz.
                </p>
                <a href="#servicios" class="bg-white text-blue-600 px-6 py-3 rounded-md shadow hover:bg-gray-100">
                    Conoce nuestros servicios
                </a>
            </div>
            <div>
                <div class="card image-full sm:max-w-sm" style="z-index: 0;">
                    <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png"
                            alt="overlay image" /></figure>
                    <div class="card-body">
                        <h2 class="card-title mb-2.5 text-white">Marketing</h2>
                        <p class="text-white">Boost your brand's visibility and engagement through targeted marketing
                            strategies.</p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave" style="transform:rotate(0deg); transition: 0.3s "
            viewBox="0 0 1440 270" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="#8BC34A" offset="0%" />
                    <stop stop-color="#8BC34A" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,0L48,22.5C96,45,192,90,288,130.5C384,171,480,207,576,225C672,243,768,243,864,211.5C960,180,1056,117,1152,99C1248,81,1344,108,1440,126C1536,144,1632,153,1728,130.5C1824,108,1920,54,2016,67.5C2112,81,2208,162,2304,193.5C2400,225,2496,207,2592,166.5C2688,126,2784,63,2880,36C2976,9,3072,18,3168,40.5C3264,63,3360,99,3456,135C3552,171,3648,207,3744,189C3840,171,3936,99,4032,99C4128,99,4224,171,4320,171C4416,171,4512,99,4608,72C4704,45,4800,63,4896,81C4992,99,5088,117,5184,112.5C5280,108,5376,81,5472,81C5568,81,5664,108,5760,103.5C5856,99,5952,63,6048,40.5C6144,18,6240,9,6336,9C6432,9,6528,18,6624,40.5C6720,63,6816,99,6864,117L6912,135L6912,270L6864,270C6816,270,6720,270,6624,270C6528,270,6432,270,6336,270C6240,270,6144,270,6048,270C5952,270,5856,270,5760,270C5664,270,5568,270,5472,270C5376,270,5280,270,5184,270C5088,270,4992,270,4896,270C4800,270,4704,270,4608,270C4512,270,4416,270,4320,270C4224,270,4128,270,4032,270C3936,270,3840,270,3744,270C3648,270,3552,270,3456,270C3360,270,3264,270,3168,270C3072,270,2976,270,2880,270C2784,270,2688,270,2592,270C2496,270,2400,270,2304,270C2208,270,2112,270,2016,270C1920,270,1824,270,1728,270C1632,270,1536,270,1440,270C1344,270,1248,270,1152,270C1056,270,960,270,864,270C768,270,672,270,576,270C480,270,384,270,288,270C192,270,96,270,48,270L0,270Z" />
            <defs>
                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="#2E4053" offset="0%" />
                    <stop stop-color="#2E4053" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                d="M0,243L48,202.5C96,162,192,81,288,40.5C384,0,480,0,576,22.5C672,45,768,90,864,103.5C960,117,1056,99,1152,108C1248,117,1344,153,1440,153C1536,153,1632,117,1728,126C1824,135,1920,189,2016,202.5C2112,216,2208,189,2304,189C2400,189,2496,216,2592,207C2688,198,2784,153,2880,112.5C2976,72,3072,36,3168,40.5C3264,45,3360,90,3456,99C3552,108,3648,81,3744,85.5C3840,90,3936,126,4032,153C4128,180,4224,198,4320,193.5C4416,189,4512,162,4608,135C4704,108,4800,81,4896,67.5C4992,54,5088,54,5184,54C5280,54,5376,54,5472,67.5C5568,81,5664,108,5760,126C5856,144,5952,153,6048,171C6144,189,6240,216,6336,189C6432,162,6528,81,6624,63C6720,45,6816,90,6864,112.5L6912,135L6912,270L6864,270C6816,270,6720,270,6624,270C6528,270,6432,270,6336,270C6240,270,6144,270,6048,270C5952,270,5856,270,5760,270C5664,270,5568,270,5472,270C5376,270,5280,270,5184,270C5088,270,4992,270,4896,270C4800,270,4704,270,4608,270C4512,270,4416,270,4320,270C4224,270,4128,270,4032,270C3936,270,3840,270,3744,270C3648,270,3552,270,3456,270C3360,270,3264,270,3168,270C3072,270,2976,270,2880,270C2784,270,2688,270,2592,270C2496,270,2400,270,2304,270C2208,270,2112,270,2016,270C1920,270,1824,270,1728,270C1632,270,1536,270,1440,270C1344,270,1248,270,1152,270C1056,270,960,270,864,270C768,270,672,270,576,270C480,270,384,270,288,270C192,270,96,270,48,270L0,270Z" />
            <defs>
                <linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="#2E4053" offset="0%" />
                    <stop stop-color="#2E4053" offset="100%" />
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)"
                d="M0,162L48,157.5C96,153,192,144,288,144C384,144,480,153,576,144C672,135,768,108,864,81C960,54,1056,27,1152,36C1248,45,1344,90,1440,94.5C1536,99,1632,63,1728,45C1824,27,1920,27,2016,49.5C2112,72,2208,117,2304,117C2400,117,2496,72,2592,76.5C2688,81,2784,135,2880,171C2976,207,3072,225,3168,234C3264,243,3360,243,3456,220.5C3552,198,3648,153,3744,139.5C3840,126,3936,144,4032,144C4128,144,4224,126,4320,103.5C4416,81,4512,54,4608,36C4704,18,4800,9,4896,27C4992,45,5088,90,5184,121.5C5280,153,5376,171,5472,189C5568,207,5664,225,5760,202.5C5856,180,5952,117,6048,90C6144,63,6240,72,6336,90C6432,108,6528,135,6624,126C6720,117,6816,72,6864,49.5L6912,27L6912,270L6864,270C6816,270,6720,270,6624,270C6528,270,6432,270,6336,270C6240,270,6144,270,6048,270C5952,270,5856,270,5760,270C5664,270,5568,270,5472,270C5376,270,5280,270,5184,270C5088,270,4992,270,4896,270C4800,270,4704,270,4608,270C4512,270,4416,270,4320,270C4224,270,4128,270,4032,270C3936,270,3840,270,3744,270C3648,270,3552,270,3456,270C3360,270,3264,270,3168,270C3072,270,2976,270,2880,270C2784,270,2688,270,2592,270C2496,270,2400,270,2304,270C2208,270,2112,270,2016,270C1920,270,1824,270,1728,270C1632,270,1536,270,1440,270C1344,270,1248,270,1152,270C1056,270,960,270,864,270C768,270,672,270,576,270C480,270,384,270,288,270C192,270,96,270,48,270L0,270Z" />
        </svg>
    </header>

    <!-- Nosotros Section -->
    <section id="nosotros" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-rows-1 items-center gap-8">
            <div class="card-group max-w-sm sm:max-w-full">
                <div class="card">
                    <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-4.png" alt="paris" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Nosotros</h5>
                        <p>Somos un equipo de profesionales altamente capacitados y experimentados en el campo de la
                            contabilidad y la consultoría financiera. Nuestro objetivo es brindar servicios de alta calidad
                            y personalizados a nuestros clientes, ayudándolos a alcanzar sus objetivos financieros y a tomar
                            decisiones informadas.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Fiabilidad</p>
                    </div>
                </div>
                <div class="card">
                    <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-3.png" alt="rome" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Visión</h5>
                        <p>Ser reconocidos como uno de los despachos contables más confiables y respetados en el Altotonga,
                            conocidos por nuestra excelencia en el servicio, nuestra integridad y nuestra capacidad para
                            ayudar a nuestros clientes a alcanzar el éxito financiero.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Seguridad</p>
                    </div>
                </div>
                <div class="card">
                    <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-2.png" alt="sydney" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Misión</h5>
                        <p>Nuestra misión es brindar servicios contables y de consultoría financiera de alta calidad,
                            personalizada y confiable. Nos comprometemos a mantener la integridad, la confidencialidad y la
                            excelencia en nuestro trabajo, y a estar siempre disponibles para nuestros clientes.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Resultado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="py-16 bg-white" style="z-index: 0; background-image: url({{ asset('img/fondodos.jpg') }}); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
            <div class="grid sm:grid-rows-1 lg:grid-rows-1 gap-8">

                <!-- Servicio 1 -->
                <div id="carousel-4" data-carousel='{ "loadingClasses": "opacity-0" }' class="relative w-full">
                    <div class="carousel">
                        <div class="carousel-body opacity-0">
                            <!-- Slide 1 -->
                            <div class="carousel-slide">
                                <div class="flex h-full justify-center">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-22.png"
                                        class="size-full object-cover" alt="game" />
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-slide">
                                <div class="flex h-full justify-center">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-15.png"
                                        class="size-full object-cover" alt="vrbox" />
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-slide">
                                <div class="flex h-full justify-center">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-16.png"
                                        class="size-full object-cover" alt="laptop" />
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="carousel-slide">
                                <div class="flex h-full justify-center">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-8.png"
                                        class="size-full object-cover" alt="VRBox" />
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="carousel-slide">
                                <div class="flex h-full justify-center">
                                    <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-23.png"
                                        class="size-full object-cover" alt="iwatch" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Previous Slide -->
                    <button type="button" class="carousel-prev">
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <!-- Next Slide -->
                    <button type="button" class="carousel-next">
                        <span class="sr-only">Next</span>
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                    </button>
                </div>
                <!-- Más servicios... -->

            </div>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contacto" class="py-16 bg-blue-500 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Contáctanos</h2>
            <p class="mb-6">¿Listo para trabajar con nosotros? Ponte en contacto hoy mismo.</p>
            <form class="grid gap-6 max-w-3xl mx-auto">
                <input type="text" placeholder="Nombre"
                    class="p-4 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-300">
                <input type="email" placeholder="Correo Electrónico"
                    class="p-4 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-300">
                <textarea placeholder="Mensaje" rows="4"
                    class="p-4 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
                <button type="submit" class="bg-white text-blue-600 px-6 py-3 rounded-md shadow hover:bg-gray-100">
                    Enviar
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <div class="w-full">
        <footer class="footer bg-base-200/60 p-10">
            <div class="gap-6">
                <div class="flex items-center gap-6 font-bold lg:hidden">
                    <img src="{{ asset('img/DESPACHO.png') }}" alt="Logo" style="width: 16rem; height: 15rem;">

                </div>
            </div>
            <nav class="text-base-content/90">
                <h6 class="footer-title">Services</h6>
                <a href="#" class="link link-hover">Branding</a>
                <span><a href="#" class="link link-hover">Design</a><span
                        class="badge ms-2 badge-sm badge-primary">New</span></span>
                <a href="#" class="link link-hover">Marketing</a>
                <a href="#" class="link link-hover">Advertisement</a>
            </nav>
            <nav class="text-base-content/90">
                <h6 class="footer-title">Company</h6>
                <a href="#" class="link link-hover">About us</a>
                <a href="#" class="link link-hover">Contact</a>
                <a href="#" class="link link-hover">Jobs</a>
                <a href="#" class="link link-hover">Press kit</a>
            </nav>
            <nav class="text-base-content/90">
                <h6 class="footer-title">Legal</h6>
                <a href="#" class="link link-hover">Terms of use</a>
                <a href="#" class="link link-hover">Privacy policy</a>
                <a href="#" class="link link-hover">Cookie policy</a>
            </nav>
        </footer>
    @endsection
    @push('modals')
        <script>
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY === 0) {
                    navbar.classList.remove('fixed');
                } else {
                    navbar.classList.add('fixed');
                }
            });
        </script>
    @endpush
