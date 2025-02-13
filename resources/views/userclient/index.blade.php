@extends('layouts.appHome')

@section('content')
    <nav class="navbar rounded-box shadow">
        <div class="w-full md:flex md:items-center md:gap-2">
            <div class="flex items-center justify-between">
                <div class="navbar-start items-center justify-between max-md:w-full">
                    <a class="link textorecto pt-2 text-xl no-underline montecarlo-regular  lg:text-3xl text-black"
                        onclick="location.reload()" href="#">
                        Despacho Contable BM

                    </a>
                    <div class="md:hidden">
                        <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square"
                            data-collapse="#logo-navbar-collapse" aria-controls="logo-navbar-collapse"
                            aria-label="Toggle navigation">
                            <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                            <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="logo-navbar-collapse"
    class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full flex items-center justify-center">
        <ul class="menu md:menu-horizontal gap-6 p-0 text-lg max-md:mt-2 flex items-center">

        <!-- Ver Documentos -->
        <li class="text-center">
            <button type="button" class="text-xl font-semibold px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition"
                aria-haspopup="dialog" aria-expanded="false"
                aria-controls="toggle-bn-first-modal"
                data-overlay="#toggle-bn-first-modal">
                Ver Documentos
            </button>
        </li>

        <!-- Cerrar Sesión -->
        <li class="text-center">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                    class="text-xl font-semibold px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                    {{ __('Cerrar sesión') }}
                </x-dropdown-link>
            </form>
        </li>
    </ul>
</div>

        </div>
    </nav>

    <section class="container mx-auto p-12">
        <h1 class="text-center my-12 mx-12">HOLA, {{ $client->full_name }} <br> Historial de Recibos</h1>

        <livewire:user-table />

        <!-- Modal 1 -->

        <div id="toggle-bn-first-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
            <div
                class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-500 transition-all ease-out">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Documentos</h3>
                        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                            aria-label="Close" data-overlay="#toggle-bn-first-modal" data-overlay-close>
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach ($client->document as $document)
                            <div class="flex justify-between items-center mb-3  ">
                                <div class="flex items-center gap-x-3 ">
                                    <span class="icon-[fa6-solid--file-pdf]"
                                        style="width: 25px; height: 25px; color: #c91818;"></span>

                                    <p>{{ $document->title }}</p>

                                </div>

                                <div class="flex items-center gap-x-2">
                                    <a href="{{ route('file.download', $document->id) }}" target="_blank"
                                        class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                        aria-label="Facebook Icon Button">
                                        <span class="icon-[ic--round-download]"
                                            style="width: 25px; height: 25px; color: #3791f1;"></span>
                                    </a>
                                    <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank"
                                        class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                        aria-label="Facebook Icon Button">
                                        <span class="icon-[weui--eyes-on-outlined]"
                                            style="width: 24px; height: 24px; color: #1cbe9d;"></span>
                                    </a>
                                    <form action="{{ route('file.destroy', $document->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                            aria-label="Facebook Icon Button">
                                            <span class="icon-[tdesign--delete-1]"
                                                style="width: 25px; height: 25px; color: #d00610;"></span>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="toggle-bn-second-modal" data-overlay="#toggle-bn-second-modal">
                                Subir PDF
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->

        <div id="toggle-bn-second-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog"
            tabindex="-1">
            <div
                class="modal-dialog overlay-open:mt-12 overlay-open:opacity-100 overlay-open:duration-500 transition-all ease-out">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Subir</h3>
                        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                            aria-label="Close" data-overlay="#toggle-bn-second-modal" data-overlay-close>
                            <span class="icon-[tabler--x] size-4"></span>
                        </button>
                    </div>
                    <form action="{{ route('file.store', $client->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pt-0">
                            <div class="mb-0.5  gap-4 max-sm:flex-col">
                                <label class="form-control w-full mb-4">
                                    <div class="label">
                                        <span class="label-text">Titulo</span>
                                    </div>
                                    <input type="text" name="title" placeholder="Nombre del documento"
                                        class="input" />
                                    @error('title')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="form-control w-full">
                                    <div class="label">
                                        <span class="label-text">Documento PDF</span>
                                    </div>
                                    <input type="file" accept="application/pdf" name="file_path" class="input" />
                                    @error('file_path')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" aria-haspopup="dialog"
                                    aria-expanded="false" aria-controls="scroll-inside-modal"
                                    data-overlay="#toggle-bn-first-modal">Regresar</button>
                            </div>
                            <button type="submit" class="btn btn-primary">Subir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <div class="w-full">
        <footer
            class="footer bg-base-200/60 p-10 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 items-start justify-items-center">

            <!-- Logo -->
            <div class="col-span-1 md:col-span-3 lg:col-span-1 flex items-center justify-center">
                <img src="{{ asset('img/DESPACHO.png') }}" alt="Logo" class="w-40 h-32 md:w-72 md:h-60">
            </div>

            <!-- Sección Inicio -->
            <nav class="col-span-1 md:col-span-1 lg:col-start-2 mt-4 md:mt-8 lg:mt-12 ml-7 lg:ml-0">
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
                    <a href="https://www.sat.gob.mx/empresas/sin-fines-de-lucro/iniciar-sesion" target="_blank"
                        class="link link-hover">Buzon Tributario</a>
                </span>
                <a href="https://www.imss.gob.mx/" target="_blank" class="link link-hover">IMSS</a>
            </nav>

            <!-- Sección Company -->
            <nav class="col-span-1 md:col-span-1 lg:col-start-4 mt-4 md:mt-8 lg:mt-12 navgrande">
                <h6 class="footer-title">Contacto</h6>
                <a>baltazarmontes77@prodigy.net.mx</a>
                <a href="tel:+522263161354" class="link link-hover">+52 226 316 13 54</a>
                <a href="tel:+522263160629" class="link link-hover">+52 226 316 06 29</a>

            </nav>

            <nav class="col-span-1 md:col-span-1 lg:col-start-4 mt-4 md:mt-8 lg:mt-12 navpeque">
                <h6 class="footer-title">Contacto</h6>
                <a>baltazarmontes77@ <br> prodigy.net.mx</a>
                <a href="tel:+522263161354" class="link link-hover">+52 226 316 13 54</a>
                <a href="tel:+522263160629" class="link link-hover">+52 226 316 06 29</a>


        </footer>
    </div>
@endsection
