<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Facility;
use App\Orchid\Layouts\FacilityListLayout;
use Orchid\Screen\Actions\Link;

class FacilityListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'facilities' => Facility::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Опции';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make("Создать Опцию")
                ->icon("pensil")
                ->route("platform.facility.edit")
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            FacilityListLayout::class,
        ];
    }
}
