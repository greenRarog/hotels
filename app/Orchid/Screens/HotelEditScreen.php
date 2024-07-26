<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;

class HotelEditScreen extends Screen
{

    public $hotel;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Hotel $hotel): array
    {
        return [
            "hotel" => $hotel,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->hotel->exists ? "Изменить Отель" : "Создать новый Отель";
    }

    public function description(): ?string
    {
        return "Отели";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make("Создать Отель")
                ->icon("pencil")
                ->method("createOrUpdate")
                ->canSee(!$this->hotel->exists),
            Button::make("Изменить")
                ->icon("note")
                ->method("createOrUpdate")
                ->canSee($this->hotel->exists),
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
                Input::make("hotel.name")
                    ->title("Название")                    
                    ->help("Наименование отеля"),
                Input::make("hotel.seo_h2")
                    ->title("Заголовок h2")
                    ->help("подходит для оптимизации под seo"),
                TextArea::make("hotel.short_description")
                    ->title("Краткое описание")
                    ->help("Краткое описание для вывода на Главную страницу")
            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->hotel->fill($request->get('hotel'))->save();
        Alert::info("Отель был успешно создан");
        return redirect()->route("platform.hotel.list");
    }
    public function remove()
    {
        $this->hotel->delete();
        Alert::info("Отель был успешно удален");
        return redirect()->route("platform.hotel.list");
    }
}
