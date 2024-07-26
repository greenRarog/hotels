<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use App\Models\Menuitem;

class FooterScMenuitemListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'footer_sc_menuitems';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
                    TD::make("alias")                
                ->render(function (Menuitem $footer_sc_menuitems) {
                    return Link::make($footer_sc_menuitems->alias)
                        ->route('platform.menuitem.edit', $footer_sc_menuitems);
                }),
            ];
    }
}
