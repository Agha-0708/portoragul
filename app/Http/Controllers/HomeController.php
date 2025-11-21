<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;       // Model untuk Data Team
use App\Models\Guestbook;  // Model untuk Buku Tamu/Log (Pastikan Model ini sudah dibuat)
use App\Models\Quote;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Halaman Utama (Home)
     * Menampilkan Hero, Grid Project (max 6), Team, dan Log Pesan
     */
    public function index()
    {
        // 1. Ambil 6 project terbaru yang statusnya 'published'
        // Kita gunakan 'with' user agar query database lebih ringan (Eager Loading)
        $projects = Project::with('user')
                    ->where('is_published', true)
                    ->latest()
                    ->take(6) 
                    ->get();
        
        // 2. Ambil semua data user admin untuk bagian 'Our Team'
        $team = User::all(); 

        // 3. Ambil 10 pesan terakhir untuk fitur 'Visitor Log' (Terminal)
        // Jika kamu belum buat tabel guestbooks, baris ini akan error.
        // Jika belum buat, hapus baris ini dan hapus 'messages' di compact.
        $messages = Guestbook::latest()->take(10)->get();
        $quote = Quote::where('is_active', true)->inRandomOrder()->first();

        return view('home', compact('projects', 'team', 'messages','quote'));
    }

    /**
     * Halaman Detail Project
     * Menampilkan cerita lengkap project berdasarkan Slug
     */
    public function show($slug)
    {
        $project = Project::with('user')
                    ->where('slug', $slug)
                    ->where('is_published', true)
                    ->firstOrFail(); // Jika tidak ketemu, tampilkan 404

        return view('project', compact('project'));
    }

    /**
     * Halaman Arsip (Lihat Semua Proyek)
     * Menampilkan seluruh project tanpa batasan limit
     */
    public function archive()
    {
        $projects = Project::with('user')
                    ->where('is_published', true)
                    ->latest()
                    ->get();

        return view('projects', compact('projects'));
    }

    /**
     * Logika Kirim Pesan (Guestbook)
     * Menerima input dari form terminal di halaman home
     */
    public function storeGuestbook(Request $request)
    {
        // Validasi input agar aman dari spammer iseng
        $request->validate([
            'name' => 'required|string|max:50',
            'message' => 'required|string|max:255',
        ]);

        // Simpan ke database
        Guestbook::create([
            'name' => $request->name,
            'message' => $request->message
        ]);

        // Kembali ke halaman home dengan notifikasi (bisa ditangkap di blade nanti)
        return redirect()->route('home')->with('success', 'System Log Updated: Message received.');
    }
}