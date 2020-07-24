<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	// protected $table = 'products as p';
	protected $fillable = ['name', 'description', 'purchase_price', 'sale_price'];
}
