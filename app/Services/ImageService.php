<?php


namespace App\Services;


use App\Models\Image;

class ImageService
{
    public static function upload($file)
    {
        $filenamewithextension = $file->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filenametostore = $filename.'_'.time().'.'.$extension;
        $file->storeAs('public/images', $filenametostore);
        $image = Image::query()->create(['name' => $filenametostore]);
        return $image->id;
    }
}
