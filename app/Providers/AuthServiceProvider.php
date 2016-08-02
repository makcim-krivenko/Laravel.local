<?php

/*
 * Файл настройки прав доступа
 */

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // определение права доступа для manager
        $gate->define('manager', function ($user){
            return $user->user_type=='5';});

        // определение права доступа для admin
        $gate->define('admin', function ($user){
            return $user->user_type=='10';});

        // определение права доступа для superadmin
        $gate->define('superadmin', function ($user){
            return $user->user_type=='100';});

    }
}
