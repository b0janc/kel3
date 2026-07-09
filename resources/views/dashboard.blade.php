<x-layout title="Dashboard">
    

{{-- Container utama yang memenuhi layar --}}
    <div style="width: 100%; padding: 3rem 5%; background-color: #ffffff;">
        
        <div style="margin-bottom: 3rem; display: flex; gap: 15px; flex-wrap: wrap; align-items: center;">
            <span style="font-weight: bold; color: #0235AC; margin-right: 10px;">Kategori:</span>
            <a href="#" style="background: #F3E21B; color: #0235AC; padding: 6px 15px; border-radius: 20px; text-decoration: none; font-size: 14px; font-weight: 600;">Semua</a>
            <a href="#" style="border: 1px solid #0235AC; color: #0235AC; padding: 6px 15px; border-radius: 20px; text-decoration: none; font-size: 14px;">Makanan Berat</a>
            <a href="#" style="border: 1px solid #0235AC; color: #0235AC; padding: 6px 15px; border-radius: 20px; text-decoration: none; font-size: 14px;">Minuman</a>
            <a href="#" style="border: 1px solid #0235AC; color: #0235AC; padding: 6px 15px; border-radius: 20px; text-decoration: none; font-size: 14px;">Snack</a>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">
            
            <article style="background: #fff; border: 1px solid #eee; border-radius: 16px; overflow: hidden; transition: 0.3s; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="width: 100%; height: 200px; 
                    background-image: url('{{ asset('images/ayam-bakar-taliwang.jpg') }}'); 
                    background-size: cover;
                    background-repeat: no-repeat; 
                    background-position: center;
                    border-radius: 16px 16px 0 0;">
                    </div>
                    <div style="padding: 20px 20px 10px 20px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <span style="color: #BF6000; font-size: 12px; font-weight: bold; text-transform: uppercase;">Resep Ayam</span>
                            <span style="color: #aaa; font-size: 12px;">15 Mei 2026</span>
                        </div>
                        <h3 style="font-size: 20px; color: #0235AC; margin-bottom: 10px; font-family: 'Playfair Display', serif;">Ayam Bakar Taliwang Pedas Menggigit</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Cara membuat bumbu Taliwang asli yang meresap sampai ke tulang. Cocok untuk hidangan makan malam keluarga...
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 20px 20px 20px; display: flex; justify-content: space-between; align-items: center; background: #fff;">
                    <div>
                        <p style="font-size: 12px; color: #aaa; margin-bottom: 2px;">Harga</p>
                        <span style="font-size: 18px; font-weight: 700; color: #0235AC;">Rp 45.000</span>
                    </div>
                    <button onclick="tambahKeKeranjang('Ayam Bakar Taliwang', 45000)" style="background: #0235AC; color: #ffffff; border: none; padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: background 0.2s;">
                        <i class="fa-solid fa-cart-plus"></i> + Keranjang
                    </button>
                </div>
            </article>

            <article style="background: #fff; border: 1px solid #eee; border-radius: 16px; overflow: hidden; transition: 0.3s; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="width: 100%; height: 200px; 
                    background-image: url('{{ asset('images/es-jeruk.jpg') }}'); 
                    background-size: cover;
                    background-repeat: no-repeat; 
                    background-position: center;
                    border-radius: 16px 16px 0 0;">
                    </div>
                    <div style="padding: 20px 20px 10px 20px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <span style="color: #0D47A1; font-size: 12px; font-weight: bold; text-transform: uppercase;">Minuman Segar</span>
                            <span style="color: #aaa; font-size: 12px;">12 Mei 2026</span>
                        </div>
                        <h3 style="font-size: 20px; color: #0235AC; margin-bottom: 10px; font-family: 'Playfair Display', serif;">Es Jeruk Seger</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Minuman es jeruk segar dengan tambahan daun mint dan sedikit madu untuk rasa manis alami. Resep mudah untuk melepas dahaga...
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 20px 20px 20px; display: flex; justify-content: space-between; align-items: center; background: #fff;">
                    <div>
                        <p style="font-size: 12px; color: #aaa; margin-bottom: 2px;">Harga</p>
                        <span style="font-size: 18px; font-weight: 700; color: #0235AC;">Rp 12.000</span>
                    </div>
                    <button onclick="tambahKeKeranjang('Es Jeruk Seger', 12000)" style="background: #0235AC; color: #ffffff; border: none; padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: background 0.2s;">
                        <i class="fa-solid fa-cart-plus"></i> + Keranjang
                    </button>
                </div>
            </article>

            <article style="background: #fff; border: 1px solid #eee; border-radius: 16px; overflow: hidden; transition: 0.3s; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="width: 100%; height: 200px; 
                    background-image: url('{{ asset('images/nutella-tiramisu.jpg') }}'); 
                    background-size: cover;
                    background-repeat: no-repeat; 
                    background-position: center;
                    border-radius: 16px 16px 0 0;">
                    </div>
                    <div style="padding: 20px 20px 10px 20px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <span style="color: #4A148C; font-size: 12px; font-weight: bold; text-transform: uppercase;">Snack</span>
                            <span style="color: #aaa; font-size: 12px;">10 Mei 2026</span>
                        </div>
                        <h3 style="font-size: 20px; color: #0235AC; margin-bottom: 10px; font-family: 'Playfair Display', serif;">Nutella Tiramisu</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Baru mulai belajar masak? Pastikan kamu punya 5 alat dasar ini agar proses memasak jadi lebih cepat dan menyenangkan...
                        </p>
                    </div>
                </div>
                
                <div style="padding: 0 20px 20px 20px; display: flex; justify-content: space-between; align-items: center; background: #fff;">
                    <div>
                        <p style="font-size: 12px; color: #aaa; margin-bottom: 2px;">Harga</p>
                        <span style="font-size: 18px; font-weight: 700; color: #0235AC;">Rp 35.000</span>
                    </div>
                    <button onclick="tambahKeKeranjang('Nutella Tiramisu', 35000)" style="background: #0235AC; color: #ffffff; border: none; padding: 10px 16px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: background 0.2s;">
                        <i class="fa-solid fa-cart-plus"></i> + Keranjang
                    </button>
                </div>
            </article>

        </div>

        <div style="margin-top: 4rem; display: flex; justify-content: center; gap: 10px;">
            <a href="#" style="padding: 8px 16px; border: 1px solid #eee; color: #0235AC; text-decoration: none; border-radius: 8px;">Sebelumnya</a>
            <a href="#" style="padding: 8px 16px; background: #0235AC; color: #F3E21B; text-decoration: none; border-radius: 8px;">1</a>
            <a href="#" style="padding: 8px 16px; border: 1px solid #eee; color: #0235AC; text-decoration: none; border-radius: 8px;">2</a>
            <a href="#" style="padding: 8px 16px; border: 1px solid #eee; color: #0235AC; text-decoration: none; border-radius: 8px;">Selanjutnya</a>
        </div>

    </div>

    <script>
        function tambahKeKeranjang(namaProduk, hargaProduk) {
            // Logika dasar alert simulasi, silakan ganti dengan logic Alpine.js atau AJAX Anda
            alert(namaProduk + " seharga Rp " + hargaProduk.toLocaleString('id-ID') + " berhasil ditambahkan ke keranjang!");
        }
    </script>
</x-layout>