<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {

            $items = [
                [
                    'text' => 'Продукты',
                    'url' => route('products.index'),
                    'icon' => 'fas fa-fw fa-user',
                ],
                [
                    'text' => 'Категории',
                    'url' => route('categories.index'),
                    'icon' => 'fas fa-fw fa-user',
                ],


            ];

            $event->menu->add(...$items);

        });
    }
}
