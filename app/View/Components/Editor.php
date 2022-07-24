<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Background;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BackgroundController;

class Editor extends Component
{

    public $backgroundImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        // $this->backgroundImage = [BackgroundController::class, 'show'];
        echo "<pre>";
        echo print_r($request->all(),true);
        // echo print_r($this->backgroundImage,true);
        echo "</pre>";
        die();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor');
    }
}
