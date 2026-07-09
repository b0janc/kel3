<x-layout title="Riwayat Transaksi">

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="w-full px-[5%] py-10 bg-white min-h-screen">

        <!-- Judul -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-[#0235AC]">
                Riwayat Transaksi
            </h1>

            <p class="text-gray-500 mt-2">
                Berikut daftar transaksi yang telah berhasil dilakukan.
            </p>
        </div>

        <div class="max-w-5xl mx-auto space-y-6">

            <!-- Transaksi 1 -->
            <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-6">

                <div class="flex justify-between items-start">

                    <div>
                        <h2 class="text-xl font-bold text-[#0235AC]">
                            TRX-0001
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            09 Juli 2026 • 12:45 WIB
                        </p>
                    </div>

                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">
                        Selesai
                    </span>

                </div>

                <div class="border-t border-gray-200 my-5"></div>

                <div class="space-y-3">

                    <div class="flex justify-between">
                        <span>Ayam Bakar Taliwang (1x)</span>
                        <span>Rp45.000</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Es Jeruk Seger (2x)</span>
                        <span>Rp24.000</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Nutella Tiramisu (1x)</span>
                        <span>Rp35.000</span>
                    </div>

                </div>

                <div class="border-t border-gray-200 my-5"></div>

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-gray-500 text-sm">
                            Nomor Meja
                        </p>

                        <p class="font-semibold text-[#0235AC]">
                            A12
                        </p>
                    </div>

                    <div class="text-right">
                        <p class="text-gray-500 text-sm">
                            Total Pembayaran
                        </p>

                        <p class="text-2xl font-bold text-[#0235AC]">
                            Rp112.200
                        </p>
                    </div>

                </div>

            </div>

            <!-- Transaksi 2 -->
            <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-6">

                <div class="flex justify-between items-start">

                    <div>
                        <h2 class="text-xl font-bold text-[#0235AC]">
                            TRX-0002
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            08 Juli 2026 • 18:10 WIB
                        </p>
                    </div>

                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">
                        Selesai
                    </span>

                </div>

                <div class="border-t border-gray-200 my-5"></div>

                <div class="space-y-3">

                    <div class="flex justify-between">
                        <span>Chicken Burger (2x)</span>
                        <span>Rp56.000</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Ice Coffee (2x)</span>
                        <span>Rp36.000</span>
                    </div>

                </div>

                <div class="border-t border-gray-200 my-5"></div>

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-gray-500 text-sm">
                            Nomor Meja
                        </p>

                        <p class="font-semibold text-[#0235AC]">
                            B03
                        </p>
                    </div>

                    <div class="text-right">
                        <p class="text-gray-500 text-sm">
                            Total Pembayaran
                        </p>

                        <p class="text-2xl font-bold text-[#0235AC]">
                            Rp94.760
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>