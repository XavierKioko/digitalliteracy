<?php include 'includes/header.php'; ?>

<main class="max-w-5xl mx-auto px-5 md:px-8 py-10 md:py-14 flex-grow w-full space-y-12 md:space-y-14">

    <!-- Slide header -->
    <div class="slide-enter border-b border-line pb-6">
        <div class="flex items-center gap-2 text-gold-2 eyebrow text-[11px] uppercase mb-3">
            <span>Project Proof</span> <span class="text-line">•</span> <span>CSL 300</span>
        </div>
        <h1 class="font-display text-3xl sm:text-4xl md:text-6xl font-semibold text-ivory leading-[1.05]">Training Evidence</h1>
        <p class="text-ivory/60 mt-3 text-base md:text-lg max-w-2xl">Video documentation, presentation materials, and photo gallery from the digital literacy training sessions.</p>
    </div>

    <!-- Video & PPT Section -->
    <div class="grid md:grid-cols-3 gap-6 slide-enter">
        <!-- Embedded Video -->
        <!-- Fix: Removed flex-grow and added min-height so the Drive player UI doesn't overflow or get cut off -->
        <div class="md:col-span-2 bg-ink-2 border border-line p-6 rounded-3xl shadow-xl flex flex-col justify-start">
            <h2 class="font-display text-xl font-semibold text-ivory mb-4 flex items-center gap-2">
                <?= icon('video-off', 'w-5 h-5 text-gold-2') ?> Live Training Recording
            </h2>
            <div class="relative w-full aspect-video min-h-[300px] sm:min-h-[400px] rounded-xl overflow-hidden border border-line bg-ink">
                <iframe src="https://drive.google.com/file/d/1-GXwzA2rVbhWv_YZcoZHqwq36j_z5SnD/preview" class="absolute top-0 left-0 w-full h-full border-0" allow="autoplay; fullscreen"></iframe>
            </div>
        </div>

        <!-- Presentation Materials -->
        <div class="bg-ink-2 border border-line p-6 rounded-3xl shadow-xl flex flex-col">
            <h2 class="font-display text-xl font-semibold text-ivory mb-4 flex items-center gap-2">
                <?= icon('download', 'w-5 h-5 text-teal') ?> Presentation Files
            </h2>
            <p class="text-ivory/60 text-sm mb-6 flex-grow">The original CSL 300 presentation and project overview documents used for this training.</p>
            
            <div class="space-y-3">
                <a href="path/to/PP_Digital_Literacy_Programme_Revised.pptx" download class="w-full px-5 py-4 rounded-xl bg-ink hover:bg-white/5 border border-line transition flex items-center gap-3">
                    <span class="w-10 h-10 rounded-lg bg-teal/10 text-teal flex items-center justify-center shrink-0"><?= icon('image', 'w-5 h-5') ?></span>
                    <div class="text-left">
                        <strong class="block text-sm text-ivory">Training PPT Deck</strong>
                        <span class="block text-[11px] text-ivory/50 truncate max-w-[150px] sm:max-w-[200px]">PP_Digital_Literacy_Programme_Revised.pptx</span>
                    </div>
                </a>
                <a href="path/to/CSL 300 introduction.docx" download class="w-full px-5 py-4 rounded-xl bg-ink hover:bg-white/5 border border-line transition flex items-center gap-3">
                    <span class="w-10 h-10 rounded-lg bg-gold/10 text-gold-2 flex items-center justify-center shrink-0"><?= icon('newspaper', 'w-5 h-5') ?></span>
                    <div class="text-left">
                        <strong class="block text-sm text-ivory">Project Overview</strong>
                        <span class="block text-[11px] text-ivory/50 truncate max-w-[150px] sm:max-w-[200px]">CSL 300 introduction.docx</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Photo Gallery -->
    <div class="slide-enter border-t border-line pt-12">
        <h2 class="font-display text-2xl font-semibold text-ivory mb-6 flex items-center gap-2">
            <?= icon('users', 'w-5 h-5 text-moss') ?> Event Gallery
        </h2>
        
        <!-- Premium Card Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            
            <!-- Image 1 -->
            <div class="rounded-3xl bg-ink border border-line overflow-hidden group shadow-lg flex flex-col card-hover">
                <!-- Fix: Changed to aspect-[3/4] for portrait framing and added object-top to keep heads in frame -->
                <div class="relative w-full aspect-[3/4] sm:aspect-[4/5] overflow-hidden bg-ink-2 cursor-zoom-in">
                    <img src="media/image1.jpeg" alt="Dorcas Dianga" class="gallery-img w-full h-full object-cover object-top group-hover:scale-105 transition duration-700 ease-out">
                </div>
                <div class="px-6 py-4 border-t border-line/60 bg-ink flex justify-between items-center">
                    <span class="font-display font-semibold text-ivory tracking-wide">Dorcas Dianga</span>
                    <span class="w-8 h-8 rounded-full bg-white/5 border border-line flex items-center justify-center text-gold-2"><?= icon('user-x', 'w-4 h-4') ?></span>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="rounded-3xl bg-ink border border-line overflow-hidden group shadow-lg flex flex-col card-hover">
                <div class="relative w-full aspect-[3/4] sm:aspect-[4/5] overflow-hidden bg-ink-2 cursor-zoom-in">
                    <img src="media/image2.jpeg" alt="Dominic Elvis" class="gallery-img w-full h-full object-cover object-top group-hover:scale-105 transition duration-700 ease-out">
                </div>
                <div class="px-6 py-4 border-t border-line/60 bg-ink flex justify-between items-center">
                    <span class="font-display font-semibold text-ivory tracking-wide">Dominic Elvis</span>
                    <span class="w-8 h-8 rounded-full bg-white/5 border border-line flex items-center justify-center text-teal"><?= icon('user-x', 'w-4 h-4') ?></span>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="rounded-3xl bg-ink border border-line overflow-hidden group shadow-lg flex flex-col card-hover">
                <div class="relative w-full aspect-[3/4] sm:aspect-[4/5] overflow-hidden bg-ink-2 cursor-zoom-in">
                    <img src="media/image3.jpeg" alt="Peter Gathu and Byron Maluda" class="gallery-img w-full h-full object-cover object-top group-hover:scale-105 transition duration-700 ease-out">
                </div>
                <div class="px-6 py-4 border-t border-line/60 bg-ink flex justify-between items-center">
                    <span class="font-display font-semibold text-ivory tracking-wide">Peter Gathu &amp; Byron Maluda</span>
                    <span class="w-8 h-8 rounded-full bg-white/5 border border-line flex items-center justify-center text-clay"><?= icon('users', 'w-4 h-4') ?></span>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="rounded-3xl bg-ink border border-line overflow-hidden group shadow-lg flex flex-col card-hover">
                <div class="relative w-full aspect-[3/4] sm:aspect-[4/5] overflow-hidden bg-ink-2 cursor-zoom-in">
                    <img src="media/image4.jpeg" alt="Event Photo" class="gallery-img w-full h-full object-cover object-top group-hover:scale-105 transition duration-700 ease-out">
                </div>
                <div class="px-6 py-4 border-t border-line/60 bg-ink flex justify-between items-center">
                    <span class="font-display font-semibold text-ivory tracking-wide">Shillah Mwadosho</span>
                    <span class="w-8 h-8 rounded-full bg-white/5 border border-line flex items-center justify-center text-moss"><?= icon('image', 'w-4 h-4') ?></span>
                </div>
            </div>

        </div>
    </div>

    <!-- Slide footer nav -->
    <div class="flex justify-between items-center pt-8 border-t border-line">
        <a href="session3.php" class="flex items-center gap-1.5 text-xs font-bold text-ivory/50 hover:text-ivory transition"><?= icon('arrow-left', 'w-4 h-4') ?> Back to Session 3</a>
        <a href="index.php" class="px-6 py-3 rounded-full bg-line hover:bg-line/80 text-ivory font-bold text-xs eyebrow uppercase transition flex items-center gap-2">
            Back to Overview <?= icon('arrow-right', 'w-4 h-4') ?>
        </a>
    </div>
