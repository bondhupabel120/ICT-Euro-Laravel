<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnippetResource extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveSnippetResourceData($request)
    {
        SnippetResource::create([
            'title' => $request->title,
            'description' => $request->description,
            'snippet' => $request->snippet == true ? 1 : 2,
        ]);
    }
    public static function deleteSnippetResourceData($id)
    {
        $resource = SnippetResource::find($id);
        if ($resource != null || $resource != '' || $resource != "") {
            $resource->delete();
        }
    }
}
