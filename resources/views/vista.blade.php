<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="flex justify-between mt-10">
            <h1 class=" text-sky-600 font-bold">Nuevo Personal</h1>
            <a class="w-20 mt-5 btn btn-primary  sm:mt-0 bg-sky-600 rounded-2xl p-4 text-center text-white" href="lista" >lista</a>
    </div>
    
    <div class="w-full px-0 pt-5 pb-6 mx-auto mt-4 mb-0 space-y-4 bg-transparent border-0 border-gray-200 rounded-lg md:bg-white md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12 md:px-6 sm:mt-8 sm:mb-5 flex justify-center">
         <form action="api/formulario" method="post" class="pb-1 space-y-4" >
            Nombres <input type="text" name="nombre" class="block border border-black"> 
            Apellidos <input type="text" name="apellido" class="block border border-black">
            Email <input type="text" name="email" class="block border border-black">
            contrasena <input type="text" name="contrasena" class="block border border-black">
         <input type="submit" class="w-full mt-5 btn btn-primary sm:w-auto sm:mt-0 bg-sky-600 rounded-2xl p-2">
    </form>
    </div>
   
   
</body>
</html>