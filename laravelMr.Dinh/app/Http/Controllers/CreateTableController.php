<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function createProductsTable()
    {
        Schema::create('product', function($table){
            $table->increments('ID');
            $table->string('Name', 200);
            $table->float('Price');
            $table->string('Image');
        });
        echo "Đã thực hiện lệnh tạo bảng thành công";
    }
}
