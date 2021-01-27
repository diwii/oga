<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Img extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.img');
    }

    /**
     * Return image source set, by adding $size to path and slot name.
     * Example: 'dir/info.jpeg' becomes 'dir/info-512.jpeg 512w'
     */
    public function srcSet($size)
    {
        $path = pathinfo($this->attributes['src']);
        // Insert size into path string.
        $alteredPath = $path['dirname'].'/'.$path['filename'].'-'.$size.'.'.$path['extension'];
        // Find position of "storage" string in altered path
        $pos = strpos($alteredPath, 'storage');
        // Take string that follows "storage" string
        $storagePath = substr($alteredPath, $pos+strlen('storage'));
        // Check if file exists in storage
        if (Storage::exists('public/'.$storagePath)) return $alteredPath.' '.$size.'w';
        // If not exists, return default size.
        return $this->attributes['src'].' '.$size.'w';
    }
}
