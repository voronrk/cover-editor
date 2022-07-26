<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Background;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BackgroundController;
use Intervention\Image\Facades\Image;

class Result extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request, BackgroundController $bg)
    {
        $this->title = $bg->show($request->all())->title;
        $this->bg = $bg->show($request->all())->bg;
        $backgroundContent = Storage::disk('bg')->get($this->bg);
        $this->cover = Image::make($backgroundContent);
        echo print_r($this->cover,true);
        die();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.result');
    }
}
