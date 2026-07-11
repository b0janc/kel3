{{--
    Komponen: <x-table :headers="['Nota', 'Kasir', 'Total', 'Status', '']">
                  ... <tr> ... </tr> (langsung isi <tbody>) ...
              </x-table>

    Props:
      headers : array label kolom, string kosong '' untuk kolom aksi (rata kanan otomatis)
      empty   : teks yang tampil kalau slot kosong (opsional, dicek manual di halaman)
--}}
@props([
    'headers' => [],
])

<div {{ $attributes->merge(['class' => 'glass']) }} style="overflow:hidden;">
    <div style="overflow-x:auto;">
        <table class="kc-table" style="min-width:720px;">
            <thead>
                <tr>
                    @foreach ($headers as $h)
                        <th style="{{ $h === '' ? 'text-align:right;' : '' }} {{ $loop->first ? 'padding-left:22px;' : '' }} {{ $loop->last ? 'padding-right:22px;' : '' }} padding-top:18px;">
                            {{ $h }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>

<style>
    .kc-table tbody td:first-child { padding-left: 22px; }
    .kc-table tbody td:last-child { padding-right: 22px; text-align: right; }
</style>