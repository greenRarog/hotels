<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use App\Models\News;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Relation;
use App\Models\Hotel;

class NewsEditScreen extends Screen
{
    public $news;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(News $news): iterable
    {
        $news->load("attachment");
        return [
            'news'  => $news,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->news->exists ? "Редактировать" : "Создание Новости";
    }

    public function description(): ?string
    {
        return "Список Новостей";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make("Опубликовать")
                ->icon("pencil")
                ->method("createOrUpdate")
                ->canSee(!$this->news->exists),
            Button::make("Обновить")
                ->icon("note")
                ->method("createOrUpdate")
                ->canSee($this->news->exists),
            Button::make("Удалить")
                ->icon("trash")
                ->method("remove")
                ->canSee($this->news->exists),
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
            Layout::rows([
                Input::make("news.name")
                    ->title("Название"),
                TextArea::make("news.short_description")
                    ->title("Описание для превью"),
                Relation::make("news.hotel_id")
                    ->fromModel(Hotel::class, "name")
                    ->title("Отель")
                    ->help("Отель к которому относится эта Новость"),
                Cropper::make("news.miniature")
                    ->title("Миниатюра для отображения на Главной")
                    ->width(354)
                    ->height(300)
                    ->targetId(),
                Upload::make("news.attachment")
                    ->title("Галереия картинок"),
            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->news->fill($request->get("news"))->save();
        $this->news->attachment()->syncWithoutDetaching(
            $request->input("news.attachment", [])
        );
        Alert::info("Успешно добавили Новость!");
        return redirect()->route("platform.news_list.list");
    }

}
