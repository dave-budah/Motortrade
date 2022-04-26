<?php

namespace App\View\Components\Social;

use Illuminate\View\Component;

class Links extends Component
{
   public $post;
   public $url;

    public function __construct($post, $url)
    {
        $this->post = $post;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social.links');
    }
}
