<?php
namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return view('admin.pages.evenement.evenement', compact('evenements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomEve' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|integer',
            'disponibilite' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nomEve', 'description', 'prix', 'disponibilite']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('evenements', 'public');
        }

        Evenement::create($data);

        return redirect()->route('evenements.index')->with('success', 'Événement ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $evenement = Evenement::findOrFail($id);
        
        try {
            $validatedData = $request->validate([
                'nomEve' => 'required|string|max:255',
                'description' => 'required|string',
                'prix' => 'required|integer',
                'disponibilite' => 'required|boolean',
                'image' => 'nullable|image|max:2048',
            ]);
        
            $data = $request->only(['nomEve', 'description', 'prix', 'disponibilite']);
        
            if ($request->hasFile('image')) {
                if ($evenement->image) {
                    Storage::disk('public')->delete($evenement->image);
                }
                $data['image'] = $request->file('image')->store('evenements', 'public');
            }
        
            $evenement->update($data);
        
            // Optionnel : message de succès
            return redirect()->back()->with('success', 'Événement mis à jour avec succès.');
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Gestion des erreurs de validation
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            // Gestion des autres erreurs (ex: problème stockage, base de données, etc.)
            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de la mise à jour de l\'événement : ' . $e->getMessage())
                ->withInput();
        }
        

        return redirect()->back()->with('success', 'Événement modifié avec succès.');
    }

    public function destroy($id)
    {
        $evenement = Evenement::findOrFail($id);
        if ($evenement->image) {
            Storage::disk('public')->delete($evenement->image);
        }
        $evenement->delete();

        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès.');
    }
}
