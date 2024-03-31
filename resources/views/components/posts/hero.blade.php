 <!-- Start retroy layout blog posts -->
 <section class="section bg-light">
     <div class="container">
         <div class="row align-items-stretch retro-layout">
             <div class="col-md-4">
                 @foreach ($Lposts as $post)
                     <a href="{{ route('posts.detail', $post->id) }}" class="h-entry v-height gradient mb-30">

                         <div class="featured-img"
                             style="background-image: url('{{ asset('assets/images/' . $post->images . '') }}');"></div>

                         <div class="text">
                             <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                             <h2>{{ $post->title }}</h2>
                         </div>
                     </a>
                 @endforeach
             </div>
             <div class="col-md-4">
                 @foreach ($Mposts as $post)
                     <a href="{{ route('posts.detail', $post->id) }}" class="h-entry img-5 h-100 gradient">

                         <div class="featured-img"
                             style="background-image: url('{{ asset('assets/images/' . $post->images . '') }}');"></div>

                         <div class="text">
                             <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                             <h2>{{ $post->title }}</h2>
                         </div>
                     </a>
                 @endforeach
             </div>
             <div class="col-md-4">
                 @foreach ($Rposts as $post)
                     <a href="{{ route('posts.detail', $post->id) }}" class="h-entry v-height gradient mb-30">

                         <div class="featured-img"
                             style="background-image: url('{{ asset('assets/images/' . $post->images . '') }}');"></div>

                         <div class="text">
                             <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                             <h2>{{ $post->title }}</h2>
                         </div>
                     </a>
                 @endforeach
             </div>
         </div>
     </div>
 </section>
 <!-- End retroy layout blog posts -->
