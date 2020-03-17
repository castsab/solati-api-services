<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {

    public $storagePath = "../public/images";
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    public function saveCustomer(Request $request) {
        $this->validate($request, [
            'documentType' => 'required',
            'documentNumber' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'dateBirth' => 'required',
            'maritalStatus' => 'required'
        ]);

        $modelCustomer = new Customer();
        $modelCustomer->document_type = $request->documentType;
        $modelCustomer->document_number = $request->documentNumber;
        $modelCustomer->name = $request->name;
        $modelCustomer->last_name = $request->lastName;
        $modelCustomer->date_birth = $request->dateBirth;
        $modelCustomer->marital_status = $request->maritalStatus;
        
        $modelCustomer->save();

        return response()->json(['status' => 'success'], 200);
    }
    
    public function customers(Request $request) {
        $modelCustomer = new Customer();
        $customers = $modelCustomer->get();
        if (!empty($customers)) {
            return response()->json($customers, 200);
        }
    }

}
