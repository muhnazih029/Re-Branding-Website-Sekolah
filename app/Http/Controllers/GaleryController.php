<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function photo(Request $request)
    {
        $galleries = DB::table("galeries")
            ->paginate(6);
        return view('pages.galery.photos', compact('galleries'));
    }

    public function video()
    {
        $galleries = DB::table("galeries")
            ->paginate(6);
        return view('pages.galery.videos', compact('galleries'));
    }

    public function searchPhotos(Request $request)
    {
        $search = $request->input('search');

        $galleries = DB::table("galeries")
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->get()
            ->map(function ($item) {
                $files = json_decode($item->file);
                $imageFiles = collect($files)->filter(function ($file) {
                    return preg_match('/\.(jpg|jpeg|png|webp)$/i', $file);
                })->values();
                $item->files = $imageFiles;
                return $item;
            })
            ->filter(function ($item) {
                return count($item->files) > 0;
            })
            ->values();

        return response()->json($galleries);
    }

    public function searchVideos(Request $request)
    {
        $search = $request->input('search');

        $galleries = DB::table("galeries")
        ->when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })
        ->get()
        ->map(function ($item) {
            $files = json_decode($item->file);
            $videoFiles = collect($files)->filter(function ($file) {
                return preg_match('/\.(mp4)$/i', $file);
            })->values();
            $item->files = $videoFiles;
            return $item;
        })
        ->filter(function ($item) {
            return count($item->files) > 0;
        })
        ->values();

        return response()->json($galleries);
    }
}
