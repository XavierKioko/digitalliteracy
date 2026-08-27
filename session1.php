<?php include 'includes/header.php'; ?>

<main class="max-w-5xl mx-auto px-5 md:px-8 py-10 md:py-14 flex-grow w-full space-y-12 md:space-y-14">

    <!-- Slide header -->
    <div class="slide-enter border-b border-line pb-6">
        <div class="flex items-center gap-2 text-gold-2 eyebrow text-[11px] uppercase mb-3">
            <span>Session 01</span> <span class="text-line">•</span> <span>Awareness Module</span>
        </div>
        <h1 class="font-display text-3xl sm:text-4xl md:text-6xl font-semibold text-ivory leading-[1.05]">Understanding Digital Literacy</h1>
        <p class="text-ivory/60 mt-3 text-base md:text-lg max-w-2xl">Building awareness of scams, fake content, and why digital skills matter.</p>
    </div>

    <!-- Story metaphor banner -->
    <div class="relative overflow-hidden bg-ink-2 border border-line p-7 sm:p-10 rounded-3xl shadow-xl slide-enter">
        <div class="absolute -right-10 -top-10 w-56 h-56 rounded-full bg-gold/10 blur-3xl pointer-events-none"></div>
        <span class="inline-flex w-11 h-11 rounded-xl bg-gold/10 border border-gold/20 items-center justify-center text-gold-2 mb-5"><?= icon('compass', 'w-5 h-5') ?></span>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-4">What does "digital literacy" really mean?</h2>
        <blockquote class="font-display italic text-xl md:text-2xl font-normal text-ivory/90 leading-snug mb-5 border-l-2 border-gold/50 pl-5">
            Just as we're taught to look both ways before crossing the road, digital literacy teaches us to look both ways before we click, share, or believe something online.
        </blockquote>
        <p class="text-sm text-ivory/60 max-w-2xl">
            Almost everything — job opportunities, news, even how we vote — passes through our phones. This skill isn't optional. It's survival.
        </p>
    </div>

    <!-- 4 core pillars -->
    <div>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-6 flex items-center gap-2.5">
            <?= icon('sparkle', 'w-5 h-5 text-gold-2') ?> Being digitally literate means knowing how to:
        </h2>
        <div class="grid sm:grid-cols-2 gap-4 stagger">
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line flex items-start gap-4">
                <span class="shrink-0 w-10 h-10 rounded-xl bg-gold/10 text-gold-2 flex items-center justify-center"><?= icon('search', 'w-5 h-5') ?></span>
                <p class="text-ivory/75 text-sm leading-relaxed pt-1.5">Find information online and tell whether it's true or false</p>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line flex items-start gap-4">
                <span class="shrink-0 w-10 h-10 rounded-xl bg-teal/10 text-teal flex items-center justify-center"><?= icon('shield', 'w-5 h-5') ?></span>
                <p class="text-ivory/75 text-sm leading-relaxed pt-1.5">Protect personal information, like your ID number or M-Pesa PIN</p>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line flex items-start gap-4">
                <span class="shrink-0 w-10 h-10 rounded-xl bg-clay/10 text-clay flex items-center justify-center"><?= icon('ban', 'w-5 h-5') ?></span>
                <p class="text-ivory/75 text-sm leading-relaxed pt-1.5">Recognise when someone online is trying to trick or manipulate you</p>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line flex items-start gap-4">
                <span class="shrink-0 w-10 h-10 rounded-xl bg-moss/10 text-moss flex items-center justify-center"><?= icon('message', 'w-5 h-5') ?></span>
                <p class="text-ivory/75 text-sm leading-relaxed pt-1.5">Communicate and share content responsibly, especially on social media</p>
            </div>
        </div>
    </div>

    <!-- Common scams in Kenya -->
    <div class="space-y-6">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory flex items-center gap-2.5">
                <?= icon('phone', 'w-5 h-5 text-gold-2') ?> Common Online Scams in Kenya
            </h2>
            <span class="eyebrow text-[10px] uppercase text-ivory/50 bg-white/5 px-3 py-1.5 rounded-full border border-line">Raise your hand if familiar</span>
        </div>

        <div class="grid sm:grid-cols-2 gap-4 stagger">
            <?php
            $scams = [
                ['icon' => 'briefcase', 'title' => 'Fake job offers', 'desc' => "Promising well-paying jobs abroad or with NGOs, asking for a 'registration fee' first", 'tag' => 'Financial Fraud'],
                ['icon' => 'phone', 'title' => 'M-Pesa & mobile money fraud', 'desc' => "Calls or texts claiming you've won money, or asking you to 'confirm' a PIN or M-Pesa code", 'tag' => 'Social Engineering'],
                ['icon' => 'download', 'title' => 'Fake loan apps', 'desc' => "Promising instant loans but demanding upfront fees or access to your entire contact list", 'tag' => 'Privacy Breach'],
                ['icon' => 'user-x', 'title' => 'Impersonation scams', 'desc' => "Someone posing as a government office, bank, or relative in an emergency asking for urgent transfers", 'tag' => 'Identity Theft'],
                ['icon' => 'heart', 'title' => 'Romance scams', 'desc' => "Someone builds an online relationship, then eventually asks for money", 'tag' => 'Emotional Fraud']
            ];
            foreach ($scams as $s): ?>
                <div class="card-hover p-6 rounded-2xl bg-ink-2 border border-line hover:border-gold/30 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="w-10 h-10 rounded-xl bg-white/5 border border-line flex items-center justify-center text-gold-2"><?= icon($s['icon'], 'w-5 h-5') ?></span>
                            <span class="eyebrow text-[9px] uppercase px-2 py-1 rounded bg-clay/10 text-clay border border-clay/20"><?= $s['tag'] ?></span>
                        </div>
                        <h3 class="font-semibold text-ivory text-base mb-1.5"><?= $s['title'] ?></h3>
                        <p class="text-ivory/55 text-xs leading-relaxed"><?= $s['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="p-5 rounded-2xl bg-gold/10 border border-gold/25 text-gold-2 text-sm flex items-start gap-3.5">
            <span class="shrink-0 w-9 h-9 rounded-lg bg-gold/15 flex items-center justify-center"><?= icon('zap', 'w-[1.125rem] h-[1.125rem]') ?></span>
            <p class="pt-1"><strong class="text-ivory">The key lesson:</strong> <span class="text-ivory/75">Scammers rely on urgency and emotion. Our job is to help you slow down and check first.</span></p>
        </div>
    </div>

    <!-- Types of fake info -->
    <div>
        <h2 class="font-display text-xl md:text-2xl font-semibold text-ivory mb-6 flex items-center gap-2.5">
            <?= icon('image', 'w-5 h-5 text-gold-2') ?> Common Types of Fake Information
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center stagger">
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-gold-2 mb-3"><?= icon('newspaper', 'w-5 h-5') ?></span>
                <strong class="text-ivory text-sm block">Fake News</strong>
                <span class="text-[11px] text-ivory/50 mt-1 block">Imitating credible media houses</span>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-teal mb-3"><?= icon('image', 'w-5 h-5') ?></span>
                <strong class="text-ivory text-sm block">Doctored Shots</strong>
                <span class="text-[11px] text-ivory/50 mt-1 block">Edited tweets or WhatsApp chats</span>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-clay mb-3"><?= icon('video-off', 'w-5 h-5') ?></span>
                <strong class="text-ivory text-sm block">Manipulated Media</strong>
                <span class="text-[11px] text-ivory/50 mt-1 block">Altered election clips &amp; photos</span>
            </div>
            <div class="card-hover p-5 rounded-2xl bg-ink-2 border border-line">
                <span class="inline-flex w-11 h-11 rounded-xl bg-white/5 items-center justify-center text-moss mb-3"><?= icon('zap', 'w-5 h-5') ?></span>
                <strong class="text-ivory text-sm block">Viral Rumours</strong>
                <span class="text-[11px] text-ivory/50 mt-1 block">Forwarded in WhatsApp groups</span>
            </div>
        </div>
    </div>

    <!-- Slide footer nav -->
    <div class="flex justify-between items-center pt-8 border-t border-line">
        <a href="index.php" class="flex items-center gap-1.5 text-xs font-bold text-ivory/50 hover:text-ivory transition"><?= icon('arrow-left', 'w-4 h-4') ?> Back to Overview</a>
        <a href="session2.php" class="px-6 py-3 rounded-full bg-gold hover:brightness-105 text-ink font-bold text-xs eyebrow uppercase transition flex items-center gap-2">
            Continue to Session 2 <?= icon('arrow-right', 'w-4 h-4') ?>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
