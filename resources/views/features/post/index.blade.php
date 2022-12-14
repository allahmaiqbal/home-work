<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h1>Welcome to post list</h1>

            <div class="my-4 text-end">
                <a href="{{ route('dashboard.post.create')  }}" class="btn btn-primary">Add new Post</a>
            </div>
        </div>
    </div>
    <div>
       <form action="">
           <select name ="orderBy">
               <option value="latest" @selected(request('orderBy') === 'latest')> Latest</option>
               <option value="oldest" @selected(request('orderBy')==='oldest')> Ordest</option>
           </select>
           <button type="submit" class="btn btn-success">Search</button>
       </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
       @foreach ($posts as $post )

            <div class="col">
               
                <div class="card h-100">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <div>
                            <p class="text-end">
                                <span @class([
                                    'badge',
                                    'text-bg-success' => !$post->isPublished() ,
                                    'text-bg-warning' => $post->isPublished() ,
                                  ]);>

                                    @if ($post->isPublished())
                                        Not
                                        
                                    @endif 
                                        Published

                               </span>
                            </p>

                            <div class="text-end">
                                <a href="#" class="badge text-bg-primary" title="View Details">
                                    <x-icon.show />
                                </a>

                                <a href="{{ route('dashboard.post.edit', $post->id)  }}" class="badge text-bg-info"
                                    title="Edit Post">
                                    <x-icon.edit />
                                </a>

                                 <form action="{{ route('dashboard.post.destroy', $post->id) }}" method="POST"
                                    class="badge text-bg-danger align-top position-relative"
                                    onsubmit="return confirm('Are you sure want to delete this post?')">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" title="Delete Post" class="stretched-link">
                                        <x-icon.delete />
                                    </button>
                               </form>
                          </div>
                        </div>
                        <h5 class = "card-title">{{$post->title }}</h5>
                        <p class = "card-text-end"> Posted By {{ $post->author->name }} </p>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated <span>{{ $post->updated_at->diffForHumans() }}</span></small>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
    <div>
        {{ $posts->links() }}
      
    </div>
</x-app-layout>
