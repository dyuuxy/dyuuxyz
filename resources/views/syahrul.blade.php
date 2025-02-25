<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promosi</title>
    <link rel="stylesheet" href="{{ asset('css/syahrul.css') }}?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header -->
    <div class="container">
        <div class="back">
            <a href="">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <h3 class="layanan">Promosi</h3>
        <div class="icon">
            <a href="#" id="cart-icon"><i class="fa-solid fa-cart-shopping"></i><span id="cart-count">0</span></a>
            <a href=""><i class="fa-regular fa-clock"></i></a>
            <a href="#" id="profile-icon" class="profile-icon"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>

    <div class="search-container">
        <div class="search-box">
            <input type="text" id="search-input" class="search-input" placeholder="Cari produk..."
                onkeyup="searchProduct()" />
            <button class="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Product List -->
    <div class="products">
        <!-- Product 1 -->
        <div class="product" data-id="1" data-name="Jasa Pembuatan Foto Product" data-price="69000" data-stock="10">
            <img src="{{ asset('img/ayam1.jpeg') }}" alt="Daging Ayam">
            <h3>Jasa Pembuatan Foto Product</h3>
            <div class="button-container">
                <button class="buy-button" data-id="1" data-name="Jasa Pembuatan Foto Product" data-price="69000"
                    data-stock="10">Mulai Jasa</button>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="product" data-id="2" data-name="Jasa Pembuatan Desain" data-price="69000" data-stock="1">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Jasa Pembuatan Desain">
            <h3>Jasa Pembuatan Desain</h3>
            <div class="button-container">
                <button class="buy-button" data-id="2" data-name="Jasa Pembuatan Desain" data-price="69000"
                    data-stock="1">Mulai
                    Jasa</button>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="product" data-id="3" data-name="Jasa Pembuatan Produk Kemasan" data-price="69000" data-stock="1">
            <img src="{{ asset('img/babi.jpeg') }}" alt="Jasa Pembuatan Produk Kemasan">
            <h3>Jasa Pembuatan Produk Kemasan</h3>
            <div class="button-container">
                <button class="buy-button" data-id="3" data-name="Jasa Pembuatan Produk Kemasan" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="product" data-id="4" data-name="Jasa Kelola Sosmed" data-price="69000" data-stock="1">
            <img src="{{ asset('img/sapi.jpeg') }}" alt="Jasa Kelola Sosmed">
            <h3>Jasa Kelola Sosmed</h3>
            <div class="button-container">
                <button class="buy-button" data-id="4" data-name="Jasa Kelola Sosmed" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <!-- More Products ... -->
        <div class="product" data-id="5" data-name="Jasa Pembuatan Vidio Opening" data-price="69000" data-stock="1">
            <img src="{{ asset('img/kelinci.jpeg') }}" alt="Jasa Pembuatan Vidio Opening">
            <h3>Jasa Pembuatan Vidio Opening</h3>
            <div class="button-container">
                <button class="buy-button" data-id="5" data-name="Jasa Pembuatan Vidio Opening" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <div class="product" data-id="6" data-name="Jasa pembuatan jingle" data-price="69000" data-stock="1">
            <img src="{{ asset('img/salmon.jpeg') }}" alt="Jasa pembuatan jingle">
            <h3>Jasa pembuatan jingle</h3>
            <div class="button-container">
                <button class="buy-button" data-id="6" data-name="Jasa pembuatan jingle" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <div class="product" data-id="7" data-name="Jasa Pembuatan Desain Logo" data-price="69000"
            data-stock="1">
            <img src="{{ asset('img/kambing.jpeg') }}" alt="Jasa Pembuatan Desain Logo">
            <h3>Jasa Pembuatan Desain Logo</h3>
            <div class="button-container">
                <button class="buy-button" data-id="7" data-name="Jasa Pembuatan Desain Logo" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <div class="product" data-id="8" data-name="Jasa Pembuatan Logo Monogram" data-price="69000"
            data-stock="1">
            <img src="{{ asset('img/puyuh.jpeg') }}" alt="Jasa Pembuatan Logo Monogram">
            <h3>Jasa Pembuatan Logo Monogram</h3>
            <div class="button-container">
                <button class="buy-button" data-id="8" data-name="Jasa Pembuatan Logo Monogram"
                    data-price="69000" data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <div class="product" data-id="9" data-name="Jasa Pembuatan Aplikasi" data-price="69000" data-stock="1">
            <img src="{{ asset('img/unta.jpeg') }}" alt="Jasa Pembuatan Aplikasi">
            <h3>Jasa Pembuatan Aplikasi</h3>
            <div class="button-container">
                <button class="buy-button" data-id="9" data-name="Jasa Pembuatan Aplikasi" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
        <div class="product" data-id="10" data-name="Jasa Pembuatan Website" data-price="69000" data-stock="1">
            <img src="{{ asset('img/bebek.jpeg') }}" alt="Jasa Pembuatan Website">
            <h3>Jasa Pembuatan Website</h3>
            <div class="button-container">
                <button class="buy-button" data-id="10" data-name="Jasa Pembuatan Website" data-price="69000"
                    data-stock="1">Mulai Jasa</button>
            </div>
        </div>
    </div>
    </div>

    <div class="cart-modal">
        <div class="cart-content">
            <h2>Keranjang Saya</h2>
            <ul id="cart-items"></ul>

            <div class="cart-summary">
                <div class="cart-actions">
                    <button class="checkout-btn" onclick="checkout()">Checkout</button>
                    <button class="close-btn">
                        <i class="fa fa-times"></i> <!-- Ikon X -->
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="profile-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close-btn">&times;</button> <!-- Tombol close -->
            </div>
            <div class="profile-photo">
                <img src="profile.jpg" alt="Profile Photo"> <!-- Gambar profil -->
            </div>
            <h2>Nama Pengguna</h2> <!-- Nama pengguna -->
            <div class="modal-body">
                <div class="modal-item">
                    <i class="fas fa-cog"></i> Setting
                </div>
                <div class="modal-item">
                    <i class="fas fa-wallet"></i> Saldo
                </div>
                <div class="modal-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </div>
            </div>
        </div>
    </div>

