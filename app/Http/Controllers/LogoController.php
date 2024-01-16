<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function showForm()
    {
        $logo = Logo::first(); 

        return view('backend.logo.form', compact('logo'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $existingLogo = Logo::first();
    
        if ($existingLogo) {
            Storage::disk('public')->delete($existingLogo->logo_path);
            $existingLogo->delete();
        }
    
        $logoPath = $request->file('logo')->store('logos', 'public');
    
        Logo::create([
            'logo_path' => $logoPath,
        ]);
    
        return redirect()->back()->with(['success', 'Logo uploaded successfully.']);
    }
}
