<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks</title>
</head>

<body class="bg-gray-200">
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-pink-700 hover:bg-pink-900 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>
    <div class="flex justify-center items-center h-screen">
        <div class="max-w-md bg-white rounded shadow-lg p-8">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">Create Task</h1>
            
            <!-- Task Creation Form -->
            <form action="/create" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="title">Title</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" name="title" placeholder="Enter task title">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="description">Description</label>
                    <textarea
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        name="description" rows="4" placeholder="Enter task description"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 mb-6 rounded">
                        Create Task
                    </button>
                </div>
                
            </form>
            
            <!-- Link to Tasks List -->
            <div class="text-center">
                <p>View all tasks? <a href="/showtasks" class="text-indigo-500">Go to Tasks</a></p>
            </div>
        </div>
    </div>
</body>

</html>
