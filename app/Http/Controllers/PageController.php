<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Untuk tahap belajar: pesan belum disimpan ke database.
        // Nanti kita bisa simpan ke tabel `messages` atau kirim via email.
        // Sekarang cukup tampilkan pesan sukses.
        return back()->with('success', 'Terima kasih, pesanmu sudah terkirim. Kami akan balas secepatnya.');
    }
}
