<?php

namespace Themysticgeek\LarpOrgRolesLocal\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Themysticgeek\LarpOrgRolesLocal\LarpOrgRolesLocalServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Themysticgeek\\LarpOrgRolesLocal\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LarpOrgRolesLocalServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_larp-org-roles-local_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
