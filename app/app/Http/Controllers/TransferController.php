<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    protected function index(){

        $transfers = Transfer::all();
        return $transfers;
    }
}
