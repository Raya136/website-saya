<?php

namespace App\Exports;

use App\Models\Message;
use Illuminate\Support\Enumerable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MessagesExport implements FromCollection, WithHeadings, WithMapping, WithColumnWidths, WithStyles
{
    public function collection(): Enumerable
    {
        return Message::latest()->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama Pengirim', 'Email Pengirim', 'Pesan', 'User Login ID', 'Nama User Login', 'Email User Login', 'Tanggal'];
    }

    public function map($message): array
    {
        return [
            $message->id,
            $message->name,
            $message->email,
            $message->message,
            $message->user_id,
            $message->user_name,
            $message->user_email,
            optional($message->created_at)->format('Y-m-d H:i:s'),
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 8,
            'B' => 20,
            'C' => 30,
            'D' => 50,
            'E' => 14,
            'F' => 20,
            'G' => 30,
            'H' => 20,
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        // Kolom angka (ID & User Login ID) dibuat rata tengah
        $sheet->getStyle('A:A')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('E:E')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        return [
            // Baris judul (header): tebal + rata tengah
            1 => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
            ],
        ];
    }
}