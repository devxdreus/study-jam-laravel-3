<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="py-2 bg-blue-900 ">
        <span class="block max-w-screen-md mx-auto text-2xl font-bold text-white ">GDSC Blog</span>
    </div>

    <div class="max-w-screen-md pt-8 mx-auto">
        <div class="flex justify-between mb-4">
            <a href="/" class="text-xl text-blue-300 underline">Go Back</a>

            <div>
                <a href="/posts/{{ $post['id'] }}/edit" class="px-4 py-1 text-white bg-yellow-600 rounded-md">Edit</a>
                <form action="/posts/{{ $post['id'] }}" method="post" class="inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="px-4 py-1 text-white bg-red-600 rounded-md">Hapus</button>
                </form>
            </div>
        </div>

        <hr class="my-8">

        <div class="mb-8">
            <h1 class="block mb-4 text-3xl font-bold">{{ $post['title'] }}</h1>
            <p>{{ $post['body'] }}</p>
        </div>

    </div>
</body>

</html>
