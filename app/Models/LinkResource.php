<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkResource extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveLinkResourceData($request)
    {
        LinkResource::create([
            'title' => $request->title,
            'link' => $request->link,
            'new_tab' => $request->new_tab == true ? 1 : 2,
        ]);
    }
    public static function deleteLinkResourceData($id)
    {
        $resource = LinkResource::find($id);
        if ($resource != null || $resource != '' || $resource != "") {
            $resource->delete();
        }
    }
}
