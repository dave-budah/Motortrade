<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Tire width</h3>
        </div>

        <div class="floatingBtn">
            <a href="{{ route('admin.tags.create') }}" class="btn btn-float">Create Tag</a>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success" id="alert" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-card">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($tags->count())
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name() }}</td>
                            <td>{{ $tag->slug() }}</td>
                            <td>{{ $tag->created_at->format('d M Y') }}</td>
                            <td id="actions">
{{--                                <a href="{{ route('admin.tags.edit', $tag) }}" class="fas fa-edit"></a>--}}
                                <a href="#" class="fas fa-edit"></a>
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fas fa-trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Tags yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $tags->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