</body>
    <!-- Script -->
    <script src="path/to/your" defer>
        console.log('JavaScript berhasil dimuat!');

        document.addEventListener('DOMContentLoaded', () => {
            // Modal Profile
            const profileIcon = document.querySelector('.profile-icon');
            const profileModal = document.querySelector('.profile-modal');
            const profileCloseButton = document.querySelector('.profile-modal .close-btn');
            const cartIcon = document.querySelector('#cart-icon');
            const cartModal = document.querySelector('.cart-modal');
            const closeButton = document.querySelector('.cart-modal .close-btn');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');

            // Ensure the profile modal is hidden on page load
            profileModal.style.display = 'none';

            // Show Profile Modal
            profileIcon.addEventListener('click', () => {
                profileModal.style.display = 'block';
            });

            // Close Profile Modal
            profileCloseButton.addEventListener('click', () => {
                profileModal.style.display = 'none';
            });

            // Show Cart Modal
            cartIcon.addEventListener('click', showCart);

            // Close Cart Modal
            closeButton.addEventListener('click', () => {
                cartModal.style.display = 'none';
            });

            // Add to Cart Button Events
            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            // Update Cart Count
            updateCartCount();
        });


        // Modal Profile Functions
        function editProfile() {
            const newName = prompt("Enter your new name:", document.getElementById('profile-name').textContent);
            if (newName) {
                document.getElementById('profile-name').textContent = newName;
            }

            const newPhotoURL = prompt("Enter the URL for your new profile photo:", document.getElementById('profile-photo')
                .src);
            if (newPhotoURL) {
                document.getElementById('profile-photo').src = newPhotoURL;
            }
        }
        // Fitur Pencarian Produk
        function searchProduct() {
            const searchInput = document.getElementById("search-input").value.toLowerCase();
            const products = document.querySelectorAll(".product");

            products.forEach((product) => {
                const productName = product.getAttribute("data-name").toLowerCase();
                product.style.display = productName.includes(searchInput) ? "block" : "none";
            });
        }

        // Update jumlah keranjang
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalCount = cart.reduce((sum, product) => sum + product.quantity, 0);
            document.getElementById('cart-count').innerText = totalCount;
        }

        // Function to remove product from cart
        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(product => product.id !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            showCart();
        }

        // Function to increase quantity
        function increaseQuantity(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const product = cart.find(item => item.id == productId);

            if (product) {
                product.quantity += 1;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
                showCart();
            }
        }

        // Function to decrease quantity
        function decreaseQuantity(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const product = cart.find(item => item.id == productId);

            if (product && product.quantity > 1) {
                product.quantity -= 1;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
                showCart();
            }
        }

        // Function to show cart
        function showCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItems = document.getElementById('cart-items');
            cartItems.innerHTML = '';

            if (cart.length === 0) {
                cartItems.innerHTML = "<li>Keranjang Anda kosong.</li>";
            } else {
                cart.forEach(product => {
                    let li = document.createElement('li');

                    // Create product image element
                    let productImage = document.createElement('img');
                    productImage.src = product.image;
                    productImage.alt = product.name;

                    // Create product info container
                    let productInfo = document.createElement('span');
                    productInfo.innerHTML = $ {
                        product.name
                    } - Rp $ {
                        product.price
                    }
                    x $ {
                        product.quantity
                    };

                    // Create buttons to increase and decrease quantity
                    let increaseButton = document.createElement('button');
                    increaseButton.classList.add('increase');
                    increaseButton.innerText = '+';
                    increaseButton.onclick = function() {
                        increaseQuantity(product.id);
                    };

                    let decreaseButton = document.createElement('button');
                    decreaseButton.classList.add('decrease');
                    decreaseButton.innerText = '-';
                    decreaseButton.onclick = function() {
                        decreaseQuantity(product.id);
                    };

                    // Create remove button
                    let removeButton = document.createElement('button');
                    removeButton.classList.add('remove');
                    removeButton.innerText = 'Hapus';
                    removeButton.onclick = function() {
                        removeFromCart(product.id);
                    };

                    // Append the elements to the list item
                    li.appendChild(productImage);
                    li.appendChild(productInfo);
                    li.appendChild(increaseButton);
                    li.appendChild(decreaseButton);
                    li.appendChild(removeButton);
                    cartItems.appendChild(li);
                });

                // Create and display total price element
                let totalPriceElement = document.createElement('li');
                totalPriceElement.classList.add('total-price');
                totalPriceElement.innerHTML = < strong > Total: < /strong>${calculateTotalPrice()};
                cartItems.appendChild(totalPriceElement);
            }

            document.querySelector('.cart-modal').style.display = 'flex';
        }

        // Function to add product to cart
        function addToCart(event) {
            const button = event.target;
            const productElement = button.closest('.product');

            const productId = productElement.getAttribute('data-id');
            const productName = productElement.getAttribute('data-name');
            const productPrice = productElement.getAttribute('data-price');
            const productStock = parseInt(productElement.getAttribute('data-stock'), 10);
            const productImage = productElement.querySelector('img').src;

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingProduct = cart.find(product => product.id == productId);

            if (existingProduct) {
                if (existingProduct.quantity < productStock) {
                    existingProduct.quantity += 1;
                } else {
                    alert('Stok produk sudah habis.');
                }
            } else {
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: 1,
                    image: productImage
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }

        // Function to close cart
        function closeCartModal() {
            document.querySelector('.cart-modal').style.display = 'none';
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', () => {
            // Add event listener for cart icon
            document.getElementById('cart-icon').addEventListener('click', showCart);

            // Add event listener for each "Beli" button
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            // Update cart count when page loads
            updateCartCount();
        });

        // Function to calculate total price of items in the cart
        function calculateTotalPrice() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalPrice = cart.reduce((sum, product) => sum + (product.price * product.quantity), 0);

            // Format the total price as currency
            return Rp $ {
                totalPrice.toLocaleString('id-ID')
            };
        }

        // Mendapatkan elemen modal dan tombol close
        const cartModal = document.querySelector('.cart-modal');
        const closeButton = document.querySelector('.close-btn');

        // Menutup modal saat tombol close diklik
        closeButton.addEventListener('click', () => {
            cartModal.style.display = 'none';
        });

        // Menampilkan modal (misalnya, saat ikon keranjang diklik)
        const cartIcon = document.querySelector('#cart-icon');
        cartIcon.addEventListener('click', () => {
            cartModal.style.display = 'flex';
        });
    </script>



</html>
