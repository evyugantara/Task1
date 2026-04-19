<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    use HasFactory;

    protected $table = 'returns';

    protected $fillable = [
        'loan_detail_id',
    ];

    public function loanDetail()
    {
        return $this->belongsTo(LoanDetail::class, 'loan_detail_id');
    }
}