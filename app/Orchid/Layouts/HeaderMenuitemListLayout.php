<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use App\Models\Menuitem;

class HeaderMenuitemListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'header_menuitems';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make("alias")                
                ->render(function (Menuitem $header_menuitem) {
                    return Link::make($header_menuitem->alias)
                        ->route('platform.menuitem.edit', $header_menuitem);
                }),
        ];
    }
}
