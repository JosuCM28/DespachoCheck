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
use PowerComponents\LivewirePowerGrid\Facades\Rule; 
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
        return [
            'counter' => ['full_name'],
            'client' => ['full_name'],
            'category' => ['name'],


        ];
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
                ->hidden(isHidden: true, isForceHidden: false)
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
                ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Fecha de creación', 'created_at')
                ->sortable()
                ->hidden(isHidden: true, isForceHidden: false)
                ->searchable(),

            Column::action('Acción')
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
                    ['value' => 'PAGADO', 'label' => 'Pagado'],
                    ['value' => 'PENDIENTE', 'label' => 'Pendiente'],
                    ['value' => 'CANCELADO', 'label' => 'Cancelado']
                ]))
                ->optionLabel('label')
                ->optionValue('value'),
            Filter::select('receipt_pay_method', 'pay_method')
                ->dataSource(Receipt::all())
                ->optionLabel('Metodo de pago')
                ->optionValue('id'),
            Filter::select('pay_method', 'pay_method')
                ->dataSource(collect([
                    ['value' => 'EFECTIVO', 'label' => 'Efectivo'],
                    ['value' => 'CHEQUE', 'label' => 'Cheque'],
                    ['value' => 'TRANSFERENCIA', 'label' => 'Transferencia Bancaria']
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
            Button::add('show')
                ->slot('<i class="fa-regular fa-eye" style="color: #007bff;"></i>')
                ->id()
                ->class('')
                ->route('receipt.show', ['identificator' => $row->id]),
            Button::add('edit')
                ->slot('<i class="icon-[typcn--edit]" style="color:rgb(166, 145, 63);"></i>')
                ->id()
                ->class('')
                ->route('receipt.edit', ['receipt' => $row->id])
                ,
            Button::add('show')
                ->slot('<i class="icon-[material-symbols--download-rounded]" style="color: #2ecc71;"></i>')
                ->id()
                ->class('')
                ->route('downloadPDF', ['id' => $row->id]),
            Button::add('show')
                ->slot('<i class="icon-[fa--send-o]" style="color: #e74c3c;"></i>')
                ->id()
                ->class('')
                ->confirmPrompt('¿Estas seguro que deseas enviarlo por correo?', 'Enviar')
                ->route('sendPDF', ['id' => $row->id]),

        ];
    }

    public function actionRules($row): array
{
    return [
        // Ocultar el botón 'edit' si el estado del recibo no es 'PENDIENTE'
        Rule::button('edit')
            ->when(fn($row) => $row->status !== 'PENDIENTE')
            ->hide(),
    ];
}
}
