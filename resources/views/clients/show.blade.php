@extends('layouts.app')
@section('content')
    <div class="py-12">
        @include('layouts.list.sidebar')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                <div class="container mx-auto p-12">
                    <div class="pb-11">

                        <p class="text-center font-bold text-2xl "><i class="fa-solid fa-circle  fa-xs mr-1"
                                title="{{ $client->status === 'active' ? 'Usuario Activo' : 'Usuario Inactivo' }}"
                                style="{{ $client->status === 'active' ? 'color: #1bc70f;' : 'color: #ef0b2d;' }} "></i>
                            {{ $client->full_name }} </p>


                        <div class="flex justify-center"><span class="label-text-alt ">Cliente de
                                {{ $client->counter->full_name }}</span>
                        </div>

                    </div>
                    @if (@session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 m-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif




                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">

                            <div class="flex gap-1">
                                <div class="items-center gap-x-3">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion personal</h2>
                                </div>
                                <div class="dropdown relative inline-flex rtl:[--placement:bottom-end] mt-0.5">
                                    <button id="dropdown-menu-icon " type="button" 
                                        class="dropdown-toggle btn btn-square btn-text btn-xs" aria-haspopup="menu"
                                        aria-expanded="false" aria-label="Dropdown">
                                        <span class="icon-[solar--alt-arrow-down-linear] size-6"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-10" role="menu"
                                        aria-orientation="vertical" aria-labelledby="dropdown-menu-icon">
                                        <li> <a type="button" class="dropdown-item" href="#" aria-haspopup="dialog" alt="Ver documentos"
                                        title="Ver documentos" aria-expanded="false" aria-controls="scroll-inside-modal"
                                        data-overlay="#scroll-inside-modal">Documentos </a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Billing</a></li>
                                        <li><a class="dropdown-item" href="#">FAQs</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <!-- Modal 1 para ver documentos -->
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
                                                                <a href="{{ route('file.download', $document->id) }}"
                                                                    target="_blank"
                                                                    class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                                                    aria-label="Facebook Icon Button">
                                                                    <span class="icon-[ic--round-download]"
                                                                        style="width: 25px; height: 25px; color: #3791f1;"></span>
                                                                </a>
                                                                <a href="{{ asset('storage/' . $document->file_path) }}"
                                                                    target="_blank"
                                                                    class="btn btn-square   text-white  hover:border-[#f8fafc] hover:bg-opaciti-95[#1877F2]/90"
                                                                    aria-label="Facebook Icon Button">
                                                                    <span class="icon-[weui--eyes-on-outlined]"
                                                                        style="width: 24px; height: 24px; color: #1cbe9d;"></span>
                                                                </a>
                                                                <form action="{{ route('file.destroy', $document->id) }}"
                                                                    method="post">
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
                                                    <button type="button" class="btn btn-soft btn-secondary"
                                                        data-overlay="#scroll-inside-modal">Close</button>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            aria-haspopup="dialog" aria-expanded="false"
                                                            aria-controls="toggle-bn-second-modal"
                                                            data-overlay="#toggle-bn-second-modal">
                                                            Open second modal
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal 2 para subir documento  -->
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
                                                <form action="{{ route('file.store', $client->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body pt-0">
                                                        <div class="mb-0.5  gap-4 max-sm:flex-col">
                                                            <label class="form-control w-full mb-4">
                                                                <div class="label">
                                                                    <span class="label-text">Titulo</span>
                                                                </div>
                                                                <input type="text" name="title"
                                                                    placeholder="Nombre del documento" class="input" />
                                                                @error('title')
                                                                    <span
                                                                        class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
                                                            </label>
                                                            <label class="form-control w-full">
                                                                <div class="label">
                                                                    <span class="label-text">Documento PDF</span>
                                                                </div>
                                                                <input type="file" accept="application/pdf"
                                                                    name="file_path" class="input" />
                                                                @error('file_path')
                                                                    <span
                                                                        class="text-red-500 text-sm">{{ $message }}</span>
                                                                @enderror
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
                                    <label for="rfc" class="block text-sm font-medium leading-6 text-gray-900">Fecha
                                        de
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
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Usuario
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
                                    <label for="curp"
                                        class="block text-sm font-medium leading-6 text-gray-900">Usuario
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
                                    <label for="note"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nota</label>
                                    <div class="mt-2 input input-filled peer" style="max-height: 4rem; overflow-y: auto;">
                                        <p class="{{ $client->note ? '' : 'text-gray-400 italic' }}"
                                            style="word-wrap: break-word;">
                                            {{ $client->note ?? 'Sin datos existentes' }}
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


                            </div>
                        </div>

                        <div class="mt-4 flex items-center justify-end gap-x-6 pb-4 pr-3">
                            <a href="{{ url()->previous() }}" class="btn btn-soft btn-secondary">Cancelar</a>
                            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-soft btn-accent">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
