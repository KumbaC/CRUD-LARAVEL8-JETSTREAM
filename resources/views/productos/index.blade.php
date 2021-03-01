<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>



<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    @if(session('info'))
    <div class="p-4 text-green-600 bg-green-200 border-l-4 border-green-600" role="alert">
        <p class="font-bold">
            Información
        </p>
        <p>
            {{session('info')}}
        </p>
    </div>


  @endif

  @if(session('info2'))
  <div class="p-4 bg-blue-200 border-l-4 border-blue-600 text-white-600" role="alert">
      <p class="font-bold">
          Información
      </p>
      <p>
          {{session('info2')}}
      </p>
  </div>


@endif


@if(session('info3'))
<div class="p-4 text-red-600 bg-red-200 border-l-4 border-red-600" role="alert">
    <p class="font-bold">
        Información
    </p>
    <p>
        {{session('info3')}}
    </p>
</div>


@endif



  <div class="relative h-screen overflow-hidden bg-indigo-900">
    <img src="storage/image/caracas.jpg" class="absolute object-cover w-full h-full"/>
    <div class="absolute inset-0">


<div class="container max-w-3xl px-4 mx-auto sm:px-8">
    <div class="py-8">
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <a href="{{route('productos.create')}}"><button class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2" >Añadir Producto</button></a>
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">

                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Nombre del Producto
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Slug
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Stock
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Publicado por
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Editar
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Eliminar
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($merca as $mercancia)

                        <tr>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#" class="relative block">
                                            <img alt="profil" src="storage/image/interrogacion.gif" class="object-cover w-10 h-10 mx-auto rounded-full "/>
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$mercancia->name}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$mercancia->slug}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$mercancia->stock}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$mercancia->user->name}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <a href="{{route('productos.edit',$mercancia)}}" class="text-indigo-600 hover:text-indigo-900">
                                    Editar
                                </a>
                            </td>
                            <form action="{{route("productos.destroy", $mercancia)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200"><button class="text-indigo-600 hover:text-indigo-900">
                                    Eliminar
                            </button>
                            </td>
                        </form>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                {{$merca->links()}}
            </div>
        </div>
    </div>
</div>


</div>

</div>
</div>
@livewireScripts
