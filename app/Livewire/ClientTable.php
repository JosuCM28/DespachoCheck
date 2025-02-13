<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Regime;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Traits\WithExport; 

final class ClientTable extends PowerGridComponent
{
    public string $tableName = 'client-table-h66d7c-table';
    use WithExport; 
    public int $counter = 0;
    public function __mount(int $counter): void
    {
        $this->counter = $counter;
    }
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
        if ($this->counter === 0) {
            return Client::query()
                ->with('regime') // Cargar la relación 'regime'
                ->addSelect([
                    'regime_title' => Regime::select('title') // Traer solo el 'title' de la relación 'regime'
                        ->whereColumn('regimes.id', 'clients.regime_id')
                        ->limit(1) // Limit 1 por seguridad
                ]);
        } else {
            return Client::query()
                ->where('counter_id', $this->counter)
                ->with('regime') // Cargar la relación 'regime'
                ->addSelect([
                    'regime_title' => Regime::select('title') // Traer solo el 'title' de la relación 'regime'
                        ->whereColumn('regimes.id', 'clients.regime_id')
                        ->limit(1) // Limit 1 por seguridad
                ]);
        }
    }

    public function relationSearch(): array
    {
        return [
            'regime' => ['title']
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('regime_id')
            ->add('status')
            ->add('phone')
            ->add('full_name')
            ->add('email')
            ->add('address')
            ->add('rfc')
            ->add('curp')
            ->add('city')
            ->add('state')
            ->add('cp')
            ->add('nss')
            ->add('idse')
            ->add('sipare')
            ->add('usuariouno')
            ->add('usuariodos')
            ->add('is_active', fn($item) => $item->status === 'active' ? true : false)
        ;
    }

    public function columns(): array
    {
        return [


            Column::make('Nombre Completo', 'full_name')
            ->sortable()
            ->searchable(),
            

            Column::make('CURP', 'curp')
                ->sortable()
                ->searchable(),

            Column::make('RFC', 'rfc')
                ->sortable()
                ->searchable(),

            Column::make('siec', '#')
                ->sortable()
                ->searchable(),

            Column::make('UsuarioIdse', '#')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('ContraseñaIdse', '#')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('UsuarioSipare', '#')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('ContraseñaSipare', '#')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('CP', 'cp')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Ciudad', 'city')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Estado', 'state')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('NSS', 'nss')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Estatus', 'status')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Régimen', 'regime_title')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Direccion', 'address')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Correo', 'email')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),

            Column::make('Telefono', 'phone')
                ->sortable()
                ->hidden(isHidden:true, isForceHidden:false)
                ->searchable(),
                
                
            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::select('regime_title', 'regime_id')
                ->dataSource(Regime::all())
                ->optionLabel('title')
                ->optionValue('id'),

            Filter::select('status', 'status')
                ->dataSource(collect([
                    ['value' => 'active', 'label' => 'Active'],
                    ['value' => 'inactive', 'label' => 'Inactive']
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

    public function actions(Client $row): array
    {
        return [
            Button::add('edit')
                ->slot('<i class="fa-regular fa-eye" style="color: #306958;"></i>')
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
