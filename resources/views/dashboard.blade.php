<x-layout title="Dashboard">
    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Container utama yang memenuhi layar --}}
<div class="w-full px-[5%] pt-2 pb-12 bg-white">
{{-- Search Bar --}}
<div class="w-full mb-10">
    <div class="relative max-w-4xl mx-auto">

        <input
            type="text"
            placeholder="Cari makanan, minuman, atau snack..."
            class="w-full h-14 rounded-full border-2 border-[#0235AC]/20 bg-white pl-14 pr-5 text-[16px] shadow-md focus:outline-none focus:border-[#0235AC] focus:ring-2 focus:ring-[#0235AC]/20 transition"
        >

        <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-[#0235AC] text-lg"></i>

    </div>
</div>

        <div class="mb-12 flex flex-wrap items-center gap-[15px]">
            <span class="font-bold text-[#0235AC] mr-[10px]">Kategori:</span>

            <a href="#" class="bg-[#66a3ff] text-[#0235AC] px-[15px] py-[6px] rounded-[20px] no-underline text-sm font-semibold">
                Semua
            </a>

            <a href="#" class="border border-[#0235AC] text-[#0235AC] px-[15px] py-[6px] rounded-[20px] no-underline text-sm">
                Makanan Berat
            </a>

            <a href="#" class="border border-[#0235AC] text-[#0235AC] px-[15px] py-[6px] rounded-[20px] no-underline text-sm">
                Minuman
            </a>

            <a href="#" class="border border-[#0235AC] text-[#0235AC] px-[15px] py-[6px] rounded-[20px] no-underline text-sm">
                Snack
            </a>
        </div>

        <div class="grid gap-[30px] [grid-template-columns:repeat(auto-fill,minmax(350px,1fr))]">

            {{-- CARD 1 --}}
            <article class="bg-white border border-[#eee] rounded-2xl overflow-hidden transition-all duration-300 shadow-[0_4px_15px_rgba(0,0,0,0.05)] flex flex-col justify-between">

                <div>
                    <div
                        class="w-full h-[200px] bg-cover bg-no-repeat bg-center rounded-t-2xl"
                        style="background-image:url('{{ asset('images/ayam-bakar-taliwang.jpg.jpeg') }}')">
                    </div>

                    <div class="px-5 pt-5 pb-[10px]">

                        <div class="flex justify-between items-center mb-[10px]">
                            <span class="text-[#BF6000] text-xs font-bold uppercase">
                                Resep Ayam
                            </span>


                        </div>

                        <h3 class="text-[18px] font-bold text-[#0235AC]">
                            Ayam Bakar Taliwang Pedas Menggigit
                        </h3>

                        <p class="text-[#666] text-sm leading-[1.6] mb-[15px]">
                            Cara membuat bumbu Taliwang asli yang meresap sampai ke tulang.
                            Cocok untuk hidangan makan malam keluarga...
                        </p>

                    </div>
                </div>

                <div class="px-5 pb-5 flex justify-between items-center bg-white">

                    <div>
                        <p class="text-xs text-[#aaa] mb-[2px]">Harga</p>
                        <span class="text-[18px] font-bold text-[#0235AC]">
                            Rp 45.000
                        </span>
                    </div>

                    <button
                        onclick="tambahKeKeranjang('images/Ayam Bakar Taliwang.jpg',45000)"
                        class="bg-[#0235AC] text-white border-0 px-4 py-[10px] rounded-lg text-sm font-semibold cursor-pointer flex items-center gap-2 transition-colors duration-200 hover:bg-[#012b89]">

                        <i class="fa-solid fa-cart-plus"></i>
                        + Keranjang
                    </button>

                </div>
            </article>

            {{-- CARD 2 --}}
            <article class="bg-white border border-[#eee] rounded-2xl overflow-hidden transition-all duration-300 shadow-[0_4px_15px_rgba(0,0,0,0.05)] flex flex-col justify-between">

                <div>
                    <div
                        class="w-full h-[200px] bg-cover bg-no-repeat bg-center rounded-t-2xl"
                        style="background-image:url('{{ asset('images/es-jeruk.jpg.jpeg') }}')">
                    </div>

                    <div class="px-5 pt-5 pb-[10px]">

                        <div class="flex justify-between items-center mb-[10px]">
                            <span class="text-[#014e0a] text-xs font-bold uppercase">
                                Minuman Segar
                            </span>


                        </div>

                        <h3 class="text-[18px] font-bold text-[#0235AC]">
                            Es Jeruk Seger
                        </h3>

                        <p class="text-[#666] text-sm leading-[1.6] mb-[15px]">
                            Minuman es jeruk segar dengan tambahan daun mint dan sedikit madu
                            untuk rasa manis alami. Resep mudah untuk melepas dahaga...
                        </p>

                    </div>
                </div>

                <div class="px-5 pb-5 flex justify-between items-center bg-white">

                    <div>
                        <p class="text-xs text-[#aaa] mb-[2px]">Harga</p>
                        <span class="text-[18px] font-bold text-[#0235AC]">
                            Rp 12.000
                        </span>
                    </div>

                    <button
                        onclick="tambahKeKeranjang('Es Jeruk Seger',12000)"
                        class="bg-[#0235AC] text-white border-0 px-4 py-[10px] rounded-lg text-sm font-semibold cursor-pointer flex items-center gap-2 transition-colors duration-200 hover:bg-[#012b89]">

                        <i class="fa-solid fa-cart-plus"></i>
                        + Keranjang
                    </button>

                </div>
            </article>

            {{-- CARD 3 --}}
            <article class="bg-white border border-[#eee] rounded-2xl overflow-hidden transition-all duration-300 shadow-[0_4px_15px_rgba(0,0,0,0.05)] flex flex-col justify-between">

                <div>
                    <div
                        class="w-full h-[200px] bg-cover bg-no-repeat bg-center rounded-t-2xl"
                        style="background-image:url('{{ asset('images/nutella-tiramisu.jpg.jpeg') }}')">
                    </div>

                    <div class="px-5 pt-5 pb-[10px]">

                        <div class="flex justify-between items-center mb-[10px]">
                            <span class="text-[#4A148C] text-xs font-bold uppercase">
                                Snack
                            </span>


                        </div>

                        <h3 class="text-[18px] font-bold text-[#0235AC]">
                            Nutella Tiramisu
                        </h3>

                        <p class="text-[#666] text-sm leading-[1.6] mb-[15px]">
                            Nutella enak dan lezat, cocok untuk camilan sehat!
                        </p>

                    </div>
                </div>

                <div class="px-5 pb-5 flex justify-between items-center bg-white">

                    <div>
                        <p class="text-xs text-[#aaa] mb-[2px]">Harga</p>
                        <span class="text-[18px] font-bold text-[#0235AC]">
                            Rp 35.000
                        </span>
                    </div>

                    <button
                        onclick="tambahKeKeranjang('Nutella Tiramisu',35000)"
                        class="bg-[#0235AC] text-white border-0 px-4 py-[10px] rounded-lg text-sm font-semibold cursor-pointer flex items-center gap-2 transition-colors duration-200 hover:bg-[#012b89]">

                        <i class="fa-solid fa-cart-plus"></i>
                        + Keranjang
                    </button>

                </div>
            </article>

        </div>

        {{-- Pagination --}}
        <div class="mt-16 flex justify-center gap-[10px]">

            <a href="#" class="px-4 py-2 border border-[#eee] text-[#0235AC] no-underline rounded-lg">
                Sebelumnya
            </a>

            <a href="#" class="px-4 py-2 bg-[#0235AC] text-[#F3E21B] no-underline rounded-lg">
                1
            </a>

            <a href="#" class="px-4 py-2 border border-[#eee] text-[#0235AC] no-underline rounded-lg">
                2
            </a>

            <a href="#" class="px-4 py-2 border border-[#eee] text-[#0235AC] no-underline rounded-lg">
                Selanjutnya
            </a>

        </div>

    </div>

    <script>
        function tambahKeKeranjang(namaProduk, hargaProduk) {
            alert(
                namaProduk +
                " seharga Rp " +
                hargaProduk.toLocaleString('id-ID') +
                " berhasil ditambahkan ke keranjang!"
            );
        }
    </script>

</x-layout>