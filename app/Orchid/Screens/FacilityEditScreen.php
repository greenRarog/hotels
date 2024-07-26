<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Facility;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;

class FacilityEditScreen extends Screen
{
    public $facility;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Facility $facility): array
    {
        return [
            "facility" => $facility,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->facility->exists ? "Изменить Опцию" : "Создать новую Опцию";
    }

    public function description(): ?string
    {
        return "Опции";
    }
    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make("Создать Опцию")
                ->icon("pencil")
                ->method("createOrUpdate")
                ->canSee(!$this->facility->exists),
            Button::make("Изменить")
                ->icon("note")
                ->method("createOrUpdate")
                ->canSee($this->facility->exists)


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
                Input::make("facility.name")
                    ->title("Название"),
                Input::make("facility.icon")
                    ->title("Иконка")
                    ->help("Тут надо будет сделать радио с возможными вариантами"),
                Input::make("facility.service_hours")
                    ->title("Время работы")
                    ->help("Указать в какое время доступна Опция"),
                TextArea::make("facility.description")
                    ->title("Описание Опции"),
            ])
        ];
    }
    public function createOrUpdate(Request $request)
    {
        $this->facility->fill($request->get("facility"))->save();
        Alert::info("Опция успешно добавлена!");
        return redirect()->route("platform.facility.list");
    }
    public function remove()
    {
        $this->facility->delete();
        Alert::info("Опция была удалена!");
        return redirect()->route("platform.facility.list");
    }
}
