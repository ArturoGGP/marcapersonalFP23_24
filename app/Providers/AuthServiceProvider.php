<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Curriculo;
use App\Models\User;
use App\Policies\CurriculoPolicy;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Curriculo::class => CurriculoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
                $this->registerPolicies();
                Gate::define('update-curriculo', function (User $user, Curriculo $curriculo) {
                return $user->id === $curriculo->user_id;
                });
    }
}
