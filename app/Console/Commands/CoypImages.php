<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CoypImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:coyp-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Limpia la carpeta images y luego copia las imágenes de escudos y jugadores';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Acceder al disco 'public' para trabajar con las imágenes almacenadas
        $files = Storage::disk('public')->files('images');

        // Borrar los archivos existentes en la carpeta images
        foreach ($files as $file) {
            Storage::disk('public')->delete($file);
        }

        // Directorios de origen y destino
        $source = public_path('img/escudos'); // Directorio de origen
        $destination = storage_path('app/public/images'); // Directorio de destino

        // Verificar si el directorio de destino existe
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0775, true);
        }

        // Obtener todos los archivos del directorio de origen
        $files = File::files($source);

        // Copiar cada archivo al directorio de destino
        foreach ($files as $file) {
            $fileName = $file->getFilename();
            File::copy($file->getRealPath(), $destination . '/' . $fileName);
        }

        $this->info('Las imágenes se han copiado correctamente.');
    }
}
