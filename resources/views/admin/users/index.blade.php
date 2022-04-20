<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Users</h3>
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
                @if($users->count())
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name() }}</td>
                            <td>{{ $user->email() }}</td>
                            <td class="active-user"><a href="">active</a></td>
                            <td>@if($user->isAdmin() || $user->isSuperadmin()) <span class="admin">Admin</span>
                                @elseif($user->isWriter()) <span class="writer">Writer</span>
                                @elseif($user->isModerator()) <span class="moderator">Moderator</span>
                                @elseif($user->isDefault()) <span class="default">User</span>
                                @endif
                            </td>
                            <td>{{ $user->joinedDate() }}</td>
                            <td id="actions">
                                <span class="fas fa-edit"></span>
                                <button class="fas fa-trash"></button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Users yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $users->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
