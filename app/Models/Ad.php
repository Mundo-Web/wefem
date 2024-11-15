<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'description',
        'image',
        'link',
        'seconds',
        'date_begin',
        'date_end',
        'visible',
        'status',
    ];

    public static function today()
    {
        return Ad::where('status', true)
            ->where('visible', true)
            ->where(function ($query) {
                $query
                    ->whereNull('date_begin')
                    ->whereNull('date_end')
                    ->orWhere(function ($query) {
                        $query
                            ->where('date_begin', '<=', Carbon::now())
                            ->where('date_end', '>=', Carbon::now());
                    });
            })
            ->get();
    }
}
