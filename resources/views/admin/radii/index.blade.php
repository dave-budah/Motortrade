<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Tire radius</h3>
        </div>

        <div class="floatingBtn">
            <a href="{{ route('admin.radii.create') }}" class="btn btn-float">Create Tyre Radius</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
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
                @if($radii->count())
                    @foreach($radii as $radius)
                        <tr>
                            <td>{{ $radius->id }}</td>
                            <td>{{ $radius->name() }}</td>
                            <td>{{ $radius->slug() }}</td>
                            <td>{{ $radius->created_at->format('d M Y') }}</td>
                            <td id="actions">
                                {{--                                <a href="{{ route('admin.tags.edit', $radius) }}" class="fas fa-edit"></a>--}}
                                <a href="#" class="fas fa-edit"></a>
                                {{--                                <form action="{{ route('admin.tags.destroy', $radius) }}" method="POST">--}}
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fas fa-trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Radii yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $radii->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
