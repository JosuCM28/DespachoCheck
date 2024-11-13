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
use PowerComponents\LivewirePowerGrid\Traits\WithExport; 
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable; 

final class CounterTable extends PowerGridComponent
{
    public string $tableName = 'counter-table-di8mtw-table';
    
    use WithExport; 
    
    public function setUp(): array
    {
        
        $this->showCheckBox();
        
        return [
            PowerGrid::exportable('export')
                ->striped()
                ->columnWidth([
                    2 => 30,
                ])
                ->type(Exportable::TYPE_XLS),
            PowerGrid::header()
                ->showToggleColumns()
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

            Column::make('Telefono', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('RFC', 'rfc')
                ->sortable()
                ->searchable(),

            Column::make('CURP', 'curp')
                ->sortable()
                ->searchable(),

            Column::make('Ciudad', 'city')
                ->sortable()
                ->searchable(),

            Column::make('Estado', 'state')
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

            Column::action('Accion')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('curp')->placeholder('Curp'),
            Filter::select('regime_title', 'regime_id')
            ->dataSource(Regime::all())
            ->optionLabel('title')
            ->optionValue('id'),
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
                ->slot('Ver')
                ->id()
                ->class('bg-blue-500 text-white font-bold py-2 px-2 rounded')
                ->route('counter.show', ['counter' => $row->id]),
                #->dispatch('counter.show', ['counter' => $row->id]),
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
