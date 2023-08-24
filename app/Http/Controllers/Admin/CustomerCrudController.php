<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Requests\CustomerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CustomerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CustomerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Customer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/customer');
        CRUD::setEntityNameStrings('customer', 'customers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
        CRUD::column('name')
            ->type('text')
            ->label('Full Name');
        CRUD::column('idtype1')
            ->type('text')
            ->label('ID Type');
        CRUD::column('id1')
            ->type('text')
            ->label('ID Number');
        CRUD::column('email')
            ->type('email')
            ->label('Email Address');
    }

    protected function setupShowOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
        CRUD::column('name')
            ->type('text')
            ->label('Full Name');
        CRUD::column('idtype1')
            ->type('text')
            ->label('ID Type');
        CRUD::column('id1')
            ->type('text')
            ->label('ID Number');
        CRUD::column('email')
            ->type('email')
            ->label('Email Address');
        CRUD::column('dob')
            ->type('date')
            ->label('Date of Birth');
        CRUD::column('add_line1')
            ->type('text')
            ->label('Address Line 1');    
        CRUD::column('add_line2')
            ->type('text')
            ->label('Address Line 2'); 
        CRUD::column('add_line3')
            ->type('text')
            ->label('Address Line 3');
        CRUD::column('add_line4')
            ->type('text')
            ->label('Address Line 4');
        CRUD::column('add_postcode')
            ->type('text')
            ->label('Postcode');
        CRUD::column('add_state')
            ->type('text')
            ->label('State'); 
        CRUD::column('add_country')
            ->type('text')
            ->label('Country');       
    }
    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CustomerRequest::class);
        
        //CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
         CRUD::field('name')
            ->type('text')
            ->attributes([
                'size'=>100,
                'maxlength'=>100
            ])
            ->label('Full Name');
         CRUD::field('idtype1')
            ->type('radio')
            ->options(['New IC'=>'New IC','Old IC'=>'Old IC','Passport Number'=>'Passport Number'])
            ->inline(true)
            ->label('ID Type');
         CRUD::field('id1')
            ->type('text')
            ->attributes([
                'size'=>20
            ])
            ->label('ID Number');
         CRUD::field('email')
            ->type('email')
            ->attributes([
                'size'=>100
            ])
            ->label('Email Address');
         CRUD::field('dob')
            ->type('date')
            ->attributes([
                'size'=>20
            ])
            ->label('Date of Birth');
        CRUD::field('add_line1')
            ->type('text')
            ->attributes([
                'size'=>80
            ])
            ->label('Address Line 1');
        CRUD::field('add_line2')
            ->type('text')
            ->attributes([
                'size'=>80
            ])
            ->label('Address Line 2');
        CRUD::field('add_line3')
            ->type('text')
            ->attributes([
                'size'=>80
            ])
            ->label('Address Line 3');
        CRUD::field('add_line4')
            ->type('text')
            ->attributes([
                'size'=>80
            ])
            ->label('Address Line 4');
        CRUD::field('add_postcode')
            ->type('text')
            ->attributes([
                'size'=>5
            ])
            ->label('Postcode');
        CRUD::field('add_state')
            ->type('select_from_array')
            ->options([
                'kualalumpur'=>'Kuala Lumpur',
                'selangor'=>'Selangor',
                'perak'=>'Perak',
                'perlis'=>'Peris',
                'johor'=>'Johor',
                'melaka'=>'Melaka',
                'sembilan'=>'Sembilan',
                'pahang'=>'Pahang',
                'sabah'=>'Sabah',
                'sarawak'=>'Sarawak'])
            ->attributes([
                    'style'=>'width:150px'
                ])
            ->inline(true)
            ->label('State');
        CRUD::field('add_country')
            ->type('text')
            ->attributes([
                'size'=>50
            ])
            ->label('Country');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
