<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Tire widths</h3>
        </div>

        <div class="floatingBtn">
        <a href="{{ route('admin.widths.create') }}" class="btn btn-float">Create Tyre width</a>
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
                @if($widths->count())
                    @foreach($widths as $width)
                        <tr>
                            <td>{{ $width->id }}</td>
                            <td>{{ $width->name() }}</td>
                            <td>{{ $width->slug() }}</td>
                            <td>{{ $width->created_at->format('d M Y') }}</td>
                            <td id="actions">
                                <a href="{{ route('admin.widths.edit', $width) }}" class="fas fa-edit"></a>
                                <form action="{{ route('admin.tags.destroy', $width) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fas fa-trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Widths yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $widths->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
