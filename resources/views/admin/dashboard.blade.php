@extends('components.admin')
@section('title', 'Dashboard')

@section('content')
@php
    // ==========================================================
    // DUMMY DATA — ganti dengan data dari DashboardController Anda
    // ==========================================================
    $jam = now()->hour;
    $sapaan = $jam < 11 ? 'Selamat pagi' : ($jam < 15 ? 'Selamat siang' : ($jam < 18 ? 'Selamat sore' : 'Selamat malam'));

    $ringkasan = [
        ['icon' => 'fa-solid fa-receipt',      'label' => 'Total Nota Hari Ini',   'value' => '38',              'sub' => 'nota diterbitkan', 'trend' => 12,  'pct' => 72, 'accent' => 'gold'],
        ['icon' => 'fa-solid fa-user-tie',     'label' => 'Kasir Aktif',           'value' => '3',               'sub' => 'shift berjalan',   'trend' => null,'pct' => 100,'accent' => 'info'],
        ['icon' => 'fa-solid fa-sack-dollar',  'label' => 'Pendapatan Hari Ini',   'value' => 'Rp 1.240.000',    'sub' => 'vs kemarin',       'trend' => 8,   'pct' => 64, 'accent' => 'success'],
        ['icon' => 'fa-solid fa-clock',        'label' => 'Pendapatan per Shift',  'value' => 'Rp 413.000',      'sub' => 'rata-rata/shift',  'trend' => -3,  'pct' => 41, 'accent' => 'danger'],
    ];

    $menuTerlaris = [
        ['nama' => 'Americano',     'harga' => 18000, 'terjual' => 42, 'pct' => 88],
        ['nama' => 'Latte',         'harga' => 22000, 'terjual' => 35, 'pct' => 74],
        ['nama' => 'Matcha Latte',  'harga' => 25000, 'terjual' => 27, 'pct' => 56],
        ['nama' => 'Croissant',     'harga' => 20000, 'terjual' => 19, 'pct' => 40],
    ];

    $aktivitas = [
        ['icon' => 'fa-solid fa-receipt',   'color' => 'gold',    'text' => 'Nota #INV-1032 dibuat oleh Dinda', 'nominal' => 'Rp 86.000', 'time' => '2 menit lalu'],
        ['icon' => 'fa-solid fa-mug-hot',   'color' => 'info',    'text' => 'Menu "Es Kopi Susu" ditambahkan',   'nominal' => null,        'time' => '24 menit lalu'],
        ['icon' => 'fa-solid fa-sack-dollar','color' => 'success','text' => 'Rekap shift pagi ditutup',          'nominal' => 'Rp 620.000','time' => '1 jam lalu'],
        ['icon' => 'fa-solid fa-triangle-exclamation','color' => 'danger', 'text' => 'Stok "Croissant" menipis (4 pcs)', 'nominal' => null, 'time' => '2 jam lalu'],
        ['icon' => 'fa-solid fa-receipt',   'color' => 'gold',    'text' => 'Nota #INV-1028 dibuat oleh Rizal',  'nominal' => 'Rp 44.000', 'time' => '3 jam lalu'],
    ];

    $quickActions = [
        ['icon' => 'fa-solid fa-plus',        'label' => 'Tambah Menu',    'href' => '#', 'accent' => 'gold'],
        ['icon' => 'fa-solid fa-cash-register','label' => 'Buat Nota',     'href' => '#', 'accent' => 'success'],
        ['icon' => 'fa-solid fa-file-export', 'label' => 'Export Laporan', 'href' => '#', 'accent' => 'info'],
        ['icon' => 'fa-solid fa-user-plus',   'label' => 'Tambah Kasir',   'href' => '#', 'accent' => 'danger'],
    ];
