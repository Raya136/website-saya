<?php

namespace App\Http\Controllers;

use App\Exports\MessagesExport;
use App\Mail\ContactMessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Ambil user yang sedang login (kalau ada), biar tercatat siapa yang mengirim saat login.
        $user = $request->user();

        $messageRecord = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'user_id' => $user?->id,
            'user_name' => $user?->name,
            'user_email' => $user?->email,
        ]);

        // Kirim salinan pesan ke email pemilik website
        Mail::to('4kunbelajar136@gmail.com')->send(new ContactMessageMail($messageRecord));

        return back()->with('success', 'Terima kasih, pesanmu sudah terkirim. Kami akan balas secepatnya.');
    }

    public function exportMessages()
    {
        $fileName = 'pesan-contact-' . now()->format('Ymd-His') . '.xlsx';

        return Excel::download(new MessagesExport, $fileName);
    }
}