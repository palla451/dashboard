<?php

namespace app\Providers;

use app\User;
use app\Policies\UserProfilePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'app\Model' => 'app\Policies\ModelPolicy',
        User::class => UserProfilePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-profile',function(User $user){
           return $user->role == 'admin';
        });
    }
}
