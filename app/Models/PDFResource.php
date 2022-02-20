<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFResource extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function savePDFResourceData($request)
    {
        if ($request->file) {
            $image     = $request->file('file');
            $imageName = time() . $image->getClientOriginalName();
            $directory = 'assets/file/';
            $image->move($directory, $imageName);
        }
        PDFResource::create([
            'title' => $request->title,
            'file'  => $directory . $imageName,
        ]);
    }
    public static function deletePDFResourceData($id)
    {
        $resource = PDFResource::find($id);
        if ($resource != null || $resource != '' || $resource != "") {
            @unlink($resource->file);
            $resource->delete();
        }
    }
}
