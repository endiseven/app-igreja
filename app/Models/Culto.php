<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culto extends Model
{
    use HasFactory;

    protected $table = 'culto';

    protected $fillable = [
        'membro_id',
    ];

    public function membro()
    {
        return $this->belongsTo(Membro::class, 'membro_id');
    }
}
