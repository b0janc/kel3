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

        <div class="grid lg:grid-cols-3 gap-8">

            <!-- ========================= -->
            <!-- KIRI -->
            <!-- ========================= -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Nomor Meja -->
                <div class=" border border-gray-200 rounded-2xl shadow-sm p-6">

                    <h2 class="font-bold text-xl text-[#0235AC] mb-4">
                        Nomor Meja
                    </h2>

                    <input
                        type="text"
                        placeholder="Contoh : A12"
                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0235AC]">

                </div>

                <!-- Daftar Pesanan -->
                <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-6">

                    <h2 class="font-bold text-xl text-[#0235AC] mb-6">
                        Pesanan
                    </h2>

                    <div class="space-y-5">

                        <div class="flex justify-between">
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

                        <hr class="border-gray-300">

                        <div class="flex justify-between">
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

                        <hr class="border-gray-300">

                        <div class="flex justify-between">
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
                <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-6">

                    <h2 class="font-bold text-xl text-[#0235AC] mb-4">
                        Catatan Pesanan
                    </h2>

                    <textarea
                        rows="4"
                        placeholder="Contoh : Jangan pedas, tanpa bawang..."
                        class="w-full bg-white border border-gray-300 rounded-xl p-4 resize-none focus:outline-none focus:ring-2 focus:ring-[#0235AC]"></textarea>

                </div>

            </div>

            <!-- ========================= -->
            <!-- KANAN -->
            <!-- ========================= -->
            <div>

                <div class="bg-[#FEFEFD] border border-gray-200 rounded-2xl shadow-sm p-6 sticky top-24">

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

                        <hr class="border-gray-300">

                        <div class="flex justify-between font-bold text-xl text-[#0235AC]">
                            <span>Total</span>
                            <span>Rp112.200</span>
                        </div>

                    </div>

                    <!-- Metode Pembayaran -->
                    <div class="mt-8">

                        <label class="font-semibold text-[#0235AC]">
                            Metode Pembayaran
                        </label>

                        <select class="w-full mt-3 bg-white border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0235AC]">

                            <option>Tunai</option>
                            <option>QRIS</option>
                            <option>Debit</option>
                            <option>E-Wallet</option>

                        </select>

                    </div>

                    <button
                        class="w-full mt-8 bg-[#0235AC] hover:bg-[#012B89] text-white py-4 rounded-xl font-semibold transition duration-300">

                        Buat Pesanan

                    </button>

                </div>

            </div>

        </div>

    </div>

</x-layout>