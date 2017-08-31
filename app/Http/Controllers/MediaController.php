<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Plank\Mediable\Media;
use Illuminate\Http\Request;
use Plank\Mediable\MediaUploader;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    /**
     * Get the list of images for Media Manager.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function uploadMediaImage(Request $request, MediaUploader $mediaUploader)
    {
        // dd($request->file('file'));
        $validator = Validator::make($request->all(), [
            'file' => 'file|image'
        ]);

        // if there are validation errors, show that
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 433);
        }

        $file = $request->file('file');
        $folder = 'uploads/media/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';
        $uniqid = uniqid();
        $mainFileName = $uniqid . '.' . $file->getClientOriginalExtension();
        $thumbFileName = $uniqid . '_thumb.' . $file->getClientOriginalExtension();

        // checking if the folder exist
        // if not, create the folder
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }

        $mainImage = Image::make($request->file('file'))
            ->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save(public_path($folder) . $mainFileName);

        // making the media entry
        $media = $mediaUploader->fromSource(public_path($folder) . $mainFileName)
            ->toDirectory($folder)
            ->upload();

        $thumbImage = Image::make($request->file('file'))
            ->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save(public_path($folder) . $thumbFileName);

        return response()->json(['data' => $media], 201);
    }
}
