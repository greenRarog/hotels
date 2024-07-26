<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Hotel;
use App\Orchid\Layouts\HotelListLayout;
use Orchid\Screen\Actions\Link;

class HotelListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            "hotels"    => Hotel::filters()->defaultSort("id")->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Отели';
    }

    public function description(): ?string
    {
        return "Все отели";
    }


    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make("Создать Отель")
                ->icon("pencil")
                ->route("platform.hotel.edit"),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            HotelListLayout::class,
        ];
    }
}
