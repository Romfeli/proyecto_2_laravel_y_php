<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseReport;

class Expense extends Model
{
    use HasFactory;
   
    public function ExpenseReport(){
        return $this->belongsTo(ExpenseReport::class);
    }
}
