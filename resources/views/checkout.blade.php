<x-layout title="Checkout">

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="w-full px-[5%] py-10 bg-white min-h-screen">

        <!-- Judul -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-[#0235AC]">
                Checkout
            </h1>

            <p class="text-gray-500 mt-2">
                Lengkapi informasi pesanan sebelum melakukan pembayaran.
            </p>
        </div>

        <!-- Card Checkout -->
        <div class="max-w-4xl mx-auto">

            <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-8">

                <!-- Nomor Meja -->
                <div class="mb-8">

                    <h2 class="text-xl font-bold text-[#0235AC] mb-4">
                        Nomor Meja
                    </h2>

                    <input
                        type="text"
                        placeholder="Contoh : A12"
                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0235AC]">

                </div>

                <!-- Pesanan -->
                <div class="mb-8">

                    <h2 class="text-xl font-bold text-[#0235AC] mb-5">
                        Pesanan
                    </h2>

                    <div class="space-y-5">

                        <div class="flex justify-between items-center">

                            <div>
                                <h3 class="font-semibold text-[#0235AC]">
                                    Ayam Bakar Taliwang
                                </h3>

                                <p class="text-sm text-gray-500">
                                    1 × Rp45.000
                                </p>
                            </div>

                            <span class="font-semibold">
                                Rp45.000
                            </span>

                        </div>

                        <hr>

                        <div class="flex justify-between items-center">

                            <div>
                                <h3 class="font-semibold text-[#0235AC]">
                                    Es Jeruk Seger
                                </h3>

                                <p class="text-sm text-gray-500">
                                    2 × Rp12.000
                                </p>
                            </div>

                            <span class="font-semibold">
                                Rp24.000
                            </span>

                        </div>

                        <hr>

                        <div class="flex justify-between items-center">

                            <div>
                                <h3 class="font-semibold text-[#0235AC]">
                                    Nutella Tiramisu
                                </h3>

                                <p class="text-sm text-gray-500">
                                    1 × Rp35.000
                                </p>
                            </div>

                            <span class="font-semibold">
                                Rp35.000
                            </span>

                        </div>

                    </div>

                </div>

                <!-- Catatan -->
                <div class="mb-8">

                    <h2 class="text-xl font-bold text-[#0235AC] mb-4">
                        Catatan Pesanan
                    </h2>

                    <textarea
                        rows="4"
                        placeholder="Contoh : Jangan pedas, tanpa bawang..."
                        class="w-full bg-white border border-gray-300 rounded-xl p-4 resize-none focus:outline-none focus:ring-2 focus:ring-[#0235AC]"></textarea>

                </div>

                <!-- Ringkasan Pembayaran -->
                <div class="border-t border-gray-300 pt-8">

                    <h2 class="text-xl font-bold text-[#0235AC] mb-5">
                        Ringkasan Pembayaran
                    </h2>

                    <div class="space-y-3">

                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span>Rp104.000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Pajak</span>
                            <span>Rp5.200</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Biaya Layanan</span>
                            <span>Rp3.000</span>
                        </div>

                        <hr>

                        <div class="flex justify-between text-xl font-bold text-[#0235AC]">
                            <span>Total</span>
                            <span>Rp112.200</span>
                        </div>

                    </div>

                </div>

                <!-- Metode Pembayaran -->
                <div class="mt-8">

                    <label class="block font-semibold text-[#0235AC] mb-2">
                        Metode Pembayaran
                    </label>

                    <select
                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0235AC]">

                        <option>Tunai</option>
                        <option>Transfer Bank</option>
                        <option>Kartu Kredit</option>
                        <option>OVO</option>
                        <option>Qris</option>

                    </select>

                </div>

                <!-- Tombol -->
                <div class="mt-10 flex justify-end gap-4">

                    <button
                        class="px-8 py-3 border border-[#0235AC] text-[#0235AC] rounded-xl font-semibold hover:bg-[#0235AC] hover:text-white transition">

                        Batal

                    </button>

                    <button
                        onclick="window.location.href = '/riwayat-transaksi'"
                        class="px-8 py-3 bg-[#0235AC] hover:bg-[#012B89] text-white rounded-xl font-semibold transition">

                        Pesan

                    </button>

                </div>

            </div>

        </div>

    </div>

</x-layout>