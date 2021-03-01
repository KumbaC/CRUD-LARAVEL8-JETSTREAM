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
    <center><div class="flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10">
        <div class="col-span-2 lg:col-span-1">
            <h1 class="max-w-3xl text-5xl md:text-6xl font-bold mx-auto dark:text-white text-gray-800 text-center py-2">Actualizar Productos</h1> 
        {!! Form::model($producto,['route' => ['productos.update',$producto], 'autocomplete' => 'off', 'method' => 'put']) !!}
        {!! Form::hidden('user_id',auth()->user()->id) !!}
            <div class="col-span-2">
           {!! Form::text('name' ,null, ['class' => ' rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'placeholder' => 'Ingrese el name del producto', 'required'])!!}
           </div>
    
           <div class="col-span-2">
            {!! Form::text('slug' ,null, ['class' => 'disabled rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-200 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'placeholder' => 'Ingrese el slug', 'readonly' => 'readonly', 'required'])!!}
            </div>
    
            <div class="col-span-2">
                {!! Form::number('stock' ,null, ['class' => ' rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'placeholder' => 'Ingrese el stock del producto', 'required'])!!}
                </div>
                <br>
    
           <div class="col-span-2 text-right">
        {!! Form::Submit('Actualizar', ['class' => 'py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg', 'required']) !!}
           </div>
        {!! Form::close() !!}
        </div>
    </div></center>

</div>

@livewireScripts

<script src="{{asset('storage/js/jquery/jquery.js')}}"></script>
<script src="{{asset('storage/js/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js')}}"></script>
<script>
$(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

</script>