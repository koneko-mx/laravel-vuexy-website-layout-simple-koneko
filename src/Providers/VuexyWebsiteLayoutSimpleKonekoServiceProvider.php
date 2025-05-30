<?php

declare(strict_types=1);

namespace Koneko\VuexyWebsiteLayoutSimpleKoneko\Providers;

use Illuminate\Support\ServiceProvider;
use Koneko\VuexyAdmin\Support\Traits\Modules\KonekoModuleBoots;

class VuexyWebsiteLayoutSimpleKonekoServiceProvider extends ServiceProvider
{
    use KonekoModuleBoots;

    public function register(): void
    {
        $this->registerKonekoModule(dirname(__DIR__));
    }
}
