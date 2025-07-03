<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Information;

class BookmarkController extends Controller
{
    public function toggle($id)
    {
        $user = Auth::user();

        // Pastikan user login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login untuk menandai bookmark.');
        }

        // Cari informasi berdasarkan ID
        $information = Information::findOrFail($id);

        // Cek apakah sudah di-bookmark
        if ($user->bookmarks()->where('information_id', $id)->exists()) {
            $user->bookmarks()->detach($id); // hapus dari bookmark
        } else {
            $user->bookmarks()->attach($id); // tambah ke bookmark
        }

        return back()->with('status', 'Bookmark berhasil diperbarui.');
    }
    public function index()
{
    $user = Auth::user();

    // Ambil semua informasi yang sudah di-bookmark oleh user
    $items = $user->bookmarks()->latest()->paginate(6);

    return view('bookmark', compact('items'));
}

}
