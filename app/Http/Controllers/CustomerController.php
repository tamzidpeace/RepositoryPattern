<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Repository\CustomerRepository;

class CustomerController extends Controller
{
    private $cr;

    public function __contruct(CustomerRepository $cr) {
        $this->cr = $cr;
    }
    public function index() {

        $customers = $this->cr->all();

        return $customers;
        
    }
}
