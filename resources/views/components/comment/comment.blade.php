<div class="pt-5 comment-wrap">
    @if ($numberCmt > 0)
        <h3 class="mb-5 heading">
            {{ $numberCmt }} Comments
        </h3>
    @else
        <h3 class="mb-5 heading">Be the first to comment</h3>
    @endif
    <ul class="comment-list">
        @foreach ($cmtPost as $cmt)
            <li class="comment">
                <div class="vcard">
                    <img src="{{ asset('assets/images/users/' . $user->avatar . '') }}" alt="Image placeholder" />
                </div>
                <div class="comment-body">
                    <h3>{{ $user->name }}</h3>
                    <div class="meta">{{ $cmt->created_at->diffForHumans() }}</div>
                    <p>
                        {{ $cmt->comment }}
                    </p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
            </li>
        @endforeach
    </ul>
    <!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
        <h3 class="mb-3">{{ __('Leave a comment') }}</h3>
        <form action="{{ route('posts.comment') }}" method="post" class="p-2 bg-light">
            @csrf
            <input type="hidden" name="post_id" value="{{ $data->id }}" class="form-control border"
                id="name" />
            <div class="form-group">
                <label for="message">Comment</label>
                <textarea name="comment" id="message" cols="30" rows="10" class="form-control border"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
