<x-admin-layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/choice.css') }}">
    @endpush

    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Create Post</h3>
        </div>

        <div class="table-card cardForm">
            <form method="post" id="bigform" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form_flex">
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="tags[]" class="form_input" multiple x-data="{}" x-init="function(){choices($el)}">
                            <option value="" selected>Tyre profile</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id() }}">{{ $tag->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="radii[]" class="form_input" multiple x-data="{}" x-init="function(){choices($el)}">
                            <option value="" selected>Tyre radius</option>
                            @foreach($radii as $radius)
                                <option value="{{ $radius->id() }}">{{ $radius->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="brands[]" class="form_input" multiple x-data="{}" x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id() }}">{{ $brand->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="vehicles[]" class="form_input" multiple x-data="{}" x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Vehicle</option>
                            @foreach($vehicles as $vehicle)
                                <option value="{{ $vehicle->id() }}">{{ $vehicle->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <label for="tag"></label>
                        <select id="tag" name="widths[]" class="form_input" multiple x-data="{}" x-init="function(){choices($el)}">
                            <option value="" selected>Tyre Width</option>
                            @foreach($widths as $width)
                                <option value="{{ $width->id() }}">{{ $width->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_div">
                        <input type="text" class="form_input" placeholder="" id="price" name="price">
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
                        <input type="text" class="form_input" placeholder="" id="name" name="title">
                        <label for="name" class="form_label">Shop Code(Optional)</label>
                    </div>
                </div>
                <button type="submit" class="small-form-button">Create</button>
            </form>
        </div>
    </div>
</x-admin-layout>
