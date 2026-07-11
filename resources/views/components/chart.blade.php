{{--
    Komponen: <x-chart />
    Props:
      id      : id unik canvas, mis. 'chartPenjualan'
      title   : judul chart
      sub     : subjudul/deskripsi kecil
      height  : tinggi canvas (px), default 280
      legend  : slot opsional untuk custom legend di kanan atas
--}}
@props([
    'id' => 'kcChart',
    'title' => 'Grafik',
    'sub' => null,
    'height' => 280,
])

<div {{ $attributes->merge(['class' => 'glass']) }} style="padding:24px;">
    <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:16px; margin-bottom:18px; flex-wrap:wrap;">
        <div>
            <h3 class="font-display" style="font-size:18px; font-weight:600; margin:0;">{{ $title }}</h3>
            @if ($sub)
                <p style="font-size:13px; color:var(--text-faint); margin:4px 0 0;">{{ $sub }}</p>
            @endif
        </div>
        @isset($legend)
            <div>{{ $legend }}</div>
        @endisset
    </div>

    <div style="position:relative; height:{{ $height }}px;">
        <canvas id="{{ $id }}"></canvas>
    </div>
</div>