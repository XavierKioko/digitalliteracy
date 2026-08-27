<?php include 'includes/header.php'; ?>

<main class="flex-grow flex flex-col justify-center max-w-7xl mx-auto px-5 md:px-8 py-10 md:py-16 w-full">

    <!-- Hero / Report Overview -->
    <section class="relative rounded-[2rem] p-7 sm:p-10 md:p-16 overflow-hidden border border-line bg-ink-2 shadow-2xl mb-12 slide-enter">
        <!-- Background Effects -->
        <div class="absolute right-[-6rem] top-[-6rem] w-[26rem] h-[26rem] pointer-events-none opacity-70 hidden md:block">
            <div class="absolute inset-0 rounded-full border border-gold/25 pulse-ring"></div>
            <div class="absolute inset-0 rounded-full border border-gold/25 pulse-ring" style="animation-delay:1.2s"></div>
            <div class="absolute inset-0 rounded-full border border-gold/25 pulse-ring" style="animation-delay:2.4s"></div>
            <div class="absolute inset-16 rounded-full bg-gold/10 blur-2xl"></div>
        </div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-teal/10 rounded-full blur-3xl pointer-events-none hidden md:block"></div>

        <div class="max-w-4xl relative z-10">
            <div class="inline-flex items-center gap-2 bg-white/5 border border-line px-3.5 py-1.5 rounded-full text-gold-2 eyebrow text-[11px] uppercase mb-7">
                <span aria-hidden="true">🇰🇪</span> CSL 300 EXAM · MASS COMMUNICATION (PR)
            </div>

            <h1 class="font-display text-[2.6rem] leading-[1.05] sm:text-5xl md:text-6xl font-semibold text-ivory tracking-tight mb-8">
                Digital Literacy Training Report
                <span class="block italic font-normal text-gold-2 mt-2">Preparing Young People for Kenya's 2027 Elections</span>
            </h1>

            <!-- Student / Facilitator Details -->
            <div class="bg-ink p-6 rounded-2xl border border-line w-full md:w-fit mb-10 shadow-lg">
                <span class="eyebrow text-[10px] text-ivory/50 uppercase block mb-4 flex items-center gap-2">
                    <?= icon('users', 'w-4 h-4') ?> Project Facilitators
                </span>
                <div class="space-y-3 text-sm md:text-base">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center border-b border-line/50 pb-3 gap-1 sm:gap-12">
                        <strong class="text-ivory">SHILLAH MWADOSHO</strong>
                        <span class="text-gold-2 font-mono text-sm">ID: 110062958</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1 sm:gap-12">
                        <strong class="text-ivory">LUCY WANJIKU</strong>
                        <span class="text-gold-2 font-mono text-sm">ID: 110062604</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3.5">
                <a href="#report-details" class="px-7 py-3.5 rounded-full bg-gold text-ink font-bold text-sm shadow-xl shadow-gold/10 hover:shadow-gold/25 hover:-translate-y-0.5 transition transform flex items-center gap-2">
                    Read Full Report <span class="rotate-90"><?= icon('arrow-right', 'w-4 h-4') ?></span>
                </a>
                <a href="evidence.php" class="px-7 py-3.5 rounded-full bg-transparent hover:bg-white/5 text-ivory font-bold text-sm border border-line transition flex items-center gap-2">
                    View Project Evidence
                </a>
            </div>
        </div>
    </section>

    <!-- Comprehensive Report Details -->
    <section id="report-details" class="py-10 space-y-16">
        
        <!-- 1. Problem Identification -->
        <div class="grid md:grid-cols-12 gap-8 md:gap-12 slide-enter">
            <div class="md:col-span-4">
                <span class="eyebrow text-[11px] text-gold-2 uppercase">Part 1</span>
                <h2 class="font-display text-2xl md:text-3xl font-semibold text-ivory mt-2">Problem Identification</h2>
            </div>
            <div class="md:col-span-8 space-y-5 text-ivory/75 font-light leading-relaxed text-sm sm:text-base">
                <p>The year 2027 in Kenya sees the approach of a presidential election period when the youth who are not in schools largely depend on digital tools for their source of news. Access to smartphones with internet has been enhanced by the youth in Kenya while their skills on the safe use of these technological gadgets have failed to follow suit.</p>
                <p>Youth not in schools are disadvantaged in this context. Compared to their colleagues in formal learning institutions, they lack the necessary knowledge on the use of digital technology which can help them detect scams and misinformation in addition to learning how the same is propagated via these mediums. The upcoming elections become riskier to out-of-school youth in view of past experience from Kenyan election processes where there is an increased level of scams of the IEBC, fake jobs associated with election work and propagation of unchecked political news using digital technology.</p>
                <p>Apart from scam, this category of individuals may become unwittingly an amplifier of negative material being spread without any kind of verification because of the fact that they do not have the resources which will allow them to stop and verify before proceeding. This will have serious implications on the peace within the community and on the integrity of public information in an important civic year.</p>
                <p>We came up with the idea of focusing on this area because, as PR and Mass Communication students, we were familiar with stakeholder management, media responsibility and community communication. This was the reason why we decided to carry out a digital literacy programme aimed at out-of-school youth as our Community Service Learning (CSL) project.</p>
            </div>
        </div>

        <!-- 2. Objectives Formulation -->
        <div class="grid md:grid-cols-12 gap-8 md:gap-12 slide-enter pt-10 border-t border-line/50">
            <div class="md:col-span-4">
                <span class="eyebrow text-[11px] text-teal uppercase">Part 2</span>
                <h2 class="font-display text-2xl md:text-3xl font-semibold text-ivory mt-2">Objectives Formulation</h2>
            </div>
            <div class="md:col-span-8 space-y-8">
                <!-- Broad Objective -->
                <div class="bg-teal/10 border border-teal/25 p-6 sm:p-8 rounded-3xl">
                    <h3 class="font-semibold text-teal mb-2 flex items-center gap-2"><?= icon('flag', 'w-5 h-5') ?> Broad/Goal Objective</h3>
                    <p class="text-ivory/90 leading-relaxed text-sm sm:text-base">In order to empower out-of-school youth with the necessary digital literacy competencies, which will allow them to browse the Internet without fear of fraud or cybercrimes before the 2027 general elections in Kenya.</p>
                </div>
                
                <!-- SMART Objectives -->
                <div>
                    <h3 class="font-display text-xl font-semibold text-ivory mb-5">SMART Specific Objectives</h3>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div class="bg-ink-2 p-6 rounded-3xl border border-line hover:border-gold/30 transition">
                            <strong class="text-gold-2 text-sm block mb-2">Objective 1 — Knowledge</strong>
                            <p class="text-ivory/70 text-sm leading-relaxed">By the end of Session 1, 80% of the group would be able to recognize at least 3 red flags associated with scam messages or any other online misinformation. This is based on a pre- and post-baseline test.</p>
                        </div>
                        <div class="bg-ink-2 p-6 rounded-3xl border border-line hover:border-teal/30 transition">
                            <strong class="text-teal text-sm block mb-2">Objective 2 — Skills</strong>
                            <p class="text-ivory/70 text-sm leading-relaxed">The learners are expected to be able to implement at least two practical methods of verifying the information after completion of session 2 in relation to a digital scenario that is given using their own phones.</p>
                        </div>
                        <div class="bg-ink-2 p-6 rounded-3xl border border-line hover:border-clay/30 transition">
                            <strong class="text-clay text-sm block mb-2">Objective 3 — Attitude/Behaviour</strong>
                            <p class="text-ivory/70 text-sm leading-relaxed">By the end of Session 3, at least 75% of all participants will convey in a feedback form that they will stop and check information before posting it on the Internet, especially information regarding the 2027 elections.</p>
                        </div>
                        <div class="bg-ink-2 p-6 rounded-3xl border border-line hover:border-moss/30 transition">
                            <strong class="text-moss text-sm block mb-2">Objective 4 — Community Impact</strong>
                            <p class="text-ivory/70 text-sm leading-relaxed">By the end of the program, there will be at least 5 "digital safety champions" from the group that would have been selected, who will commit themselves to sharing the knowledge they have gained with at least 3 other persons.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Work Plan (Curriculum) -->
        <div class="slide-enter pt-10 border-t border-line/50">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-9">
                <div>
                    <span class="eyebrow text-[11px] text-moss uppercase">Part 3</span>
                    <h2 class="font-display text-2xl md:text-3xl font-semibold text-ivory mt-1">Work Plan</h2>
                    <p class="text-ivory/60 text-sm mt-2 max-w-2xl">Detailed session activities and expected outcomes for the training programme.</p>
                </div>
            </div>

            <div class="space-y-6 stagger">
                <!-- Session 1 -->
                <div class="group p-6 sm:p-8 rounded-3xl bg-ink-2 border border-line flex flex-col md:flex-row gap-6 lg:gap-10 shadow-lg">
                    <div class="md:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="w-[3.25rem] h-[3.25rem] rounded-2xl bg-gold/10 text-gold-2 border border-gold/20 flex items-center justify-center mb-5 group-hover:scale-110 transition">
                                <?= icon('eye', 'w-6 h-6') ?>
                            </div>
                            <h3 class="font-display text-xl font-semibold text-ivory mb-2">Session 1: Understanding Digital Literacy</h3>
                        </div>
                        <a href="session1.php" class="text-gold-2 text-sm font-bold flex items-center gap-1 mt-4 md:mt-0 hover:translate-x-1 transition w-fit">View Module <?= icon('arrow-right', 'w-4 h-4') ?></a>
                    </div>
                    <div class="md:w-1/3">
                        <strong class="text-xs text-ivory/50 uppercase eyebrow block mb-3 border-b border-line/60 pb-2">Activities</strong>
                        <ul class="space-y-2 text-sm text-ivory/80 list-disc list-inside marker:text-gold-2 leading-relaxed">
                            <li>Introduce the programme and participants.</li>
                            <li>Explain what digital literacy is.</li>
                            <li>Discuss common online scams and fake information.</li>
                            <li>Give a short pre-training quiz.</li>
                            <li>Allow participants to ask questions.</li>
                        </ul>
                    </div>
                    <div class="md:w-1/3 bg-ink p-5 sm:p-6 rounded-2xl border border-line flex flex-col justify-center">
                        <strong class="text-sm text-gold-2 block mb-2 flex items-center gap-2"><?= icon('check-circle', 'w-4 h-4') ?> Expected Outcome</strong>
                        <p class="text-sm text-ivory/70 leading-relaxed">Participants understand digital literacy and can identify common online scams and fake content.</p>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="group p-6 sm:p-8 rounded-3xl bg-ink-2 border border-line flex flex-col md:flex-row gap-6 lg:gap-10 shadow-lg">
                    <div class="md:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="w-[3.25rem] h-[3.25rem] rounded-2xl bg-teal/10 text-teal border border-teal/20 flex items-center justify-center mb-5 group-hover:scale-110 transition">
                                <?= icon('search', 'w-6 h-6') ?>
                            </div>
                            <h3 class="font-display text-xl font-semibold text-ivory mb-2">Session 2: Fact-Checking and Verification</h3>
                        </div>
                        <a href="session2.php" class="text-teal text-sm font-bold flex items-center gap-1 mt-4 md:mt-0 hover:translate-x-1 transition w-fit">View Module <?= icon('arrow-right', 'w-4 h-4') ?></a>
                    </div>
                    <div class="md:w-1/3">
                        <strong class="text-xs text-ivory/50 uppercase eyebrow block mb-3 border-b border-line/60 pb-2">Activities</strong>
                        <ul class="space-y-2 text-sm text-ivory/80 list-disc list-inside marker:text-teal leading-relaxed">
                            <li>Review Session 1.</li>
                            <li>Demonstrate how to verify online information.</li>
                            <li>Show participants how to identify suspicious links and check official sources.</li>
                            <li>Give simple practical exercises using their phones.</li>
                            <li>Discuss the answers together.</li>
                        </ul>
                    </div>
                    <div class="md:w-1/3 bg-ink p-5 sm:p-6 rounded-2xl border border-line flex flex-col justify-center">
                        <strong class="text-sm text-teal block mb-2 flex items-center gap-2"><?= icon('check-circle', 'w-4 h-4') ?> Expected Outcome</strong>
                        <p class="text-sm text-ivory/70 leading-relaxed">Participants are able to use basic fact-checking techniques before believing or sharing information.</p>
                    </div>
                </div>

                <!-- Session 3 -->
                <div class="group p-6 sm:p-8 rounded-3xl bg-ink-2 border border-line flex flex-col md:flex-row gap-6 lg:gap-10 shadow-lg">
                    <div class="md:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="w-[3.25rem] h-[3.25rem] rounded-2xl bg-moss/10 text-moss border border-moss/20 flex items-center justify-center mb-5 group-hover:scale-110 transition">
                                <?= icon('flag', 'w-6 h-6') ?>
                            </div>
                            <h3 class="font-display text-xl font-semibold text-ivory mb-2">Session 3: Responsible Digital Citizenship</h3>
                        </div>
                        <a href="session3.php" class="text-moss text-sm font-bold flex items-center gap-1 mt-4 md:mt-0 hover:translate-x-1 transition w-fit">View Module <?= icon('arrow-right', 'w-4 h-4') ?></a>
                    </div>
                    <div class="md:w-1/3">
                        <strong class="text-xs text-ivory/50 uppercase eyebrow block mb-3 border-b border-line/60 pb-2">Activities</strong>
                        <ul class="space-y-2 text-sm text-ivory/80 list-disc list-inside marker:text-moss leading-relaxed">
                            <li>Review key lessons from previous sessions.</li>
                            <li>Discuss responsible use of social media during elections.</li>
                            <li>Administer a post-training quiz and feedback form.</li>
                            <li>Encourage participants to verify information before sharing it.</li>
                            <li>Identify Digital Safety Champions and close the programme.</li>
                        </ul>
                    </div>
                    <div class="md:w-1/3 bg-ink p-5 sm:p-6 rounded-2xl border border-line flex flex-col justify-center">
                        <strong class="text-sm text-moss block mb-2 flex items-center gap-2"><?= icon('check-circle', 'w-4 h-4') ?> Expected Outcome</strong>
                        <p class="text-sm text-ivory/70 leading-relaxed">Participants commit to responsible online behaviour, and selected Digital Safety Champions will share the knowledge with others.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>