<?php
namespace App\traits;

trait DataTablePaginate{
    public function scopeDataTablePaginate($query, $request){
        return $query->orderBy($request->soft_column,$request->direction)
                     ->paginate($request->per_page);
    }
}