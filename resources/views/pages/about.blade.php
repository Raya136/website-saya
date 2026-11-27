@extends('layouts.public')

@section('title', 'About')

@section('content')

    {{-- Animasi sederhana khusus halaman About --}}
    <style>
        .about-bg {
            position: relative;
            overflow: hidden;
            background: linear-gradient(120deg, #FFFDF7 0%, #FFF6E0 45%, #FFFDF7 100%);
            background-size: 200% 200%;
            animation: aboutGradient 14s ease infinite;
        }
        .about-blob {
            position: absolute;
            border-radius: 9999px;
            filter: blur(2px);
            opacity: .55;
            pointer-events: none;
            animation: aboutFloat 9s ease-in-out infinite;
        }
        .about-blob-1 { width: 260px; height: 260px; background: #F6D98A; top: -80px; right: -60px; }
        .about-blob-2 { width: 180px; height: 180px; background: #FBE9B7; bottom: -60px; left: -40px; animation-delay: 2s; }
        .about-blob-3 { width: 90px;  height: 90px;  background: #E8B34B; top: 45%; right: 12%; opacity: .35; animation-delay: 4s; }

        .fade-up { opacity: 0; transform: translateY(14px); animation: aboutFadeUp .8s ease forwards; }
        .fade-up-1 { animation-delay: .1s; }
        .fade-up-2 { animation-delay: .25s; }
        .fade-up-3 { animation-delay: .4s; }

        @keyframes aboutGradient {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @keyframes aboutFloat {
            0%, 100% { transform: translateY(0) scale(1); }
            50%      { transform: translateY(-18px) scale(1.05); }
        }
        @keyframes aboutFadeUp {
            to { opacity: 1; transform: translateY(0); }
        }

        @media (prefers-reduced-motion: reduce) {
            .about-bg, .about-blob, .fade-up { animation: none; opacity: 1; transform: none; }
        }
    </style>

    <section class="about-bg">
        <div class="about-blob about-blob-1"></div>
        <div class="about-blob about-blob-2"></div>
        <div class="about-blob about-blob-3"></div>

        <div class="relative max-w-4xl mx-auto px-6 py-16">
            <p class="fade-up fade-up-1 text-sm tracking-widest text-black/50 mb-3">ABOUT</p>
            <h1 class="fade-up fade-up-2 font-serif-display text-4xl md:text-5xl mb-8">Halo, saya ray.</h1>

            <div class="fade-up fade-up-3 space-y-6 text-black/75 leading-relaxed">
                <p>
                    Halaman About dipakai untuk memperkenalkan diri: siapa kamu, apa yang kamu lakukan, dan apa tujuan website ini.
                    Di website contoh ini, About berisi profil singkat, cerita belajar, dan hal-hal yang sedang dikerjakan.
                </p>

                <h2 class="font-serif-display text-2xl text-black pt-4">Yang bisa diakses di halaman About</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Foto profil dan biodata singkat</li>
                    <li>Cerita / perjalanan belajar coding &amp; design</li>
                    <li>Skill yang sedang dipelajari (Laravel, HTML, CSS, Tailwind)</li>
                    <li>Project atau karya yang pernah dibuat</li>
                    <li>Link ke media sosial / portofolio</li>
                </ul>

                <h2 class="font-serif-display text-2xl text-black pt-4">Sedang belajar</h2>
                <p>Laravel, Blade, database, autentikasi (login/register), dan Git &amp; GitHub untuk menyimpan kode.</p>
            </div>
        </div>
    </section>
@endsection