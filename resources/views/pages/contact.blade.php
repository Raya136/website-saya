@extends('layouts.public')

@section('title', 'Contact')

@section('content')

    <section class="max-w-4xl mx-auto px-6 py-16">
        <p class="text-sm tracking-widest text-black/50 mb-3">CONTACT</p>
        <h1 class="font-serif-display text-4xl md:text-5xl mb-4">Hubungi Saya</h1>
        <p class="text-black/70 mb-10">Halaman Contact dipakai pengunjung untuk mengirim pesan. Yang bisa diakses di sini: info kontak, form pesan, dan link media sosial.</p>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-800">{{ session('success') }}</div>
        @endif

        <div class="grid md:grid-cols-2 gap-10">
            <div class="space-y-4 text-sm">
                <p><strong>Email:</strong> halo@contoh.com</p>
                <p><strong>Instagram:</strong> @username</p>
                <p><strong>GitHub:</strong> github.com/username</p>
                <p class="text-black/60">Ganti dengan kontak aslimu nanti.</p>
            </div>

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="text-sm font-medium">Nama</label>
                    <input name="name" value="{{ old('name') }}" class="mt-1 w-full rounded-xl border-black/15 px-4 py-3" placeholder="Nama kamu">
                    @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full rounded-xl border-black/15 px-4 py-3" placeholder="email@contoh.com">
                    @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="text-sm font-medium">Pesan</label>
                    <textarea name="message" rows="5" class="mt-1 w-full rounded-xl border-black/15 px-4 py-3" placeholder="Tulis pesanmu...">{{ old('message') }}</textarea>
                    @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <button class="px-6 py-3 rounded-full bg-black text-white text-sm">Kirim Pesan</button>
            </form>
        </div>
    </section>
@endsection
