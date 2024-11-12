<?php

namespace App\Livewire;

use App\Models\Counter;
use App\Models\Regime;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class CounterTable extends PowerGridComponent
{
    public string $tableName = 'counter-table-di8mtw-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Counter::query()
            ->with('regime') // Cargar la relación 'regime'
            ->addSelect([      
                'regime_title' => Regime::select('title') // Traer solo el 'title' de la relación 'regime'
                    ->whereColumn('regimes.id', 'counters.regime_id')
                    ->limit(1) // Limit 1 por seguridad
            ]);
    }
    

    public function relationSearch(): array
    {
        return [
            'regime' => ['title'],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('name')
            ->add('full_name')
            ->add('last_name')
            ->add('phone')
            ->add('rfc')
            ->add('curp')
            ->add('city')
            ->add('state')
            ->add('cp')
            ->add('regime_id')
            ->add('nss');
    }

    public function columns(): array
    {
        return [

            Column::make('Nombre Completo', 'full_name')
            ->sortable()
            ->searchable(),

            Column::make('Phone', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('Rfc', 'rfc')
                ->sortable()
                ->searchable(),

            Column::make('Curp', 'curp')
                ->sortable()
                ->searchable(),

            Column::make('City', 'city')
                ->sortable()
                ->searchable(),

            Column::make('State', 'state')
                ->sortable()
                ->searchable(),

            Column::make('Cp', 'cp')
                ->sortable()
                ->searchable(),

            Column::make('Régimen', 'regime_title')
                ->sortable()
                ->searchable(),

            Column::make('Nss', 'nss')
                ->sortable()
                ->searchable(),

            Column::action('ACTION')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('curp')->placeholder('Curp'),
            
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Counter $row): array
    {
        return [
            Button::add('read')
                ->slot('Ver: '.$row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('read', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
    return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
