<?php

namespace App\Services;

use App\Http\Controllers\BackgroundController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Background;
use Intervention\Image\Imagick\Font;
use Illuminate\Http\File;

class Cover
{
    public static function index(Background $bg)
    {
        define('FORMAT', 'tif');
        $bgImg = Storage::disk('bg')->get($bg->bg);
        $clearName = preg_replace('/\..*/','',$bg->bg);
        $coverName = 'cover_' . $clearName . '.' . FORMAT;
        $previewName = 'preview_' . $clearName . '.png';
        
        $cover = Image::make($bgImg)
            ->resize($bg->width, $bg->height)
            ->text($bg->title, $bg->x, $bg->y, function (Font $font) {
                $font->file('fonts/roboto.ttf');
                $font->size(48);
            })
            ->encode(FORMAT);
        $preview = $cover->encode('png');

        Storage::disk('cover')->put('/' . $coverName, $cover->stream());
        $coverPath = Storage::disk('cover')->url($coverName);
        
        Storage::disk('cover')->put('/' . $previewName, $preview->stream());
        $previewPath = Storage::disk('cover')->url($previewName);


        $bg->cover = $coverPath;
        $bg->preview = $previewPath;
        $bg->save();
        
        return ['previewPath' => $previewPath, 'downloadURL' => $coverPath];
    }
}