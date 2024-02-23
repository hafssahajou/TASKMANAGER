<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit Task</title>
</head>

<body class="bg-gray-200">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white rounded shadow-lg p-8">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">Edit Task</h1>
            
            <!-- Task Edit Form -->
            <form action="/edit-task/{{$task->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="title">Title</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" value="{{$task->title}}" name="title" placeholder="Enter task title">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="description">Description</label>
                    <textarea
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        name="description" rows="4" placeholder="Enter task description">{{$task->description}}</textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                        Save Changes </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
