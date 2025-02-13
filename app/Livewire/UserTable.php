<?php

namespace App\Livewire;

use App\Models\Receipt;
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
use Illuminate\Support\Facades\Auth;
use App\Models\Counter;
use App\Models\Client;
use App\Models\Category;
final class UserTable extends PowerGridComponent
{
    public string $tableName = 'user-table-lhx1j4-table';

    public function __construct()
    {
        $this->user = Auth::id();
    }
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
                ->showSearchInput()
                ->showToggleColumns(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),

        ];
    }

    public function datasource(): Builder
    {
        return Receipt::query()
    ->with(['counter', 'client', 'category']) // Cargar relaciones
    ->where('client_id', function ($query) {
        $query->select('id')
              ->from('clients')
              ->where('user_id', Auth::id()) // Filtrar por el usuario autenticado
              ->limit(1);
    })
    ->addSelect([
        'counter_full_name' => Counter::select('full_name')
            ->whereColumn('counters.id', 'receipts.counter_id')
            ->limit(1),
        'client_full_name' => Client::select('full_name')
            ->whereColumn('clients.id', 'receipts.client_id')
            ->limit(1),
        'category_name' => Category::select('name')
            ->whereColumn('categories.id', 'receipts.category_id')
            ->limit(1),
    ]);



    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('category_id')
            ->add('pay_method')
            ->add('mount')
            ->add('payment_date_formatted', fn(Receipt $model) => Carbon::parse($model->payment_date)->format('d/m/Y H:i:s'))
            ->add('status')
            ->add('concept');
    }

    public function columns(): array
    {
        return [

            Column::add()
                ->title('Categoría')
                ->field('category_name')
                ->sortable()
                ->searchable(),


            Column::make('Metodo de Pago', 'pay_method')
                ->sortable()
                ->searchable(),

            Column::make('Monto', 'mount')
                ->sortable()
                ->searchable(),

            Column::make('Fecha de pago', 'payment_date_formatted', 'payment_date')
                ->sortable(),

            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),

            Column::make('Concepto', 'concept')
                ->sortable()
                ->searchable(),

            Column::action('Descargar')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('payment_date'),


        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Receipt $row): array
    {
        return [
            Button::add('show')
            ->slot('<i class="icon-[material-symbols--download-rounded] flex" style="color: #2ecc71; font-size: 24px;"></i>')
            ->id()
            ->class('ml-7') // Clases para centrar
            ->route('downloadPDF', ['id' => $row->id])
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
