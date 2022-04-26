<?php

namespace App\Jobs;

use App\Models\Radius;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteRadius implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $radius;

    public function __construct(Radius $radius)
    {
        $this->radius = $radius;
    }

    public function handle()
    {
        $this->radius->delete();
    }
}
