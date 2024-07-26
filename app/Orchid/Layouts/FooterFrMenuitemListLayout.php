<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use App\Models\Menuitem;

class FooterFrMenuitemListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'footer_fc_menuitems';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make("alias")                
                ->render(function (Menuitem $footer_fc_menuitem) {
                    return Link::make($footer_fc_menuitem->alias)
                        ->route('platform.menuitem.edit', $footer_fc_menuitem);
                }),
        ];
    }
}
