<?php

namespace App\Livewire;

use App\Models\Credential;
use App\Models\Client;
use App\Models\Receipt;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class FielTable extends PowerGridComponent
{
    public string $tableName = 'fiel-table-cfxm7t-table';
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
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),

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
        return Credential::query()
        ->with(['client' => function ($query) {
            $query->where(function ($q) {
                $q->whereNull('user_id') // Permitir si user_id es NULL
                  ->orWhere('user_id', '!=', 1); // Permitir si es diferente de 1
            });
        }])
        ->whereHas('client', function ($query) {
            $query->where(function ($q) {
                $q->whereNull('user_id') // Permitir si user_id es NULL
                  ->orWhere('user_id', '!=', 1); // Permitir si es diferente de 1
            });
        })
        ->addSelect([
            'client_full_name' => Client::select('full_name')
                ->whereColumn('clients.id', 'credentials.client_id')
                ->where(function ($q) {
                    $q->whereNull('clients.user_id') // Permitir si user_id es NULL
                      ->orWhere('clients.user_id', '!=', 1); // Permitir si es diferente de 1
                })
                ->limit(1),
        ]);
    }

    public function relationSearch(): array
    {
        return [
            'client' => ['full_name'],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('client_id')
            ->add('iniciofiel_formatted', fn(Credential $model) => Carbon::parse($model->iniciofiel)->format('d/m/Y'))
            ->add('finfiel_formatted', fn(Credential $model) => Carbon::parse($model->finfiel)->format('d/m/Y'))
            ->add('days_remaining', function (Credential $model) {
                $currentDate = now(); // Fecha actual
                $finfiel = Carbon::parse($model->finfiel); // Fecha de fin
    
                // Si la fecha actual está después de `finfiel`, retorna negativo
                return number_format($currentDate->diffInDays($finfiel, false), 2);
            })
            ->add('status', function (Credential $model) {
                $currentDate = now(); // Fecha actual
                $finfiel = Carbon::parse($model->finfiel); // Fecha de fin
                $diferenciaDias = ($currentDate->diffInDays($finfiel, false));


                switch (true) {
                    case $diferenciaDias <= 0:
                        return '<span class="bg-red-200 p-2 rounded">Expirado</span>';
                    case $diferenciaDias <= 7:
                        return '<span class="bg-orange-200 p-2 rounded">Pronto expira</span>';
                    default:
                        return '<span class="bg-green-200 p-2 rounded">Vigente</span>';
                }
            });
    }

    public function columns(): array
    {
        return [
            Column::add()
                ->title('Cliente')
                ->field('client_full_name')
                ->sortable()
                ->searchable(),

            Column::make('Fecha de inicio', 'iniciofiel_formatted', 'iniciofiel')
                ->sortable(),

            Column::make('Fecha de vencimiento', 'finfiel_formatted', 'finfiel')
                ->sortable(),
                
                Column::make('Diferencia en Días', 'days_remaining', 'days'),

            Column::make('Status', 'status')
                ->searchable(),




            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datepicker('iniciofiel'),
            Filter::datepicker('finfiel'),
            Filter::datepicker('iniciosello'),
            Filter::datepicker('finsello'),
            
            

        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Credential $row): array
    {
        return [
            Button::add('show')
                ->slot('<i class="fa-regular fa-eye" style="color: #007bff;"></i>')
                ->id()
                ->class('')
                ->route('client.show', ['client' => $row->id]),

                Button::add('edit')
                ->slot('<i class="icon-[typcn--edit]" style="color:rgb(166, 145, 63);"></i>')
                ->id()
                ->class('')
                ->route('client.edit', ['client' => $row->id]),
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
