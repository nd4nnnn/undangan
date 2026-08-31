@extends('layouts.app')

@section('content')

    <!-- LAYER 1: COVER DEPAN -->
    <div id="coverWrapper" class="fixed inset-0 z-[100] max-w-md mx-auto bg-[url('/images/bg-castle.jpg')] bg-cover bg-center flex flex-col items-center justify-center text-center p-6 transition-all duration-700">
        @include('sections.opening')
    </div>

    <!-- LAYER 2: ISI UNDANGAN UTAMA -->
    <div id="mainContent" class="hidden">
        
        <section id="mempelai" class="page-section min-h-screen flex flex-col items-center justify-center p-6 bg-white/40 backdrop-blur-sm animate-[fadeIn_0.5s_ease-in-out]">
            @include('sections.mempelai')
        </section>

        <section id="akad" class="page-section hidden min-h-screen flex flex-col items-center p-6 animate-[fadeIn_0.5s_ease-in-out]">
            @include('sections.akad-resepsi')
        </section>

        <section id="love-story" class="page-section hidden min-h-screen flex flex-col items-center p-6 animate-[fadeIn_0.5s_ease-in-out]">
            @include('sections.love-story')
        </section>

        <section id="gallery" class="page-section hidden min-h-screen flex flex-col items-center p-6 bg-white/40 backdrop-blur-sm animate-[fadeIn_0.5s_ease-in-out]">
            @includeIf('sections.gallery')
        </section>

        <section id="rsvp" class="page-section hidden min-h-screen flex flex-col items-center justify-center p-6 text-center animate-[fadeIn_0.5s_ease-in-out]">
            @includeIf('sections.rsvp')
        </section>

        <section id="gift" class="page-section hidden min-h-screen flex flex-col items-center p-6 bg-white/40 backdrop-blur-sm animate-[fadeIn_0.5s_ease-in-out]">
            @includeIf('sections.gift')
        </section>

        <section id="quotes" class="page-section hidden min-h-screen flex flex-col items-center justify-center p-6 text-center animate-[fadeIn_0.5s_ease-in-out]">
            @include('sections.quotes')
        </section>

    </div>

@endsection

@push('scripts')
<script>
    const audio = document.getElementById('weddingMusic');
    const musicBtn = document.getElementById('musicBtn');
    const iconPlay = document.getElementById('iconPlay');
    const iconPause = document.getElementById('iconPause');
    let isPlaying = false;

    function toggleMusic() {
        if (isPlaying) {
            audio.pause();
            iconPlay.classList.remove('hidden');
            iconPause.classList.add('hidden');
        } else {
            audio.play();
            iconPlay.classList.add('hidden');
            iconPause.classList.remove('hidden');
        }
        isPlaying = !isPlaying;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.page-section');
        const mainNav = document.getElementById('mainNav');
        const coverWrapper = document.getElementById('coverWrapper');
        const mainContent = document.getElementById('mainContent');
        const btnOpen = document.getElementById('btnOpenInvitation');

        if (btnOpen) {
            btnOpen.addEventListener('click', function() {
                coverWrapper.classList.add('-translate-y-full', 'opacity-0');
                setTimeout(() => {
                    coverWrapper.classList.add('hidden');
                }, 700);

                if (mainContent) mainContent.classList.remove('hidden');
                if (mainNav) mainNav.classList.remove('hidden');
                if (musicBtn) musicBtn.classList.remove('hidden');

                audio.play().then(() => {
                    isPlaying = true;
                }).catch(e => console.log(e));

                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); 
                const targetId = this.getAttribute('data-target');

                sections.forEach(sec => sec.classList.add('hidden'));

                const targetSection = document.getElementById(targetId);
                if (targetSection) targetSection.classList.remove('hidden');

                this.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    });
</script>
@endpush