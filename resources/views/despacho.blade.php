@extends('layouts.appHome')

@section('content')
    <div class="h-30 min-sm:h-[20rem] "id="inicio">
        <header style="z-index: 3; background: linear-gradient(to right, #1A2237, #2F4775);" class="scrolling">
            <div class="flex justify-end flex-col lg:flex-row">
                @if (Route::has('login'))
                    <nav class="flex flex-col lg:flex-row justify-end">
                        <a href="tel:=522263161354"><p
                            class="rounded-md px-2 lg:px-4 pt-2 lg:py-4 text-sm text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:text-base">
                            Llámanos sin costo: 226-316-1354
                        </p></a>
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
            style="z-index: 10; background: linear-gradient(to right, #1A2237, #2F4775);" position="fixed">

            <div class="navbar-start lg:mt-0 mt-0 py-0 ">
                <a class="link text-withe-content/90  pt-2 text-xl no-underline montecarlo-regular  lg:text-3xl text-white"
                    onclick="location.reload()" href="#inicio">
                    Despacho Contable BM
                </a>
            </div>
            <div class="navbar-center max-sm:hidden " style="z-index: 3;">
                <ul class="menu menu-horizontal gap-2 p-0 text-base rtl:ml-20 " style="background: transparent;">
                    <li><a href="#inicio"  class="btn btn-text link-animated text-white">Inicio</a></li>
                    <li><a href="#nosotros" class="btn btn-text link-animated text-white">Acerca de</a></li>
                    <li><a href="#contacto" class="btn btn-text link-animated text-white">Ubicación</a></li>
                    <li><a href="#contacto" class="btn btn-text link-animated text-white">Contacto</a></li>
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
                            <li><a class="dropdown-item text-xs hover:text-blue-600" href="#servicios">Más servicios...</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-end items-center gap-4">
                <div class="dropdown relative inline-flex sm:hidden rtl:[--placement:bottom-end]">
                    <button id="dropdown-default" type="button"
                        class="dropdown-toggle btn btn-text btn-secondary btn-square" aria-haspopup="menu"
                        aria-expanded="false" aria-label="Dropdown" style="z-index: 3;">
                        <span class="icon-[tabler--menu-2] dropdown-open:hidden size-5"></span>
                        <span class="icon-[tabler--x] dropdown-open:block hidden size-5"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                        aria-orientation="vertical" aria-labelledby="dropdown-default">
                        <li><a href="#inicio" class="btn btn-text link-animated">Inicio</a></li>
                        <li><a href="#nosotros" class="btn btn-text link-animated">Acerca de</a></li>
                        <li><a href="#contacto" class="btn btn-text link-animated">Ubicación</a></li>
                        <li><a href="#contacto" class="btn btn-text link-animated">Contacto</a></li>
                        <li>
                            <a id="dropdown-end" href="#servicios" class="btn btn-text link-animated">
                                Servicios
                            </a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <header class="text-white herone"
        style="background-size: cover; background-position: center; background-image: url({{ asset('img/fondofirst.webp') }});">
        <div class="container mx-auto grid md:grid-cols-2 items-center py-11 px-4 sm:px-6 lg:px-8">
            <div class="lg:mt-15">
                <p class=" letrauno merriweather-light text-white card-herone text-2xl sm:text-3xl md:text-4xl lg:text-6xl">
                    Más de 30 años asegurando tu tranquilidad financiera
                </p>
                <p class="letrados arbutus-regular text-white card-herone text-lg sm:text-xl md:text-2xl lg:text-4xl mt-4">
                    Brindamos soluciones contables y fiscales <br /> en Altotonga Veracruz.
                </p>

            </div>
        </div>
    </header>



    <!-- Info2 -->
    <section id="nosotros" class="pt-16 "
        style="background-image: url({{ asset('img/fondoazulfin.svg') }}); background-size: cover; background-position: center; top: 350px; width: 100%; z-index: 3;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-rows-1 items-center gap-8">
            <div class=" card-group max-w-sm sm:max-w-full gap-16 justify-center my-20 pt-5" style="box-shadow:none;">
                <div class="card group hover:shadow sm:max-w-sm h-100 bord sm:gap-4 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0"
                    data-taos-offset="400"
                    style="background-image: url({{ asset('img/polyfond.svg') }}); background-size: cover; background-position: center; border-radius: 50% 80% / 70% 10%; ">
                    <figure class="h-100 flex justify-center items-center"><img src="{{ asset('img/learn.svg') }}"
                            alt="Shoes"
                            class="h-32 w-32 object-contain transition-transform duration-500 group-hover:scale-110 pt-10" />
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title mb-2.5 h-100 merriweather-light text-white">Contadores Actualizados</h5>
                        <p class="text-white">Aplicamos un modelo de negocio contable vigente, mediante operaciones
                            innovadoras que nos ayudan
                            a mantener actualizada tu empresa para ir un paso adelante de las eventualidades financieras.
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm text-white">Vigencia</p>
                    </div>
                </div>
                <div class="card group hover:shadow sm:max-w-sm h-100 bord delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0"
                    data-taos-offset="400"
                    style="background-image: url({{ asset('img/polyfond.svg') }}); background-size: cover; background-position: center; border-radius: 50% 80% / 70% 10%; ">
                    <figure class="h-100 flex justify-center items-center overflow-hidden"><img
                            src="{{ asset('img/grafica.svg') }}" alt="Shoes"
                            class="h-32 w-32 object-contain transition-transform duration-500 group-hover:scale-110 pt-10" />
                    </figure>
                    <div class="card-body ">
                        <h5 class="card-title mb-2.5 merriweather-light text-white">Comprometidos con tu empresa</h5>
                        <p class="text-white">Tenemos más de 30 años de experiencia en materia fiscal y contable por ello
                            nos hemos convertido
                            en los aliados en contabilidad de múltiples empresas, gracias al compromiso que ponemos en cada
                            proyecto.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm text-white">Compromiso</p>
                    </div>
                </div>
                <div class="card group hover:shadow sm:max-w-sm h-100 bord delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0"
                    data-taos-offset="400"
                    style="background-image: url({{ asset('img/polyfond.svg') }}); background-size: cover; background-position: center; border-radius: 50% 80% / 70% 10%; ">
                    <figure class="h-100 flex justify-center items-center overflow-hidden"><img
                            src="{{ asset('img/transparencia.svg') }}" alt="Shoes"
                            class="h-32 w-32 object-contain transition-transform duration-500 group-hover:scale-110 pt-10" />
                    </figure>
                    <div class="card-body ">
                        <h5 class="card-title mb-2.5 merriweather-light text-white">Transparencia</h5>
                        <p class="text-white">Creemos en una relación de confianza y claridad. En cada paso de nuestros
                            procesos,
                            proporcionamos información detallada y accesible para que siempre estés al tanto de tus
                            finanzas. Sin sorpresas, sin complicaciones, solo una gestión transparente.</p>
                    </div>
                    <div class="card-footer">
                        <p class="text-base-content/50 text-sm text-white">Resultado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="height: 500px; display: none; " class=" nonesm lg:pb-0 pb-50"></div>

    <section class="mt-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-rows-1 items-center ">
            <div class="cardfirst grid lg:grid-cols-7 lg:grid-rows-4 grid-cols-1 grid-rows-4">

                <!-- Sección de "¿Quiénes somos?" -->
                <div class="cardtrans lg:col-span-3 lg:row-span-2 lg:col-start-2 lg:mt-0 grid-row-1 gap-5 lg:pr-10 delay-[300ms] duration-[200ms] taos:translate-x-[100%] taos:opacity-0"
                    data-taos-offset="400"
                    style="background-image: url({{ asset('img/polyfond.svg') }}); background-size: cover; background-position: center; z-index: 1; border-radius: 14px;  height: 474px;">
                    <h1 class="flex justify-center merriweather-light text-3xl text-white mt-10">¿Quiénes somos?</h1>
                    <p class="pt-2 flex items-center text-white px-5 pb-2">
                        Somos un despacho de contadores en Altotonga determinados. Por ello, buscamos que el Despacho
                        Contable BM sea
                        reconocido, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores
                        aliados
                        para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.
                        Ante los constantes cambios en las reformas fiscales, nace Despacho Contable BM, un grupo de
                        contadores
                        públicos totalmente profesionales en la Ciudad de Altotonga, Ver., quienes compartimos como misión
                        laboral
                        la firme convicción de ofrecer soluciones efectivas y asesoramiento contable y fiscal a cada uno de
                        nuestros
                        clientes, bajo la garantía de recibir una atención personalizada y especializada.
                        Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de
                        facilitar las
                        relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad,
                        transparencia.
                    </p>
                </div>

                <!-- Imagen "¿Quiénes somos?" -->
                <div class=" lg:col-span-2 lg:row-span-2 lg:col-start-5 mt-6 flex grid-row-2 items-center justify-center delay-[300ms] duration-[600ms] taos:translate-x-[100%] taos:opacity-0 "
                    data-taos-offset="400" style="z-index: 2; height: 450px;">
                    <div class="relative w-full h-full">
                        <img src="https://despachocontablemexico.com.mx/wp-content/uploads/2020/02/Quienes-somos.jpg.webp"
                            alt="" class="absolute top-0 left-0 w-full h-full object-cover rounded-[14px]">
                    </div>
                </div>

                <!-- Imagen "¿Cómo lo hacemos?" -->
                <div class="comoimg lg:col-span-2 lg:row-span-2 lg:col-start-2 lg:row-start-3  lg:mb-25 mt-6 mb-6 pt-10 delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:opacity-0"
                    data-taos-offset="400" style="z-index: 2; height: 450px;">
                    <div class="relative w-full h-full">
                        <img src="https://despachocontablemexico.com.mx/wp-content/uploads/2020/02/Como-lo-hacemos.jpg.webp"
                            alt=""
                            class=" comoimg absolute top-0 left-0 w-full h-full object-cover rounded-[14px]">
                    </div>
                </div>

                <!-- Sección de "¿Cómo lo hacemos?" -->
                <div class=" cardtrans lg:col-span-3 lg:row-span-2 lg:col-start-4 grid-row-3 lg:row-start-3 lg:mb-25 lg:mt-6 mb-6 lg:pl-10 delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:opacity-0"
                    data-taos-offset="400"
                    style="background-image: url({{ asset('img/polyfond.svg') }}); background-size: cover; background-position: center;  z-index: 1; border-radius: 14px;">
                    <h1 class="flex justify-center merriweather-light text-3xl text-white mt-15">
                        ¿Cómo lo hacemos?
                    </h1>
                    <p class="pt-2 flex items-center text-white px-5 pb-2">
                        En Despacho Contable BM somos un grupo de contadores públicos CDMX dedicados a la aplicación, la
                        interpretación y el manejo de la contabilidad de una persona física o persona moral con el objetivo
                        fijo de brindar servicios múltiples que garanticen el cumplimiento de sus obligaciones financieras
                        en
                        tiempo y forma.
                        Poseemos habilidades de las disciplinas exactas que nos ayudan a tener una amplia visión del estatus
                        contable de cada cliente.
                        Somos líderes, analíticos y disciplinados en el mundo de los contadores México, aptitudes que en
                        conjunto con lo anterior, nos convierten en un despacho de contabilidad dedicado a ofrecer una
                        atención personalizada y profesional.
                    </p>
                </div>

                <div class= "cardtrans lg:col-span-2 lg:row-span-2 lg:col-start-5 mt-6 grid-row-4 flex items-center justify-center delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:opacity-0"
                    data-taos-offset="400" style="z-index: 2; height: 450px;">
                    <div class="relative w-full h-full">
                        <img src="https://despachocontablemexico.com.mx/wp-content/uploads/2020/02/Como-lo-hacemos.jpg.webp"
                            alt="" class=" absolute top-0 left-0 w-full h-full object-cover rounded-[14px]">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Servicios Section -->
    <section id="servicios" class="py-16 heroservices delay-[300ms] duration-[600ms] taos:scale-[1.2] taos:opacity-0"
        data-taos-offset="400"
        style="z-index: 0; background-image: url({{ asset('img/fondoconta.webp') }}); background-size: cover; background-position: center herotwo; ">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">
            <h1 class="text-center text-black text-3xl card-herone">Nuestros Servicios</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-start mt-10">



                <!-- TARJETA 1 -->
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="transparent-modal1"
                    data-overlay="#transparent-modal1">
                    <div
                        class="card bg-[#4A6FA8] card-herone bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body ">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Contabilidad General
                            </h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#A1B6D8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Declaraciones
                                Fiscales
                            </h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#4A6FA8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Nómina y
                                Administración
                                de Recursos Humanos</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#A1B6D8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Auditorías Contables
                                y
                                Fiscales</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#4A6FA8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Asesoría Financiera y
                                Fiscal</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#A1B6D8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Trámites
                                Gubernamentales y Fiscalización</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#4A6FA8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Contabilidad para
                                Personas Físicas y RIF</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#A1B6D8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Gestión de
                                Facturación
                                Electrónica</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
                    <div class="card bg-[#4A6FA8] bg-opacity-50 border-[#2F4775] border text-black min-h-48 card-herone">
                        <div class="card-body">
                            <h5 class="card-title text-black text-center mb-2.5 truncate card-herone">Regularización
                                Contable
                                y Fiscal</h5>
                            <ol class="list-decimal pl-4 mt-2 text-left text-black card-herone">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
                <div class="modal-header">
                    <h3 class="flex modal-title text-white justify-center">Contabilidad General</h3>
                    <button type="button" class="btn btn-soft btn-circle absolute top-3 end-3" aria-label="Close"
                        data-overlay="#transparent-modal1">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body text-white">

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
                    <button type="button"
                        class="btn btn-neutral"
                        data-overlay="#transparent-modal1">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL2 -->
    <div id="transparent-modal2" class="overlay modal overlay-open:opacity-100 hidden place-items-center" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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
            <div class="modal-content text-neutral-content bg-base-shadow/90 shadow-none">
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



    <!-- Map Section -->
    <section id="contacto" class="py-16 text-white delay-[300ms] duration-[600ms] taos:scale-[1.2] taos:opacity-0"
        data-taos-offset="400"
        style="background-image: url({{ asset('img/fondoazulfin.svg') }}); background-size: cover; background-position: center;">
        <div
            class="container mx-auto px-4 sm:px-6 lg:px-8 text-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-1 lg:grid-rows-2 lg:items-center">


            <div id="gelery" class="col-start-1 grid gap-4 row-span-2 text-black galery ">
                <img src="{{ asset('img/DESPACHO.png') }}" alt="Logo"
                    class="transition-transform duration-500 group-hover:scale-110">
                <img src="https://img.freepik.com/foto-gratis/joven-empresaria-hermosa-sentada-lugar-trabajo-oficina_176420-6949.jpg?t=st=1734137436~exp=1734141036~hmac=c0af09affdb465ba64a26539199a73fe3e046cfa2f566e0dca1bde83066fc282&w=1380"
                    alt="Logo">
                <img src="https://img.freepik.com/foto-gratis/hombre-negocios-trabajando-tableta_1098-22083.jpg?t=st=1734137479~exp=1734141079~hmac=6d2df44a68dc1db9a77a9e355e390c94db85d95a43c759a22aa4b29406dba601&w=1380"
                    alt="Logo">
                <img src="https://img.freepik.com/foto-gratis/documentos-organizacion-adultos-jovenes_23-2149396646.jpg?t=st=1734137499~exp=1734141099~hmac=b1b773dc7f48ef1abde3899d751384f4d6f759db4700798455db2dbcc2beab5d&w=1380"
                    alt="Logo">
                <img src="https://img.freepik.com/foto-gratis/vista-frontal-joven-bella-mujer-negocios-trabajando-su-pc-mesa-junto-telefono-graficos-escribiendo-notas-tecnologia-actividades-laborales_140725-16299.jpg?t=st=1734137514~exp=1734141114~hmac=b174a56aba9563688d21d3990a2ace133eb65e0d51e26ef202ad4c8c31bc1f66&w=1380"
                    alt="Logo">
            </div>


            <div class="col-start-2 grid gap-4 text-black">
                <article>
                    <h1 class="text-3xl pb-5 text-white">¡Encuentra nuestro <br> Despacho Contable en el mapa!</h1>
                    <p class="text-xl text-white mb-1"> <span class="icon-[mdi--address-marker] "
                            style="width: 30px; height: 30px; color: #fff;"></span>Av. Mariano Abasolo No. 37, Colonia
                        Centro, <br> Altotonga Veracruz, México, 93700</p>
                    <p class="text-xl flex justify-center">
                        <span class="icon-[ic--baseline-email] mr-2"
                            style="width: 30px; height: 30px; color: #fff;"></span>
                        <span class="inline-block text-white">baltazarmontes77@prodigy.net.mx</span>
                    </p>
                    <p><span class="icon-[ic--sharp-phone] mr-2" style="width: 30px; height: 30px; color: #fff;"></span><a
                            href="tel:+522263161354" class="text-xl text-white">+52 226 316 13 54</a></p>
                    <p><span class="icon-[ic--sharp-phone] mr-2" style="width: 30px; height: 30px; color: #fff;"></span><a
                            href="tel:+522263160629" class="text-xl text-white">+52 226 316 06 29</a></p>
            </div>

            <!-- Mapa Responsive -->
            <div class="w-full h-64 sm:h-96 lg:pt-1 pt-12 lg:h-[250px] overflow-hidden col-start-2 row-start-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d234.6763431503151!2d-97.24427016139883!3d19.76273746513662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dadd220dad0f15%3A0xa557afc86a4751a0!2sAv.%20Gral.%20Mariano%20Abasolo%20Sur%2037a%2C%20La%20Loma%2C%2093700%20Altotonga%2C%20Ver.!5e0!3m2!1ses!2smx!4v1733877724906!5m2!1ses!2smx"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </article>
            </div>
        </div>
    </section>


    <!-- Preguntas y respuestas -->
    <section id="query" class="py-16 delay-[300ms] duration-[600ms] taos:scale-[1.2] taos:opacity-0"
        data-taos-offset="400""
        style="background-image: url({{ asset('img/fondoquestio.svg') }}); background-size: cover;">

        <div class="grid grid-cols-5 grid-rows-5 gap-4">
            <div class="col-start-2 row-start-1 flex justify-center col-span-3 ">
                <p class="text-5xl">Preguntas Frecuentes</p>
            </div>
            <div class="col-span-3 row-span-3 col-start-2 col-end-5 row-start-2 flex justify-center">
                <div class="accordion divide-neutral/20 max-w-lg divide-y">
                    <div class="accordion-item active" id="payment-basic">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="payment-basic-collapse" aria-expanded="true">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            ¿Cómo puedo agendar una consulta o una asesoría?
                        </button>
                        <div id="payment-basic-collapse"
                            class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="payment-basic" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Puedes agendar una cita a través de nuestro formulario de contacto en la página web,
                                    llamando por teléfono o enviándonos un correo electrónico. Nos pondremos en contacto
                                    contigo a la mayor brevedad posible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="delivery-basic">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="delivery-basic-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            ¿Qué información necesito proporcionar para iniciar los servicios contables?
                        </button>
                        <div id="delivery-basic-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="delivery-basic" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Dependiendo del servicio que necesites, te solicitaremos documentos como facturas,
                                    estados de cuenta, registros de ingresos y egresos, declaraciones fiscales anteriores,
                                    entre otros.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="cancel-basic">
                        <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                            aria-controls="cancel-basic-collapse" aria-expanded="false">
                            <span
                                class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                            <span
                                class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                            ¿Qué diferencia a su despacho de otros servicios contables?
                        </button>
                        <div id="cancel-basic-collapse"
                            class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="cancel-basic" role="region">
                            <div class="px-5 pb-4">
                                <p class="text-base-content/80 font-normal">
                                    Contamos con más de 30 años de experiencia, ofrecemos un servicio personalizado,
                                    garantizamos transparencia, y nos mantenemos actualizados con las últimas normativas
                                    fiscales.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <!-- Footer -->
    <div class="w-full">
    <footer class="footer bg-base-200/60 p-10 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 items-start justify-items-center">

        <!-- Logo -->
        <div class="col-span-1 md:col-span-3 lg:col-span-1 flex items-center justify-center">
            <img src="{{ asset('img/DESPACHO.png') }}" alt="Logo" class="w-40 h-32 md:w-72 md:h-60">
        </div>

        <!-- Sección Inicio -->
        <nav class="col-span-1 md:col-span-1 lg:col-start-2 mt-4 md:mt-8 lg:mt-12">
            <a onclick="location.reload()" href="#inicio" class="link link-hover">Inicio</a>
            <a href="#nosotros" class="link link-hover">Acerca de</a>
            <a href="#servicios" class="link link-hover">Servicios</a>
            <span class="flex items-center">
                <a href="#contacto" class="link link-hover">Ubicación y Contacto</a>
            </span>
        </nav>

        <!-- Sección Páginas de interés -->
        <nav class="col-span-1 md:col-span-1 lg:col-start-3 mt-4 md:mt-8 lg:mt-12">
            <h6 class="footer-title">Páginas de interés</h6>
            <a href="https://www.sat.gob.mx/home" target="_blank" class="link link-hover">SAT</a>
            <span class="flex items-center">
                <a href="https://www.sat.gob.mx/empresas/sin-fines-de-lucro/iniciar-sesion" target="_blank" class="link link-hover">Buzon Tributario</a>
            </span>
            <a href="https://www.imss.gob.mx/" target="_blank" class="link link-hover">IMSS</a>
        </nav>

        <!-- Sección Company -->
        <nav class="col-span-1 md:col-span-1 lg:col-start-4 mt-4 md:mt-8 lg:mt-12 navgrande">
            <h6 class="footer-title">Contacto</h6>
            <a >baltazarmontes77@prodigy.net.mx</a>
            <a href="tel:+522263161354" class="link link-hover">+52 226 316 13 54</a>
            <a href="tel:+522263160629" class="link link-hover">+52 226 316 06 29</a>
        
        </nav>

         <nav class="col-span-1 md:col-span-1 lg:col-start-4 mt-4 md:mt-8 lg:mt-12 navpeque">
            <h6 class="footer-title">Contacto</h6>
            <a >baltazarmontes77@prodigy.net.mx</a>
            <a href="tel:+522263161354" class="link link-hover">+52 226 316 13 54</a>
            <a href="tel:+522263160629" class="link link-hover">+52 226 316 06 29</a>
        

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
