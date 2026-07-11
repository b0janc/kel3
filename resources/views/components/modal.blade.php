{{--
    Komponen: <x-modal id="modalTambahMenu" title="Tambah Menu" size="lg">
                  ... isi form ...
              </x-modal>

    Buka dari mana saja: onclick="kcOpenModal('modalTambahMenu')"
    Tutup dari mana saja: onclick="kcCloseModal('modalTambahMenu')"

    Props:
      id      : id unik modal (wajib)
      title   : judul modal
      size    : 'md' | 'lg' | 'xl' (lebar modal)
      footer  : slot opsional untuk tombol aksi di footer
--}}
@props([
    'id' => 'kcModal',
    'title' => 'Modal',
    'size' => 'md',
])

@php
    $maxWidth = match($size) {
        'lg' => '640px',
        'xl' => '880px',
        default => '460px',
    };
@endphp

<div id="{{ $id }}" class="kc-modal-overlay kc-hidden" onclick="if(event.target===this) kcCloseModal('{{ $id }}')">
    <div class="kc-modal glass" style="max-width:{{ $maxWidth }};">
        <div class="kc-modal-header">
            <h3 class="font-display" style="font-size:19px; font-weight:600; margin:0;">{{ $title }}</h3>
            <button class="btn btn-ghost btn-icon btn-sm" style="width:32px;height:32px;" onclick="kcCloseModal('{{ $id }}')">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="kc-modal-body">
            {{ $slot }}
        </div>

        @isset($footer)
            <div class="kc-modal-footer">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>

<style>
    .kc-modal-overlay {
        position: fixed; inset: 0; z-index: 100;
        background: rgba(10, 8, 6, 0.62);
        backdrop-filter: blur(6px);
        display: flex; align-items: center; justify-content: center;
        padding: 24px;
        animation: kc-modal-fade .18s ease;
    }
    @keyframes kc-modal-fade { from { opacity: 0; } to { opacity: 1; } }

    .kc-modal {
        width: 100%;
        max-height: 88vh;
        display: flex;
        flex-direction: column;
        animation: kc-modal-pop .22s cubic-bezier(.2,.8,.2,1);
    }
    @keyframes kc-modal-pop {
        from { opacity: 0; transform: translateY(14px) scale(.98); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    .kc-modal-header {
        display: flex; align-items: center; justify-content: space-between;
        padding: 20px 24px;
        border-bottom: 1px solid var(--glass-border);
        flex-shrink: 0;
    }
    .kc-modal-body {
        padding: 22px 24px;
        overflow-y: auto;
    }
    .kc-modal-footer {
        padding: 16px 24px;
        border-top: 1px solid var(--glass-border);
        display: flex; justify-content: flex-end; gap: 10px;
        flex-shrink: 0;
    }
</style>

<script>
    function kcOpenModal(id) {
        const el = document.getElementById(id);
        if (el) { el.classList.remove('kc-hidden'); document.body.style.overflow = 'hidden'; }
    }
    function kcCloseModal(id) {
        const el = document.getElementById(id);
        if (el) { el.classList.add('kc-hidden'); document.body.style.overflow = ''; }
    }
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.kc-modal-overlay:not(.kc-hidden)').forEach(m => {
                m.classList.add('kc-hidden');
                document.body.style.overflow = '';
            });
        }
    });
</script>