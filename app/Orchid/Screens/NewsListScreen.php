<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\News;
use App\Orchid\Layouts\NewsListLayout;
use Orchid\Screen\Actions\Link;


class NewsListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "news" => News::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список Новостей';
    }

    public function description(): ?string
    {
        return "Все Новости";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make("Добавить Новость")
                ->icon("pencil")
                ->route("platform.news.edit")
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
            NewsListLayout::class,
        ];
    }
}
