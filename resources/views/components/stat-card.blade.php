{{--
    Komponen: <x-stat-card />
    Props:
      icon        : class Font Awesome, mis. 'fa-solid fa-receipt'
      label       : label kecil di atas, mis. 'Total Nota Hari Ini'
      value       : nilai utama (string, sudah diformat), mis. 'Rp 1.240.000'
      sub         : teks kecil di bawah value, mis. '38 transaksi'
      trend       : angka persen (boleh negatif), mis. 12 atau -4
      pct         : 0-100 untuk mengisi brew-ring (progress terhadap target)
      accent      : 'gold' | 'success' | 'info' | 'danger' (warna value/ring)
--}}
@props([
    'icon' => 'fa-solid fa-chart-simple',
    'label' => 'Statistik',
    'value' => '0',
    'sub' => null,
    'trend' => null,
    'accent' => 'gold',
])

@php
    $accentVar = match($accent) {
        'success' => 'var(--success)',
        'info' => 'var(--info)',
        'danger' => 'var(--danger)',
        default => 'var(--gold)',
    };
    $accentDim = match($accent) {
        'success' => 'var(--success-dim)',
        'info' => 'var(--info-dim)',
        'danger' => 'var(--danger-dim)',
        default => 'var(--gold-dim)',
    };
@endphp

<div {{ $attributes->merge(['class' => 'glass hover-lift']) }} style="padding:22px; position:relative; overflow:hidden;">

    {{-- ambient glow --}}
    <div style="position:absolute; top:-40px; right:-40px; width:140px; height:140px; border-radius:50%; background:{{ $accentDim }}; filter:blur(30px); pointer-events:none;"></div>

    <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:14px; position:relative;">
        <div style="min-width:0;">
            <div style="display:flex; align-items:center; gap:9px; margin-bottom:12px;">
                <span style="width:32px;height:32px;border-radius:9px; background:{{ $accentDim }}; display:flex; align-items:center; justify-content:center;">
                    <i class="{{ $icon }}" style="font-size:13px; color:{{ $accentVar }};"></i>
                </span>
                <span style="font-size:12.5px; font-weight:700; color:var(--text-muted); text-transform:uppercase; letter-spacing:.04em;">{{ $label }}</span>
            </div>

            <div class="font-mono" style="font-size:26px; font-weight:700; color:var(--text-primary); line-height:1.15; white-space:nowrap;">
                {{ $value }}
            </div>

            <div style="display:flex; align-items:center; gap:8px; margin-top:8px;">
                @if (!is_null($trend))
                    <span class="badge {{ $trend >= 0 ? 'badge-success' : 'badge-danger' }}" style="padding:3px 9px; font-size:11.5px;">
                        <i class="fa-solid {{ $trend >= 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down' }}" style="font-size:10px;"></i>
                        {{ $trend >= 0 ? '+' : '' }}{{ $trend }}%
                    </span>
                @endif
                @if ($sub)
                    <span style="font-size:12.5px; color:var(--text-faint);">{{ $sub }}</span>
                @endif
            </div>
        </div>

        {{-- BREW RING
        <div class="brew-ring" style="--pct:{{ $pct }}; --gold:{{ $accentVar }};">
            <span>{{ $pct }}%</span>
        </div> --}}
    </div>
</div>