<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\Models\Media;

class RemoveMediaController extends Controller
{
    public function __invoke(Media $media)
    {
        $media->forceDelete();

        return back();
    }
}
