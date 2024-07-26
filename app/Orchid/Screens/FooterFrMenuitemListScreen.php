<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Menuitem;
use App\Orchid\Layouts\FooterFrMenuitemListLayout;
use Orchid\Screen\Actions\Link;

class FooterFrMenuitemListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'footer_fc_menuitems' => Menuitem::where("location", '=', 'footer_1')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Пункт меню';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make("Новый")
                ->icon("pencil")
                ->route("platform.menuitem.edit")
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
            FooterFrMenuitemListLayout::class,
        ];
    }
}
