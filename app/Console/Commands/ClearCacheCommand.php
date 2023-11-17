<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCacheCommand extends Command
{
    protected $signature = 'clearcache'; // Signature de la commande

    protected $description = 'Efface le cache, l\'optimisation, et les routes de l\'application';

    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('optimize:clear');
        $this->call('route:clear');
        $this->call('route:cache');
        $this->call('view:clear');

        $this->info('Nettoyer et optimiser avec succès!');
    }
}
