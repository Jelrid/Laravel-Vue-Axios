<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Orders>
 */
class OrdersResource extends ModelResource
{
    protected string $model = Orders::class;

    protected string $title = 'Заказы';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название','title'),
                Text::make('Количество','quanity'),
                Text::make('Источник','source'),
                Text::make('Лазер','laser'),
                Text::make('Сварка','welding'),
                Text::make('Сборка','construct'),
                Text::make('Електро','electro'),
                Text::make('Индекс','index'),
            ]),
        ];
    }

    /**
     * @param Orders $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
