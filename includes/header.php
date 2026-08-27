<?php
/**
 * Shared icon() helper — a small, consistent line-icon set used across
 * every slide so the deck reads as one designed system rather than
 * scattered emoji. All icons share a 24x24 grid, 1.6 stroke weight.
 */
function icon($name, $class = 'w-6 h-6') {
    $icons = [
        'eye'         => '<circle cx="12" cy="12" r="3"/><path d="M2 12c2.5-4.5 6-7 10-7s7.5 2.5 10 7c-2.5 4.5-6 7-10 7s-7.5-2.5-10-7Z"/>',
        'shield'      => '<path d="M12 2 4 5v6c0 5 3.4 8.7 8 9.9 4.6-1.2 8-4.9 8-9.9V5l-8-3Z"/>',
        'shield-check'=> '<path d="M12 2 4 5v6c0 5 3.4 8.7 8 9.9 4.6-1.2 8-4.9 8-9.9V5l-8-3Z"/><path d="m9 12 2 2 4-4"/>',
        'search'      => '<circle cx="10.5" cy="10.5" r="6.5"/><path d="m20.5 20.5-4.8-4.8"/>',
        'flag'        => '<path d="M5 21V4"/><path d="M5 5c1.8-1.3 3.6-1.3 5.4 0s3.6 1.3 5.4 0v9c-1.8 1.3-3.6 1.3-5.4 0s-3.6-1.3-5.4 0"/>',
        'message'     => '<path d="M4 5h16v11H8l-4 4Z"/>',
        'briefcase'   => '<rect x="3" y="8" width="18" height="11" rx="1.5"/><path d="M8 8V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 13h18"/>',
        'phone'       => '<path d="M6 3h4l1.5 5-2.5 2c1 2.5 2.5 4 5 5l2-2.5 5 1.5v4c0 1-1 2-2 2-8 0-15-7-15-15 0-1 1-2 2-2Z"/>',
        'download'    => '<path d="M12 4v11"/><path d="m7 11 5 5 5-5"/><path d="M5 20h14"/>',
        'user-x'      => '<circle cx="9" cy="8" r="4"/><path d="M2 21c0-4.4 3.1-7 7-7s7 2.6 7 7"/><path d="m17 9 4 4"/><path d="m21 9-4 4"/>',
        'heart'       => '<path d="M12 20.5S3.5 15 3.5 8.8A4.8 4.8 0 0 1 12 6a4.8 4.8 0 0 1 8.5 2.8C20.5 15 12 20.5 12 20.5Z"/>',
        'compass'     => '<circle cx="12" cy="12" r="9.5"/><path d="m15 9-2 6-6 2 2-6 6-2Z"/>',
        'pause'       => '<rect x="6" y="4.5" width="4" height="15" rx="1"/><rect x="14" y="4.5" width="4" height="15" rx="1"/>',
        'globe'       => '<circle cx="12" cy="12" r="9.5"/><path d="M2.5 12h19"/><path d="M12 2.5c2.6 2.6 4 6 4 9.5s-1.4 6.9-4 9.5c-2.6-2.6-4-6-4-9.5s1.4-6.9 4-9.5Z"/>',
        'calendar'    => '<rect x="3.5" y="5" width="17" height="16" rx="2"/><path d="M8 3v4M16 3v4M3.5 10h17"/>',
        'link'        => '<path d="M9.5 14.5 14.5 9.5"/><path d="M11 6.5 13 4.6a3.6 3.6 0 0 1 5.1 5.1L16 11.7"/><path d="M13 17.5 11 19.4a3.6 3.6 0 0 1-5.1-5.1L8 12.3"/>',
        'landmark'    => '<path d="M4 21h16"/><path d="M5 21V10M9.5 21V10M14.5 21V10M19 21V10"/><path d="M3 10 12 4l9 6Z"/>',
        'newspaper'   => '<rect x="3.5" y="5.5" width="13" height="13.5" rx="1"/><path d="M16.5 8.5H19a1.5 1.5 0 0 1 1.5 1.5v8a1.5 1.5 0 0 1-1.5 1.5H8"/><path d="M7 9.5h6M7 13h6M7 16h4"/>',
        'check-circle'=> '<circle cx="12" cy="12" r="9.5"/><path d="m8 12.3 2.6 2.6L16 9.3"/>',
        'ban'         => '<circle cx="12" cy="12" r="9.5"/><path d="m5.5 5.5 13 13"/>',
        'megaphone'   => '<path d="M4 10.5v3a1.5 1.5 0 0 0 1.5 1.5H7l3.5 4V6L7 9H5.5A1.5 1.5 0 0 0 4 10.5Z"/><path d="M13 8.5c1.6.7 2.6 2 2.6 3.5s-1 2.8-2.6 3.5"/><path d="M16 5.5c2.6 1.2 4.2 3.6 4.2 6.5s-1.6 5.3-4.2 6.5"/>',
        'users'       => '<circle cx="8.5" cy="8" r="3.5"/><path d="M2 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.3a3.5 3.5 0 0 1 0 6.9"/><path d="M18 14.3c2.4.6 4 2.7 4 5.7"/>',
        'zap'         => '<path d="M13 2 4.5 13.5H11L10 22l9-12h-6.5Z"/>',
        'video-off'   => '<path d="m3 3 18 18"/><path d="M16 8.5 21 6v12l-5-2.5"/><rect x="3" y="6" width="12" height="12" rx="1.5"/>',
        'image'       => '<rect x="3.5" y="4.5" width="17" height="15" rx="1.5"/><circle cx="9" cy="10" r="1.7"/><path d="m5 18.5 5-5.5 3.5 3.5L18.5 11l1.5 1.5"/>',
        'stamp'       => '<path d="M9 3.5h6l1 5H8l1-5Z"/><path d="M8 8.5h8v6H8z"/><path d="M4.5 20.5c1-2 2-2.8 3.5-2.8h8c1.5 0 2.5.8 3.5 2.8"/><path d="M3 20.5h18"/>',
        'radar'       => '<circle cx="12" cy="12" r="9.5"/><circle cx="12" cy="12" r="5.5"/><circle cx="12" cy="12" r="1.5"/><path d="M12 2.5v3M21.5 12h-3M12 21.5v-3M2.5 12h3"/>',
        'arrow-right' => '<path d="M4 12h16"/><path d="m13 5 7 7-7 7"/>',
        'arrow-left'  => '<path d="M20 12H4"/><path d="m11 19-7-7 7-7"/>',
        'chevron-right' => '<path d="m9 5 7 7-7 7"/>',
        'chevron-left'  => '<path d="m15 5-7 7 7 7"/>',
        'menu'        => '<path d="M3.5 6.5h17M3.5 12h17M3.5 17.5h17"/>',
        'close'       => '<path d="m5 5 14 14M19 5 5 19"/>',
        'graduation'  => '<path d="M2 8.5 12 4l10 4.5-10 4.5-10-4.5Z"/><path d="M6 10.8v4.4c0 1.6 2.7 3 6 3s6-1.4 6-3v-4.4"/><path d="M21 8.5v6"/>',
        'sparkle'     => '<path d="M12 3.5c.4 3 1.6 5 4.8 6-3.2 1-4.4 3-4.8 6-.4-3-1.6-5-4.8-6 3.2-1 4.4-3 4.8-6Z"/>',
    ];
    $paths = $icons[$name] ?? $icons['sparkle'];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="' . $class . '">' . $paths . '</svg>';
}

