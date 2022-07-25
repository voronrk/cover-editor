<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Background;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BackgroundController;
use Intervention\Image\Facades\Image;

class Editor extends Component
{

    public $backgroundImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request, BackgroundController $bg)
    {
        $backgroundContent = Storage::get($bg->show($request->all()));
        $this->backgroundImage = Image::make($backgroundContent);
        echo print_r($this->backgroundImage,true);
        die();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor', ['background' => $this->backgroundImage]);
    }
}
