<?php

namespace App\Jobs;

use App\Models\Width;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteWidth implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $width;

    public function __construct(Width $width)
    {
        $this->width = $width;
    }


    public function handle()
    {
        $this->width->delete();
    }
}
