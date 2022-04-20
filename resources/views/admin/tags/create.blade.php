<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Create Tag</h3>
        </div>

        <div class="table-card cardForm">
            <form method="POST" action="{{ route('admin.tags.store') }}" class="small-form" id="small-form">
                @csrf
                @method('POST')
                <div class="text-center">
                    <h1 class="form_title text-uppercase">Create Tag</h1>
                </div>

                <div class="form_div">
                    <input type="text" class="form_input" placeholder="" id="name" name="name">
                    <label for="name" class="form_label">Name</label>
                </div>

                <div class="form_div">
                    <textarea type="text" class="form_input" placeholder="" id="description" name="description"></textarea>
                    <label for="description" class="form_label">Description</label>
                </div>

                <div class="">
                    <button type="submit" class="small-form-button">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
