@extends('layouts.app')
@section('content')

<div class="flex">
    <!-- Sidebar -->
    @include('layouts.list.sidebar')

    <!-- Contenido principal -->
    <div class="flex-1 py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://www.sat.gob.mx/aplicacion/77792/reimprime-tus-acuses-de-declaraciones-presentadas" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[ph--circles-four-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">DIOT
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://idse.imss.gob.mx/imss/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[ph--circles-four-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">IDSE
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="http://sipare.imss.gob.mx/sipare_webapp/index.jsp" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[ph--circles-four-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">SIPARE
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://mail.infinitummail.com/app/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[ic--twotone-mail] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">PRODIGY
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://temp-mail.org/es/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[mingcute--mail-send-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">TEMP MAIL
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://micodigopostal.org/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[map--postal-code] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">CP</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                         <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://calcularrfc.mx/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[bxs--calculator] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">CALCULAR RFC
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://www.gob.mx/tramites/ficha/consulta-tu-recibo-de-luz/CFE6855" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[game-icons--light-bulb] text-4xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">RECIBO CFE
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://loginsso.telmex.com/nidp/idff/sso?id=custom-telmex&sid=0&option=credential&sid=0&target=https%3A%2F%2Fmitelmex.telmex.com%2Fweb%2Fmitelmex-hogar%2Fhome" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[iconoir--internet] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">RECIBO TELMEX</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                         <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://portal.facturaelectronica.sat.gob.mx/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[ph--circles-four-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">FACTURA SAT
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://www.facturafiel.com/portal/" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[si--fact-check-fill] text-3xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">FACTURA FIEL
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-white p-4">
                            <div
                                class="max-w-sm h-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow shadow-xl flex items-center justify-center hover:scale-105 duration-500">
                                <a href="https://chat.deepseek.com/sign_in" target="_blank">
                                    <div class="flex gap-2 flex-col justify-center items-center">
                                        <i class="icon-[mingcute--ai-fill] text-4xl" style="color: #000000;"></i>
                                        <h5 class="text-2xl font-semibold tracking-tight text-gray-900">IA</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection