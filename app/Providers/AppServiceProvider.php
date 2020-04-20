<?php

namespace App\Providers;

use App\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $countContacts = Contact::get()->count();
        view()->share('allContacts', $countContacts);
    }
}
