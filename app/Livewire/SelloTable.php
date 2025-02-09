<?php

namespace App\Livewire;

use App\Models\Credential;
use App\Models\Client;
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

final class SelloTable extends PowerGridComponent
{
    public string $tableName = 'sello-table-kyyfkb-table';
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
                ->showSearchInput()
                ->showToggleColumns(),

            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Credential::query()
            ->with([
                'client' => function ($query) {
                    $query->where(function ($q) {
                        $q->whereNull('user_id')
                            ->orWhere('user_id', '!=', 1);
                    });
                }
            ])
            ->whereHas('client', function ($query) {
                $query->where(function ($q) {
                    $q->whereNull('user_id')
                        ->orWhere('user_id', '!=', 1);
                });
            })
            ->addSelect([
                'client_full_name' => Client::select('full_name')
                    ->whereColumn('clients.id', 'credentials.client_id')
                    ->where(function ($q) {
                        $q->whereNull('clients.user_id')
                            ->orWhere('clients.user_id', '!=', 1);
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
            ->add('iniciosello_formatted', fn(Credential $model) => Carbon::parse($model->iniciosello)->format('d/m/Y'))
            ->add('finsello_formatted', fn(Credential $model) => Carbon::parse($model->finsello)->format('d/m/Y'))
            ->add('days_remaining', function (Credential $model) {
                $currentDate = now(); // Fecha actual
                $finsello = Carbon::parse($model->finsello);


                return number_format($currentDate->diffInDays($finsello, false), 3);// `false` para obtener valores negativos
            })
            ->add('status', function (Credential $model) {
                $currentDate = now(); // Fecha actual
                $finfiel = Carbon::parse($model->finfiel); // Fecha de fin
                $diferenciaDias = $currentDate->diffInDays($finfiel, false);


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

            Column::make('Fecha de vencimiento', 'finsello_formatted', 'finfiel')
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
