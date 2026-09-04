@extends('layouts.app')

@section('content')

    <!-- LAYER 1: COVER DEPAN (OPENING CURTAIN / ENVELOPE) -->
    <div id="coverWrapper" class="fixed inset-0 z-[100] max-w-md mx-auto bg-gradient-to-b from-[#FAF7F2] via-[#F5ECE0] to-[#EFE4D4] flex flex-col items-center justify-center text-center p-4 transition-all duration-700 ease-in-out shadow-2xl overflow-y-auto no-scrollbar">
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

        if (btnOpen) {
            btnOpen.addEventListener('click', function() {
                document.body.style.overflow = '';
                coverWrapper.style.transition = 'opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1)';
                coverWrapper.style.opacity = '0';
                coverWrapper.style.transform = 'translateY(-100%) scale(0.96)';
                coverWrapper.style.pointerEvents = 'none';

                setTimeout(() => {
                    coverWrapper.style.display = 'none';
                }, 700);

                if (mainContent) {
                    mainContent.classList.remove('hidden');
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
                    musicBtn.style.animation = 'fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards';
                }

                if (audio) {
                    audio.play().then(() => {
                        updateMusicUI(true);
                    }).catch(e => {
                        console.log('Audio autoplay prevented:', e);
                        updateMusicUI(false);
                    });
                }

                window.scrollTo({ top: 0, behavior: 'smooth' });
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