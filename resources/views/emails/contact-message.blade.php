<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; color: #333;">
    <h2>Pesan Baru dari Website Saya</h2>

    <p><strong>Nama Pengirim:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email Pengirim:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $contactMessage->message }}</p>

    <hr>

    <p><strong>Dikirim oleh user login:</strong> {{ $contactMessage->user_name ?? '-' }} ({{ $contactMessage->user_email ?? '-' }})</p>
    <p><strong>Waktu:</strong> {{ $contactMessage->created_at->format('Y-m-d H:i:s') }}</p>
</body>
</html>