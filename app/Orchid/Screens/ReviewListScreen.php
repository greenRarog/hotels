<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Review;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\ReviewListLayout;

class ReviewListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'reviews' => Review::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Отзывы';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make("Новый Отзыв")
                ->icon("pensil")
                ->route("platform.review.edit"),
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
            ReviewListLayout::class,
        ];
    }
}
