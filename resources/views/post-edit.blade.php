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
    <div class="py-2 bg-blue-900">
        <span class="block max-w-screen-md mx-auto text-2xl font-bold text-white ">GDSC Blog</span>
    </div>

    <div class="max-w-screen-md pt-8 mx-auto mb-16">

        <div class="flex justify-between">
            <h1 class="mb-8 text-4xl font-bold text-blue-900">Create a New Post</h1>
            <a href="/posts" class="px-4 py-2 text-white transition bg-blue-900 rounded-lg h-fit hover:bg-blue-950">Go
                Back</a>
        </div>

        <hr class="mb-4">

        <div class="mx-auto">
            <form action="/posts/{{ $post['id'] }}" method="post">
                @csrf @method('PUT')
                <div class="flex flex-col mb-4">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Post Title..."
                        class="px-4 py-2 border rounded-lg" value="{{ $post['title'] }}">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="body">Body</label>
                    <textarea id="body" name="body" cols="30" rows="10" placeholder="Post Body..."
                        class="px-4 py-2 border rounded-lg">{{ $post['body'] }}</textarea>
                </div>
                <button type="submit" class="w-full py-2 text-white bg-blue-900 rounded-lg">Update</button>
            </form>
        </div>
    </div>
</body>

</html>
