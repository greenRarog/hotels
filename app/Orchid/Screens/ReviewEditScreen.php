<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Review;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;

class ReviewEditScreen extends Screen
{
    public $review;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Review $review): array
    {
        return [
            'review' => $review,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->review->extsts ? "Редактировать Отзыв" : "Новый Отзыв";
    }
    public function description(): ?string
    {
        return "Отзывы";
    }


    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make("Опубликовать")
                ->icon("pencil")
                ->method("createOrUpdate")
                ->canSee(!$this->review->exists),
            Button::make("Редактировать")
                ->icon("note")
                ->method("createOrUpdate")
                ->canSee($this->review->exists),
            Button::make("Удалить")
                ->icon("trash")
                ->method("remove")
                ->canSee("$this->review->exists"),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make("review.name")
                    ->title("Имя автора"),
                Quill::make("review.content")
                    ->title("Отзыв"),
                Relation::make("review.hotel_id")
                    ->title("Отель")
                    ->fromModel(Hotel::class, 'name')
            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->review->fill($request->get("review"))->save();
        Alert::info("Отзыв добавлен!");
        return redirect()->route("platform.review.list");
    }
    public function remove()
    {
        $this->review->delete();
        Alert:info("Отзыв удален");
        return redirect()->route("platform.review.list");
    }
}
