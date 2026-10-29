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
            <h1 class="text-xl text-red-400 mx-3"> create</h1>
            <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded my-3">back to home</a>
        </div>


        <div>
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
               <div class="flex flex-col gap-2">
                <h1>edit Post</h1>

                <label for="name">Name</label>
                 <input type="text" name="name" value="{{old('name')}}">
                 @error('name')
                    <p class="text-red-700">{{ $message }}</p>
                 @enderror

                 <label for="description">description</label>
               <input type="text" name="description" value="{{old('description')}}">
                @error('description')
                    <p class="text-red-700">{{ $message }}</p>
                 @enderror


               <label for="image">select image</label>
                <input type="file" name="image" value="{{old('image')}}">
                 @error('image')
                    <p class="text-red-700">{{ $message }}</p>
                 @enderror

               <div class="flex">
                 <button type="submit" class="bg-blue-400">submit</button>
            </div>
               </div>
            </form>
            
        </div>
    </div>
    
</body>
</html>