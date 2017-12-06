<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Post' => 'App\Policies\PostPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();

        // acl权限 判断当前的class_mate是不是用户的同学
        // Gate::define("show-classmate", function($user, $class_mate){
        //     return $user->owns($class_mate);
        // });

        foreach($this->getPermission() as $permission) {
            Gate::define($permission->name, function(\App\User $user) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
    }


    public function getPermission()
    {
        // Model::with($relation_names) array|string 是relation name(就是Model内定义belongsToMany  belongsTo hasMany的方法的名字)

        return \App\Permission::with('roles')->get();
    }
}
