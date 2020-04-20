<?php
namespace App\Providers;


use Illuminate\Support\ServiceProvider;


class MyJobProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bindMethod(MyJob::class.'@handle', 
                function($job, $app)
        {
            return $job->handle();
        });
    }


    public function boot()
    {
    }
}