@extends('layouts.public')

@section('title', 'About')

@section('content')

    <section class="max-w-4xl mx-auto px-6 py-16">
        <p class="text-sm tracking-widest text-black/50 mb-3">ABOUT</p>
        <h1 class="font-serif-display text-4xl md:text-5xl mb-8">Halo, saya TINA.</h1>

        <div class="space-y-6 text-black/75 leading-relaxed">
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
    </section>
@endsection
