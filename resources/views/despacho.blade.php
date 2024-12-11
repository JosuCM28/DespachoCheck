@extends('layouts.appHome')

@section('content')
    <div class="h-30 min-sm:h-[20rem]">
        <header style="background-color: #2E4053;">
            <div class="flex justify-end flex-col lg:flex-row">
                @if (Route::has('login'))
                    <nav class="flex flex-col lg:flex-row justify-end">
                        <p
                            class="rounded-md px-3 py-2 text-sm text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
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

        <div class="container mx-auto grid md:grid-cols-2 items-center py-16 px-4 sm:px-6 lg:px-8">
            <div>
                <div class="card glass text-white sm:max-w-sm">
                    <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-1.png" alt="iphones" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title mb-2.5 text-white">Smartphone</h2>
                        <p class="mb-4">A high-quality smartphone with the latest features for a premium user experience.
                        </p>
                        <div class="card-actions">
                            <button class="btn btn-warning">Conoce nuestros servicios</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
<div class="card image-full sm:max-w-sm">
  <figure><img src="https://cdn.flyonui.com/fy-assets/components/card/image-5.png" alt="overlay image" /></figure>
  <div class="card-body">
    <h2 class="card-title mb-2.5 text-white"> Más de 30 años asegurando tu tranquilidad financiera</h2>
    <p class="text-white"> Brindamos soluciones contables y fiscaless <br />en Altotonga Veracruz.</p>
  </div>
</div>
            </div>

        </div>
    </header>

    <!-- Nosotros Section -->
    <section id="nosotros" class="py-16 bg-gray-50"
        style="background-image: url({{ asset('img/fondonosotros.jpg') }}); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-rows-1 items-center gap-8">
            <div class="card-group max-w-sm sm:max-w-full">
                <div class="card">
                    <figure><img src="{{ asset('img/equipo.jpg') }}" alt="paris" />
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
    <section id="servicios" class="py-16 bg-white"
        style="z-index: 0; background-image: url({{ asset('img/backservices.jpg') }}); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 items-start">

                <!-- Servicio con Carousel -->
                <div id="carousel-2" data-carousel='{ "loadingClasses": "opacity-0" }'
                    class="relative w-full lg:mt-13 mt-0">
                    <h2 class="text-3xl font-bold text-center mb-8 text-white">Nuestros Servicios</h2>
                    <div class="carousel">
                        <div class="carousel-body opacity-0">
                            <!-- Slide 1 -->
                            <div class="carousel-slide">
                                <div class="bg-base-300/60 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">First slide</span>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-slide">
                                <div class="bg-base-300/80 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">2 slide</span>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">3 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">4 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">5 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">6 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">7 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">8 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">9 slide</span>
                                </div>
                            </div>

                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-2xl sm:text-4xl">10 slide</span>
                                </div>
                            </div>
                        </div>

                        <!-- Paginación del Carousel -->
                        <div class="carousel-pagination mt-4">
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                            <span class="carousel-dot carousel-active:bg-primary carousel-active:border-primary"></span>
                        </div>
                    </div>

                    <!-- Botones de navegación del Carousel -->
                    <button type="button" class="carousel-prev absolute left-2 top-1/2 transform -translate-y-1/2">
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button" class="carousel-next absolute right-2 top-1/2 transform -translate-y-1/2">
                        <span class="sr-only">Next</span>
                        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                        </span>
                    </button>
                </div>
            </div>
    </section>


    <!-- Contacto Section -->
    <section id="contacto" class="py-16 bg-blue-500 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Mapa Responsive -->
            <div class="w-full h-64 sm:h-96 lg:h-[450px] overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d234.6763431503151!2d-97.24427016139883!3d19.76273746513662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dadd220dad0f15%3A0xa557afc86a4751a0!2sAv.%20Gral.%20Mariano%20Abasolo%20Sur%2037a%2C%20La%20Loma%2C%2093700%20Altotonga%2C%20Ver.!5e0!3m2!1ses!2smx!4v1733877724906!5m2!1ses!2smx"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
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
