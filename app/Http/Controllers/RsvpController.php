<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class RsvpController extends Controller
{
    public function index(Request $request) // <-- Tambahkan Request $request di sini bray
    {
        // 1. Ambil data ucapan dari database
        $ucapans = Rsvp::latest()->get();

        // 2. Tangkap parameter 'to' dari URL (default: 'Tamu Undangan')
        $namaTamu = $request->query('to', 'Tamu Undangan');

        // 3. Lempar kedua variabelnya ke view 'index'
        return view('index', compact('ucapans', 'namaTamu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kehadiran' => 'required',
            'ucapan' => 'required|string',
        ]);

        Rsvp::create([
            'nama' => $request->nama,
            'kehadiran' => $request->kehadiran,
            'ucapan' => $request->ucapan,
        ]);

        return back()->with('success', 'Ucapan berhasil dikirim!');
    }

    public function generator()
    {
        return view('admin.generator');
    }

    public function generateProcess(Request $request)
    {
        $request->validate([
            'daftar_nama' => 'required|string',
        ]);

        $lines = explode("\n", str_replace("\r", "", $request->daftar_nama));
        $listUndangan = [];

        foreach ($lines as $nama) {
            $namaClean = trim($nama);
            if (!empty($namaClean)) {
                // CUKUP PAKE url('/?to=') TANPA PATH /herni-love-panji
                $link = url('/?to=' . urlencode($namaClean));

                $pesanWa = "Kepada Yth.\n" .
                    "Bapak/Ibu/Saudara/i\n" .
                    "*{$namaClean}*\n" .
                    "di tempat\n\n" .
                    "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri acara Resepsi Pernikahan Kami\n\n" .
                    "Info lebih lengkap klik link dibawah ini\n" .
                    "{$link}\n\n" .
                    "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n" .
                    "Kami yang berbahagia\n" .
                    "Keluarga Kedua Mempelai";

                $listUndangan[] = [
                    'nama' => $namaClean,
                    'link' => $link,
                    'pesan' => $pesanWa
                ];
            }
        }

        return back()->with('results', $listUndangan)->withInput();
    }
}
