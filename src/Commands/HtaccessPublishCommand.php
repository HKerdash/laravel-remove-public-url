<?php

namespace HassanKerdash\Laravel\RemovePublicUrl\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class HtaccessPublishCommand extends Command
{
    protected $signature = 'public:url';

    protected $description = 'Publish .htaccess to remove public from url.';

    public function handle(): void
    {
        $htaccessSource = __DIR__ . '/htaccess';
        $htaccessDestination = base_path('.htaccess');

        if (File::exists($htaccessDestination)) {
            $this->info('.htaccess file already exists in the project root.');
            return;
        }

        File::copy($htaccessSource, $htaccessDestination);

        $this->info('Published .htaccess file to project root.');
    }
}
