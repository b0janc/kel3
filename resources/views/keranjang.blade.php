HALAMAN KERANJANG

<x-layout title="Keranjang">

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="w-full px-[5%] py-10 bg-white min-h-screen">

        <!-- Judul -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-[#0235AC]">
                Keranjang Saya
            </h1>

            <p class="text-gray-500 mt-2">
                Periksa kembali pesanan sebelum melakukan checkout.
            </p>
        </div>

        <!-- Daftar Keranjang -->
        <div class="space-y-6">

            <!-- ITEM 1 -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5 flex items-center gap-5">

                <img src="{{ asset('images/Ayam Bakar Taliwang.jpg') }}"
                    class="w-32 h-28 rounded-xl object-cover">

                <div class="flex-1">

                    <span class="text-xs font-bold uppercase text-orange-500">
                        Resep Ayam
                    </span>

                    <h3 class="text-xl font-bold text-[#0235AC] mt-1">
                        Ayam Bakar Taliwang
                    </h3>

                    <p class="font-bold text-[#0235AC] mt-2">
                        Rp 45.000
                    </p>

                </div>

                <div class="flex items-center gap-3">

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        -
                    </button>

                    <span class="font-bold text-lg w-8 text-center">
                        1
                    </span>

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        +
                    </button>

                </div>

            </div>

            <!-- ITEM 2 -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5 flex items-center gap-5">

                <img src="{{ asset('images/es jeruk.jpg') }}"
                    class="w-32 h-28 rounded-xl object-cover">

                <div class="flex-1">

                    <span class="text-xs font-bold uppercase text-green-600">
                        Minuman
                    </span>

                    <h3 class="text-xl font-bold text-[#0235AC] mt-1">
                        Es Jeruk Seger
                    </h3>

                    <p class="font-bold text-[#0235AC] mt-2">
                        Rp 12.000
                    </p>

                </div>

                <div class="flex items-center gap-3">

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        -
                    </button>

                    <span class="font-bold text-lg w-8 text-center">
                        2
                    </span>

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        +
                    </button>

                </div>

            </div>

            <!-- ITEM 3 -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5 flex items-center gap-5">

                <img src="{{ asset('images/Nutella Tiramisu.jpg') }}"
                    class="w-32 h-28 rounded-xl object-cover">

                <div class="flex-1">

                    <span class="text-xs font-bold uppercase text-purple-700">
                        Snack
                    </span>

                    <h3 class="text-xl font-bold text-[#0235AC] mt-1">
                        Nutella Tiramisu
                    </h3>

                    <p class="font-bold text-[#0235AC] mt-2">
                        Rp 35.000
                    </p>

                </div>

                <div class="flex items-center gap-3">

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        -
                    </button>

                    <span class="font-bold text-lg w-8 text-center">
                        1
                    </span>

                    <button class="w-10 h-10 rounded-lg bg-[#0235AC] text-white hover:bg-blue-800 transition">
                        +
                    </button>

                </div>

            </div>

        </div>

        <!-- Tombol Checkout -->
        <div class="mt-10 flex justify-end">

            <button
                onclick="window.location.href='/checkout'"
                class="bg-[#0235AC] hover:bg-blue-900 text-white px-10 py-4 rounded-xl font-semibold shadow-md transition">

                Checkout

            </button>

        </div>

    </div>

</x-layout>