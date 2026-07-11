@php
    // Route helper aman dipakai walau route belum didaftarkan semua (untuk preview cepat)
    $kcIsActive = function (string $name) {
        return function_exists('request') && request()->routeIs($name);
    };
    $current = \Illuminate\Support\Facades\Route::currentRouteName() ?? 'admin.dashboard';

    $navGroups = [
        [
            'label' => 'Utama',
            'items' => [
                ['route' => 'admin.dashboard',  'icon' => 'fa-solid fa-gauge-high',   'label' => 'Dashboard'],
                ['route' => 'admin.menu',        'icon' => 'fa-solid fa-mug-saucer',   'label' => 'Menu'],
                ['route' => 'admin.pesanan',     'icon' => 'fa-solid fa-receipt',      'label' => 'Pesanan'],
                ['route' => 'admin.riwayat',     'icon' => 'fa-solid fa-clock-rotate-left', 'label' => 'Riwayat'],
            ],
        ],
        [
            'label' => 'Bisnis',
            'items' => [
                ['route' => 'admin.keuangan',    'icon' => 'fa-solid fa-sack-dollar',  'label' => 'Keuangan'],
                ['route' => 'admin.laporan',     'icon' => 'fa-solid fa-chart-line',   'label' => 'Laporan'],
            ],
        ],
        [
            'label' => 'Sistem',
            'items' => [
                ['route' => 'admin.pengguna',    'icon' => 'fa-solid fa-users',        'label' => 'Pengguna'],
                ['route' => 'admin.pengaturan',  'icon' => 'fa-solid fa-gear',         'label' => 'Pengaturan'],
            ],
        ],
    ];
@endphp

<aside class="kc-sidebar">

    {{-- LOGO --}}
    <a href="{{ \Illuminate\Support\Facades\Route::has('admin.dashboard') ? route('admin.dashboard') : '#' }}"
       class="flex items-center gap-3 px-2 mb-8" style="display:flex;align-items:center;gap:12px;padding:0 8px;margin-bottom:30px;">
        <div style="width:42px;height:42px;border-radius:12px;background:linear-gradient(155deg, var(--gold-soft), var(--gold) 60%, #8a6425); display:flex;align-items:center;justify-content:center; box-shadow:0 8px 18px -6px rgba(212,168,87,0.5);">
            <i class="fa-solid fa-mug-hot" style="color:#1a1108;font-size:18px;"></i>
        </div>
        <div>
            <div class="font-display" style="font-size:19px;font-weight:600;letter-spacing:.01em;line-height:1;">Komi Caffe</div>
            <div style="font-size:11px;color:var(--text-faint);letter-spacing:.08em;text-transform:uppercase;margin-top:4px;">Admin Console</div>
        </div>
    </a>

    {{-- NAV --}}
    <nav style="flex:1; overflow-y:auto; padding-right:2px;">
        @foreach ($navGroups as $group)
            <div style="margin-bottom:22px;">
                <div style="font-size:11px; font-weight:700; letter-spacing:.09em; text-transform:uppercase; color:var(--text-faint); padding:0 12px; margin-bottom:10px;">
                    {{ $group['label'] }}
                </div>
                <div style="display:flex; flex-direction:column; gap:3px;">
                    @foreach ($group['items'] as $item)
                        @php $active = $current === $item['route']; @endphp
                        <a href="{{ \Illuminate\Support\Facades\Route::has($item['route']) ? route($item['route']) : '#' }}"
                           style="
                                position:relative;
                                display:flex; align-items:center; gap:12px;
                                padding:10px 14px;
                                border-radius:11px;
                                font-size:14px; font-weight:600;
                                color: {{ $active ? 'var(--gold-soft)' : 'var(--text-muted)' }};
                                background: {{ $active ? 'var(--gold-dim)' : 'transparent' }};
                                transition: all .2s ease;
                           "
                           onmouseover="if(!this.dataset.active) this.style.background='rgba(255,255,255,0.05)'"
                           onmouseout="if(!this.dataset.active) this.style.background='{{ $active ? 'var(--gold-dim)' : 'transparent' }}'"
                           @if($active) data-active="1" @endif
                        >
                            @if ($active)
                                <span style="position:absolute; left:0; top:8px; bottom:8px; width:3px; border-radius:3px; background:var(--gold);"></span>
                            @endif
                            <i class="{{ $item['icon'] }}" style="width:18px; text-align:center; font-size:15px; {{ $active ? 'color:var(--gold);' : '' }}"></i>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </nav>

    {{-- FOOTER: shift info --}}
    <div class="glass-soft" style="border-radius:16px; padding:14px; margin-top:8px;">
        <div style="display:flex; align-items:center; gap:10px;">
            <span style="width:34px;height:34px;border-radius:10px;background:var(--success-dim);display:flex;align-items:center;justify-content:center;">
                <i class="fa-solid fa-circle-check" style="color:var(--success);font-size:14px;"></i>
            </span>
            <div style="line-height:1.3;">
                <div style="font-size:13px; font-weight:700;">Shift Pagi Aktif</div>
                <div style="font-size:11.5px; color:var(--text-faint);">Kasir: Dinda · 07:00–15:00</div>
            </div>
        </div>
    </div>

</aside>