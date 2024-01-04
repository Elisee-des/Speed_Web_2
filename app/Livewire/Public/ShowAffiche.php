<?php

namespace App\Livewire\Public;

use App\Models\Affiche;
use Livewire\Component;
use Illuminate\Pagination\Paginator;

class ShowAffiche extends Component
{
    public $affiches;
    protected $listeners = ['reloadAffiches' => 'reloadAffiches'];

    public function mount()
    {
        $this->affiches = Affiche::with('user', 'semestre', 'universite', 'categorie')->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.public.show-affiche');
    }

    public function reloadAffiches($categorie_id, $query)
    {
        $this->affiches = Affiche::query()
            ->when($categorie_id, function ($queryBuilder) use ($categorie_id) {
                return $queryBuilder->whereHas('categorie', function ($subQuery) use ($categorie_id) {
                    $subQuery->where('id', $categorie_id);
                });
            })
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where(function ($subQuery) use ($query) {
                    $subQuery->where('nom', 'like', '%' . $query . '%')
                        ->orWhere('session', 'like', '%' . $query . '%')
                        ->orWhere('actif', 'like', '%' . $query . '%')
                        ->orWhereHas('categorie', function ($subQuery) use ($query) {
                            $subQuery->where('nom', 'like', '%' . $query . '%');
                        })
                        ->orWhereHas('user', function ($subQuery) use ($query) {
                            $subQuery->where('nom_prenom', 'like', '%' . $query . '%');
                        })
                        ->orWhereHas('semestre', function ($subQuery) use ($query) {
                            $subQuery->where('nom', 'like', '%' . $query . '%');
                        });
                });
            })
            ->orderBy('created_at', 'desc')
            ->get();
            // ->paginate(3);
    }
}