</main>

<!-- Lightbox Modal for Image Zooming -->
<div id="lightbox" class="fixed inset-0 z-[100] bg-ink/95 backdrop-blur-md hidden flex items-center justify-center p-4 sm:p-8 cursor-zoom-out opacity-0 transition-opacity duration-300">
    <img id="lightbox-img" src="" alt="Zoomed Image" class="max-w-full max-h-full rounded-2xl shadow-2xl object-contain scale-95 transition-transform duration-300">
    <button id="lightbox-close" class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-white/20 transition">
        <?= icon('close', 'w-6 h-6') ?>
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const galleryImages = document.querySelectorAll('.gallery-img');

    // Open lightbox
    galleryImages.forEach(img => {
        img.addEventListener('click', (e) => {
            e.stopPropagation();
            lightboxImg.src = img.src;
            lightbox.classList.remove('hidden');
            // Slight delay allows the CSS transition to trigger smoothly
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                lightboxImg.classList.remove('scale-95');
                lightboxImg.classList.add('scale-100');
            }, 10);
        });
    });

    // Close lightbox
    const closeLightbox = () => {
        lightbox.classList.add('opacity-0');
        lightboxImg.classList.remove('scale-100');
        lightboxImg.classList.add('scale-95');
        setTimeout(() => {
            lightbox.classList.add('hidden');
        }, 300);
    };

    lightbox.addEventListener('click', closeLightbox);
});
</script>

<?php include 'includes/footer.php'; ?>