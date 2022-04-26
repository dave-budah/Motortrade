<x-admin-layout>
    <div class="card">
        <div class="title" style="margin-top: 5rem">
            <h3 class="page-title">Posts</h3>
        </div>

        <div class="floatingBtn">
         <a href="{{ route('admin.posts.create') }}" class="btn btn-float">Create Post</a>
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
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($posts->count())
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title() }}</td>
                            <td>{{ $post->author()->name() }}</td>
                            <td>{{ $post->created_at->format('d M Y') }}</td>
                            <td id="actions">

                            <a href="{{ route('admin.posts.edit', $post) }}" class="fas fa-edit"></a>

                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="fas fa-trash"></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="no-items">
                        <h5>No Posts yet.</h5>
                    </div>
                @endIf
                </tbody>
            </table>
            <div class="">
                {{ $posts->render() }}
            </div>
        </div>
    </div>
</x-admin-layout>
