<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\UserEnrollmentManagement;
use App\Services\Users\EnrollmentManagement;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('enrollmentManagement', function($app) {
            return new EnrollmentManagement(
                $app->make(UserEnrollmentManagement::class)
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}