@endphp

    {{-- ================= HERO ================= --}}
    <div class="kc-animate" style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:16px; margin-bottom:28px;">
        <div>
            <div style="font-size:13px; color:var(--text-faint); margin-bottom:6px;">{{ now()->translatedFormat('l, d F Y') }}</div>
            <h1 class="font-display" style="font-size:32px; font-weight:600; margin:0;">
                {{ $sapaan }}, Admin <span style="opacity:.7;">☕</span>
            </h1>
            <p style="color:var(--text-muted); margin:8px 0 0; font-size:14.5px;">
                Berikut ringkasan performa Komi Caffe hari ini.
            </p>
        </div>
        <div style="display:flex; gap:10px;">
            <button class="btn btn-ghost"><i class="fa-solid fa-file-export"></i> Export</button>
            <button class="btn btn-gold" onclick="kcOpenModal('modalBuatNota')"><i class="fa-solid fa-plus"></i> Buat Nota Baru</button>
        </div>
    </div>

    {{-- ================= STAT CARDS ================= --}}
    <div class="kc-animate kc-delay-1" style="display:grid; grid-template-columns:repeat(4,1fr); gap:18px; margin-bottom:24px;">
        @foreach ($ringkasan as $r)
            <x-stat-card :icon="$r['icon']" :label="$r['label']" :value="$r['value']" :sub="$r['sub']" :trend="$r['trend']" :pct="$r['pct']" :accent="$r['accent']" />
        @endforeach
    </div>

    {{-- ================= CHART + DONUT ================= --}}
    <div class="kc-animate kc-delay-2" style="display:grid; grid-template-columns:1.7fr 1fr; gap:18px; margin-bottom:24px;">

        <x-chart id="chartPenjualan" title="Grafik Penjualan" sub="7 hari terakhir" :height="290">
            <x-slot:legend>
                <div style="display:flex; gap:16px; font-size:12.5px; color:var(--text-muted);">
                    <span><i class="fa-solid fa-circle" style="color:var(--gold); font-size:8px;"></i> Pendapatan</span>
                    <span><i class="fa-solid fa-circle" style="color:var(--info); font-size:8px;"></i> Jumlah Nota</span>
                </div>
            </x-slot:legend>
        </x-chart>

        <div class="glass" style="padding:24px;">
            <h3 class="font-display" style="font-size:18px; font-weight:600; margin:0 0 4px;">Menu Terlaris</h3>
            <p style="font-size:13px; color:var(--text-faint); margin:0 0 18px;">Berdasarkan jumlah terjual hari ini</p>

            <div style="display:flex; flex-direction:column; gap:16px;">
                @foreach ($menuTerlaris as $m)
                    <div>
                        <div style="display:flex; justify-content:space-between; font-size:13.5px; margin-bottom:6px;">
                            <span style="font-weight:600;">{{ $m['nama'] }}</span>
                            <span class="font-mono" style="color:var(--text-muted);">{{ $m['terjual'] }}x</span>
                        </div>
                        <div style="height:6px; border-radius:6px; background:rgba(255,255,255,0.06); overflow:hidden;">
                            <div style="height:100%; width:{{ $m['pct'] }}%; border-radius:6px; background:linear-gradient(90deg, var(--gold-soft), var(--gold));"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ================= AKTIVITAS + QUICK ACTION ================= --}}
    <div class="kc-animate kc-delay-3" style="display:grid; grid-template-columns:1.7fr 1fr; gap:18px;">

        <div class="glass" style="padding:24px;">
            <h3 class="font-display" style="font-size:18px; font-weight:600; margin:0 0 16px;">Aktivitas Terbaru</h3>
            <div style="display:flex; flex-direction:column;">
                @foreach ($aktivitas as $a)
                    <div style="display:flex; align-items:center; gap:14px; padding:13px 4px; border-bottom:1px solid rgba(244,225,195,0.06);">
                        <span style="width:36px;height:36px;border-radius:10px; flex-shrink:0; background:var(--{{ $a['color'] }}-dim); display:flex; align-items:center; justify-content:center;">
                            <i class="{{ $a['icon'] }}" style="font-size:14px; color:var(--{{ $a['color'] }});"></i>
                        </span>
                        <div style="flex:1; min-width:0;">
                            <div style="font-size:13.5px;">{{ $a['text'] }}</div>
                            <div style="font-size:11.5px; color:var(--text-faint); margin-top:2px;">{{ $a['time'] }}</div>
                        </div>
                        @if ($a['nominal'])
                            <div class="font-mono" style="font-size:13.5px; font-weight:700; color:var(--gold-soft); flex-shrink:0;">{{ $a['nominal'] }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="glass" style="padding:24px;">
            <h3 class="font-display" style="font-size:18px; font-weight:600; margin:0 0 16px;">Aksi Cepat</h3>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                @foreach ($quickActions as $q)
                    <a href="{{ $q['href'] }}" class="hover-lift glass-soft" style="border-radius:14px; padding:16px; display:flex; flex-direction:column; align-items:flex-start; gap:10px;">
                        <span style="width:36px;height:36px;border-radius:10px; background:var(--{{ $q['accent'] }}-dim); display:flex; align-items:center; justify-content:center;">
                            <i class="{{ $q['icon'] }}" style="font-size:14px; color:var(--{{ $q['accent'] }});"></i>
                        </span>
                        <span style="font-size:13px; font-weight:700;">{{ $q['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ================= MODAL: BUAT NOTA (contoh pakai komponen modal) ================= --}}
    <x-modal id="modalBuatNota" title="Buat Nota Baru" size="md">
        <div class="field-label"><i class="fa-solid fa-mug-hot"></i> Pilih Menu</div>
        <select class="field-select" style="margin-bottom:16px;">
            <option>Americano — Rp18.000</option>
            <option>Latte — Rp22.000</option>
            <option>Matcha Latte — Rp25.000</option>
            <option>Croissant — Rp20.000</option>
        </select>

        <div class="field-label"><i class="fa-solid fa-hashtag"></i> Jumlah</div>
        <input type="number" min="1" value="1" class="field-input" style="margin-bottom:16px;">

        <div class="field-label"><i class="fa-solid fa-money-bill-wave"></i> Metode Pembayaran</div>
        <select class="field-select">
            <option>Tunai</option>
            <option>QRIS</option>
            <option>Transfer</option>
        </select>

        <x-slot:footer>
            <button class="btn btn-ghost" onclick="kcCloseModal('modalBuatNota')">Batal</button>
            <button class="btn btn-gold"><i class="fa-solid fa-check"></i> Simpan Nota</button>
        </x-slot:footer>
    </x-modal>

@endsection

@push('scripts')
<script>
    const ctx = document.getElementById('chartPenjualan');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [
                    {
                        label: 'Pendapatan',
                        data: [820000, 940000, 780000, 1010000, 1120000, 1340000, 1240000],
                        borderColor: '#D4A857',
                        backgroundColor: 'rgba(212,168,87,0.12)',
                        tension: 0.4,
                        fill: true,
                        pointRadius: 0,
                        pointHoverRadius: 5,
                        yAxisID: 'y',
                    },
                    {
                        label: 'Jumlah Nota',
                        data: [22, 26, 20, 30, 33, 40, 38],
                        borderColor: '#7FB2D9',
                        backgroundColor: 'transparent',
                        tension: 0.4,
                        borderDash: [4,4],
                        pointRadius: 0,
                        pointHoverRadius: 5,
                        yAxisID: 'y1',
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { color: '#A99C8B' } },
                    y: { position: 'left', grid: { color: 'rgba(244,225,195,0.06)' }, ticks: { color: '#A99C8B', callback: v => 'Rp' + (v/1000) + 'rb' } },
                    y1: { position: 'right', grid: { display: false }, ticks: { color: '#A99C8B' } },
                }
            }
        });
    }
</script>
@endpush