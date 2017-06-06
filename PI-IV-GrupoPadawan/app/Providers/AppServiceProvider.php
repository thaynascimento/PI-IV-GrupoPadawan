<?php

namespace App\Providers;

use App\Cargo;
use App\Localizacoe;
use App\Login;
use App\Usuario;
use App\Andare;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('usuarios.index', function($view){
            $usuarios = Usuario::get();
            $view->with('usuarios', $usuarios);
        });

        view()->composer('cargos.index', function($view){
            $cargos = Cargo::get();
            $view->with('cargos', $cargos);
        });

        view()->composer('localizacoes.index', function($view){
            $localizacoes = Localizacoe::get();
            $view->with('localizacoes', $localizacoes);
        });
777
        view()->composer('andares.index', function($view){
            $andares = Andare::get();
            $view->with('andares', $andares);
        });

        view()->composer('salas.index', function($view){
            $salas = Sala::get();
            $view->with('salas', $salas);
        });

        /*view()->composer('login.index', function($view){
            $login = Login::get();
            $view->with('login', $login);
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
