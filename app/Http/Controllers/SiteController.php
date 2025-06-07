<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{

    public function show(){
        $sites = \App\Models\Site::latest()->get();
        return view('client.pages.site_touristique', compact('sites'));
    }
    



    public function index()
    {
        $sites = Site::latest()->get();
        return view('admin.pages.site-touristique.site', compact('sites'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomSit' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'disponibilite' => 'required|boolean',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->only(['nomSit', 'description', 'prix', 'disponibilite']);
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('sites', 'public');
                $imagePaths[] = $path;
            }
        }
        $data['image'] = json_encode($imagePaths);

        Site::create($data);

        return redirect()->back()->with('success', 'Site touristique ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $site = Site::findOrFail($id);

        $request->validate([
            'nomSit' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'disponibilite' => 'required|boolean',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->only(['nomSit', 'description', 'prix', 'disponibilite']);
        $imagePaths = $site->image ? json_decode($site->image, true) : [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('sites', 'public');
                $imagePaths[] = $path;
            }
        }
        $data['image'] = json_encode($imagePaths);
        $site->update($data);

        return redirect()->back()->with('success', 'Site touristique modifié avec succès.');
    }

    public function destroy($id)
    {
        $site = Site::findOrFail($id);
        if ($site->image) {
            foreach (json_decode($site->image, true) as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $site->delete();
        return redirect()->back()->with('success', 'Site touristique supprimé avec succès.');
    }
}
