<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Dealers</h3>
        </div>

        <div class="table-card">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Joined Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($writers->count())
                    @foreach($writers as $writer)
                        <tr>
                            <td>{{ $writer->id }}</td>
                            <td>{{ $writer->name() }}</td>
                            <td>{{ $writer->email() }}</td>
                            <td><a href="">active</a></td>
                            <td>@if($writer->isAdmin() || $writer->isSuperadmin()) <span>Admin</span>
                                @elseif($writer->isWriter()) <span>Writer</span>
                                @endif
                            </td>
                            <td>{{ $writer->joinedDate() }}</td>
                            <td class="actions">
                                <span class="fas fa-edit"></span>
                                <button class="fas fa-trash"></button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Dealers yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $writers->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
