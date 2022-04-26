<x-admin-layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/choice.css') }}">
    @endpush

    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Update Post</h3>
        </div>

        <div class="table-card cardForm">
            <form method="POST" id="bigform" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form_flex">
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="tags[]" class="form_input" multiple x-data="{}"
                                x-init="function(){choices($el)}">
                            <option value="" selected>Tyre profile</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id() }}"
                                    @if(in_array($tag->id(), $selectedTags, true))
                                        selected
                                    @endif
                                >{{ $tag->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="radii[]" class="form_input" multiple x-data="{}"
                                x-init="function(){choices($el)}">
                            <option value="" selected>Tyre radius</option>
                            @foreach($radii as $radius)
                                <option value="{{ $radius->id() }}"
                                    @if(in_array($radius->id(), $selectedRadii, true))
                                        selected
                                    @endif
                                >{{ $radius->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="brands[]" class="form_input" multiple x-data="{}"
                                x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id() }}"
                                    @if(in_array($brand->id(), $selectedBrands, true))
                                        selected
                                    @endif
                                >{{ $brand->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="vehicles[]" class="form_input" multiple x-data="{}"
                                x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Vehicle</option>
                            @foreach($vehicles as $vehicle)
                                <option value="{{ $vehicle->id() }}"
                                    @if(in_array($vehicle->id(), $selectedVehicles, true))
                                        selected
                                    @endif
                                >{{ $vehicle->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="widths[]" class="form_input" multiple x-data="{}"
                                x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Width</option>
                            @foreach($widths as $width)
                                <option value="{{ $width->id() }}"
                                    @if(in_array($width->id(), $selectedWidths, true))
                                        selected
                                    @endif
                                >{{ $width->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <input type="text" class="form_input" placeholder="" id="price" name="price" value="{{ $post->price() }}">
                        <label for="price" class="form_label">Price</label>
                    </div>
                    <div class="form_div" id="file-input-div">
                        <input type="file" id="file" class="file" name="image">
                        <label for="file" id="file-label">
                            <span class="fas fa-upload"></span>
                            <p class="file-name"></p>
                        </label>
                    </div>
                    <div class="form_div">
                        <input type="text" class="form_input" placeholder="" id="title" name="title"
                               value="{{ $post->title() }}">
                        <label for="title" class="form_label">Shop Code(Optional)</label>
                    </div>
                </div>
                <button type="submit" class="small-form-button">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>
