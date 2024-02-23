

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowTasks</title>
</head>

<body class="font-sans bg-gray-200 text-gray-800"> <!-- Changer la couleur de fond et de texte -->
    <div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <h2 class="text-3xl font-bold mb-4 col-span-full text-center">ALL TASKS</h2>
        @foreach($tasks as $task)
        <div class="bg-gray-300 rounded-md overflow-hidden shadow-lg border-t-4 border-indigo-700 flex flex-col h-full"> <!-- Changer la couleur de fond et la couleur de bordure -->
            <div class="p-6 flex-1">
                <h3 class="text-indigo-700 text-xl font-bold mb-2 text-center">{{ $task['title'] }}</h3>
                <p class="text-gray-800">{{ $task['description'] }}</p> <!-- Changer la couleur du texte -->
            </div>
            <div class="mt-4 mb-8 flex justify-center">
                <button class="bg-indigo-700 text-white px-4 py-2 rounded-md"><a href="/edit-task/{{ $task->id }}">Edit task</a></button>
                <form action="/delete-task/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Delete task</button>
                </form>
                
            </div>
            
        </div>
        @endforeach
    </div>
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-pink-700 hover:bg-pink-900 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>
    <div class="absolute top-2 right-28 mt-2 mr-2">
        <div> <a href="/tasks"
                class="bg-indigo-900 hover:bg-indigo-999 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                Create task
            </a></div>

    </div>
</body>

</html>
