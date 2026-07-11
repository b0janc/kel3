@extends('components.admin')
@section('title', 'Menu')

@section('content')
@php
    // ==========================================================
    // DUMMY DATA — ganti dengan $menus dari MenuController Anda
    // ==========================================================
    $kategoriList = ['Semua', 'Kopi', 'Non-Kopi', 'Makanan Ringan'];

    $menus = [
        ['id'=>1,'nama'=>'Americano','kategori'=>'Kopi','harga'=>18000,'stok'=>52,'status'=>true, 'img'=>'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&h=300&fit=crop'],
        ['id'=>2,'nama'=>'Latte','kategori'=>'Kopi','harga'=>22000,'stok'=>40,'status'=>true, 'img'=>'https://images.unsplash.com/photo-1541167760496-1628856ab772?w=400&h=300&fit=crop'],
        ['id'=>3,'nama'=>'Matcha Latte','kategori'=>'Non-Kopi','harga'=>25000,'stok'=>18,'status'=>true, 'img'=>'https://images.unsplash.com/photo-1515823064-d6e0c04616a7?w=400&h=300&fit=crop'],
        ['id'=>4,'nama'=>'Croissant','kategori'=>'Makanan Ringan','harga'=>20000,'stok'=>4,'status'=>true, 'img'=>'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=400&h=300&fit=crop'],
        ['id'=>5,'nama'=>'Es Kopi Susu','kategori'=>'Kopi','harga'=>19000,'stok'=>60,'status'=>true, 'img'=>'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400&h=300&fit=crop'],
        ['id'=>6,'nama'=>'Cheesecake','kategori'=>'Makanan Ringan','harga'=>28000,'stok'=>0,'status'=>false, 'img'=>'https://images.unsplash.com/photo-1524351199678-941a58a3df50?w=400&h=300&fit=crop'],
    ];
