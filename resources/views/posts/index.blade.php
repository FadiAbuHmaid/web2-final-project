<!DOCTYPE html>
<html dir="ltr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Article</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet" >
    </head>
    <body style="background-color:rgba(55,95,99,0.3)">


    <div class="container max-w-full mx-auto pt-4 ">
    <form method="POST" action="posts/store">
    {{ csrf_field()}}

    <a class="text-4xl font-bold  mb-4 mr-96"> مقالات  </a>

    <br>

    <a href="/posts/create" class=" mt-16 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >انشاء مقالة</a>
    <br class="mt-10">


    </form>

    
    
    
    

    @foreach ($posts as $post)
    <article class="mb-2">

    <h2 class="text-x1 font-bold inline mr-80  text-blue-900 mb-5">{{$post->title}}</h2>
    
    <form class="inline "  method="GET" action="/posts/{{$post->id}}">
        @csrf 
        @method('DELETE')
        <a href="/posts/{{$post->id}}/show" class="mr-3 mt-10 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">اظهر</a>
    <a class="mr-3 mt-10 bg-blue-500 tracking-wide text-white px-6 py-2 inline mb-6 shadow-lg rounded hover:shadow" href="/posts/{{$post->id}}/edit">تعديل</a>

        <button class="mt-3 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >حذف</button>
    </form>
    <hr class="mt-5">
    </article>
   
    @endforeach
    </div> 
    

    

    </body>

    </html>