<?php

namespace App\Http\Controllers;

use App\Models\Trending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('auth.profile');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'followers' => 'required|integer|min:0',
            ]);

            $imagePath = $request->file('image')->store('images', 'public');


            Trending::create([
                'image' => 'storage/' . $imagePath,
                'followers' => $request->followers,
            ]);

            return redirect()->back()->with('success', 'Game added successfully');
        }catch (ValidationException $e){
            return redirect()->back()->withErrors($e->errors());
        }catch (\Exception $e){
            Log::error($e);

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