// Deck order — used for the presentation-style progress rail and prev/next controls.
$deck = [
    ['href' => 'index.php',    'label' => 'Overview',    'short' => 'Overview'],
    ['href' => 'session1.php', 'label' => 'Session 1',   'short' => 'Awareness'],
    ['href' => 'session2.php', 'label' => 'Session 2',   'short' => 'Verification'],
    ['href' => 'session3.php', 'label' => 'Session 3',   'short' => 'Citizenship'],
    ['href' => 'evidence.php', 'label' => 'Evidence',    'short' => 'Evidence'],
];
$current = basename($_SERVER['PHP_SELF']);
if ($current === '') { $current = 'index.php'; }
$currentIndex = 0;
foreach ($deck as $i => $d) { if ($d['href'] === $current) { $currentIndex = $i; break; } }
?><!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Literacy Programme · Kenya 2027</title>
    <meta name="description" content="A three-part digital literacy workshop preparing young Kenyans to verify information and engage responsibly ahead of the 2027 elections.">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink:   { DEFAULT: '#0A1310', 2: '#0F1C17', 3: '#15251E' },
                        line:  '#233A31',
                        paper: '#F4EFE2',
                        gold:  { DEFAULT: '#D9A441', 2: '#F0C878' },
                        clay:  '#B8433A',
                        moss:  '#4C8B6C',
                        teal:  '#6FA8B0',
                        ivory: '#F1EDE2',
                        fog:   '#93A69A',
                    },
                    fontFamily: {
                        display: ['"Fraunces"', 'serif'],
                        body: ['"Inter"', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,450;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&family=Inter:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <style>
        :root{
            --ease: cubic-bezier(.16,1,.3,1);
        }
        body{
            font-family:'Inter',sans-serif;
            background-color:#0A1310;
            background-image:
                radial-gradient(60rem 34rem at 85% -10%, rgba(217,164,65,0.10), transparent 60%),
                radial-gradient(50rem 30rem at -10% 110%, rgba(111,168,176,0.09), transparent 60%);
        }
        /* faint film-grain overlay so flat dark sections don't look like a flat template */
        body::before{
            content:'';
            position:fixed; inset:0; pointer-events:none; z-index:40;
            opacity:.035; mix-blend-mode:overlay;
            background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='120' height='120'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/></filter><rect width='100%25' height='100%25' filter='url(%23n)'/></svg>");
        }
        .font-display{ font-family:'Fraunces','serif'; }
        .font-mono{ font-family:'IBM Plex Mono',monospace; }

        ::selection{ background:#D9A441; color:#0A1310; }

        /* Focus visibility, kept crisp for keyboard users */
        a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible, select:focus-visible{
            outline:2px solid #D9A441; outline-offset:3px; border-radius:6px;
        }

        ::-webkit-scrollbar{ width:10px; height:10px; }
        ::-webkit-scrollbar-track{ background:#0A1310; }
        ::-webkit-scrollbar-thumb{ background:#233A31; border-radius:8px; }
        ::-webkit-scrollbar-thumb:hover{ background:#2E4A3E; }

        @keyframes fadeInSlide{
            0%{ opacity:0; transform:translateY(22px); }
            100%{ opacity:1; transform:translateY(0); }
        }
        .slide-enter{ animation:fadeInSlide .7s var(--ease) both; }
        .stagger > *{ animation:fadeInSlide .6s var(--ease) both; }
        .stagger > *:nth-child(1){ animation-delay:.04s; }
        .stagger > *:nth-child(2){ animation-delay:.10s; }
        .stagger > *:nth-child(3){ animation-delay:.16s; }
        .stagger > *:nth-child(4){ animation-delay:.22s; }
        .stagger > *:nth-child(5){ animation-delay:.28s; }
        .stagger > *:nth-child(6){ animation-delay:.34s; }

        @keyframes pulseRing{
            0%{ transform:scale(.75); opacity:.55; }
            80%,100%{ transform:scale(1.9); opacity:0; }
        }
        .pulse-ring{ animation:pulseRing 3.6s var(--ease) infinite; }

        @keyframes driftSlow{
            0%,100%{ transform:translate(0,0) rotate(0deg); }
            50%{ transform:translate(-14px,10px) rotate(2deg); }
        }
        .drift{ animation:driftSlow 9s ease-in-out infinite; }

        @keyframes floatY{
            0%,100%{ transform:translateY(0); }
            50%{ transform:translateY(-8px); }
        }
        .float-y{ animation:floatY 4.5s ease-in-out infinite; }

        @keyframes spinSlow{ to{ transform:rotate(360deg); } }
        .spin-slow{ animation:spinSlow 26s linear infinite; }

        /* Body-out transition applied by nav.js before an internal navigation */
        .body-leaving{ opacity:0; transform:translateY(-10px) scale(.995); transition:opacity .28s var(--ease), transform .28s var(--ease); }
        body{ transition:opacity .3s var(--ease); }

        @media (prefers-reduced-motion: reduce){
            .slide-enter, .stagger > *, .pulse-ring, .drift, .float-y, .spin-slow, body{ animation:none !important; transition:none !important; }
        }

        .card-hover{ transition:transform .4s var(--ease), border-color .3s var(--ease), background-color .3s var(--ease); }
        .card-hover:hover{ transform:translateY(-5px); }

        .eyebrow{ font-family:'IBM Plex Mono',monospace; letter-spacing:.14em; }

        .stamp-rotate{ transform:rotate(-8deg); }
    </style>
</head>
<body class="bg-ink text-ivory flex flex-col min-h-screen antialiased selection:bg-gold selection:text-ink">

    <!-- Reading progress -->
    <div class="fixed top-0 left-0 w-full h-[3px] bg-line/60 z-50">
        <div id="progress-bar" class="h-full bg-gradient-to-r from-gold via-gold-2 to-teal transition-all duration-500"></div>
    </div>

    <!-- Navigation -->
    <header class="sticky top-0 z-40 bg-ink/85 backdrop-blur-xl border-b border-line/80">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-4 flex items-center justify-between gap-4">
            <a href="index.php" class="flex items-center gap-3 group shrink-0">
                <span class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-gold to-clay/80 flex items-center justify-center text-ink shadow-lg shadow-black/30 ring-1 ring-white/10 group-hover:scale-105 transition">
                    <?= icon('stamp', 'w-5 h-5') ?>
                </span>
                <span class="leading-tight">
                    <span class="block font-display font-semibold text-lg text-ivory tracking-tight group-hover:text-gold-2 transition">Digital Literacy</span>
                    <span class="block eyebrow text-[10px] text-fog uppercase">Africa Nazarene University · CSL</span>
                </span>
            </a>

            <!-- Desktop nav -->
            <nav class="hidden lg:flex items-center gap-1 text-sm font-semibold">
                <?php foreach ($deck as $i => $d):
                    $active = $d['href'] === $current; ?>
                    <a href="<?= $d['href'] ?>" class="relative px-3.5 py-2 rounded-lg transition <?= $active ? 'text-ink bg-gold' : 'text-ivory/80 hover:text-ivory hover:bg-white/5' ?>">
                        <span class="eyebrow text-[10px] mr-1.5 opacity-60"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span><?= $d['short'] ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <div class="flex items-center gap-2">
                <span class="hidden md:inline-flex eyebrow text-[10px] text-fog uppercase border border-line rounded-full px-3 py-1.5">Slide <?= $currentIndex + 1 ?>/<?= count($deck) ?></span>
                <button id="menu-toggle" class="lg:hidden w-10 h-10 rounded-lg border border-line flex items-center justify-center text-ivory hover:bg-white/5 transition" aria-label="Toggle menu" aria-expanded="false">
                    <?= icon('menu', 'w-5 h-5') ?>
                </button>
            </div>
        </div>

        <!-- Mobile nav -->
        <nav id="mobile-menu" class="lg:hidden hidden border-t border-line/80 bg-ink-2/95">
            <div class="max-w-7xl mx-auto px-5 py-3 flex flex-col">
                <?php foreach ($deck as $i => $d):
                    $active = $d['href'] === $current; ?>
                    <a href="<?= $d['href'] ?>" class="flex items-center justify-between px-3 py-3 rounded-lg text-sm font-semibold border-b border-line/60 last:border-0 <?= $active ? 'text-gold' : 'text-ivory/85' ?>">
                        <span><span class="eyebrow text-[10px] mr-2 opacity-60"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span><?= $d['label'] ?></span>
                        <?= icon('chevron-right', 'w-4 h-4 opacity-50') ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </nav>
    </header>
