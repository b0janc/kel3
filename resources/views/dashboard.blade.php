<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafePOS | Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    },
                    colors: {
                        primary: '#7DD3FC',
                        secondary: '#38BDF8'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-100 font-poppins">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">

            <h1 class="text-3xl font-bold text-sky-500">
                CafePOS
            </h1>

            <div class="w-1/2">
                <input type="text"
                    placeholder="Cari kopi, makanan..."
                    class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-300">
            </div>

            <div class="flex items-center gap-6">

                <button class="text-2xl text-gray-600">
                    <i class="fa-solid fa-bell"></i>
                </button>

                <button class="text-2xl text-gray-600">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>

                <img src="https://i.pravatar.cc/45"
                    class="rounded-full">

            </div>

        </div>
    </nav>


    <!-- Container -->
    <div class="max-w-7xl mx-auto px-8 mt-8">

        <!-- Banner -->

        <div
            class="bg-gradient-to-r from-sky-300 to-cyan-400 rounded-3xl p-10 text-white flex justify-between items-center">

            <div>

                <h2 class="text-5xl font-bold mb-3">
                    Selamat Datang 👋
                </h2>

                <p class="text-xl">
                    Mau pesan apa hari ini?
                </p>

                <button
                    class="mt-6 bg-white text-sky-500 px-8 py-3 rounded-full font-semibold">
                    Pesan Sekarang
                </button>

            </div>

            <i class="fa-solid fa-mug-hot text-8xl"></i>

        </div>


        <!-- Kategori -->

        <div class="mt-10">

            <h2 class="text-2xl font-bold mb-5">
                Kategori
            </h2>

            <div class="flex gap-5 flex-wrap">

                <button class="bg-white px-6 py-4 rounded-2xl shadow hover:bg-sky-400 hover:text-white transition">
                    ☕ Coffee
                </button>

                <button class="bg-white px-6 py-4 rounded-2xl shadow hover:bg-sky-400 hover:text-white transition">
                    🥤 Drink
                </button>

                <button class="bg-white px-6 py-4 rounded-2xl shadow hover:bg-sky-400 hover:text-white transition">
                    🍰 Dessert
                </button>

                <button class="bg-white px-6 py-4 rounded-2xl shadow hover:bg-sky-400 hover:text-white transition">
                    🍕 Food
                </button>

            </div>

        </div>


        <!-- Menu -->

        <div class="mt-10">

            <div class="flex justify-between items-center mb-5">

                <h2 class="text-2xl font-bold">
                    Menu Terlaris
                </h2>

                <a href="#" class="text-sky-500 font-semibold">
                    Lihat Semua
                </a>

            </div>

            <div class="grid md:grid-cols-4 gap-6">

                <!-- CARD -->

                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 duration-300">

                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600"
                        class="h-52 w-full object-cover">

                    <div class="p-5">

                        <h3 class="font-bold text-xl">
                            Cappuccino
                        </h3>

                        <p class="text-gray-500 mt-2">
                            Kopi susu premium
                        </p>

                        <div class="flex justify-between mt-4">

                            <span class="font-bold text-sky-500">
                                Rp18.000
                            </span>

                            <span>
                                ⭐4.9
                            </span>

                        </div>

                        <button
                            class="mt-5 w-full bg-sky-400 text-white py-3 rounded-xl hover:bg-sky-500">
                            <i class="fa-solid fa-plus"></i>
                            Tambah
                        </button>

                    </div>

                </div>

                <!-- CARD -->

                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 duration-300">

                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600"
                        class="h-52 w-full object-cover">

                    <div class="p-5">

                        <h3 class="font-bold text-xl">
                            Latte
                        </h3>

                        <p class="text-gray-500 mt-2">
                            Latte creamy
                        </p>

                        <div class="flex justify-between mt-4">

                            <span class="font-bold text-sky-500">
                                Rp20.000
                            </span>

                            <span>
                                ⭐4.8
                            </span>

                        </div>

                        <button
                            class="mt-5 w-full bg-sky-400 text-white py-3 rounded-xl hover:bg-sky-500">
                            <i class="fa-solid fa-plus"></i>
                            Tambah
                        </button>

                    </div>

                </div>

                <!-- CARD -->

                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 duration-300">

                    <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=600"
                        class="h-52 w-full object-cover">

                    <div class="p-5">

                        <h3 class="font-bold text-xl">
                            Brownies
                        </h3>

                        <p class="text-gray-500 mt-2">
                            Dessert
                        </p>

                        <div class="flex justify-between mt-4">

                            <span class="font-bold text-sky-500">
                                Rp15.000
                            </span>

                            <span>
                                ⭐4.7
                            </span>

                        </div>

                        <button
                            class="mt-5 w-full bg-sky-400 text-white py-3 rounded-xl hover:bg-sky-500">
                            <i class="fa-solid fa-plus"></i>
                            Tambah
                        </button>

                    </div>

                </div>

                <!-- CARD -->

                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 duration-300">

                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?w=600"
                        class="h-52 w-full object-cover">

                    <div class="p-5">

                        <h3 class="font-bold text-xl">
                            Espresso
                        </h3>

                        <p class="text-gray-500 mt-2">
                            Espresso Original
                        </p>

                        <div class="flex justify-between mt-4">

                            <span class="font-bold text-sky-500">
                                Rp16.000
                            </span>

                            <span>
                                ⭐5.0
                            </span>

                        </div>

                        <button
                            class="mt-5 w-full bg-sky-400 text-white py-3 rounded-xl hover:bg-sky-500">
                            <i class="fa-solid fa-plus"></i>
                            Tambah
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Floating Cart -->

    <div class="fixed bottom-8 right-8">

        <button
            class="bg-sky-500 text-white px-8 py-4 rounded-full shadow-2xl hover:bg-sky-600">

            <i class="fa-solid fa-cart-shopping"></i>

            Keranjang (2)

        </button>

    </div>

</body>

</html>