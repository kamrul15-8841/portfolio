<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'title',
        'class',
        'demo',
        'github',
        'image',
        'status',
    ];

    public static function createOrUpdatePortfolio($request, $id = null)
    {
        Portfolio::updateOrCreate(['id' => $id], [
            'category_name' => $request->category_name,
            'title' => $request->title,
            'class' => $request->class,
            'demo' => $request->demo,
            'github' => $request->github,
            'image' => Helper::uploadFile($request->file('image'), 'product', isset($id) ? Portfolio::find($id)->image : null),
            'status' => $request->status,
        ]);
    }
}
