@extends('layouts.appHome')

@section('content')
    <div class="h-30 min-sm:h-[20rem]">
        <header style="z-index: 3; background: linear-gradient(to right, rgba(17, 25, 55, 0.93), rgba(10, 25, 40, 0.86));"
            class="scrolling">
            <div class="flex justify-end flex-col lg:flex-row">
                @if (Route::has('login'))
                    <nav class="flex flex-col lg:flex-row justify-end">
                        <p
                            class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                            Llámanos sin costo: 226-316-1354
                        </p>
                        <p
                            class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                            correo: baltazarmontes77@prodigy.net.mx

                        </p>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-2 lg:px-4 pb-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>
        <nav class="navbar shadow  top-0 left-0 py-4 shadow-md navar-trans scrolling h-24" id="navbar"
            style="z-index: 3; background: linear-gradient(to right, rgba(17, 25, 55, 0.93), rgba(10, 25, 40, 0.86));"
            position="fixed">

            <div class="navbar-start lg:mt-0 mt-0 py-0 ">
                <a class="link text-withe-content/90  pt-2 text-xl no-underline montecarlo-regular  lg:text-3xl text-white"
                    href="#">
                    Despacho Contable BM
                </a>
            </div>
            <div class="navbar-center max-sm:hidden " style="z-index: 3;">
                <ul class="menu menu-horizontal gap-2 p-0 text-base rtl:ml-20 " style="background: transparent;">
                    <li><a href="#" class="btn btn-text link-animated text-white">Inicio</a></li>
                    <li><a href="#" class="btn btn-text link-animated text-white">Acerca de</a></li>
                    <li><a href="#" class="btn btn-text link-animated text-white">Ubicación</a></li>
                    <li><a href="#" class="btn btn-text link-animated text-white">Contacto</a></li>
                    <li
                        class="dropdown relative inline-flex [--auto-close:inside] [--offset:9] [--placement:bottom-end] max-sm:[--placement:bottom]">
                        <button id="dropdown-end" type="button"
                            class="dropdown-toggle dropdown-open:bg-base-content/10  max-sm:px-2 btn btn-text text-white link-animated"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Servicios
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48 text" role="menu"
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
    <header id="inicio" class="text-white herone "
        style="background-size: cover; background-position: center; background-image: url({{ asset('img/fondofirst.jpg') }});">

        <div class="container mx-auto grid md:grid-cols-2 items-center py-11 px-4 sm:px-6 lg:px-8">
            <div class="lg:mt-15">
                <p class="merriweather-light text-white card-herone font text-4xl lg:text-6xl"> Más de 30 años
                    asegurando tu tranquilidad financiera </p>
                <p class="arbutus-regular text-white card-herone text-2xl lg:text-4xl"> Brindamos soluciones contables
                    y fiscaless <br />en Altotonga Veracruz.</p>
            </div>
        </div>
    </header>

    <!-- Nosotros Section -->
    <section id="nosotros" class="py-16 "
        style="background-image: url({{ asset('img/azul-claro.webp') }}); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-rows-1 items-center gap-8">
            <div class="card-group max-w-sm sm:max-w-full gap-4 justify-center">
                <div class="card group hover:shadow sm:max-w-sm">
                    <figure><img src="{{ asset('img/contador-actualizado.webp') }}" alt="Shoes"
                            class="transition-transform duration-500 group-hover:scale-110" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Contadores Actualizados</h5>
                        <p>Aplicamos un modelo de negocio contable vigente, mediante operaciones innovadoras que nos ayudan
                            a mantener actualizada tu empresa para ir un paso adelante de las eventualidades financieras.
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Vigencia</p>
                    </div>
                </div>
                <div class="card group hover:shadow sm:max-w-sm">
                    <figure><img src="{{ asset('img/comprometido.webp') }}" alt="Shoes"
                            class="transition-transform duration-500 group-hover:scale-110" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Comprometidos con tu empresa</h5>
                        <p>Tenemos más de 30 años de experiencia en materia fiscal y contable por ello nos hemos convertido
                            en los aliados en contabilidad de múltiples empresas, gracias al compromiso que ponemos en cada
                            proyecto.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Compromiso</p>
                    </div>
                </div>
                <div class="card group hover:shadow sm:max-w-sm">
                    <figure><img src="{{ asset('img/Transparencia.webp') }}" alt="Shoes"
                            class="transition-transform duration-500 group-hover:scale-110" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5">Transparencia</h5>
                        <p>Creemos en una relación de confianza y claridad. En cada paso de nuestros procesos,
                            proporcionamos información detallada y accesible para que siempre estés al tanto de tus
                            finanzas. Sin sorpresas, sin complicaciones, solo una gestión transparente.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm">Resultado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="py-16 bg-white herotwo"
        style="z-index: 0; background-image: url({{ asset('img/fondoo.jpg') }}); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">
            <h1 class="text-center text-white text-3xl font-bold card-herone">Nuestros Servicios</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-start mt-10">

                <div id="multi-slide" data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "lg": 3 } }'
                    class="relative w-full">
                    <div class="carousel h-80">
                        <div class="carousel-body  h-full opacity-0">
                            <!-- Slide 1 -->
                            <div class="carousel-slide">
                                <div class="bg-base-200/50 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">First slide</span>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-slide">
                                <div class="bg-base-200 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">Second slide</span>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">Third slide</span>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="carousel-slide">
                                <div class="bg-base-200/50 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">Fourth slide</span>
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="carousel-slide">
                                <div class="bg-base-200 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">Fifth slide</span>
                                </div>
                            </div>
                            <!-- Slide 6 -->
                            <div class="carousel-slide">
                                <div class="bg-base-300 flex h-full justify-center p-6">
                                    <span class="self-center text-lg">Sixth slide</span>
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

                <!-- TARJETA 1 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal1"
                    data-overlay="#transparent-modal1">
                    <div class="card bg-primary/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Contabilidad General
                            </h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Registro de ingresos, egresos y activos.</span></li>
                                <li><span class="block truncate">Elaboración de balanzas de comprobación.</span></li>
                                <li><span class="block truncate">Conciliaciones bancarias.</span></li>
                                <li><span class="block truncate">Preparación de reportes financieros mensuales y
                                        anuales.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 2 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal2"
                    data-overlay="#transparent-modal2">
                    <div class="card bg-accent/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Declaraciones Fiscales
                            </h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Declaraciones anuales y provisionales.</span></li>
                                <li><span class="block truncate">Cálculo de impuestos ISR, IVA, IEPS, entre otros.</span>
                                </li>
                                <li><span class="block truncate">Regularización fiscal en caso de atrasos.</span></li>
                                <li><span class="block truncate">Estrategias para optimizar la carga tributaria dentro del
                                        marco legal.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 3 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal3"
                    data-overlay="#transparent-modal3">
                    <div class="card bg-primary/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Nómina y Administración
                                de Recursos Humanos</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Elaboración de nómina y pago de sueldos.</span></li>
                                <li><span class="block truncate">Cálculo de aguinaldos, vacaciones y finiquitos.</span>
                                </li>
                                <li><span class="block truncate">Cálculo y declaración de cuotas ante IMSS, INFONAVIT y
                                        SAT.</span></li>
                                <li><span class="block truncate">Reportes de nómina para tus registros internos.</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 4 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal4"
                    data-overlay="#transparent-modal4">
                    <div class="card bg-accent/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Auditorías Contables y
                                Fiscales</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Auditorías internas y externas.</span></li>
                                <li><span class="block truncate">Identificación de irregularidades y áreas de
                                        mejora.</span></li>
                                <li><span class="block truncate">Recomendaciones para optimizar tus procesos
                                        financieros.</span></li>
                                <li><span class="block truncate">Preparación para auditorías realizadas por autoridades
                                        fiscales.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>


                <!-- TARJETA 5 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal5"
                    data-overlay="#transparent-modal5">
                    <div class="card bg-primary/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Asesoría Financiera y
                                Fiscal</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Planeación fiscal estratégica.</span></li>
                                <li><span class="block truncate">Evaluación de riesgos financieros.</span></li>
                                <li><span class="block truncate">Proyección y análisis de flujos de efectivo.</span></li>
                                <li><span class="block truncate">Soluciones personalizadas para reducir costos
                                        operativos.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 6 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal6"
                    data-overlay="#transparent-modal6">
                    <div class="card bg-accent/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Trámites
                                Gubernamentales y Fiscalización</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Inscripción y actualización en el Registro Federal de
                                        Contribuyentes (RFC)</span></li>
                                <li><span class="block truncate">Altas, bajas y modificaciones ante el SAT.</span></li>
                                <li><span class="block truncate">Trámites ante el IMSS e INFONAVIT.</span></li>
                                <li><span class="block truncate">Solicitudes de devoluciones y compensaciones
                                        fiscales.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 7 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal7"
                    data-overlay="#transparent-modal7">
                    <div class="card bg-primary/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Contabilidad para
                                Personas Físicas y RIF</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Registro de ingresos y egresos.</span></li>
                                <li><span class="block truncate">Presentación de declaraciones mensuales y anuales.</span>
                                </li>
                                <li><span class="block truncate">Optimización de deducciones personales.</span></li>
                                <li><span class="block truncate">Asesoría sobre beneficios fiscales del RIF.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 8 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal8"
                    data-overlay="#transparent-modal8">
                    <div class="card bg-accent/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Gestión de Facturación
                                Electrónica</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Emisión de facturas electrónicas bajo los estándares
                                        vigentes.</span></li>
                                <li><span class="block truncate">Validación de facturas recibidas.</span></li>
                                <li><span class="block truncate">Control de CFDI’s (Comprobantes Fiscales Digitales por
                                        Internet).</span></li>
                                <li><span class="block truncate">Asesoría en el uso de plataformas de facturación.</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </button>

                <!-- TARJETA 9 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal9"
                    data-overlay="#transparent-modal9">
                    <div class="card bg-primary/50 border-primary border text-primary-content min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-primary-content text-center mb-2.5 truncate">Regularización Contable
                                y Fiscal</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left">
                                <li><span class="block truncate">Reconstrucción de contabilidad atrasada.</span></li>
                                <li><span class="block truncate">Solución de problemas con el SAT o IMSS.</span></li>
                                <li><span class="block truncate">Presentación de declaraciones omitidas..</span></li>
                                <li><span class="block truncate">Negociación de acuerdos de pago con autoridades
                                        fiscales.</span></li>
                            </ol>
                        </div>
                    </div>
                </button>

            </div>




        </div>
    </section>

    <!-- MODAL1 -->
    <div id="transparent-modal1" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="flex modal-title text-neutral-content justify-center">Contabilidad General</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal1">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">

                    <p> Realizamos la gestión integral de la contabilidad de tu empresa o negocio. Nos encargamos de los
                        registros contables, conciliaciones bancarias, y generación de estados financieros, asegurando que
                        toda la información esté organizada y cumpla con las normativas legales vigentes.
                        Incluye: </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Registro de ingresos, egresos y activos.</li>
                        <li>Elaboración de balanzas de comprobación.</li>
                        <li>Conciliaciones bancarias.</li>
                        <li>Preparación de reportes financieros mensuales y anuales.</li>
                    </ol>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal1">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL2 -->
    <div id="transparent-modal2" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Declaraciones Fiscales</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal2">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Nos aseguramos de que cumplas con tus obligaciones fiscales presentando tus declaraciones de
                        impuestos locales y federales en tiempo y forma, reduciendo riesgos de sanciones.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Declaraciones anuales y provisionales.</li>
                        <li>Cálculo de impuestos ISR, IVA, IEPS, entre otros.</li>
                        <li>Regularización fiscal en caso de atrasos.</li>
                        <li>Estrategias para optimizar la carga tributaria dentro del marco legal.</li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal2">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL3 -->
    <div id="transparent-modal3" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Nómina y Administración de Recursos Humanos</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal3">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Gestionamos la nómina de tu empresa, asegurándonos de cumplir con todas las obligaciones laborales y
                        fiscales, para que te concentres en hacer crecer tu negocio.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Elaboración de nómina y pago de sueldos.</li>
                        <li>Cálculo de aguinaldos, vacaciones y finiquitos.</li>
                        <li>Cálculo y declaración de cuotas ante IMSS, INFONAVIT y SAT.</li>
                        <li>Reportes de nómina para tus registros internos.</li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal3">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL4 -->
    <div id="transparent-modal4" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Auditorías Contables y Fiscales</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal4">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Revisamos a detalle la situación financiera y fiscal de tu empresa para garantizar la transparencia
                        de tus operaciones y el cumplimiento normativo.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Auditorías internas y externas.</li>
                        <li>Identificación de irregularidades y áreas de mejora.</li>
                        <li>Recomendaciones para optimizar tus procesos financieros.</li>
                        <li>Preparación para auditorías realizadas por autoridades fiscales.</li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal4">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL5 -->
    <div id="transparent-modal5" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Asesoría Financiera y Fiscal</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal5">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Te ayudamos a optimizar tus recursos financieros y diseñamos estrategias fiscales personalizadas
                        para mejorar la rentabilidad de tu negocio.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Planeación fiscal estratégica.</li>
                        <li>Evaluación de riesgos financieros.</li>
                        <li>Proyección y análisis de flujos de efectivo.</li>
                        <li>Soluciones personalizadas para reducir costos operativos.</li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal5">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL6 -->
    <div id="transparent-modal6" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Trámites Gubernamentales y Fiscalización</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal6">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Nos encargamos de gestionar todos los trámites necesarios ante entidades gubernamentales, para que
                        cumplas con la normativa sin complicaciones.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Inscripción y actualización en el Registro Federal de Contribuyentes (RFC).</li>
                        <li>Altas, bajas y modificaciones ante el SAT.</li>
                        <li>Trámites ante el IMSS e INFONAVIT.</li>
                        <li>Solicitudes de devoluciones y compensaciones fiscales.
                        </li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal6">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL7 -->
    <div id="transparent-modal7" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Contabilidad para Personas Físicas y Morales</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal7">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Apoyamos a personas físicas con actividad empresarial y Régimen de Incorporación Fiscal (RIF) a
                        mantener su contabilidad en orden y cumplir con sus obligaciones fiscales.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Registro de ingresos y egresos.</li>
                        <li>Presentación de declaraciones mensuales y anuales.</li>
                        <li>Optimización de deducciones personales.</li>
                        <li>Asesoría sobre beneficios fiscales del RIF.
                        </li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal7">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL8 -->
    <div id="transparent-modal8" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Gestión de Facturación Electrónica</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal8">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Facilitamos la emisión y recepción de facturas electrónicas para garantizar que cumplas con los
                        requisitos del SAT y mantener un control efectivo de tus operaciones.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Emisión de facturas electrónicas bajo los estándares vigentes.</li>
                        <li>Validación de facturas recibidas.</li>
                        <li>Control de CFDI’s (Comprobantes Fiscales Digitales por Internet).</li>
                        <li>Asesoría en el uso de plataformas de facturación.
                        </li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal8">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL9 -->
    <div id="transparent-modal9" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/80 shadow-none">
                <div class="modal-header">
                    <h3 class="modal-title text-neutral-content">Regularización Contable y Fiscal</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal9">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Si tienes retrasos o irregularidades en tus obligaciones contables o fiscales, te ayudamos a ponerte
                        al día para evitar multas y problemas legales.
                        Incluye:
                    </p>
                    <ol style="list-style-type: decimal; padding-left: 1rem; margin-top: 0.5rem;">
                        <li>Reconstrucción de contabilidad atrasada.</li>
                        <li>Solución de problemas con el SAT o IMSS.</li>
                        <li>Presentación de declaraciones omitidas.</li>
                        <li>Negociación de acuerdos de pago con autoridades fiscales.

                        </li>
                    </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-neutral" data-overlay="#transparent-modal9">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto Section -->
    <section id="contacto" class="py-16 text-white"
        style="background-image: url({{ asset('img/servid.jpg') }}); background-size: cover; background-position: center;">
        <div
            class="container mx-auto px-4 sm:px-6 lg:px-8 text-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-1 lg:grid-rows-2 items-center">


            <div class="col-start-1 grid gap-4 row-span-2">
                <p></p>
                <h1 class="text-5xl">¡Encuentra nuestro Despacho Contable México en el mapa!</h1>
                <p class="text-4xl">Av. Mariano Abasolo No. 37, Colonia Centro, Altotonga Veracruz, México, 93700</p>
                <p class="text-3xl">correo: info@despacho.mx</p>
                <p class="text-3xl">Teléfono: +52 (55) 226 1234</p>
                <p class="text-3xl">teléfono: +52 (55) 226 1234</p>
            </div>


            <div class="col-start-2 grid gap-4">
                <p></p>
                <h1 class="text-5xl">¡Encuentra nuestro Despacho Contable México en el mapa!</h1>
                <p class="text-4xl">Av. Mariano Abasolo No. 37, Colonia Centro, Altotonga Veracruz, México, 93700</p>
                <p class="text-3xl">correo: info@despacho.mx</p>
                <p class="text-3xl">Teléfono: +52 (55) 226 1234</p>
                <p class="text-3xl">teléfono: +52 (55) 226 1234</p>
            </div>

            <!-- Mapa Responsive -->
            <div class="w-full h-64 sm:h-96 lg:h-[450px] overflow-hidden col-start-2 row-start-2">
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
        <footer class="footer bg-base-200/60 p-10 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Logo -->
            <div class="col-span-1 md:col-span-2 lg:col-span-1 flex items-center justify-center">
                <img src="{{ asset('img/DESPACHO.png') }}" alt="Logo" class="w-72 h-60">
            </div>

            <!-- Sección Inicio -->
            <nav class="col-span-1 md:col-span-1 lg:col-start-3 lg:mt-16">
                <h6 class="footer-title">Inicio</h6>
                <a href="#" class="link link-hover">Acerca de</a>
                <span>
                    <a href="#" class="link link-hover">Ubicación</a>
                    <span class="badge ms-2 badge-sm badge-primary">Contacto</span>
                </span>
                <a href="#" class="link link-hover">Servicios</a>
            </nav>

            <!-- Sección Company -->
            <nav class="col-span-1 md:col-span-1 lg:col-start-4 lg:mt-8">
                <h6 class="footer-title">Company</h6>
                <a href="#" class="link link-hover">About us</a>
                <a href="#" class="link link-hover">Contact</a>
                <a href="#" class="link link-hover">Jobs</a>
                <a href="#" class="link link-hover">Press kit</a>
            </nav>

        </footer>
    </div>
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
