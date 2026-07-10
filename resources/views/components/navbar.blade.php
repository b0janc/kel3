<nav class="w-full bg-[#0235AC] border-b-2 border-[#F3E21B] font-['DM_Sans',sans-serif]">
    <div class="w-[90%] h-[100px] mx-auto flex items-center">

        {{-- Logo --}}
        <a href="/dashboard" class="font-['Playfair_Display',serif] text-[20px] font-bold text-[#F3E21B] no-underline">
            Komi<em class="text-white">Caffe</em>
        </a>

        {{-- Menu --}}
        <div class="flex gap-1 ml-12">
            <x-nav-link href="/dashboard" :active="request()->is('home')">Home</x-nav-link>
            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        </div>

        {{-- Keranjang & Profil --}}
        <div class="flex items-center gap-5 ml-auto">

            <a href="/cart" class="relative no-underline">
                <img src="{{ asset('images/cart-white.png') }}"
                     alt="Keranjang"
                     class="w-7 h-7">

                <span class="absolute -top-2 -right-2 bg-[#F3E21B] text-[#0235AC] text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center">
                    2
                </span>
            </a>

            {{-- Profil --}}
            <a href="/profile" class="flex items-center gap-2 text-white hover:text-[#F3E21B] transition no-underline">
                <div class="w-10 h-10 rounded-full bg-white text-[#0235AC] flex items-center justify-center">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="hidden md:flex flex-col leading-none">
                    <span class="text-xs text-gray-200">Halo,</span>
                    <span class="text-sm font-semibold">{{ auth()->user()->name }}</span>
                </div>
            </a>

        </div>

    </div>
</nav>