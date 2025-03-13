<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MigrateFreshWithSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:fresh-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Corre migrate:fresh y luego db:seed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ejecutar el comando migrate:fresh con --seed como parámetro
        Artisan::call('migrate:fresh --seed');
    }
}
