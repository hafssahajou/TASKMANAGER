<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body class="bg-gray-200">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white rounded shadow-lg p-8">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center text-indigo-600">TASK REGISTER</h1>
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/register" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="username">Name</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" name="name" value="{{old('name')}}" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="email">Email</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="email" name="email" value="{{old('email')}}" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="password">Password</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="password" name="password" value="{{old('password')}}" placeholder="Enter your password">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-bold mb-2 text-gray-700" for="cpassword">Confirm Password</label>
                    <input
                        class="w-full p-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="password" name="password_confirmation" placeholder="Confirm your password">
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                        Register
                    </button>
                </div>
            </form>
            <div class="text-center">
                <p>Already have an account? <a href="/login" class="text-indigo-500">Login here</a></p>
            </div>
        </div>
    </div>
</body>

</html>
