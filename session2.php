<?php include 'includes/header.php'; ?>

<main class="max-w-5xl mx-auto px-5 md:px-8 py-10 md:py-14 flex-grow w-full space-y-12 md:space-y-14">

    <!-- Slide header -->
    <div class="slide-enter border-b border-line pb-6">
        <div class="flex items-center gap-2 text-teal eyebrow text-[11px] uppercase mb-3">
            <span>Session 02</span> <span class="text-line">•</span> <span>Tooling &amp; Verification</span>
        </div>
        <h1 class="font-display text-3xl sm:text-4xl md:text-6xl font-semibold text-ivory leading-[1.05]">Fact-Checking &amp; Verification</h1>
        <p class="text-ivory/60 mt-3 text-base md:text-lg max-w-2xl">A simple four-step method to check before you believe or share.</p>
    </div>

    <!-- 4-step verification stepper -->
    <div>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-6 flex items-center gap-2.5">
            <?= icon('compass', 'w-5 h-5 text-teal') ?> The Four-Step Verification Method
        </h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 stagger">
            <?php
            $steps = [
                ['num' => '01', 'icon' => 'pause',  'title' => 'Pause',        'sub' => 'Before you share',   'desc' => 'If it triggers excitement, fear, or anger, that is when to slow down and verify first.'],
                ['num' => '02', 'icon' => 'search', 'title' => 'Check Source', 'sub' => 'Identify the publisher', 'desc' => 'Is it a known, credible media outlet, or an unfamiliar anonymous page?'],
                ['num' => '03', 'icon' => 'globe',  'title' => 'Search',       'sub' => 'Query elsewhere',     'desc' => 'Search the headline. If true and important, credible sources will be reporting it too.'],
                ['num' => '04', 'icon' => 'calendar','title' => 'Check Date',  'sub' => 'Confirm timeline',    'desc' => 'Old footage and past results are often recycled as recent breaking news.'],
            ];
            foreach ($steps as $st): ?>
                <div class="card-hover p-6 rounded-3xl bg-ink-2 border border-line hover:border-teal/40 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <span class="w-10 h-10 rounded-xl bg-teal/10 text-teal flex items-center justify-center"><?= icon($st['icon'], 'w-5 h-5') ?></span>
                            <span class="eyebrow text-xs font-bold text-teal bg-teal/10 px-2 py-0.5 rounded border border-teal/20"><?= $st['num'] ?></span>
                        </div>
                        <h3 class="font-semibold text-ivory text-base"><?= $st['title'] ?></h3>
                        <p class="text-xs font-semibold text-teal/90 mb-2 mt-0.5"><?= $st['sub'] ?></p>
                        <p class="text-ivory/55 text-xs leading-relaxed"><?= $st['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-xs text-ivory/40 italic mt-4 text-center">Facilitator tip: use a real, recent viral WhatsApp message or screenshot claim and walk through these four steps live.</p>
    </div>

    <!-- Interactive red-flag inspector -->
    <div class="bg-ink-2 border border-line p-6 sm:p-8 rounded-3xl">
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-2 flex items-center gap-2.5">
            <?= icon('search', 'w-5 h-5 text-teal') ?> Interactive Lab: Spot the Red Flags
        </h2>
        <p class="text-ivory/55 text-sm mb-6">A lot of scams travel through links sent on SMS, WhatsApp, or social media.</p>

        <!-- Simulated message -->
        <div class="max-w-md mx-auto bg-ink p-4 rounded-2xl border border-line shadow-xl mb-6">
            <div class="eyebrow text-[10px] text-moss mb-2 uppercase">Incoming SMS / Forwarded Message</div>
            <div class="bg-moss/10 border border-moss/25 p-3.5 rounded-xl text-ivory/90 text-sm leading-relaxed">
                Congratulations! You've won <strong class="text-ivory">KSh 50,000</strong> from Safaricom Bonus Draw. Click here to claim: <span class="text-teal underline decoration-teal/40">bit.ly/saf-bonus-claim</span>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-4 text-xs">
            <div class="p-4 rounded-xl bg-ink border border-line">
                <strong class="text-clay flex items-center gap-1.5 mb-1.5"><?= icon('link', 'w-3.5 h-3.5') ?> Red Flag 1 · Shortened URL</strong>
                <p class="text-ivory/55">Services like <code class="text-ivory/75">bit.ly</code> obscure the real destination website to hide malicious phishing pages.</p>
            </div>
            <div class="p-4 rounded-xl bg-ink border border-line">
                <strong class="text-clay flex items-center gap-1.5 mb-1.5"><?= icon('zap', 'w-3.5 h-3.5') ?> Red Flag 2 · Unsolicited Urgency</strong>
                <p class="text-ivory/55">Claims of spontaneous cash awards that demand urgent personal action or entering PINs and passwords.</p>
            </div>
        </div>
    </div>

    <!-- Checking official sources -->
    <div>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-6 flex items-center gap-2.5">
            <?= icon('landmark', 'w-5 h-5 text-teal') ?> How to Check Official Sources
        </h2>
        <div class="grid sm:grid-cols-3 gap-4 text-sm stagger">
            <div class="card-hover p-6 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-gold-2 mb-3"><?= icon('landmark', 'w-5 h-5') ?></span>
                <strong class="text-ivory block mb-1">Government Portals</strong>
                <p class="text-ivory/55 text-xs">Check official <code class="text-ivory/75">.go.ke</code> domain websites or verified ministry social accounts.</p>
            </div>
            <div class="card-hover p-6 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-teal mb-3"><?= icon('shield-check', 'w-5 h-5') ?></span>
                <strong class="text-ivory block mb-1">Company Promotions</strong>
                <p class="text-ivory/55 text-xs">Visit the company's verified domain directly instead of clicking forwarded links.</p>
            </div>
            <div class="card-hover p-6 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-moss mb-3"><?= icon('newspaper', 'w-5 h-5') ?></span>
                <strong class="text-ivory block mb-1">Mainstream News</strong>
                <p class="text-ivory/55 text-xs">Cross-check whether established media houses are actively reporting the same story.</p>
            </div>
        </div>
    </div>

    <!-- Slide footer nav -->
    <div class="flex justify-between items-center pt-8 border-t border-line">
        <a href="session1.php" class="flex items-center gap-1.5 text-xs font-bold text-ivory/50 hover:text-ivory transition"><?= icon('arrow-left', 'w-4 h-4') ?> Back to Session 1</a>
        <a href="session3.php" class="px-6 py-3 rounded-full bg-teal hover:brightness-105 text-ink font-bold text-xs eyebrow uppercase transition flex items-center gap-2">
            Continue to Session 3 <?= icon('arrow-right', 'w-4 h-4') ?>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
