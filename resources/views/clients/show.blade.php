@extends('layouts.app')
@section('content')
    <div class="py-12">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <div class="container mx-auto p-12">
                    <div class="pb-10">

                        <p class="text-center font-bold text-2xl "><i class="fa-solid fa-circle  fa-xs mr-1"
                                style="{{ $client->status === 'active' ? 'color: #1bc70f;' : 'color: #ef0b2d;' }} "></i>
                            {{ $client->full_name }} </p>

                        <div class="flex justify-center"><span class="label-text-alt ">Cliente de
                                {{ $client->counter->full_name }}</span></div>
                    </div>




                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion personal</h2>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->email ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->email ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="rfc" class="block text-sm font-medium leading-6 text-gray-900">Fecha de
                                        nacimiento</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->birthdate ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->birthdate ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>


                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">RFC</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->birthdate ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->birthdate ?? 'Sin datos existentes' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">CURP</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->curp ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->curp ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->phone ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->phone ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                                    <div class="mt-2 input input-filled peer" style="max-height: 4rem; overflow-y: auto;">
                                        <p class="{{ $client->address ? '' : 'text-gray-400 italic' }}"
                                            style="word-wrap: break-word;">
                                            {{ $client->address ?? 'Sin datos existentes' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                                    <div class="mt-2 input input-filled peer ">
                                        <p class="{{ $client->city ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->city ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">CP</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->cp ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->cp ?? 'sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->state ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->state ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp "
                                        class="block text-sm font-medium leading-6 text-gray-900">Regimen</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->regimen ? '' : 'text-gray-400 italic ' }}">
                                            {{ $client->regimen ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>



                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">NSS</label>
                                    <div class="mt-2 input input-filled peer ">
                                        <p class="{{ $client->nss ? '' : 'text-gray-400 italic ' }}">
                                            {{ $client->nss ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Contraseña SIEC</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp" class="block text-sm font-medium leading-6 text-gray-900">Usuario
                                        IDSE</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Contraseña IDSE</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp" class="block text-sm font-medium leading-6 text-gray-900">Usuario
                                        SIPARE</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Contraseña SIPARE</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nota</label>
                                    <div class="mt-2 input input-filled peer" style="max-height: 4rem; overflow-y: auto;">
                                        <p class="{{ $client->address ? '' : 'text-gray-400 italic' }}"
                                            style="word-wrap: break-word;">
                                            {{ $client->address ?? 'Sin datos existentes' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 form-control w-full sm:w-96">
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Token</label>
                                    <div class="mt-2 input input-filled peer">
                                        <p class="{{ $client->rfc_user ? '' : 'text-gray-400 italic' }}">
                                            {{ $client->rfc_user ?? 'Sin datos existentes' }} </p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="scroll-inside-modal" data-overlay="#scroll-inside-modal"> <span
                                        class="icon-[fluent-color--document-folder-24]"></span> </button>

                                <div id="scroll-inside-modal" class="overlay modal overlay-open:opacity-100 hidden"
                                    role="dialog" tabindex="-1">
                                    <div class="modal-dialog overlay-open:opacity-100">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Documentos</h3>
                                                <button type="button"
                                                    class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                                    aria-label="Close" data-overlay="#scroll-inside-modal">
                                                    <span class="icon-[tabler--x] size-4"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body ">
                                                @foreach ($client->document as $document)
                                                    <div class="flex justify-between items-center mb-3  ">
                                                        <div class="flex items-center gap-x-3 ">
                                                            <span class="icon-[fa6-solid--file-pdf]"
                                                                style="width: 25px; height: 25px; color: #c91818;"></span>

                                                            <p>{{ $document->title }}</p>

                                                        </div>

                                                        <div class="flex items-center gap-x-2">
                                                            <button
                                                                class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                                                aria-label="Facebook Icon Button">
                                                                <span class="icon-[ic--round-download]"
                                                                    style="width: 25px; height: 25px; color: #3791f1;"></span>
                                                            </button>
                                                            <button
                                                                class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                                                aria-label="Facebook Icon Button">
                                                                <span class="icon-[tdesign--delete-1]"
                                                                    style="width: 25px; height: 25px; color: #d00610;"></span>
                                                            </button>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-soft btn-secondary"
                                                    data-overlay="#scroll-inside-modal">Close</button>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" aria-haspopup="dialog"
                                                        aria-expanded="false" aria-controls="toggle-bn-second-modal"
                                                        data-overlay="#toggle-bn-second-modal">
                                                        Open second modal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="toggle-bn-second-modal" class="overlay modal overlay-open:opacity-100 hidden"
                                    role="dialog" tabindex="-1">
                                    <div class="modal-dialog overlay-open:opacity-100">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Subir </h3>
                                                <button type="button"
                                                    class="btn btn-text btn-circle btn-sm absolute end-3 top-3"
                                                    aria-label="Close" data-overlay="#scroll-inside-modal"><span
                                                        class="icon-[tabler--x] size-4"></span></button>
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
                                                        </label>
                                                        <label class="form-control w-full">
                                                            <div class="label">
                                                                <span class="label-text">Documento PDF</span>
                                                            </div>
                                                            <input type="file" name="file_path" class="input" />
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            aria-haspopup="dialog" aria-expanded="false"
                                                            aria-controls="scroll-inside-modal"
                                                            data-overlay="#scroll-inside-modal">Regresar</button>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Subir</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="mt-4 flex items-center justify-end gap-x-6 pb-4 pr-3">
                            <a href="{{ url()->previous() }}" class="btn btn-soft btn-secondary">Cancelar</a>
                            <a href="#" class="btn btn-soft btn-accent">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
