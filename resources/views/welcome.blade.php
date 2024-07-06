<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body class="bg-gray-100 flex flex-col items-center">
    @include('layout.app')
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Stuga Dauge" data-price="50.00" data-product-id="1">
            <img src="https://th.bing.com/th/id/OIG4.My0YMHelYOVU2C_1q3vX?w=1024&h=1024&rs=1&pid=ImgDetMain"
                alt="Stuga Dauge" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Stuga Dauge</h3>
                <p class="text-gray-600">R$ 50.00</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Sacorse" data-price="64.00" data-product-id="2">
            <img src="https://th.bing.com/th/id/OIG3.3x5vjyZWil3EJCUOjmI_?w=1024&h=1024&rs=1&pid=ImgDetMain"
                alt="Sacorse" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Sacorse</h3>
                <p class="text-gray-600">R$ 64.00</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Walote" data-price="53.60" data-product-id="3">
            <img src="https://th.bing.com/th/id/OIG1..ZOw.OIBacMfs8Qov0Eo?w=1024&h=1024&rs=1&pid=ImgDetMain"
                alt="Walote" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Walote</h3>
                <p class="text-gray-600">R$ 53.60</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Omolesele" data-price="60.00" data-product-id="4">
            <img src="https://th.bing.com/th/id/OIG1..LsbyZtejSpVsO8SEqwv?w=1024&h=1024&rs=1&pid=ImgDetMain"
                alt="Omolesele" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Omolesele</h3>
                <p class="text-gray-600">R$ 60.00</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Nhanamoote" data-price="100.00" data-product-id="5">
            <img src="https://th.bing.com/th/id/OIG4.fiXuKfpkAOFG6c0DtiRa?w=1024&h=1024&rs=1&pid=ImgDetMain"
                alt="Nhanamoote" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Nhanamoote</h3>
                <p class="text-gray-600">R$ 100.00</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover: cursor-pointer" onclick="addToCart(this)"
            data-name="Muscko" data-price="31.00" data-product-id="6">
            <img src="https://th.bing.com/th/id/OIG4.wmSRr_TGUViW3hSWV35Q?pid=ImgGn" alt="Muscko"
                class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Muscko</h3>
                <p class="text-gray-600">R$ 31.00</p>
            </div>
        </div>
    </div>

    <button onclick="toggleCart()" class="fixed bottom-4 right-4 bg-white font-semibold p-4 rounded-full shadow-lg">
        <i class="fa-solid fa-cart-shopping"></i>
    </button>

    <div id="cartModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden">
        <div class="bg-gray-100 rounded-lg shadow-lg w-96 p-4">
            <h2 class="text-2xl font-semibold mb-4">Carrinho de Compras</h2>
            <ul id="cartItems" class="mb-4"></ul>
            <div class="flex justify-between items-center mb-4">
                <span class="text-lg font-semibold">Total: R$ <span id="cartTotal">0.00</span></span>
                <button onclick="emptyCart()" class="bg-red-500 text-white p-2 rounded shadow-lg">Esvaziar
                    Carrinho</button>
            </div>
            <div class="flex justify-between items-center">
                <button onclick="checkout()" class="bg-white p-2 rounded shadow-lg">Finalizar Compra</button>
                <button onclick="toggleCart()" class="bg-white p-2 rounded shadow-lg">Fechar</button>
            </div>
        </div>
    </div>

    <div id="paymentModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-96 p-4">
            <h2 class="text-2xl font-semibold mb-4">Pagamento</h2>
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Resumo do Pedido</h3>
                <ul id="orderSummary" class="mb-4"></ul>
                <span class="text-lg font-semibold">Total: R$ <span id="paymentTotal">0.00</span></span>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Forma de Pagamento</h3>
                <div class="flex flex-col">
                    <label class="mb-2">
                        <input type="radio" name="paymentMethod" value="pix" class="mr-2">
                        Pix
                    </label>
                    <label class="mb-2">
                        <input type="radio" name="paymentMethod" value="cartao" class="mr-2">
                        Cartão de Crédito/Débito
                    </label>
                    <label class="mb-2">
                        <input type="radio" name="paymentMethod" value="boleto" class="mr-2">
                        Boleto Bancário
                    </label>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <button onclick="completePayment()" class="bg-blue-500 text-white p-2 rounded">Pagar</button>
                <button onclick="togglePaymentModal()" class="bg-gray-500 text-white p-2 rounded">Fechar</button>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    let cart = [];

    function addToCart(product) {
        const name = product.getAttribute('data-name');
        const price = parseFloat(product.getAttribute('data-price'));
        const productId = parseInt(product.getAttribute('data-product-id')); 

        const existingProduct = cart.find(item => item.name === name);

        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push({
                product_id: productId,
                name,
                price,
                quantity: 1
            });
        }

        updateCartDisplay();

        fetch('/add-to-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(cart)
        }).then(response => {
           
        }).catch(error => {
            console.error('Erro ao enviar o carrinho:', error);
        });
    }

    function removeFromCart(name) {
        cart = cart.filter(item => item.name !== name);
        updateCartDisplay();
    }

    function emptyCart() {
        cart = [];
        updateCartDisplay();
    }

    function updateCartDisplay() {
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');

        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.classList.add('flex', 'justify-between', 'items-center', 'mb-2');
            li.innerHTML = `
                <span>${item.name} (x${item.quantity})</span>
                <span>R$ ${(item.price * item.quantity).toFixed(2)}</span>
                <button onclick="removeFromCart('${item.name}')" class="text-red-500">Excluir</button>
            `;
            cartItems.appendChild(li);
            total += item.price * item.quantity;
        });

        cartTotal.textContent = total.toFixed(2);
    }

    function toggleCart() {
        const cartModal = document.getElementById('cartModal');
        cartModal.classList.toggle('hidden');
    }

    function togglePaymentModal() {
        const paymentModal = document.getElementById('paymentModal');
        paymentModal.classList.toggle('hidden');
    }

    function checkout() {
        const orderSummary = document.getElementById('orderSummary');
        const paymentTotal = document.getElementById('paymentTotal');

        orderSummary.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.classList.add('flex', 'justify-between', 'items-center', 'mb-2');
            li.innerHTML = `
            <span>${item.name} (x${item.quantity})</span>
            <span>R$ ${(item.price * item.quantity).toFixed(2)}</span>
        `;
            orderSummary.appendChild(li);
            total += item.price * item.quantity;
        });

        paymentTotal.textContent = total.toFixed(2);

        Toastify({
            text: "Pedido realizado com sucesso!",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "#4CAF50",
            stopOnFocus: true,
        }).showToast();

        toggleCart();
        togglePaymentModal();
    }

    function completePayment() {
        const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
        const total = parseFloat(document.getElementById('paymentTotal').textContent);

        togglePaymentModal();
        fetch('/orders', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    total: total,
                    payment_method: paymentMethod,
                    items: cart.map(item => ({
                        product_id: item.product_id,
                        quantity: item.quantity,
                        price: item.price
                    }))
                })
            }).then(response => response.json())
            .then(data => {
                Toastify({
                    text: "Pagamento realizado com sucesso!",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50",
                    stopOnFocus: true,
                }).showToast();       
            }).catch(error => {
                console.error('Erro ao processar pagamento:', error);
                Toastify({
                    text: "Erro ao realizar pagamento :(",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "red",
                    stopOnFocus: true,
                }).showToast(); 
            });
    }
</script>

</html>
