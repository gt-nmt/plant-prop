<?php

namespace App\View\Components;

class AdminLayout extends \Illuminate\View\Component
{

    /**
     * @return \Illuminate\View\View
     */
    public function render()
    {
       return view('layouts.admin');
    }
}
