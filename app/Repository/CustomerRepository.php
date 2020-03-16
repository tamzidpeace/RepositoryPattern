<?php

namespace App\Repository;

use App\Customer;

class CustomerRepository {

    public function all() {
        return  Customer::all();        
    }
}