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
    <div class="flex justify-between my-10">
        <h1 class="mx-5 text-center w-32 bg-slate-400 font-bold rounded-xl ">lista de usuarios</h1>
        <a class="bg-slate-700 text-white font-extralight w-28 p-1 m-auto" href="vista">usuario nuevo</a>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">NOMBRE</th>
                    <th scope="col" class="px-6 py-3">APELLIDO</th>
                    <th scope="col" class="px-6 py-3">EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lista as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ $item->nombre }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ $item->apellido }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ $item->email }}
                        </th>
                    </tr>
                @empty
                    <tr>
                        sin usuarios
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>




</body>

</html>
