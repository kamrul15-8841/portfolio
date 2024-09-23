<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
    ];

    public static function createOrUpdateService($request, $id = null)
    {
        Service::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'image' => Helper::uploadFile($request->file('image'), 'product', isset($id) ? Service::find($id)->image : null),
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }
}
