<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\traits\DataTablePaginate;
class customer extends Model
{
    use DataTablePaginate;
    protected $tabale='customers';
    protected $fillable = ['name','company', 'email', 'address', 'phone'];
    
}
