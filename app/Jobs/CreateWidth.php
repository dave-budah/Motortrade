<?php

namespace App\Jobs;

use App\Http\Requests\WidthRequest;
use App\Models\Width;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateWidth implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $name;
    private $description;

    public function __construct(string $name, ?string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public static function fromRequest(WidthRequest $request): self
    {
        return new static($request->name(), $request->description());
    }
    public function handle(): Width
    {
        $width =  new Width([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $width->save();
        return $width;
    }
}
