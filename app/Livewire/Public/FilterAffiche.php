<?php

namespace App\Livewire\Public;

use App\Models\Categorie;
use Livewire\Component;

class FilterAffiche extends Component
{
    public $categorie_id;
    public $query;

    public function render()
    {
        $categories = Categorie::get();
        return view(
            'livewire.public.filter-affiche',
            [
                'categories' => $categories
            ]
        );
    }

    public function filter()
    {
        $this->dispatch('reloadAffiches', $this->categorie_id, $this->query);
        // $this->dispatch('show-affiche', 'reloadAffiches', $this->categorie_id, $this->query);
    }
}
