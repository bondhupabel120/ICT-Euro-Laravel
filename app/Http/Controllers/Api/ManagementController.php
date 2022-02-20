<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LinkResource;
use App\Models\PDFResource;
use App\Models\SnippetResource;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /* PDF Resource */
    public function createPDFResource(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max: 255',
                'file' => 'required|mimes:pdf',
            ]);
            PDFResource::savePDFResourceData($request);
            return response()->json(["status" => true, "message" => "Success"], 200);
        } catch (\Exception $e) {
            return response()->json(["status" => false, "message" => "Unauthorized"], 401);
        }
    }
    public function viewPDFResource(Request $request)
    {
        $resources = PDFResource::orderBy('id', 'desc')->get();
        return response()->json($resources);
    }
    public function deletePDFResource($id)
    {
        PDFResource::deletePDFResourceData($id);
        return response()->json(["status" => true, "message" => "Success"], 200);
    }

    /* HTML Snippet Resource */
    public function createSnippetResource(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max: 255',
                'description' => 'required',
            ]);
            SnippetResource::saveSnippetResourceData($request);
            return response()->json(["status" => true, "message" => "Success"], 200);
        } catch (\Exception $e) {
            return response()->json(["status" => false, "message" => "Unauthorized"], 401);
        }
    }
    public function viewSnippetResource(Request $request)
    {
        $resources = SnippetResource::orderBy('id', 'desc')->get();
        return response()->json($resources);
    }
    public function deleteSnippetResource($id)
    {
        SnippetResource::deleteSnippetResourceData($id);
        return response()->json(["status" => true, "message" => "Success"], 200);
    }

    /* Link Resource */
    public function createLinkResource(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max: 255',
                'link' => 'required|max: 255',
            ]);
            LinkResource::saveLinkResourceData($request);
            return response()->json(["status" => true, "message" => "Success"], 200);
        } catch (\Exception $e) {
            return response()->json(["status" => false, "message" => "Unauthorized"], 401);
        }
    }
    public function viewLinkResource(Request $request)
    {
        $resources = LinkResource::orderBy('id', 'desc')->get();
        return response()->json($resources);
    }
    public function deleteLinkResource($id)
    {
        LinkResource::deleteLinkResourceData($id);
        return response()->json(["status" => true, "message" => "Success"], 200);
    }
}
