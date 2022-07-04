<?php

namespace Sty\Hutton\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd(__DIR__ . '/database/migrations/create_joiners_table.php.stub');

        // if ($this->app->runningInConsole()) {
        //     // Export the migration
        //     if (!class_exists('CreateJoinersTable')) {
        //         $this->publishes(
        //             [
        //                 __DIR__ .
        //                 '/../publishable/database/migrations/create_joiners_table.php.stub' => database_path(
        //                     'migrations/' .
        //                         date('Y_m_d_His', time()) .
        //                         'create_joiners_table.php'
        //                 ),
        //                 // you can add any number of migrations here
        //             ],
        //             'migrations'
        //         );
        //     }
        // }

        $this->loadMigrationsFrom(
            __DIR__ . '/../publishable/database/migrations',
            'migrations'
        );
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'Hutton');
    }

    public function register()
    {
    }
}
