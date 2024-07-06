<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Restaurante de Macarrão</title>
</head>

<body class="bg-gray-100 flex flex-col items-center">
    @include('layout.app')

    <section class="bg-white w-full shadow-lg p-8 mt-8">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center">Bem-vindo ao Restaurante de Macarrão!</h1>
            <p class="text-gray-600 text-center mt-4">Experimente a melhor comida italiana em um ambiente acolhedor.</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 mt-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex justify-center">
                    <img src="https://th.bing.com/th/id/OIG4.Z5mjlwpDoM_sCm1INKnm?pid=ImgGn" alt="Restaurante" class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold mb-4">Sobre Nós</h2>
                    <p class="text-gray-600 mb-4">Somos um restaurante especializado em macarrão, inspirado nos tradicionais sabores italianos. Nosso objetivo é oferecer uma experiência gastronômica única, com ingredientes frescos e de alta qualidade.</p>
                    <p class="text-gray-600 mb-4">No nosso restaurante, você pode montar seu prato do jeito que preferir, escolhendo entre uma variedade de massas, molhos e acompanhamentos. Venha nos visitar e saboreie a verdadeira essência da culinária italiana.</p>
                    <a href="menu" class="bg-white text-yellow-900 font-semibold px-4 py-2 rounded hover:bg-yellow-300 transition duration-300 shadow-lg">Explore Nosso Menu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 mt-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-semibold text-center mb-4">Contato</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col items-center">
                    <i class="fas fa-phone-alt text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold">Telefone</h3>
                    <p class="text-gray-600">(11) 1234-5678</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-envelope text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold">Email</h3>
                    <p class="text-gray-600">contato@restaurante.com</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-map-marker-alt text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold">Endereço</h3>
                    <p class="text-gray-600">Rua das Massas, 123 - São Paulo, SP</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-clock text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold">Horário de Funcionamento</h3>
                    <p class="text-gray-600">Seg - Sex: 11h - 22h<br>Sáb - Dom: 12h - 23h</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white w-full shadow-md py-4 mt-8">
        <div class="flex justify-center space-x-8">
            <a href="https://www.facebook.com" class="text-gray-800 font-bold" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com" class="text-gray-800 font-bold" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" class="text-gray-800 font-bold" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
