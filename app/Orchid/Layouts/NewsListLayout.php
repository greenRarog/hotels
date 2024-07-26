<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\News;
use Orchid\Screen\Actions\Link;

class NewsListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'news';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make("name", "Название Новости")
                ->render(function (News $news) {
                    return Link::make($news->name)
                        ->route("platform.news.edit", $news);
                }),
            TD::make("short_description", "Новость")
                ->render(function (News $news) {
                    return Link::make($news->short_description)
                        ->route("platform.news.edit", $news);
                }),
        ];
    }
}
