<?php

namespace Themysticgeek\LarpOrgRolesLocal;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Themysticgeek\LarpOrgRolesLocal\Commands\LarpOrgRolesLocalCommand;

class LarpOrgRolesLocalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larp-org-roles-local')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larp-org-roles-local_table')
            ->hasCommand(LarpOrgRolesLocalCommand::class);
    }
}
