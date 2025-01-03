<?php

namespace App\Livewire;

use App\Models\Receipt;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Traits\WithExport; 
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use App\Models\Counter;
use App\Models\Client;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
final class ReceiptTable extends PowerGridComponent
{
    public string $tableName = 'receipt-table-2gepz9-table';
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
                ->type( Exportable::TYPE_XLS, Exportable::TYPE_CSV),
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
        return Receipt::query()
            ->with('counter', 'client', 'category')
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
            ->add('id')
            ->add('counter_id')
            ->add('client_id')
            ->add('category_id')
            ->add('identificator')
            ->add('pay_method')
            ->add('mount')
            ->add('payment_date_formatted', fn(Receipt $model) => Carbon::parse($model->payment_date)->format('d/m/Y H:i:s'))
            ->add('status')
            ->add('concept')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [

            Column::add()
                ->title('Contador')
                ->field('counter_full_name')
                ->sortable()
                ->hidden(isHidden: true, isForceHidden: false)
                ->searchable(),

            Column::add()
                ->title('Cliente')
                ->field('client_full_name')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('Categoría')
                ->field('category_name')
                ->sortable()
                ->searchable(),


            Column::make('Metodo de Pago', 'pay_method')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Monto', 'mount')
                ->sortable()
                ->searchable(),



            Column::make('Estado', 'status')
                ->sortable()
                ->searchable(),

            Column::make('Concepto', 'concept')
                ->sortable()
                ->searchable(),

            Column::make('Fecha de Pago', 'payment_date_formatted', 'payment_date')
                ->sortable()
                ->searchable()
                ->hidden(isHidden:true, isForceHidden:false),

            Column::make('Fecha de creación', 'created_at')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('payment_date'),
            Filter::select('category_name', 'category_id')
                ->dataSource(Category::all())
                ->optionLabel('name')
                ->optionValue('id'),
                Filter::select('receipt_status', 'status')
                ->dataSource(Receipt::all())
                ->optionLabel('Estado')
                ->optionValue('id'),
                Filter::select('status', 'status')
                ->dataSource(collect([
                    ['value' => 'paid', 'label' => 'Pagado'],
                    ['value' => 'pending', 'label' => 'Pendiente'],
                    ['value' => 'canceled', 'label' => 'Cancelado']
                ]))
                ->optionLabel('label')
                ->optionValue('value'),
                Filter::select('receipt_pay_method', 'pay_method')
                ->dataSource(Receipt::all())
                ->optionLabel('Metodo de pago')
                ->optionValue('id'),
                Filter::select('pay_method', 'pay_method')
                ->dataSource(collect([
                    ['value' => 'cash', 'label' => 'Efectivo'],
                    ['value' => 'cheque', 'label' => 'Cheque'],
                    ['value' => 'transfer', 'label' => 'Transferencia Bancaria']
                ]))
                ->optionLabel('label')
                ->optionValue('value'),
                

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
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
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
