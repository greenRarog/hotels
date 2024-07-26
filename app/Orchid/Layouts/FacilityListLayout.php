<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Facility;
use Orchid\Screen\Actions\Link;

class FacilityListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'facilities';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make("name", "Название")
                ->render(function (Facility $facility) {
                    return Link::make($facility->name)
                        ->route("platform.facility.edit", $facility);
                }),
        ];
    }
}
