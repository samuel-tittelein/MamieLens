<?php

namespace App\Providers;

use App\Models\Recette;
use App\Models\User;
use App\Policies\RecettePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Recette::class => RecettePolicy::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Gate::define('delete-tache', function (User $user, Recette $recette) {
            return $user->id === $recette->user_id;
        });
    }


}