@endphp

    {{-- ================= HEADER ================= --}}
    <div class="kc-animate" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:16px; margin-bottom:24px;">
        <div>
            <h1 class="font-display" style="font-size:26px; font-weight:600; margin:0;">Manajemen Menu</h1>
            <p style="color:var(--text-muted); margin:6px 0 0; font-size:14px;">{{ count($menus) }} menu terdaftar di sistem</p>
        </div>
        <button class="btn btn-gold" onclick="kcOpenModal('modalMenu'); kcResetMenuForm();">
            <i class="fa-solid fa-plus"></i> Tambah Menu
        </button>
    </div>

    {{-- ================= FILTER BAR ================= --}}
    <div class="kc-animate kc-delay-1" style="display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap; margin-bottom:22px;">
        <div style="display:flex; gap:8px; flex-wrap:wrap;">
            @foreach ($kategoriList as $i => $k)
                <button class="btn {{ $i === 0 ? 'btn-gold' : 'btn-ghost' }} btn-sm">{{ $k }}</button>
            @endforeach
        </div>
        <div style="position:relative; width:260px;">
            <i class="fa-solid fa-magnifying-glass" style="position:absolute; left:14px; top:50%; transform:translateY(-50%); color:var(--text-faint); font-size:12.5px;"></i>
            <input type="text" placeholder="Cari nama menu..." class="field-input" style="padding-left:36px;">
        </div>
    </div>

    {{-- ================= GRID MENU ================= --}}
    <div class="kc-animate kc-delay-2" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:18px;">
        @foreach ($menus as $m)
            <div class="glass hover-lift" style="overflow:hidden;">
                <div style="position:relative; height:150px;">
                    <img src="{{ $m['img'] }}" style="width:100%; height:100%; object-fit:cover;" alt="{{ $m['nama'] }}">
                    <span class="badge {{ $m['status'] ? 'badge-success' : 'badge-muted' }}" style="position:absolute; top:10px; left:10px;">
                        <i class="fa-solid {{ $m['status'] ? 'fa-circle-check' : 'fa-circle-pause' }}" style="font-size:10px;"></i>
                        {{ $m['status'] ? 'Aktif' : 'Nonaktif' }}
                    </span>
                    @if ($m['stok'] <= 5)
                        <span class="badge badge-danger" style="position:absolute; top:10px; right:10px;">
                            <i class="fa-solid fa-triangle-exclamation" style="font-size:10px;"></i> Stok Menipis
                        </span>
                    @endif
                </div>

                <div style="padding:18px;">
                    <div style="font-size:11.5px; color:var(--gold-soft); font-weight:700; text-transform:uppercase; letter-spacing:.04em; margin-bottom:4px;">
                        {{ $m['kategori'] }}
                    </div>
                    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:14px;">
                        <h4 class="font-display" style="font-size:17px; font-weight:600; margin:0;">{{ $m['nama'] }}</h4>
                        <span class="font-mono" style="font-size:15px; font-weight:700; color:var(--text-primary);">
                            Rp{{ number_format($m['harga'], 0, ',', '.') }}
                        </span>
                    </div>

                    <div style="display:flex; align-items:center; justify-content:space-between;">
                        <span style="font-size:12.5px; color:var(--text-faint);">Stok: <strong style="color:var(--text-muted);">{{ $m['stok'] }}</strong></span>
                        <div style="display:flex; gap:8px;">
                            <button class="btn btn-ghost btn-sm btn-icon" title="Edit"
                                    onclick='kcEditMenu(@json($m))'>
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-danger-ghost btn-sm btn-icon" title="Hapus"
                                    onclick="kcOpenModal('modalHapusMenu')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- ================= PAGINATION ================= --}}
    <div style="display:flex; justify-content:flex-end; align-items:center; gap:14px; margin-top:22px; font-size:13px; color:var(--text-faint);">
        <span>Menampilkan 1-6 dari 24 menu</span>
        <div style="display:flex; gap:6px;">
            <button class="btn btn-ghost btn-sm btn-icon"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="btn btn-gold btn-sm" style="width:36px; padding:0;">1</button>
            <button class="btn btn-ghost btn-sm" style="width:36px; padding:0;">2</button>
            <button class="btn btn-ghost btn-sm" style="width:36px; padding:0;">3</button>
            <button class="btn btn-ghost btn-sm btn-icon"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>

    {{-- ================= MODAL: TAMBAH / EDIT MENU ================= --}}
    <x-modal id="modalMenu" title="Tambah Menu" size="lg">
        <form id="formMenu">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px;">
                <div>
                    <div class="field-label"><i class="fa-solid fa-tag"></i> Nama Menu</div>
                    <input type="text" id="menuNama" class="field-input" placeholder="mis. Americano">
                </div>
                <div>
                    <div class="field-label"><i class="fa-solid fa-layer-group"></i> Kategori</div>
                    <select id="menuKategori" class="field-select">
                        <option>Kopi</option>
                        <option>Non-Kopi</option>
                        <option>Makanan Ringan</option>
                    </select>
                </div>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px;">
                <div>
                    <div class="field-label"><i class="fa-solid fa-money-bill"></i> Harga</div>
                    <input type="number" id="menuHarga" class="field-input" placeholder="18000">
                </div>
                <div>
                    <div class="field-label"><i class="fa-solid fa-boxes-stacked"></i> Stok</div>
                    <input type="number" id="menuStok" class="field-input" placeholder="50">
                </div>
            </div>

            <div style="margin-bottom:18px;">
                <div class="field-label"><i class="fa-solid fa-circle-info"></i> Status Tampilan</div>
                <div style="display:flex; gap:10px;">
                    <label style="display:flex; align-items:center; gap:8px; padding:9px 16px; border-radius:10px; background:var(--success-dim); cursor:pointer; flex:1; justify-content:center;">
                        <input type="radio" name="menuStatus" value="1" checked> <span style="font-size:13px; font-weight:600; color:var(--success);">Aktif</span>
                    </label>
                    <label style="display:flex; align-items:center; gap:8px; padding:9px 16px; border-radius:10px; background:rgba(255,255,255,0.05); cursor:pointer; flex:1; justify-content:center;">
                        <input type="radio" name="menuStatus" value="0"> <span style="font-size:13px; font-weight:600; color:var(--text-muted);">Nonaktif</span>
                    </label>
                </div>
            </div>

            {{-- UPLOAD FOTO + PREVIEW --}}
            <div>
                <div class="field-label"><i class="fa-solid fa-image"></i> Foto Menu</div>
                <div style="display:flex; gap:16px; align-items:center;">
                    <div id="menuPreviewWrap" style="width:110px; height:110px; border-radius:14px; overflow:hidden; border:1px dashed var(--glass-border-strong); flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(0,0,0,0.2);">
                        <img id="menuPreviewImg" src="" style="width:100%; height:100%; object-fit:cover; display:none;">
                        <i id="menuPreviewIcon" class="fa-solid fa-image" style="color:var(--text-faint); font-size:22px;"></i>
                    </div>
                    <div style="flex:1;">
                        <label class="btn btn-ghost btn-sm" style="cursor:pointer; display:inline-flex;">
                            <i class="fa-solid fa-upload"></i> Pilih Foto
                            <input type="file" accept="image/*" style="display:none;" onchange="kcPreviewMenuImage(this)">
                        </label>
                        <p style="font-size:11.5px; color:var(--text-faint); margin:8px 0 0;">Format JPG/PNG, maks 4MB. Rasio 4:3 direkomendasikan.</p>
                    </div>
                </div>
            </div>
        </form>

        <x-slot:footer>
            <button class="btn btn-ghost" onclick="kcCloseModal('modalMenu')">Batal</button>
            <button class="btn btn-gold" onclick="kcCloseModal('modalMenu')"><i class="fa-solid fa-check"></i> Simpan Menu</button>
        </x-slot:footer>
    </x-modal>

    {{-- ================= MODAL: KONFIRMASI HAPUS ================= --}}
    <x-modal id="modalHapusMenu" title="Hapus Menu?" size="md">
        <div style="display:flex; gap:14px; align-items:flex-start;">
            <span style="width:42px;height:42px;border-radius:12px; background:var(--danger-dim); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <i class="fa-solid fa-triangle-exclamation" style="color:var(--danger); font-size:17px;"></i>
            </span>
            <p style="font-size:14px; color:var(--text-muted); line-height:1.6; margin:0;">
                Menu yang dihapus tidak dapat dikembalikan, dan akan hilang dari daftar menu yang bisa dipesan. Pastikan menu ini benar-benar sudah tidak digunakan.
            </p>
        </div>
        <x-slot:footer>
            <button class="btn btn-ghost" onclick="kcCloseModal('modalHapusMenu')">Batal</button>
            <button class="btn btn-danger-ghost" onclick="kcCloseModal('modalHapusMenu')"><i class="fa-solid fa-trash"></i> Ya, Hapus</button>
        </x-slot:footer>
    </x-modal>

@endsection

@push('scripts')
<script>
    function kcResetMenuForm() {
        document.querySelector('#modalMenu h3').textContent = 'Tambah Menu';
        document.getElementById('menuNama').value = '';
        document.getElementById('menuHarga').value = '';
        document.getElementById('menuStok').value = '';
        document.getElementById('menuPreviewImg').style.display = 'none';
        document.getElementById('menuPreviewIcon').style.display = 'block';
    }

    function kcEditMenu(menu) {
        document.querySelector('#modalMenu h3').textContent = 'Edit Menu — ' + menu.nama;
        document.getElementById('menuNama').value = menu.nama;
        document.getElementById('menuKategori').value = menu.kategori;
        document.getElementById('menuHarga').value = menu.harga;
        document.getElementById('menuStok').value = menu.stok;

        const img = document.getElementById('menuPreviewImg');
        img.src = menu.img;
        img.style.display = 'block';
        document.getElementById('menuPreviewIcon').style.display = 'none';

        kcOpenModal('modalMenu');
    }

    function kcPreviewMenuImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.getElementById('menuPreviewImg');
                img.src = e.target.result;
                img.style.display = 'block';
                document.getElementById('menuPreviewIcon').style.display = 'none';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush