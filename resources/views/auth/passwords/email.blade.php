@include('layout.app')

<section class="bg-white w-full shadow-lg p-8 mt-8">
    <div class="max-w-md mx-auto px-4">
        <h1 class="text-4xl font-bold text-center">Recuperar Senha</h1>
        <p class="text-gray-600 text-center mt-4">Digite seu email para enviar um link de redefinição de senha.</p>

        <form id="resetForm" action="/resetEmail" method="POST" class="mt-8" onclick="submitForm(event)">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                    required>
            </div>
            <button type="submit"
                class="w-full bg-yellow-400 text-yellow-900 font-semibold px-4 py-2 rounded hover:bg-yellow-300 transition duration-300">Enviar
                Link</button>
        </form>
    </div>
</section>
<script>
    function submitForm(event) {
        event.preventDefault();

        const formData = new formData(document.getElementbyId('resetForm'))

        fetch('password/email', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao enviar os dados.');
                }
                return response.json();
            })
            .then(data => {
                console.log('Resposta do servidor:', data);
                // Faça o que for necessário com a resposta do servidor (redirecionar, exibir mensagem, etc.)
            })
            .catch(error => {
                console.error('Erro ao enviar os dados:', error);
                // Trate o erro adequadamente
            });
    }
</script>
