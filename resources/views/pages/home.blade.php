@extends('layouts.public')

@section('title', 'Home')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
        <div class="rounded-2xl overflow-hidden shadow-sm">
            {{-- Ganti src dengan foto kamu di public/images/hero.jpg --}}
            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200" alt="Hero" class="w-full h-[520px] object-cover">
        </div>
        <div>
            <p class="text-sm tracking-wide text-black/60 mb-4">Writer. Creator. Learner.</p>
            <h1 class="font-serif-display text-5xl leading-tight text-accent mb-6">
                Searching for magic in between the cracks of ordinary objects.
            </h1>
            <p class="text-black/70 leading-relaxed mb-8">
                Selamat datang di website pertamaku. Website ini dibuat dengan Laravel sambil belajar step by step: ada Home, About, Contact, Login, Register, dan Dashboard.
            </p>
            <div class="flex gap-3">
                <a href="{{ route('about') }}" class="px-6 py-3 rounded-full bg-black text-white text-sm">Kenali Saya</a>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-full border border-black/20 text-sm">Hubungi Saya</a>
            </div>
        </div>
    </section>
@endsection
