<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        return view('backend.property.create');
    }

    public function addProperty(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:855',
            'amount' => 'required',
            'images' => 'required'
        ]);
        
        $property = new Property;
        $property->name = $request->name;
        $property->description = $request->description;
        $property->amount = $request->amount;
        $property->save();

        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('images', 'public');
            $image->url = $path;
            $image->product_id = $property->id;
            $image->save();
        }

        return redirect()->back()->with(['success', 'Property uploaded successfully.']);
    }
}
