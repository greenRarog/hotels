<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Review;
use Orchid\Screen\Actions\Link;


class ReviewListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'reviews';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make("name", "Имя автора")
                ->render(function (Review $review) {
                    return Link::make($review->name)
                        ->route("platform.review.edit", $review);
                }),
            TD::make("content", "Отзыв")
                ->render(function (Review $review) {
                    return Link::make($review->content)
                        ->route("platform.review.edit", $review);
                }),
        ];
    }
}
