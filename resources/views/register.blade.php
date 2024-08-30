<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="overflow-x-hidden bg-primary">
    <div class="mx-10 md:mx-96 my-20 md:my-40">
        <x-messages />
        <div class="bg-white rounded-xl shadow-xl p-20">
            <div class="flex flex-row items-center p-2 gap-3">
                <a href="javascript:history.back()" class="text-4xl font-bold text-blue-700">&lt;</a>
                <h1 class="text-5xl font-bold text-black">Register</h1>
            </div>
            <div class="mb-5 my-4 h-0.5 rounded-xl bg-gray-500"></div>
            <form method="post" action="/register">
                @csrf
                <label>
                    <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <input type="password" name="confirm_password" placeholder="Confirm Password"
                        class="bg-primary text-gray-800 border-2 border-black py-2 px-5 rounded-xl w-full mb-5">
                    <button
                        class="bg-blue-700 hover:bg-blue-500 text-white hover:text-black text-lg py-2 px-5 rounded-xl w-full duration-300">
                        Register
                    </button>
                    <p class="text-sm mt-5 text-center">Already have account? <a href="/login"
                            class="text-blue-500">Login</a></p>
                </label>
            </form>
        </div>
    </div>
    <x-footer />
</body>

</html>
