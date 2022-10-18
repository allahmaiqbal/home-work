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
                                'text-bg-warning' => $post->published_at == null ,
                                'text-bg-success' =>  $post->published_at !== null ,
                            
                            ]);>

                            {{-- {{ $post->published_at == null ? 'text-bg-warning':'text-bg-success '}}"> --}}
                              @if ($post->published_at==null)
                                Not
                                  
                              @endif 
                                Published

                            </span>
                          </p>
                        </div>
                        <h5 class="card-title">{{$post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated <span>{{ $post->updated_at->diffForHumans() }}</span></small>
                    </div>
                </div>
            </div>

        @endforeach

        {{-- <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div> --}}

    </div>
    <div>
        {{ $posts->links() }}
      
    </div>
</x-app-layout>
