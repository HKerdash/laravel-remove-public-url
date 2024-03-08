<?php

namespace HassanKerdash\Laravel\RemovePublicUrl\Providers;

use Illuminate\Support\ServiceProvider;
use HassanKerdash\Laravel\RemovePublicUrl\Commands\HtaccessPublishCommand;

class RemovePublicUrlServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(HtaccessPublishCommand::class);
    }
}
