<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries">
    </script>

            <style type="text/tailwindcss">
            @layer utilities{
                .container{
                    @apply px-10 mx-auto;
                }
                .btn{
                    @apply bg-green-600 text-white rounded px-3 mx-auto;
                }
            }
            </style>

</head>
<body>

    <div class="container">
        <div class="flex justify-between">
            <h1 class="text-xl text-red-400 mx-3"> Home</h1>
            <a href="/create" class="btn">Create</a>
        </div>

        @if (session('success'))
        <h2 class="text-green-700">{{session('success')}} </h2>
        @endif



        <div class="">
            

<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="bg-neutral-secondary-soft border-b border-default">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Image
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)

            <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    {{$post->id}}
                </th>
                <td class="px-6 py-4">
                    {{$post->name}}
                </td>
                <td class="px-6 py-4">
                    {{$post->description}}
                </td>
                <td class="px-6 py-4">
                    <img src="images/{{$post->image}}" width="80px" alt="">
                 </td>
                <td class="px-6 py-4">
                    <a href="{{route('edit',$post->id)}}" class="btn">Edit</a>
                </td>
            </tr>
                    @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
    
</body>
</html>