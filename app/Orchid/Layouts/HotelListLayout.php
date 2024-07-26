<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Hotel;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;

class HotelListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'hotels';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make("name", "Название")
                ->sort()
                ->filter(Input::make())
                ->render(function (Hotel $hotel) {
                    return Link::make($hotel->name)
                        ->route("platform.hotel.edit", $hotel);
                }),
            TD::make("created_at", "Создан")
                ->sort(),
            TD::make("updated_at", "Изменен")
                ->sort(),
        ];
    }
}
