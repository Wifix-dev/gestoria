@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')


<div class="h-48 lg:h-56  relative overflow-hidden bg-indigo-950 z-0  ">
    <x-fondo class="max-w-full "></x-fondo>
</div>
<div class="w-full max-w-6xl mt-24 absolute  mx-auto z-0 inset-x-0 top-0 pb-12">
    <div class="flex items-center pb-6 overflow-x-auto whitespace-nowrap px-5 pt-2 lg:pt-6 lg:px-0 ">
        <a href="#" class="text-white ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-3 text-white ">
            /
        </span>

        <a href="#" class="text-white ">
            Denuncia o Peticion
        </a>
        <span class="mx-3 text-white ">
            /
        </span>
        <a href="#" class="text-white ">
            Detalles
        </a>
        <span class="mx-3 text-white ">
            /
        </span>
        <a href="#" class=" text-blue-400 ">
            {{$denouncement->id}}
        </a>
    </div>
    <div class="mx-2 lg:mx-0 bg-white p-6 lg:p-12 rounded shadow">
        <div class="relative">
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-3">
                <!-- Status Report -->
                <div class="font-bold bg-white px-6  ">
                    <div class="space-y-5 border-l-2 border-dashed sticky top-24">
                        <div class="-ml-3.5">
                            <h4 class="text-xl text-gray-900 font-bold">Estado de la Denuncia</h4>
                        </div>
                        <div class="relative w-full pt-0 mt-0">
                            <p class="ml-6 text-base font-semibold  mt-0">En espera a revision</p>
                            @switch($denouncement->status)
                            @case('En espera')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-400 animate-rotate-x-infinite ">
                                    <i class="bi bi-hourglass "></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-400">Pendiente</h4>
                                </div>
                            </div>
                            @break
                            @case('Revisada')
                            @default
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-500">
                                    <i class="bi bi-patch-check-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-500">Revisada</h4>
                                </div>
                            </div>
                            @endswitch
                        </div>
                        <div class="relative w-full">
                            <p class="ml-6 text-base font-semibold">Recepcion de solicitud</p>
                            @switch($denouncement->status)
                            @case('Revisada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-500 animate-rotate-x-infinite">
                                    <i class="bi bi-hourglass"></i>
                                </span>

                                <div class="ml-6">
                                    <h4 class="text-md text-gray-500">En espera</h4>
                                </div>
                            </div>
                            @break
                            @case('Aceptada')
                            @case('En proceso')
                            @case('Terminada')
                            @case('Pendiente a comentarios')
                            @case('Cerrada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-500">
                                    <i class="bi bi-patch-check-fill "></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-500">Aceptada</h4>
                                </div>
                            </div>
                            @break
                            @case('Rechazada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-red-500 animate-bounce ">
                                    <i class="bi bi-clipboard-x-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-red-500">Rechazada</h4>
                                </div>
                            </div>
                            @break
                            @default
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-400">
                                    <i class="bi bi-stopwatch-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-400">Pendiente</h4>
                                </div>
                            </div>
                            @endswitch
                        </div>
                        <div class="relative w-full">
                            <p class="ml-6 text-base font-semibold">Solucion</p>
                            @switch($denouncement->status)
                            @case('Terminada')
                            @case('Pendiente a comentarios')
                            @case('Cerrada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-500">
                                    <i class="bi bi-patch-check-fill "></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-500">Terminada</h4>
                                </div>
                            </div>
                            @break

                            @case('En proceso')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-400  animate-bounce ">
                                    <i class="bi bi-gear-fill animate-bounce  "></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-400">En proceso</h4>
                                </div>
                            </div>
                            @break
                            @case('Rechazada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-red-500  ">
                                    <i class="bi bi-clipboard-x-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-red-500">Rechazada</h4>
                                </div>
                            </div>
                            @break

                            @default
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-400">
                                    <i class="bi bi-stopwatch-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-400">Pendiente</h4>
                                </div>
                            </div>
                            @endswitch
                        </div>
                    </div>
                </div>
                <!-- Status Report -->
                <div class="min-h-24 w-full col-span-2 rounded  lg:mt-0">
                    <section>
                        @if ($denouncement->status == "Rechazada")
                        <div
                            class="lg:mt-0 mt-3 hover:red-yellow-500 w-full mb-2 select-none border-l-4 border-red-400 bg-red-100 p-3 font-medium">
                            Su solicitud ha sido rechazada verifique los comentarios.</div>
                        @elseif($denouncement->status == "Terminada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-orange-400 bg-orange-100 p-4 font-medium hover:border-orange-500">
                            Pendiente a comentarios finales y agradecimientos adicionales.</div>
                        @elseif($denouncement->status == "Cerrada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-blue-400 bg-blue-100 p-4 font-medium hover:border-blue-500">
                            Su peticion ha sido cumplida.</div>
                        @elseif(session('success'))
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-indigo-400 bg-indigo-100 p-4 font-medium hover:border-indigo-500">
                            {{ session('success') }}</div>
                        @endif
                    </section>

                    @if ($denouncement->status == "Rechazada")
                    <div class="mt-4">
                        <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                            :value="__('Razones de rechazo')" />
                        <textarea type="text"
                            class="mt-1 p-2 w-full border rounded-md text-sm text-gray-700 capitalize  "
                            id="final_comments" name="final_comments" style="height:150px;"
                            disabled>{{$denouncement->final_comments}}</textarea>
                    </div>
                    @endif

                    @if($denouncement->status=="Terminada" || $denouncement->status=="Cerrada")
                    <form id="upload-form" class="" method="POST" action="{{ route('user.closecase') }}">
                        @csrf
                        <div class="row g-3">
                            <input class="form-control" type="text" value="{{$denouncement->id}}" name="id" hidden>
                            <div class="col-md-12 ">
                                @if($denouncement->status=="Cerrada" && $denouncement->final_comments!="")
                                <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                                    :value="__('Comentarios Finales')" />
                                <textarea type="text"
                                    class="mt-1 p-2 w-full border rounded-md disabled text-sm text-gray-700"
                                    id="final_comments" name="final_comments" style="height:150px;"
                                    disabled>{{$denouncement->final_comments}}</textarea>
                                @else
                                <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                                    :value="__('Comentarios o Agradecimientos')" />
                                <textarea type="text"
                                    class="mt-1 p-2 w-full border rounded-md text-sm font-light text-gray-700"
                                    id="final_comments" name="final_comments" style="height:150px;"></textarea>
                                @endif
                            </div>
                            @if($denouncement->status!="Cerrada")

                            <div class=" flex justify-end">
                                <button type="submit"
                                    class=" bg-slate-950 text-white rounded border-0 py-2 px-5 hover:bg-slate-800"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
                            </div>
                            @endif
                        </div>
                    </form>
                    @endif

                    <div class="flex flex-col space-y-5">
                        <div>
                            <x-label for="case_name" class="block text-sm font-medium text-gray-700"
                                :value="__('Asunto')" />
                            <input id="case_name" class="mt-1 p-2 w-full border rounded-md disabled text-gray-500"
                                aria-label="Default select example " name="case_name"
                                value="{{$denouncement->case_name}}" disabled></input>
                        </div>
                        <div>
                            <x-label for="id_type_denouncement" class="block text-sm font-medium text-gray-700 bg-white"
                                :value="__('Tipo de peticion')" />
                            <div class="relative">
                                <select id="id_type_denouncement" name="id_type_denouncement"
                                    class="mt-1 p-2 w-full border rounded-md appearance-none disabled"
                                    aria-label="Default select example" disabled>
                                    <option value="">Selecciona una opción</option>
                                    @foreach($list as $option)
                                    <option value="{{ $option->id }}"
                                        {{ old('id_type_denouncement', $denouncement->id_type_denouncement) == $option->id ? 'selected' : '' }}>
                                        {{ $option->type_service }}
                                    </option>
                                    @endforeach
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-0 h-full w-6 text-gray-400 mt-1"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <x-label for="quill-editor" class="block text-sm font-medium text-gray-700 mb-1"
                                :value="__('Contenido de la peticion')" />
                            <div id="quill-editor"
                                class="quill-editor-default p-2 w-full border rounded-b-md border-slate-300 "
                                style="height: 250px; background-color:#fff; "></div>
                        </div>
                        <div class="grid grid-col-1 lg:grid-cols-2 gap-3">
                            <div class="lg:col-span-2">
                                <x-label for="address" class="block text-sm font-medium text-gray-700"
                                    :value="__('Direccion')" />
                                <input id="address" class="mt-1 p-2 w-full border rounded-md text-gray-500"
                                    aria-label="Default select example " name="address"
                                    value="{{$contact->address}}"></input>
                            </div>
                            <div>
                                <x-label for="phone" class="block text-sm font-medium text-gray-700"
                                    :value="__('Telefono')" />
                                <input id="phone" class="mt-1 p-2 w-full border rounded-md text-gray-500 "
                                    aria-label="Default select example " name="phone"
                                    value="{{$contact->phone}}"></input>
                            </div>
                            <div>
                                <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700"
                                    :value="__('Horario de contacto')" />
                                <input id="contact_schedule" class="mt-1 p-2 w-full border rounded-md text-gray-500 "
                                    aria-label="Default select example " name="contact_schedule"
                                    value="{{$contact->contact_schedule}}"></input>
                            </div>
                        </div>
                    </div>

                    <!-- component -->
<div
  class="relative flex h-64 w-96 cursor-pointer flex-col overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-md transition-opacity hover:opacity-90"
  data-dialog-target="image-dialog"
>
  <img
    alt="nature"
    class="h-full w-full object-cover object-center"
    src="https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2717&amp;q=80"
  />
</div>
<div
  data-dialog-backdrop="image-dialog"
  data-dialog-backdrop-close="true"
  class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
>
  <div
    class="relative m-4 w-3/4 min-w-[75%] max-w-[75%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
    role="dialog"
    data-dialog="image-dialog"
  >
    <div class="flex shrink-0 items-center justify-between p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased">
      <div class="flex items-center gap-3">
        <img
          alt="tania andrew"
          src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
          class="relative inline-block h-9 w-9 rounded-full object-cover object-center"
        />
        <div class="-mt-px flex flex-col">
          <p class="block font-sans text-sm font-medium leading-normal text-blue-gray-900 antialiased">
            Tania Andrew
          </p>
          <p class="block font-sans text-xs font-normal text-gray-700 antialiased">
            @canwu
          </p>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <button
          class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button"
          data-ripple-dark="true"
        >
          <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              aria-hidden="true"
              class="h-5 w-5"
            >
              <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
            </svg>
          </span>
        </button>
        <button
          class="select-none rounded-lg bg-green-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button"
          data-ripple-light="true"
        >
          Free Download
        </button>
      </div>
    </div>
    <div class="relative border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 p-0 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
      <img
        alt="nature"
        class="h-[48rem] w-full object-cover object-center"
        src="https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2717&amp;q=80"
      />
    </div>
    <div class="flex shrink-0 flex-wrap items-center justify-between p-4 text-blue-gray-500">
      <div class="flex items-center gap-16">
        <div>
          <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
            Views
          </p>
          <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
            44,082,044
          </p>
        </div>
        <div>
          <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
            Downloads
          </p>
          <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
            553,031
          </p>
        </div>
      </div>
      <button
        class="flex select-none items-center gap-3 rounded-lg border border-blue-gray-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-500 transition-all hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
        data-ripple-dark="true"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          aria-hidden="true"
          class="h-4 w-4"
        >
          <path
            fill-rule="evenodd"
            d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z"
            clip-rule="evenodd"
          ></path>
        </svg>
        Share
      </button>
    </div>
  </div>
</div>
<div class="w-full pt-5 px-4 mb-8 mx-auto ">
    <div class="text-sm text-gray-700 py-1">
        Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/docs/html/dialog?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
    </div>
</div>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

<!-- stylesheet -->
<link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>

                    <div data-dialog-backdrop="image-dialog" data-dialog-backdrop-close="true"
                        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div class="relative m-4 w-3/4 min-w-[75%] max-w-[75%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
                            role="dialog" data-dialog="image-dialog">
                            <div
                                class="flex shrink-0 items-center justify-between p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased">
                                <div class="flex items-center gap-3">
                                    <img alt="tania andrew"
                                        src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                                        class="relative inline-block h-9 w-9 rounded-full object-cover object-center" />
                                    <div class="-mt-px flex flex-col">
                                        <p
                                            class="block font-sans text-sm font-medium leading-normal text-blue-gray-900 antialiased">
                                            Tania Andrew
                                        </p>
                                        <p class="block font-sans text-xs font-normal text-gray-700 antialiased">
                                            @canwu
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button
                                        class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                        type="button" data-ripple-dark="true">
                                        <span
                                            class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                                <path
                                                    d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="select-none rounded-lg bg-green-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                        type="button" data-ripple-light="true">
                                        Free Download
                                    </button>
                                </div>
                            </div>
                            <div
                                class="relative border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 p-0 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
                                <img id="ImageModal" alt="nature" class="h-[32rem] w-auto mx-auto object-cover object-center" />
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto  w-full mt-6 p-3 bg-gray-50 ">
                        @if(!empty($imagePaths))
                        @foreach($imagePaths as $image)
                        <div class="h-24 w-44 relative group" data-dialog-target="image-dialog">
                            <img src="{{ asset($image)}}" alt="Evidencia Inicial"
                                class="w-full h-full object-cover rounded-md relative z-0" data-bs-toggle="modal"
                                data-bs-target="#imageModal" onclick="showImageModal('{{ asset($image)}}')">
                        </div>
                        <diV class="h-24 w-44 relative group " style="margin-right: 10px;">
                            <div
                                class="w-full hidden group-hover:block h-full bg-transparent rounded-md transition ease-in delay-150 hover:bg-slate-950 z-10 hover:bg-opacity-50 absolute ">
                                <a href="{{ asset($image) }}" download
                                    class="transition ease-in delay-300 px-2 py-1 text-white bg-black m-2 rounded absolute opacity-0 group-hover:opacity-100">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                            <img src="{{ asset($image)}}" alt="Evidencia Inicial"
                                class="w-full h-full object-cover rounded-md relative z-0" data-bs-toggle="modal"
                                data-bs-target="#imageModal" onclick="showImageModal('{{ asset($image)}}')">
                        </div>
                        @endforeach
                        @else
                        <p>No hay evidencia inicial.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="card-body p-3 pt-0">
    <div id="preview" class="d-flex flex-row overflow-auto m-0 rounded">

    </div>
</div>
<style>
@keyframes rotate-x {
    0% {
        transform: rotateX(0deg);
    }

    50% {
        transform: rotateX(180deg);
    }

    100% {
        transform: rotateX(360deg);
    }
}

.animate-rotate-x-infinite {
    animation-name: rotate-x;
    animation-iteration-count: infinite;
    animation-duration: 4000ms;
}

.ql-toolbar.ql-snow {
    border-radius: 0.375rem 0.375rem 0 0 !important;
    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-color: #e5e7eb !important;
}

#quill-editor {
    border-radius: 0 0 0.375rem 0.375rem !important;

    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-top: 0 !important;
    border-color: #e5e7eb !important;
}
</style>



@if($denouncement->status == "Terminada" || $denouncement->status == "Cerrada")
<div class="card shadow-none border p-0">
    <div class="card-header pb-1 pt-3 bg-light ">
        <div class="pagetitle ">
            <h3 class="fs-6 fw-normal">Evidencia Final</h3>
        </div>
    </div>
    <div class="card-body p-md-4 pt-3 ">
        <div class="d-flex flex-row p-0 m-0">
            @if(!empty($finalImagePaths))
            @foreach($finalImagePaths as $imagen)

            <div class="m-0 pe-3 mt-sm-3 mt-md-0 position-relative" style="margin-right: 10px;">
                <a href="{{ $imagen }}" download class="btn btn-dark m-2 position-absolute"><i
                        class="bi bi-download"></i> </a>
                <img src="{{ $imagen }}" alt="Evidencia Inicial" style="height: 200px;" class="rounded-3 "
                    data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('{{ $imagen }}')">
            </div>
            @endforeach
            @else
            <p>No hay evidencia inicial.</p>
            @endif
        </div>
    </div>
</div>
@endif


<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>


<script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>

<script>
function showImageModal(imagen) {
    let im = document.getElementById("ImageModal");
    im.src = imagen;
}

$(document).ready(function() {
    var selectedFiles = [];

    var quill = new Quill('#quill-editor', {
        theme: 'snow',
        readOnly: true,
    });
    quill.root.innerHTML = `{!! $denouncement->description !!}`;
});
</script>
@endsection
