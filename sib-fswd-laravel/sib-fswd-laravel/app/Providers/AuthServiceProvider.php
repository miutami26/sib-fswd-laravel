<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User; // Impor model User

class AuthServiceProvider extends ServiceProvider
{
/**
* The policy mappings for the application.
*
* @var array<class-string, class-string>
    */
    protected $policies = [
    // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
    * Register any authentication / authorization services.
    *
    * @return void
    */
    public function boot()
    {
    $this->registerPolicies();

    // Tambahkan konfigurasi provider pengguna di sini
    $this->app['auth']->viaRequest('api', function ($request) {
    return User::where('api_token', $request->input('api_token'))->first();
    });
    }
    }
