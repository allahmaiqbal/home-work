@section('page-name', 'Post')
@section('title', 'Post List')
<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Simple Full Width Table</h3>

            <div class="card-tools">
                TODO Search Options
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Autor</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Title</td>
                        <td>
                            Author
                        </td>
                        <td><span class="badge bg-danger">55%</span></td>
                        <td>
                            Action
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <ul class="pagination pagination-sm float-right m-0">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <h1>Welcome to post list</h1>

            <div class="my-4 text-end">
                <a href="{{ route('dashboard.post.create') }}" class="btn btn-primary">Add new Post</a>
            </div>
        </div>
    </div>
    <div>
        <form action="">
            <select name="orderBy">
                <option value="latest" @selected(request('orderBy') === 'latest')> Latest</option>
                <option value="oldest" @selected(request('orderBy') === 'oldest')> Ordest</option>
            </select>
            <button type="submit" class="btn btn-success">Search</button>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $post)
            <div class="col">

                <div class="card h-100">

                    <div class="card-body">
                        <div>
                            <p class="text-end">
                                <span @class([
                                    'badge',
                                    'text-bg-success' => !$post->isPublished(),
                                    'text-bg-warning' => $post->isPublished(),
                                ]);>
                                    @if ($post->isPublished())
                                        Not
                                    @endif
                                    Published
                                </span>
                            </p>

                            <div class="text-end">
                                <a href="{{ route('dashboard.post.show', $post->slug) }}" class="badge text-bg-primary"
                                    title="View Details">
                                    <x-icon.show />
                                </a>

                                <a href="{{ route('dashboard.post.edit', $post->slug) }}" class="badge text-bg-info"
                                    title="Edit Post">
                                    <x-icon.edit />
                                </a>

                                <form action="{{ route('dashboard.post.destroy', $post->slug) }}" method="POST"
                                    class="badge text-bg-danger align-top position-relative"
                                    onsubmit="return confirm('Are you sure want to delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete Post" class="stretched-link">
                                        <x-icon.delete />
                                    </button>
                                </form>
                            </div>
                        </div>
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text-end"> Posted By {{ $post->author->name }} </p>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated
                            <span>{{ $post->updated_at->diffForHumans() }}</span></small>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div>
        {{ $posts->links() }}

    </div> --}}
</x-app-layout>
