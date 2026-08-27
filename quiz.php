<?php
$submitted = false;
$score = 0;
$total = 5;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Evaluation Logic
    $q1 = trim($_POST['q1'] ?? '');
    $q2 = trim($_POST['q2'] ?? '');
    $q3 = trim($_POST['q3'] ?? '');
    $q4 = trim($_POST['q4'] ?? '');
    $confidence = trim($_POST['confidence'] ?? '');

    // Score evaluation
    if (!empty($q1)) $score++;
    if (!empty($q2)) $score++;
    if (!empty($q3)) $score++;
    if ($q4 === "False") $score++; // Q4 correct answer is False
    if (!empty($confidence)) $score++;

    $submitted = true;
}
?>

<?php include 'includes/header.php'; ?>

<main class="max-w-3xl mx-auto px-5 md:px-8 py-10 md:py-14 flex-grow w-full">

    <?php if ($submitted): ?>
        <!-- Completion certificate -->
        <div class="relative overflow-hidden bg-ink-2 border border-gold/25 p-8 sm:p-12 rounded-[2rem] text-center shadow-2xl slide-enter">
            <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-gold/10 blur-3xl pointer-events-none"></div>
            <div class="absolute -left-16 -bottom-16 w-64 h-64 rounded-full bg-moss/10 blur-3xl pointer-events-none"></div>

            <div class="relative inline-flex w-20 h-20 rounded-full bg-gold/10 border border-gold/30 items-center justify-center text-gold-2 mx-auto mb-6 float-y">
                <?= icon('graduation', 'w-9 h-9') ?>
                <span class="absolute -inset-2 rounded-full border border-dashed border-gold/30 spin-slow"></span>
            </div>

            <span class="eyebrow text-[11px] uppercase text-gold-2 bg-gold/10 px-3.5 py-1.5 rounded-full border border-gold/25">
                Certificate of Completion
            </span>

            <h1 class="font-display text-2xl sm:text-3xl md:text-4xl font-semibold text-ivory mt-5 mb-3 leading-tight">Congratulations on completing the Digital Literacy Programme!</h1>
            <p class="text-ivory/60 text-sm max-w-lg mx-auto mb-7">
                Facilitated by Shillah Mwadosho &amp; Lucy Wanjiku · Community Service-Learning Project, Africa Nazarene University
            </p>

            <div class="p-4 bg-ink rounded-2xl border border-line inline-block mb-8 text-sm text-ivory/70">
                Knowledge Check Score: <strong class="text-moss text-base"><?= $score ?> / <?= $total ?> Points</strong>
            </div>

            <div class="relative p-6 sm:p-7 bg-ink rounded-2xl border border-line text-left text-sm text-ivory/75 leading-relaxed mb-9">
                <span class="absolute top-5 right-6 text-gold/20 stamp-rotate"><?= icon('stamp', 'w-9 h-9') ?></span>
                <p class="font-display font-semibold text-ivory text-base mb-2">Your key takeaway to remember</p>
                <p>"Before you believe it, before you share it — verify it. That one habit can protect you, your family, and your community from scams, fear, and division. Go out, verify before you share, and help keep your community informed and safe — especially as we approach 2027."</p>
            </div>

            <a href="index.php" class="px-8 py-3.5 bg-gold hover:brightness-105 text-ink rounded-full font-bold text-sm shadow-lg hover:-translate-y-0.5 transition transform inline-flex items-center gap-2">
                Return to Programme Overview <?= icon('arrow-right', 'w-4 h-4') ?>
            </a>
        </div>

    <?php else: ?>

        <!-- Assessment form -->
        <div class="bg-ink-2 border border-line p-7 sm:p-10 md:p-12 rounded-[2rem] shadow-xl slide-enter">
            <div class="border-b border-line pb-6 mb-8">
                <span class="eyebrow text-gold-2 text-[11px] uppercase block mb-1.5">Assessment &amp; Survey</span>
                <h1 class="font-display text-2xl sm:text-3xl font-semibold text-ivory">Post-Training Quiz &amp; Feedback</h1>
                <p class="text-ivory/55 text-sm mt-1.5">Review core principles and submit your feedback.</p>
            </div>

            <form method="POST" action="quiz.php" class="space-y-9 text-sm">

                <!-- Knowledge check -->
                <div class="space-y-6">
                    <h2 class="font-display text-base font-semibold text-gold-2 border-b border-line pb-2.5 flex items-center gap-2">
                        <?= icon('check-circle', 'w-4 h-4') ?> Part 1: Knowledge Check
                    </h2>

                    <div>
                        <label class="block font-semibold text-ivory mb-2" for="q1">
                            1. What does digital literacy mean to you now?
                        </label>
                        <textarea id="q1" name="q1" rows="2" required placeholder="e.g., Looking both ways before sharing or believing content..." class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory placeholder:text-ivory/30 focus:ring-2 focus:ring-gold/60 focus:border-gold/40 focus:outline-none transition"></textarea>
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2" for="q2">
                            2. Name two red flags of a suspicious link or scam message.
                        </label>
                        <input type="text" id="q2" name="q2" required placeholder="e.g., Shortened bit.ly link, urgency, asking for PIN" class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory placeholder:text-ivory/30 focus:ring-2 focus:ring-gold/60 focus:border-gold/40 focus:outline-none transition">
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2" for="q3">
                            3. What are the four steps in the verification method?
                        </label>
                        <input type="text" id="q3" name="q3" required placeholder="Pause, Check Source, Search Elsewhere, Check Date" class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory placeholder:text-ivory/30 focus:ring-2 focus:ring-gold/60 focus:border-gold/40 focus:outline-none transition">
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2">
                            4. T/F: It's okay to share unverified info during elections if you think it's true.
                        </label>
                        <div class="flex gap-3">
                            <label class="flex items-center gap-2 bg-ink px-4 py-2.5 rounded-xl border border-line cursor-pointer hover:border-fog/50 w-full transition has-[:checked]:border-gold/60 has-[:checked]:bg-gold/5">
                                <input type="radio" name="q4" value="True" required class="accent-gold"> True
                            </label>
                            <label class="flex items-center gap-2 bg-ink px-4 py-2.5 rounded-xl border border-line cursor-pointer hover:border-fog/50 w-full transition has-[:checked]:border-gold/60 has-[:checked]:bg-gold/5">
                                <input type="radio" name="q4" value="False" class="accent-gold"> False
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2">
                            5. On a scale of 1–5, how confident are you now in telling real from fake news?
                        </label>
                        <select name="confidence" required class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory focus:ring-2 focus:ring-gold/60 focus:border-gold/40 focus:outline-none transition">
                            <option value="">Select confidence score...</option>
                            <option value="5">5 — Highly Confident</option>
                            <option value="4">4 — Confident</option>
                            <option value="3">3 — Moderately Confident</option>
                            <option value="2">2 — Somewhat Confident</option>
                            <option value="1">1 — Not Confident</option>
                        </select>
                    </div>
                </div>

                <!-- Feedback -->
                <div class="space-y-6 pt-2 border-t border-line">
                    <h2 class="font-display text-base font-semibold text-teal border-b border-line pb-2.5 pt-4 flex items-center gap-2">
                        <?= icon('message', 'w-4 h-4') ?> Part 2: Programme Feedback
                    </h2>

                    <div>
                        <label class="block font-semibold text-ivory mb-2" for="f1">
                            What was the most useful thing you learned?
                        </label>
                        <textarea id="f1" name="f1" rows="2" class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory placeholder:text-ivory/30 focus:ring-2 focus:ring-teal/50 focus:border-teal/40 focus:outline-none transition"></textarea>
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2" for="f2">
                            Was anything unclear, or needed more time?
                        </label>
                        <input type="text" id="f2" name="f2" class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory placeholder:text-ivory/30 focus:ring-2 focus:ring-teal/50 focus:border-teal/40 focus:outline-none transition">
                    </div>

                    <div>
                        <label class="block font-semibold text-ivory mb-2">
                            How likely are you to fact-check before sharing?
                        </label>
                        <select name="likelihood" class="w-full bg-ink border border-line rounded-xl p-3.5 text-ivory focus:ring-2 focus:ring-teal/50 focus:border-teal/40 focus:outline-none transition">
                            <option value="Very likely">Very likely</option>
                            <option value="Somewhat likely">Somewhat likely</option>
                            <option value="Not likely">Not likely</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full py-4 rounded-full bg-gold hover:brightness-105 text-ink font-bold text-base shadow-xl shadow-gold/10 transition transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    Submit Answers &amp; Complete Programme <?= icon('graduation', 'w-5 h-5') ?>
                </button>
            </form>
        </div>
    <?php endif; ?>

</main>

<?php include 'includes/footer.php'; ?>
