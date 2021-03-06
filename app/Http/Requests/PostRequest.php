<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> ['required', 'min:3', 'max:255'],
            'image'=> ['nullable', 'image', 'mimes:jpeg,jpg,png'],
            'price'=> ['sometimes', ''],
            'tags'=> ['array', 'nullable'],
            'tags.*'=> ['exists:tags,id'],
            'brands'=> ['array', 'nullable'],
            'brands.*'=> ['exists:brands,id'],
            'widths'=> ['array', 'nullable'],
            'widths.*'=> ['exists:widths,id'],
            'radius'=> ['array', 'nullable'],
            'radii.*'=> ['exists:radii,id'],
            'vehicle'=> ['array', 'nullable'],
            'vehicles.*'=> ['exists:vehicles,id'],
        ];
    }
    public function author(): User
    {
        return $this->user();
    }

    public function image(): string
    {
        return $this->image;
    }

    public function title(): string
    {
        return $this->get('title');
    }

    public function tags(): array
    {
        return $this->get('tags', []);
    }
    public function brands(): array
    {
        return $this->get('brands', []);
    }
    public function vehicles(): array
    {
        return $this->get('vehicles', []);
    }
    public function radii(): array
    {
        return $this->get('radii', []);
    }
    public function widths(): array
    {
        return $this->get('widths', []);
    }

    public function price(): string
    {
        return $this->get('price');
    }


}
