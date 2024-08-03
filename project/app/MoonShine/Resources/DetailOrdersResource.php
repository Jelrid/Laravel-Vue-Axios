<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailOrders;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;

/**
 * @extends ModelResource<DetailOrders>
 */
class DetailOrdersResource extends ModelResource
{
    protected string $model = DetailOrders::class;

    protected string $title = 'DetailOrders';

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
                Text::make('id_заказа','orders_id')
            ]),
        ];
    }

    /**
     * @param DetailOrders $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
