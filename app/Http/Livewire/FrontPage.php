<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class FrontPage extends Component
{
    public $urlslug;
    public $title;
    public $content;
    
    /**
     * the livewire mount
     *
     * @param  mixed $urlslug
     * @return void
     */
    public function mount($urlslug)
    {
        $this->retriveContent($urlslug);
    }
    
    /**
     * retrive Content
     *
     * @param  mixed $urlslug
     * @return void
     */
    public function retriveContent($urlslug)
    {
        $data = Page::where('slug',$urlslug)->first();
        $this->title = $data->title;
        $this->content = $data->content;
    }    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.front-page')->layout('layouts.frontpage');
    }
}
