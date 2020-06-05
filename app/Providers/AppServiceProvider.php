<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Code\Validator\Cpf;   // Importando validador Cpf.
use Code\Validator\Cnpj; // Importando validador Cnpj.

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
        \Validator::extend('document_number', function($attribute,$value,$parameters,$validator){
            $documentValidator = $parameters[0] =='cpf' ? new Cpf(): new Cnpj();
            return $documentValidator->isValid($value);
         });
    }
}
