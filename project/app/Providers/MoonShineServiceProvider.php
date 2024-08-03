<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\DetailOrders;
use App\Models\Orders;
use App\MoonShine\Resources\DetailOrdersResource;
use App\MoonShine\Resources\OrdersResource;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable(),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable(),
            ])->translatable(),
            MenuGroup::make('Заказы', [
                MenuItem::make('Заказы', new OrdersResource)->badge(fn() => Orders::query()->count()),
                MenuItem::make('Детали заказов', new DetailOrdersResource)->badge(fn() => DetailOrders::query()->count())

            ])->icon('heroicons.banknotes')
        ];
    }

    protected function theme(): array
    {
        return [];
    }
}