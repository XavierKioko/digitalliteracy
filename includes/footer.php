    <!-- Presentation-style deck rail -->
    <nav aria-label="Slide navigation" class="sticky bottom-0 z-40 mt-auto border-t border-line/80 bg-ink/90 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-3 flex items-center justify-between gap-4">
            <?php
            $prev = $currentIndex > 0 ? $deck[$currentIndex - 1] : null;
            $next = $currentIndex < count($deck) - 1 ? $deck[$currentIndex + 1] : null;
            ?>
            <a href="<?= $prev ? $prev['href'] : '#' ?>" class="flex items-center gap-2 text-xs font-semibold <?= $prev ? 'text-ivory/80 hover:text-gold' : 'text-ivory/20 pointer-events-none' ?> transition shrink-0">
                <?= icon('chevron-left', 'w-4 h-4') ?>
                <span class="hidden sm:inline"><?= $prev ? $prev['label'] : 'Start' ?></span>
            </a>

            <div class="flex items-center gap-2.5">
                <?php foreach ($deck as $i => $d): $active = $i === $currentIndex; ?>
                    <a href="<?= $d['href'] ?>" aria-label="<?= $d['label'] ?>" aria-current="<?= $active ? 'true' : 'false' ?>"
                       class="group relative flex items-center justify-center h-3 <?= $active ? 'w-7' : 'w-3' ?> rounded-full transition-all duration-300 <?= $active ? 'bg-gold' : 'bg-line hover:bg-fog' ?>">
                        <span class="pointer-events-none absolute -top-9 left-1/2 -translate-x-1/2 whitespace-nowrap eyebrow text-[9px] uppercase text-ivory bg-ink-3 border border-line px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"><?= $d['label'] ?></span>
                    </a>
                <?php endforeach; ?>
            </div>

            <a href="<?= $next ? $next['href'] : '#' ?>" class="flex items-center gap-2 text-xs font-semibold <?= $next ? 'text-ivory/80 hover:text-gold' : 'text-ivory/20 pointer-events-none' ?> transition shrink-0">
                <span class="hidden sm:inline"><?= $next ? $next['label'] : 'End' ?></span>
                <?= icon('chevron-right', 'w-4 h-4') ?>
            </a>
        </div>
    </nav>

    <!-- Credits footer -->
    <footer class="border-t border-line/60 bg-ink-2 text-fog py-8 px-5 md:px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-5">
            <div class="flex items-center gap-3 text-center md:text-left">
                <span class="w-9 h-9 rounded-full bg-white/5 border border-line flex items-center justify-center text-gold shrink-0"><?= icon('graduation', 'w-[1.125rem] h-[1.125rem]') ?></span>
                <div>
                    <p class="text-sm font-semibold text-ivory">Before you believe it, before you share it — verify it.</p>
                    <p class="text-xs text-fog">Facilitators: Shillah Mwadosho &amp; Lucy Wanjiku · ANU Community Service-Learning</p>
                </div>
            </div>
            <div class="flex items-center gap-3 text-[11px] font-medium text-fog">
                <span class="eyebrow inline-flex items-center gap-1.5 bg-white/5 px-2.5 py-1.5 rounded-md border border-line uppercase">
                    <span class="text-gold font-bold">2027</span> General Elections Focus
                </span>
                <span>© <?= date('Y'); ?> Digital Literacy Programme</span>
            </div>
        </div>
    </footer>

    <script>
        (function(){
            var deck = <?= json_encode(array_column($deck, 'href')); ?>;
            var currentPath = (window.location.pathname.split('/').pop() || 'index.php');
            var idx = deck.indexOf(currentPath);
            if (idx === -1) idx = 0;
            var pct = ((idx + 1) / deck.length) * 100;
            var bar = document.getElementById('progress-bar');
            if (bar) { requestAnimationFrame(function(){ bar.style.width = pct + '%'; }); }

            // Mobile menu
            var toggle = document.getElementById('menu-toggle');
            var menu = document.getElementById('mobile-menu');
            if (toggle && menu) {
                toggle.addEventListener('click', function(){
                    var open = !menu.classList.contains('hidden');
                    menu.classList.toggle('hidden');
                    toggle.setAttribute('aria-expanded', String(!open));
                });
            }

            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Slide-style page transition: fade the outgoing page briefly before
            // following internal links, so moving between sessions feels like
            // advancing a deck rather than a hard page reload.
            document.querySelectorAll('a[href$=".php"]').forEach(function(a){
                a.addEventListener('click', function(e){
                    var href = a.getAttribute('href');
                    if (!href || href.charAt(0) === '#' || a.target === '_blank' || e.metaKey || e.ctrlKey || reduceMotion) return;
                    e.preventDefault();
                    document.body.classList.add('body-leaving');
                    setTimeout(function(){ window.location.href = href; }, 220);
                });
            });

            // Keyboard deck navigation (Left/Right), ignored while typing.
            document.addEventListener('keydown', function(e){
                var tag = (document.activeElement && document.activeElement.tagName) || '';
                if (['INPUT','TEXTAREA','SELECT'].indexOf(tag) !== -1) return;
                if (e.key === 'ArrowRight' && idx < deck.length - 1) { window.location.href = deck[idx + 1]; }
                if (e.key === 'ArrowLeft' && idx > 0) { window.location.href = deck[idx - 1]; }
            });
        })();
    </script>
</body>
</html>
