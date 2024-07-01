<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title> {{ config('app.name') }} </title>
</head>

<body class="m-0 p-0 box-border font-sans-serif bg-gray-900">
    <nav class="flex">
        <div
            class="mt-4 border-2 border-gray-700 w-52 py-2 rounded-3xl flex items-center justify-center space-x-14 mx-auto">
            <a href="#"
                class="text-green-500 transition-all duration-150 ease-in hover:text-green-700 text-xl">Home</a>
            <a href="#"
                class="text-gray-100 transition-all duration-150 ease-in hover:text-gray-300 text-xl">About</a>
        </div>
    </nav>

    <div class="flex items-center justify-center mt-8">
        <h2 class="text-gray-100 text-3xl">To Do List</h2>
    </div>

    <hr class="mt-2 w-2/5 flex items-center justify-center mx-auto border-2 rounded-full border-green-700">

    <div class="mt-8">
        <div class="w-3/4 mx-auto">
            <div class="flex items-center justify-center mt-10">
                <textarea name="textarea" id="textarea" cols="60" rows="1" placeholder="Add Task..."
                    class="bg-gray-800 resize-none w-3/5 rounded-2xl px-3 py-2 text-gray-100"></textarea>
            </div>
        </div>
    </div>

    @foreach ($tasks as $task)
        <div class="mt-4">
            <h2 class="text-white"> {{ $task->task }} </h2>
        </div>
    @endforeach

</body>

</html>
