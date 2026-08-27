<?php include 'includes/header.php'; ?>

<main class="max-w-5xl mx-auto px-5 md:px-8 py-10 md:py-14 flex-grow w-full space-y-12 md:space-y-14">

    <!-- Slide header -->
    <div class="slide-enter border-b border-line pb-6">
        <div class="flex items-center gap-2 text-moss eyebrow text-[11px] uppercase mb-3">
            <span>Session 03</span> <span class="text-line">•</span> <span>Elections Focus</span>
        </div>
        <h1 class="font-display text-3xl sm:text-4xl md:text-6xl font-semibold text-ivory leading-[1.05]">Responsible Digital Citizenship</h1>
        <p class="text-ivory/60 mt-3 text-base md:text-lg max-w-2xl">Using our new skills responsibly as we approach Kenya's 2027 elections.</p>
    </div>

    <!-- Alert context box -->
    <div class="p-6 sm:p-7 rounded-3xl bg-clay/10 border border-clay/30 flex items-start gap-4 slide-enter">
        <span class="shrink-0 w-11 h-11 rounded-xl bg-clay/15 text-clay flex items-center justify-center"><?= icon('flag', 'w-5 h-5') ?></span>
        <div>
            <strong class="block text-ivory text-base md:text-lg font-display font-semibold">Elections are when misinformation spreads fastest — emotions run high.</strong>
            <p class="text-ivory/60 mt-1.5 text-sm">High-stakes political events create fertile ground for fabricated stories designed to provoke outrage, fear, or premature celebrations.</p>
        </div>
    </div>

    <!-- 5 core citizenship habits -->
    <div>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-6 flex items-center gap-2.5">
            <?= icon('shield', 'w-5 h-5 text-moss') ?> Responsible Citizenship Principles
        </h2>
        <div class="space-y-3 stagger">
            <?php
            $principles = [
                ['icon' => 'check-circle', 'title' => '1. Verify before you share', 'desc' => 'Especially claims about candidates, results, violence, or fraud.'],
                ['icon' => 'ban', 'title' => '2. Avoid hate speech or incitement', 'desc' => 'Targeting tribe, region, or political affiliation causes real-world harm.'],
                ['icon' => 'compass', 'title' => '3. Be cautious with your own posts', 'desc' => 'Ask yourself: could this post mislead someone or provoke fear if it turns out false?'],
                ['icon' => 'megaphone', 'title' => '4. Report, don\'t just ignore', 'desc' => 'Reporting harmful or inciting content helps platforms suppress its spread.'],
                ['icon' => 'landmark', 'title' => '5. Support official channels', 'desc' => 'Trust verified official bodies like the IEBC over forwarded screenshots and audio notes.'],
            ];
            foreach ($principles as $p): ?>
                <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line flex items-start gap-4">
                    <span class="shrink-0 w-10 h-10 rounded-xl bg-moss/10 text-moss flex items-center justify-center"><?= icon($p['icon'], 'w-5 h-5') ?></span>
                    <div class="pt-1">
                        <strong class="text-ivory text-sm block"><?= $p['title'] ?></strong>
                        <span class="text-ivory/55 text-xs"><?= $p['desc'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Tactics & habits -->
    <div class="grid md:grid-cols-2 gap-5">
        <div class="p-6 sm:p-7 rounded-3xl bg-ink-2 border border-line">
            <h3 class="font-display font-semibold text-ivory text-base mb-4 flex items-center gap-2.5">
                <span class="w-9 h-9 rounded-lg bg-clay/10 text-clay flex items-center justify-center"><?= icon('user-x', 'w-[1.125rem] h-[1.125rem]') ?></span>
                Recognising Election Disinformation Tactics
            </h3>
            <ul class="space-y-2.5 text-xs text-ivory/70">
                <li class="p-3 bg-ink rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('image', 'w-4 h-4 text-clay shrink-0 mt-0.5') ?><span><strong class="text-ivory">Doctored screenshots:</strong> Fabricated breaking news alerts.</span></li>
                <li class="p-3 bg-ink rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('video-off', 'w-4 h-4 text-clay shrink-0 mt-0.5') ?><span><strong class="text-ivory">Deepfake media:</strong> AI-generated audio clips of politicians.</span></li>
                <li class="p-3 bg-ink rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('zap', 'w-4 h-4 text-clay shrink-0 mt-0.5') ?><span><strong class="text-ivory">Fake polls:</strong> Manipulated numbers to fabricate false confidence.</span></li>
                <li class="p-3 bg-ink rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('user-x', 'w-4 h-4 text-clay shrink-0 mt-0.5') ?><span><strong class="text-ivory">Impersonation accounts:</strong> Cloned profiles pretending to be officials.</span></li>
            </ul>
        </div>

        <div class="p-6 sm:p-7 rounded-3xl bg-moss/[0.07] border border-moss/25">
            <h3 class="font-display font-semibold text-moss text-base mb-4 flex items-center gap-2.5">
                <span class="w-9 h-9 rounded-lg bg-moss/10 text-moss flex items-center justify-center"><?= icon('sparkle', 'w-[1.125rem] h-[1.125rem]') ?></span>
                Practical Habits for Election Season
            </h3>
            <ul class="space-y-2.5 text-xs text-ivory/70">
                <li class="p-3 bg-ink-2 rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('ban', 'w-4 h-4 text-moss shrink-0 mt-0.5') ?><span><strong class="text-ivory">Mute rumour groups:</strong> Step back from toxic WhatsApp forwards.</span></li>
                <li class="p-3 bg-ink-2 rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('check-circle', 'w-4 h-4 text-moss shrink-0 mt-0.5') ?><span><strong class="text-ivory">Follow verified sources:</strong> Prioritise primary reports.</span></li>
                <li class="p-3 bg-ink-2 rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('message', 'w-4 h-4 text-moss shrink-0 mt-0.5') ?><span><strong class="text-ivory">Ask before you forward:</strong> Verify with someone you trust.</span></li>
                <li class="p-3 bg-ink-2 rounded-xl border border-line/70 flex items-start gap-2.5"><?= icon('users', 'w-4 h-4 text-moss shrink-0 mt-0.5') ?><span><strong class="text-ivory">Talk to your community:</strong> Share fact-checking skills offline too.</span></li>
            </ul>
        </div>
    </div>

    <!-- Slide footer nav -->
    <!-- Slide footer nav -->
    <div class="flex justify-between items-center pt-8 border-t border-line">
        <a href="session2.php" class="flex items-center gap-1.5 text-xs font-bold text-ivory/50 hover:text-ivory transition"><?= icon('arrow-left', 'w-4 h-4') ?> Back to Session 2</a>
        <a href="evidence.php" class="px-6 py-3 rounded-full bg-moss hover:brightness-110 text-ink font-bold text-xs eyebrow uppercase transition flex items-center gap-2">
            Proceed to Project Evidence <?= icon('arrow-right', 'w-4 h-4') ?>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
