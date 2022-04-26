<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Tire vehicles</h3>
        </div>

        <div class="floatingBtn">
        <a href="{{ route('admin.vehicles.create') }}" class="btn btn-float">Create Vehicle</a>
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
                @if($vehicles->count())
                    @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->name() }}</td>
                            <td>{{ $vehicle->slug() }}</td>
                            <td>{{ $vehicle->created_at->format('d M Y') }}</td>
                            <td id="actions">
                                {{--                                <a href="{{ route('admin.tags.edit', $vehicle) }}" class="fas fa-edit"></a>--}}
                                <a href="#" class="fas fa-edit"></a>
                               <form action="{{ route('admin.tags.destroy', $vehicle) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fas fa-trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Vehicle yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $vehicles->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
