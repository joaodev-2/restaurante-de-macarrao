<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Restaurante de Macarrão</title>
</head>

<body class="bg-gray-100 flex flex-col items-center">
    @include('layout.app')
    <section class="bg-white w-full shadow-lg p-8 mt-8">
        <div class="max-w-md mx-auto px-4">
            <h1 class="text-4xl font-bold text-center">Login</h1>
            <p class="text-gray-600 text-center mt-4">Entre na sua conta para acessar o sistema.</p>

            <form action="{{ route('login') }}" method="POST" class="mt-8">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700">Senha</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <button type="submit" class="w-full bg-yellow-400 text-yellow-900 font-semibold px-4 py-2 rounded hover:bg-yellow-300 transition duration-300">Entrar</button>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('password.request') }}" class="text-yellow-500 hover:underline">Esqueceu sua senha?</a>
            </div>
        </div>
    </section>

    <footer class="bg-white w-full shadow-md py-4 mt-8">
        <div class="flex justify-center space-x-8">
            <a href="https://www.facebook.com" class="text-gray-800 font-bold"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com" class="text-gray-800 font-bold"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" class="text-gray-800 font-bold"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
