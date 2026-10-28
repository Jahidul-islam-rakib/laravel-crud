<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>
<body>

    <div class="container">
        <div class="flex justify-between">
            <h1 class="text-xl text-red-400 mx-3"> Home</h1>
            <a href="create" class="bg-blue-500 text-white px-4 py-2 rounded my-3">Create</a>
        </div>

        @if (session('success'))
        <h2 class="text-green-700">{{session('success')}} </h2>
        @endif
    </div>
    
</body>
</html>