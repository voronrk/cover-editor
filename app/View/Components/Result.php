<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\BackgroundController;
use App\Services\Cover;

// use App\Models\Background;
// use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Facades\Image;

class Result extends Component
{

    public $cover;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request, BackgroundController $bg)
    {
        $this->cover = Cover::index($bg->show($request->all()));
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
