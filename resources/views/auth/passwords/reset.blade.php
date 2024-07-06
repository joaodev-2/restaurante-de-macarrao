@include('layout.app')
<section class="bg-white w-full shadow-lg p-8 mt-8">
    <div class="max-w-md mx-auto px-4">
        <h1 class="text-4xl font-bold text-center">Redefinir Senha</h1>
        <p class="text-gray-600 text-center mt-4">Digite sua nova senha abaixo.</p>

        <form action="{{ route('password.update') }}" method="POST" class="mt-8">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required value="{{ $email ?? old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Nova Senha</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-6">
                <label for="password-confirm" class="block text-gray-700">Confirme a Nova Senha</label>
                <input type="password" name="password_confirmation" id="password-confirm" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <button type="submit" class="w-full bg-yellow-400 text-yellow-900 font-semibold px-4 py-2 rounded hover:bg-yellow-300 transition duration-300">Redefinir Senha</button>
        </form>
    </div>
</section>

