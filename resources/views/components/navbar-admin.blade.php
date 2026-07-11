<header class="kc-navbar">

    <div style="display:flex; align-items:center; gap:16px; flex:1; min-width:0;">
        {{-- Mobile toggle --}}
        <button onclick="kcToggleSidebar()" class="btn btn-ghost btn-icon" style="display:none;" id="kc-mobile-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>

        {{-- SEARCH --}}
        <div style="position:relative; flex:1; max-width:420px;">
            <i class="fa-solid fa-magnifying-glass" style="position:absolute; left:15px; top:50%; transform:translateY(-50%); color:var(--text-faint); font-size:13px;"></i>
            <input type="text" placeholder="Cari menu, nota, atau transaksi..."
                   class="field-input" style="padding-left:38px; background:rgba(0,0,0,0.18);">
        </div>
    </div>

    <div style="display:flex; align-items:center; gap:10px;">

        {{-- THEME TOGGLE --}}
        <button class="btn btn-ghost btn-icon" title="Ganti tema" onclick="document.documentElement.classList.toggle('kc-light-preview')">
            <i class="fa-solid fa-moon"></i>
        </button>

        {{-- NOTIFICATIONS --}}
        <div style="position:relative;">
            <button class="btn btn-ghost btn-icon" title="Notifikasi" onclick="document.getElementById('kc-notif-panel').classList.toggle('kc-hidden')">
                <i class="fa-solid fa-bell"></i>
            </button>
            <span style="position:absolute; top:6px; right:6px; width:8px; height:8px; border-radius:50%; background:var(--danger); border:2px solid var(--bg-base);"></span>

            <div id="kc-notif-panel" class="kc-hidden glass" style="position:absolute; right:0; top:48px; width:320px; padding:10px; z-index:50;">
                <div style="font-size:13px; font-weight:700; padding:8px 10px; color:var(--text-muted);">Notifikasi Terbaru</div>
                @foreach ([
                    ['icon' => 'fa-solid fa-receipt', 'text' => 'Nota #INV-1032 baru saja dibuat', 'time' => '2 mnt lalu', 'color' => 'gold'],
                    ['icon' => 'fa-solid fa-triangle-exclamation', 'text' => 'Stok Croissant tersisa 4 pcs', 'time' => '18 mnt lalu', 'color' => 'danger'],
                    ['icon' => 'fa-solid fa-sack-dollar', 'text' => 'Rekap shift pagi sudah siap', 'time' => '1 jam lalu', 'color' => 'success'],
                ] as $n)
                    <div style="display:flex; gap:10px; padding:10px; border-radius:12px;" onmouseover="this.style.background='rgba(255,255,255,0.04)'" onmouseout="this.style.background='transparent'">
                        <span style="width:32px;height:32px;border-radius:9px;flex-shrink:0;display:flex;align-items:center;justify-content:center;background:var(--{{ $n['color'] }}-dim);">
                            <i class="{{ $n['icon'] }}" style="font-size:12px; color:var(--{{ $n['color'] }});"></i>
                        </span>
                        <div style="min-width:0;">
                            <div style="font-size:13px; line-height:1.4;">{{ $n['text'] }}</div>
                            <div style="font-size:11px; color:var(--text-faint); margin-top:2px;">{{ $n['time'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div style="width:1px; height:26px; background:var(--glass-border);"></div>

        {{-- PROFILE --}}
        <div style="position:relative;">
            <button onclick="document.getElementById('kc-profile-panel').classList.toggle('kc-hidden')"
                    style="display:flex; align-items:center; gap:10px; background:transparent; border:none; cursor:pointer; padding:4px; border-radius:12px;">
                <div style="width:36px;height:36px;border-radius:10px; background:linear-gradient(155deg, var(--gold-soft), var(--gold)); display:flex; align-items:center; justify-content:center; font-weight:700; color:#1a1108; font-size:14px;">
                    A
                </div>
                <div style="text-align:left; line-height:1.25;">
                    <div style="font-size:13px; font-weight:700; color:var(--text-primary);">Admin Komi</div>
                    <div style="font-size:11px; color:var(--text-faint);">Super Admin</div>
                </div>
                <i class="fa-solid fa-chevron-down" style="font-size:10px; color:var(--text-faint); margin-left:2px;"></i>
            </button>

            <div id="kc-profile-panel" class="kc-hidden glass" style="position:absolute; right:0; top:52px; width:200px; padding:8px; z-index:50;">
                <a href="#" style="display:flex; align-items:center; gap:10px; padding:9px 12px; border-radius:10px; font-size:13.5px; font-weight:600;" onmouseover="this.style.background='rgba(255,255,255,0.05)'" onmouseout="this.style.background='transparent'">
                    <i class="fa-solid fa-user" style="width:16px; color:var(--text-muted);"></i> Profil Saya
                </a>
                <a href="#" style="display:flex; align-items:center; gap:10px; padding:9px 12px; border-radius:10px; font-size:13.5px; font-weight:600;" onmouseover="this.style.background='rgba(255,255,255,0.05)'" onmouseout="this.style.background='transparent'">
                    <i class="fa-solid fa-gear" style="width:16px; color:var(--text-muted);"></i> Pengaturan
                </a>
                <div style="height:1px; background:var(--glass-border); margin:6px 4px;"></div>
                <a href="#" style="display:flex; align-items:center; gap:10px; padding:9px 12px; border-radius:10px; font-size:13.5px; font-weight:600; color:var(--danger);" onmouseover="this.style.background='var(--danger-dim)'" onmouseout="this.style.background='transparent'">
                    <i class="fa-solid fa-right-from-bracket" style="width:16px;"></i> Keluar
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    .kc-hidden { display: none !important; }
    @media (max-width: 1024px) {
        #kc-mobile-toggle { display: inline-flex !important; }
    }
</style>