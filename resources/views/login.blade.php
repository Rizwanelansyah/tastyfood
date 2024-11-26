<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="overflow-x-hidden bg-primary text-black">
    <div class="flex flex-col justify-center items-center px-10 md:px-96 py-20 md:py-40 h-[100vh]">
        <x-messages />
        <div class="bg-white rounded-xl shadow-xl p-8 md:p-12 xl:p-20">
            <div class="flex flex-row items-center p-2 gap-3">
                <a href="/" class="text-2xl xl:text-4xl font-bold text-blue-700">&lt;</a>
                <h1 class="text-3xl xl:text-5xl font-bold text-black">Login</h1>
            </div>
            <div class="mb-5 my-4 h-0.5 rounded-xl bg-gray-500"></div>
            <form method="post" action="/login">
                @csrf
                <label>
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <input type="password" name="password" placeholder="Password"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <button
                        class="bg-blue-700 hover:bg-blue-500 text-white hover:text-black text-lg py-2 px-5 rounded-xl w-full duration-300">
                        Login
                    </button>
                </label>
            </form>
        </div>
    </div>
</body>

</html>
