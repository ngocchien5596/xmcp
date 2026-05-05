<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', [
            'seo' => [
                'title' => 'Liên hệ - ' . config('site.brand'),
                'description' => 'Liên hệ Công ty Cổ phần Xi măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/lien-he'),
            ],
            'partners' => config('partners'),
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        return redirect()
            ->route('contact.index')
            ->with('success', 'Yêu cầu của bạn đã được gửi. Chúng tôi sẽ phản hồi sớm nhất có thể.');
    }
}
