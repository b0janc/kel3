<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') · Komi Caffe</title>

    {{-- Fonts: Fraunces (display) + Manrope (UI) + JetBrains Mono (angka/nota) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Icons & Charts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>

    <style>
        /* ============================================================
           KOMI CAFFE — DESIGN TOKENS
           ============================================================ */
        :root {
            /* Base palette — dark roast espresso, not the generic cream/terracotta */
            --bg-base:        #15110D;
            --bg-base-2:      #1A1510;
            --bg-panel:       #1E1812;
            --bg-panel-soft:  #241D15;
            --glass-fill:     rgba(255, 255, 255, 0.045);
            --glass-fill-2:   rgba(255, 255, 255, 0.07);
            --glass-border:   rgba(244, 225, 195, 0.10);
            --glass-border-strong: rgba(244, 225, 195, 0.18);

            /* Accent — crema gold, the one bold color */
            --gold:           #D4A857;
            --gold-soft:      #E8C983;
            --gold-dim:       rgba(212, 168, 87, 0.16);

            /* Text */
            --text-primary:   #F3ECE1;
            --text-muted:     #A99C8B;
            --text-faint:     #6F6355;

            /* Functional (used sparingly, not brand colors) */
            --success:        #6FCF97;
            --success-dim:    rgba(111, 207, 151, 0.14);
            --danger:         #D97A55;
            --danger-dim:     rgba(217, 122, 85, 0.14);
            --info:           #7FB2D9;
            --info-dim:       rgba(127, 178, 217, 0.14);

            --radius-lg: 22px;
            --radius-md: 14px;
            --radius-sm: 9px;

            --sidebar-w: 272px;
        }

        * { box-sizing: border-box; }

        html, body {
            margin: 0;
            padding: 0;
            background: radial-gradient(ellipse 1200px 800px at 15% -10%, #241C13 0%, var(--bg-base) 55%);
            background-attachment: fixed;
            color: var(--text-primary);
            font-family: 'Manrope', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        ::selection { background: var(--gold-dim); color: var(--gold-soft); }

        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(244,225,195,0.14); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(244,225,195,0.25); }

        .font-display { font-family: 'Fraunces', serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }

        a { text-decoration: none; color: inherit; }

        /* ============================================================
           GLASS PANEL — the shared surface language
           ============================================================ */
        .glass {
            background: var(--glass-fill);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-lg);
            box-shadow: 0 1px 0 rgba(255,255,255,0.03) inset,
                        0 20px 50px -20px rgba(0,0,0,0.55);
        }
        .glass-soft {
            background: var(--glass-fill);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid var(--glass-border);
        }

        .hover-lift {
            transition: transform .25s cubic-bezier(.2,.8,.2,1), box-shadow .25s, border-color .25s;
        }
        .hover-lift:hover {
            transform: translateY(-3px);
            border-color: var(--glass-border-strong);
            box-shadow: 0 30px 60px -25px rgba(0,0,0,0.6);
        }

        /* ============================================================
           BREW RING — signature radial gauge (used on stat cards)
           ============================================================ */
        .brew-ring {
            --pct: 0;
            width: 64px; height: 64px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            position: relative;
            background:
                radial-gradient(closest-side, var(--bg-panel) 66%, transparent 67% 100%),
                conic-gradient(var(--gold) calc(var(--pct) * 1%), rgba(244,225,195,0.10) 0);
            flex-shrink: 0;
        }
        .brew-ring::before {
            content: '';
            position: absolute; inset: -1px;
            border-radius: 50%;
            border: 1px solid var(--glass-border);
            pointer-events: none;
        }
        .brew-ring span {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            font-weight: 600;
            color: var(--gold-soft);
        }

        /* ============================================================
           BADGES
           ============================================================ */
        .badge {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 5px 12px;
            border-radius: 999px;
            font-size: 12.5px;
            font-weight: 600;
            white-space: nowrap;
        }
        .badge-success { background: var(--success-dim); color: var(--success); }
        .badge-danger  { background: var(--danger-dim);  color: var(--danger); }
        .badge-info    { background: var(--info-dim);    color: var(--info); }
        .badge-gold    { background: var(--gold-dim);    color: var(--gold-soft); }
        .badge-muted   { background: rgba(244,225,195,0.08); color: var(--text-muted); }

        /* ============================================================
           BUTTONS
           ============================================================ */
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: 8px;
            padding: 10px 18px;
            border-radius: var(--radius-sm);
            font-weight: 600;
            font-size: 14px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all .2s ease;
        }
        .btn-gold {
            background: linear-gradient(180deg, var(--gold-soft), var(--gold));
            color: #1A1108;
            box-shadow: 0 8px 20px -8px rgba(212,168,87,0.55);
        }
        .btn-gold:hover { filter: brightness(1.08); transform: translateY(-1px); }
        .btn-ghost {
            background: var(--glass-fill-2);
            color: var(--text-primary);
            border-color: var(--glass-border);
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.09); border-color: var(--glass-border-strong); }
        .btn-danger-ghost {
            background: var(--danger-dim);
            color: var(--danger);
        }
        .btn-danger-ghost:hover { background: rgba(217,122,85,0.24); }
        .btn-sm { padding: 7px 13px; font-size: 13px; }
        .btn-icon { width: 38px; height: 38px; padding: 0; border-radius: var(--radius-sm); }

        /* ============================================================
           FORM ELEMENTS
           ============================================================ */
        .field-label {
            display: flex; align-items: center; gap: 7px;
            font-size: 13px; font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 8px;
        }
        .field-input, .field-select, .field-textarea {
            width: 100%;
            background: rgba(0,0,0,0.22);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius-sm);
            padding: 11px 14px;
            color: var(--text-primary);
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }
        .field-input:focus, .field-select:focus, .field-textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px var(--gold-dim);
        }
        .field-input::placeholder { color: var(--text-faint); }

        /* ============================================================
           TABLE
           ============================================================ */
        .kc-table { width: 100%; border-collapse: separate; border-spacing: 0; }
        .kc-table thead th {
            text-align: left;
            font-size: 12px;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--text-faint);
            font-weight: 700;
            padding: 0 18px 14px;
            border-bottom: 1px solid var(--glass-border);
        }
        .kc-table tbody td {
            padding: 16px 18px;
            border-bottom: 1px solid rgba(244,225,195,0.06);
            font-size: 14px;
            vertical-align: middle;
        }
        .kc-table tbody tr:last-child td { border-bottom: none; }
        .kc-table tbody tr { transition: background .2s; }
        .kc-table tbody tr:hover { background: rgba(255,255,255,0.025); }

        /* ============================================================
           LAYOUT SHELL
           ============================================================ */
        .kc-shell { display: flex; min-height: 100vh; }

        .kc-sidebar {
            width: var(--sidebar-w);
            flex-shrink: 0;
            position: sticky;
            top: 0;
            height: 100vh;
            padding: 22px 16px;
            display: flex;
            flex-direction: column;
            border-right: 1px solid var(--glass-border);
            background: linear-gradient(180deg, rgba(255,255,255,0.035), rgba(255,255,255,0.015));
            backdrop-filter: blur(24px);
            z-index: 40;
        }

        .kc-main { flex: 1; min-width: 0; }

        .kc-navbar {
            position: sticky; top: 0; z-index: 30;
            display: flex; align-items: center; justify-content: space-between;
            gap: 20px;
            padding: 16px 32px;
            border-bottom: 1px solid var(--glass-border);
            background: rgba(21, 17, 13, 0.72);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .kc-content { padding: 32px; max-width: 1440px; }

        @media (max-width: 1024px) {
            .kc-sidebar { position: fixed; left: -280px; transition: left .3s ease; box-shadow: 30px 0 60px rgba(0,0,0,0.4); }
            .kc-sidebar.kc-sidebar-open { left: 0; }
            .kc-content { padding: 20px; }
            .kc-navbar { padding: 14px 18px; }
        }

        /* Fade-up entrance for cards */
        @keyframes kc-fade-up {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .kc-animate { animation: kc-fade-up .5s cubic-bezier(.2,.8,.2,1) both; }
        .kc-delay-1 { animation-delay: .05s; }
        .kc-delay-2 { animation-delay: .1s; }
        .kc-delay-3 { animation-delay: .15s; }
        .kc-delay-4 { animation-delay: .2s; }

        @media (prefers-reduced-motion: reduce) {
            .kc-animate, .hover-lift { animation: none !important; transition: none !important; }
        }

        /* Visible keyboard focus */
        a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible {
            outline: 2px solid var(--gold);
            outline-offset: 2px;
        }
    </style>

    @stack('styles')
</head>
<body>

    <div class="kc-shell">

        {{-- SIDEBAR --}}
        @include('components.sidebar')

        <div class="kc-main">

            {{-- NAVBAR --}}
            @include('components.navbar-admin')

            {{-- PAGE CONTENT --}}
            <main class="kc-content">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Mobile sidebar toggle --}}
    <script>
        function kcToggleSidebar() {
            document.querySelector('.kc-sidebar').classList.toggle('kc-sidebar-open');
        }
    </script>

    @stack('scripts')
</body>
</html>