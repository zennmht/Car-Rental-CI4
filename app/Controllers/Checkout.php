<?php

namespace App\Controllers;

use App\Models\Product_model;

class Checkout extends BaseController
{
    public function index($id)
    {
        $model = new Product_model();
        $data['rental'] = $model->getProductDetail($id);
        return view('v_checkout', $data);
    }
}
