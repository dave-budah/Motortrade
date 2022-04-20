<?php

namespace App\Jobs;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateBrand implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $name;
    private $description;

    public function __construct(string $name, ?string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public static function fromRequest(BrandRequest $request): self
    {
        return new static($request->name(), $request->description());
    }
    public function handle(): Brand
    {
        $brand =  new Brand([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $brand->save();
        return $brand;
    }

}
