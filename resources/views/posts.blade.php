<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blogs</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="py-2 bg-blue-900 ">
        <span class="block max-w-screen-md mx-auto text-2xl font-bold text-white ">GDSC Blog</span>
    </div>

    <div class="max-w-screen-md pt-8 mx-auto">

        <div class="flex justify-between">
            <h1 class="mb-8 text-4xl font-bold text-blue-900">Welcome to GDSC Blog</h1>
            <a href="/posts/create"
                class="px-4 py-2 text-white transition bg-blue-900 rounded-lg h-fit hover:bg-blue-950">Create
                Post</a>
        </div>

        <hr class="mb-4">

        @foreach ($posts as $post)
            <a href="/posts/{{ $post['id'] }}"
                class="block px-6 py-4 mb-4 transition border rounded-md hover:bg-slate-100">
                <span class="block mb-2 text-2xl font-medium ">{{ $post['title'] }}</span>
                <p>{{ $post['body'] }}</p>
            </a>
        @endforeach
    </div>
</body>

</html>
