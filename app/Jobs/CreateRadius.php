<?php

namespace App\Jobs;

use App\Http\Requests\RadiusRequest;
use App\Models\Radius;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateRadius implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $name;
    private $description;

    public function __construct(string $name, ?string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public static function fromRequest(RadiusRequest $request): self
    {
        return new static($request->name(), $request->description());
    }
    public function handle(): Radius
    {
        $radius =  new Radius([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $radius->save();
        return $radius;
    }
}
