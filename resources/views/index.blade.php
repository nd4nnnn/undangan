@extends('layouts.app')

@section('content')

    <!-- LAYER 1: COVER DEPAN (OPENING ENVELOPE) -->
    <div id="coverWrapper" class="fixed inset-0 z-[100] max-w-md mx-auto bg-gradient-to-b from-[#FAF7F2] via-[#F5ECE0] to-[#EFE4D4] flex flex-col items-center justify-center text-center p-3 sm:p-4 shadow-2xl overflow-y-auto no-scrollbar will-change-transform">
        <div class="absolute inset-0 bg-[radial-gradient(#C5A059_0.75px,transparent_0.75px)] [background-size:20px_20px] opacity-25 pointer-events-none"></div>
        @include('sections.opening')
    </div>

    <!-- LAYER 2: ISI UNDANGAN UTAMA -->
    <div id="mainContent" class="hidden w-full flex-1 flex flex-col">
        
        <section id="mempelai" class="page-section w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @include('sections.mempelai')
        </section>

        <section id="akad" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @include('sections.akad-resepsi')
        </section>

        <section id="love-story" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @include('sections.love-story')
        </section>

        <section id="gallery" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @includeIf('sections.gallery')
        </section>

        <section id="rsvp" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @includeIf('sections.rsvp')
        </section>

        <section id="gift" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @includeIf('sections.gift')
        </section>

        <section id="quotes" class="page-section hidden w-full flex flex-col items-center justify-center p-3 sm:p-4 py-2 transition-all duration-300">
            @include('sections.quotes')
        </section>

    </div>

@endsection

@push('scripts')
<script>
    const audio = document.getElementById('weddingMusic');
    const musicBtn = document.getElementById('musicBtn');
    const diskRotate = document.getElementById('diskRotate');
    let isPlaying = false;

    // Set initial paused state
    if (diskRotate) diskRotate.style.animationPlayState = 'paused';

    function updateMusicUI(playing) {
        isPlaying = playing;
        if (diskRotate) {
            diskRotate.style.animationPlayState = playing ? 'running' : 'paused';
            diskRotate.style.opacity = playing ? '1' : '0.55';
        }
    }

    function toggleMusic() {
        if (!audio) return;
        if (isPlaying) {
            audio.pause();
            updateMusicUI(false);
        } else {
            audio.play().then(() => {
                updateMusicUI(true);
            }).catch(e => {
                console.log('Audio error:', e);
                updateMusicUI(false);
            });
        }
    }

    if (audio) {
        audio.addEventListener('play', () => updateMusicUI(true));
        audio.addEventListener('pause', () => updateMusicUI(false));
    }

    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.page-section');
        const mainNav = document.getElementById('mainNav');
        const coverWrapper = document.getElementById('coverWrapper');
        const mainContent = document.getElementById('mainContent');
        const btnOpen = document.getElementById('btnOpenInvitation');

        if (coverWrapper && coverWrapper.style.display !== 'none') {
            document.body.style.overflow = 'hidden';
        }

        let isOpeningInvitation = false;

        function triggerOpenInvitation() {
            if (isOpeningInvitation) return;
            isOpeningInvitation = true;

            const envelopeBox = document.getElementById('envelopeBox');
            const openingHeader = document.getElementById('openingHeader');
            const btnOpen = document.getElementById('btnOpenInvitation');

            // 1. Open Envelope: 3D Flap flips up smoothly, letter gracefully ascends, plaque dissolves
            if (envelopeBox) {
                envelopeBox.classList.add('is-open');
            }
            if (openingHeader) {
                openingHeader.style.transition = 'opacity 0.35s ease, transform 0.35s cubic-bezier(0.22, 1, 0.36, 1)';
                openingHeader.style.opacity = '0';
                openingHeader.style.transform = 'translate3d(0, -10px, 0)';
            }
            if (btnOpen) {
                btnOpen.style.transition = 'opacity 0.3s ease, transform 0.3s cubic-bezier(0.22, 1, 0.36, 1)';
                btnOpen.style.opacity = '0';
                btnOpen.style.transform = 'translate3d(0, 8px, 0) scale(0.95)';
                btnOpen.style.pointerEvents = 'none';
            }

            // 2. Play Audio immediately on user interaction
            if (audio) {
                audio.play().then(() => {
                    updateMusicUI(true);
                }).catch(e => {
                    console.log('Audio autoplay prevented:', e);
                    updateMusicUI(false);
                });
            }

            // 3. After letter card has smoothly risen and presented (1050ms), transition seamlessly to main content
            setTimeout(() => {
                document.body.style.overflow = '';
                if (coverWrapper) {
                    coverWrapper.classList.add('cover-closing');
                }

                if (mainContent) {
                    mainContent.classList.remove('hidden');
                    mainContent.classList.add('main-content-appear');
                    const firstSec = document.getElementById('mempelai');
                    if (firstSec) {
                        void firstSec.offsetWidth;
                        firstSec.classList.add('section-animate');
                    }
                }
                if (mainNav) {
                    mainNav.classList.remove('hidden');
                    mainNav.classList.add('nav-animate');
                }
                if (musicBtn) {
                    musicBtn.classList.remove('hidden');
                    musicBtn.style.animation = 'fadeInUp 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards';
                }

                window.scrollTo(0, 0);

                setTimeout(() => {
                    if (coverWrapper) coverWrapper.style.display = 'none';
                }, 650);
            }, 1050);
        }

        if (btnOpen) {
            btnOpen.addEventListener('click', function(e) {
                e.stopPropagation();
                triggerOpenInvitation();
            });
        }

        const waxSeal = document.getElementById('waxSealBtn');
        if (waxSeal) {
            waxSeal.addEventListener('click', function(e) {
                e.stopPropagation();
                triggerOpenInvitation();
            });
        }

        const envelopeBox = document.getElementById('envelopeBox');
        if (envelopeBox) {
            envelopeBox.addEventListener('click', function(e) {
                if (!isOpeningInvitation) {
                    triggerOpenInvitation();
                }
            });
        }

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); 
                const targetId = this.getAttribute('data-target');

                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                sections.forEach(sec => {
                    sec.classList.add('hidden');
                    sec.classList.remove('section-animate');
                });

                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.remove('hidden');
                    void targetSection.offsetWidth;
                    targetSection.classList.add('section-animate');
                }

                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        const firstNav = document.querySelector('.nav-link[data-target="mempelai"]');
        if (firstNav) {
            firstNav.classList.add('active');
        }
    });
</script>
@endpush