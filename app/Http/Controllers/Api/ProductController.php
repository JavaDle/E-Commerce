<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ApiCrudTrait;
use JetBrains\PhpStorm\ArrayShape;

class ProductController extends Controller
{
    use ApiCrudTrait;
    public function model(): string
    {
        return Product::class;
    }
    #[ArrayShape(['slug' => "string",
        'title' => "string",
        'description' => "string",
        'image_url' => "string",
        'price' => "string",
        'extra_options' => "string",
        'category_id' => "string",
        'gallery_id' => "string"
    ])]
    public function validationRules($resource_id = 0): array
    {
        return [
            'slug' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'price' => 'required',
            'extra_options' => 'array',
            'category_id' => 'integer',
            'gallery_id' => 'integer',
        ];
    }
}
