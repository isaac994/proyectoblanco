<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RebuildAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:rebuild';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean and rebuild Vite assets with HTTPS configuration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Cleaning old assets...');

        // Remove old build directory
        if (File::exists(public_path('build'))) {
            File::deleteDirectory(public_path('build'));
            $this->info('Old build directory removed.');
        }

        $this->info('Building assets with HTTPS configuration...');

        // Set production environment for build
        putenv('NODE_ENV=production');
        putenv('VITE_HTTPS=true');
        putenv('VITE_ASSET_URL=https://proyectoblanco-production.up.railway.app');

        // Run npm build
        $this->info('Running npm run build...');
        exec('npm run build', $output, $returnCode);

        if ($returnCode === 0) {
            $this->info('Assets built successfully with HTTPS configuration!');
        } else {
            $this->error('Failed to build assets. Check the output above for errors.');
        }

        return $returnCode;
    }
}
