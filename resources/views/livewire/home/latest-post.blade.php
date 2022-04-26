<div class="row my-3">
   @foreach($posts as $post)
        <x-posts.latest :post="$post"/>
    @endforeach

       <div class="mt-4 w-100 text-center">
           @if($posts->hasMorePages())
           <button class="btn btn-primary btn-lg btn-block load-more" wire:click="loadMore">
               <span wire:loading.remove>
               Load more
               </span>
           <span wire:loading.delay>
               Loading...
           </span>
           </button>
               @else
               <h3>No more posts.</h3>
           @endif
       </div>
</div>
