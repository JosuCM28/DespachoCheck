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
                class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full">
                <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="grid grid-cols-5 grid-rows-5 gap-4">
            <div class="col-start-3 row-start-1 flex justify-center items-center">Bienvenido Josue Cruz Marin</div>
            <div class="col-start-3 row-start-2 flex justify-center items-center">Recibos Pagados</div>
            <div class="col-span-3 row-span-3 col-start-2 row-start-3">
            <div class="border-base-content/25 w-full overflow-x-auto border">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-nowrap">John Doe</td>
        <td>johndoe@example.com</td>
        <td><span class="badge badge-soft badge-success text-xs">Professional</span></td>
        <td class="text-nowrap">March 1, 2024</td>
        <td>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--dots-vertical] size-5"></span></button>
        </td>
      </tr>
      <tr>
        <td class="text-nowrap">Jane Smith</td>
        <td>janesmith@example.com</td>
        <td><span class="badge badge-soft badge-error text-xs">Rejected</span></td>
        <td class="text-nowrap">March 2, 2024</td>
        <td>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--dots-vertical] size-5"></span></button>
        </td>
      </tr>
      <tr>
        <td class="text-nowrap">Alice Johnson</td>
        <td>alicejohnson@example.com</td>
        <td><span class="badge badge-soft badge-info text-xs">Applied</span></td>
        <td class="text-nowrap">March 3, 2024</td>
        <td>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--dots-vertical] size-5"></span></button>
        </td>
      </tr>
      <tr>
        <td class="text-nowrap">Bob Brown</td>
        <td>bobrown@example.com</td>
        <td><span class="badge badge-soft badge-primary text-xs">Current</span></td>
        <td class="text-nowrap">March 4, 2024</td>
        <td>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
          <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--dots-vertical] size-5"></span></button>
        </td>
      </tr>
    </tbody>
  </table>
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
