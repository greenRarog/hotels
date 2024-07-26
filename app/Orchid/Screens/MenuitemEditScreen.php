<?php

namespace App\Orchid\Screens;
use Orchid\Screen\Screen;
use App\Models\Menuitem;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;

class MenuitemEditScreen extends Screen
{
    public $menuitem;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Menuitem $menuitem): array
    {
        return [
            'menuitem' => $menuitem
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->menuitem->exists ? 'Изменить' : 'Новый пункт меню';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Новый пункт меню')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->menuitem->exists),
            Button::make('Изменить')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->menuitem->exists),
            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->menuitem->exists),
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make("menuitem.alias")
                    ->title("Название"),
                Input::make("menuitem.url")
                    ->title('Ссылка'),
                Input::make("menuitem.order")
                    ->type('number')
                    ->title("Сортировка"),
                Select::make('menuitem.location')
                    ->options([
                        'header'   => 'Верхнее меню',
                        'footer_1' => 'Левое нижнее меню',
                        'footer_2' => 'Правое нижнее меню',
                    ])
                    ->title('Расположение меню'),

            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->menuitem->fill($request->get('menuitem'))->save();
        Alert::info('Добавили пункт меню');
        return redirect()->route('platform.main');
    }

    public function remove()
    {
        $this->menuitem->delete();
        Alert::info('Удален');
        return redirect()->route('platform.main');
    }
}
