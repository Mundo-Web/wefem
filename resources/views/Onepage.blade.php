<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundoweb - Onepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    {{-- <link href="./output.css" rel="stylesheet">
    <script src="../resource/js/jquery-3.7.1.min.js"></script>
    <script src="../resource/js/slick.min.js"></script>  --}}
    <!-- <link src="../resource/css/slick-theme.css" /> 
    <link src="../resource/css/slick.css" /> -->
  
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    --}}
</head>


<body class="font-sans  bg-azuloscuro textura" >
<div class=" inset-0 bg-azuloscuro bg-opacity-75">
  <!-- Encabezado superpuesto -->
  <header class=" text-white px-[5%]  w-full  xs:pt-10 lg:pt-20 h-20 flex justify-between items-center">
    <div class="items-center inline-flex xs:w-6/12 xl:w-3/12 "> 
      <a href="{{ route('inicio') }}"><img src="{{ asset('img/logomundoweb.svg')}}" class="h-full xs:w-52 xl:w-64 "> </a>
    </div>
  
    <div class="inline-flex items-center xs:w-0/12 xl:w-6/12"> 
      
    </div>
  
    <div class="inline-flex items-center xs:w-6/12 xl:w-3/12 justify-end"> 
     <div class="group">
        <a type="button" class=" float-right text-lg bg-fondoboton text-white px-2 py-3 rounded-full w-auto inline-block  group-hover:pl-3 group-hover:border-4 group-hover:border-white transition-all  duration-500" >
            <img src="{{ asset('img/menu-03.svg')}}" alt="Flecha a la derecha" class="h-10 w-10 ml-2 inline-block  "></a> 
      </div>   
    </div>
  </header>
  

  <!-- Contenido principal -->
  <div class=" grid  grid-cols-12 xs:min-w-96  xs:h-full   ">

      <!-- Columna 1 (60%) -->
      <div class="xs:col-span-12  lg:col-span-5 w-full h-full  p-4  text-left  flex flex-col justify-center items-center mx-auto">
       
        <div class="items-center  xs:pt-[5%] md:pt-[5%] lg:pt-[5%]  xs:px-[2%] md:px-[8%] ">
          <h1 class="xs:text-4xl xl:text-6xl  text-white w-full font-bold  ">
            One Page: Tu <br>Mensaje, Tu <br> Mundo Digital <br>en una Página
          </h1>
          <p class="xs:text-base xl:text-lg text-white  font-normal mt-10">Descubre el poder de la simplicidad con nuestras One Page. Condensamos 
            tu mensaje en una sola página, maximizando el impacto y la accesibilidad. ¡Diseño eficiente para resultados extraordinarios!</p>
          <div class="group mt-8 inline-block ">   
            <a type="button" href="{{ route('contacto') }}" class="text-lg bg-fondoboton text-white  px-6 py-3 rounded-full w-auto inline-block text-center mt-6  group-hover:pl-3 group-hover:border-4 group-hover:border-white transition-all  duration-500" >
             <span class="group-hover:pr-3 transition-all  duration-500">Quiero mi One Page</span><img src="{{ asset('img/iconbutton.svg')}}" alt="Flecha a la derecha" class="h-10 w-10 ml-2 inline-block group-hover:rotate-45 transition-all duration-500"></a>  
          </div>
          

        </div>
      </div>

      <!-- Columna 2 (40%) -->
      <div class="xs:col-span-12 lg:col-span-7  flex ">
         
          <div class="xs:w-[100%] lg:w-[100%] min-h-96 md:h-[100%]   justify-center items-center relative ">
            <img class="w-full h-full object-cover self-start" src="{{ asset('img/fondoonepage.png')}}">
          </div>
          
      </div>

  </div>

  <!-- Pie de página -->
  <footer class="grid grid-cols-12 h-auto text-right items-center justify-between px-[5%] pb-[3%] pt-[1%]">
   
    <div class="xs:col-span-12 lg:col-span-4 ">

       <div class="flex justify-start"> 
          <div class="group">
            <a type="button" href="{{ route('servicios') }}" class="rounded-full w-auto inline-block" >
                <img src="{{ asset('img/arrowleftup.svg')}}" alt="Flecha a la derecha" class="h-16 w-16  inline-block group-hover:-rotate-45 transition-all duration-500"></a>  
          </div>  
        </div>

    </div>

    <div  class="xs:col-span-12 lg:col-span-4">

    </div>

    <div  class="xs:col-span-12 lg:col-span-4 ">

        <div class="group  items-center  justify-end inline-block">   
            <a type="button" href="{{ route('landingpage') }}"  class=" text-lg  text-white  rounded-full w-auto inline-block text-center   group-hover:pl-3   transition-all  duration-500 " >
            <span class="group-hover:pr-3 transition-all  duration-500">Servicio: Landing Page</span><img src="{{ asset('img/arrowright.svg')}}" alt="Flecha a la derecha" class="h-12 w-12 ml-2 inline-block group-hover:rotate-45 transition-all duration-500"></a>  
        </div>
    
    </div>

  </footer>

  
</div>
</body>
</html>





