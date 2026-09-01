<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order', 'asc')->get();
        return view('pages.contact', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|min:8|max:20',
            'email' => 'nullable|email|max:100',
            'service_requested' => 'nullable|string|max:100',
            'location' => 'nullable|string|max:100',
            'message' => 'required|string|min:5|max:2000',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'name.max' => 'Nama tidak boleh melebihi 100 karakter.',
            'phone.required' => 'Nomor HP/WhatsApp wajib diisi.',
            'phone.min' => 'Nomor HP minimal 8 digit.',
            'phone.max' => 'Nomor HP tidak valid.',
            'email.email' => 'Format alamat email tidak valid.',
            'message.required' => 'Pesan atau keluhan Anda wajib diisi.',
            'message.min' => 'Isi pesan minimal 5 karakter.',
        ]);

        $validated['ip_address'] = $request->ip();

        $contactMessage = ContactMessage::create($validated);

        try {
            $adminEmail = config('company.contact.email', 'info@gebrinajaya.com');
            Mail::to($adminEmail)->send(new ContactMessageMail($contactMessage));
        } catch (\Exception $e) {
            Log::error('Gagal mengirim email pesan kontak: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. Tim CV GEBRINA JAYA akan segera menghubungi Anda dalam waktu 5-15 menit.');
    }
}
