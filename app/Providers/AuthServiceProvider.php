<?php

namespace App\Providers;

use App\Models\Acts\Act;
use App\Models\Feels\Feel;
use App\Models\Posts\Post;
use App\Models\Posts\TagUser;
use App\Policies\ActPolicy;
use App\Policies\FeelPolicy;
use App\Policies\PostPolicy;
use App\Policies\Posts\TagUserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
        Feel::class => FeelPolicy::class,
        Act::class => ActPolicy::class,
        TagUser::class => TagUserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
