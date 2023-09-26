<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessRGA extends Model
{
    use HasFactory;

    protected $table = 'process_rga';
    protected $fillable = [
        'rga_id',
        'requestDate',
        'status',
        'analysisDate',
        'reasonReject',
    ];

    public function rga(){
        return $this->belongsTo(RGA::class,'rga_id');
    }

}
