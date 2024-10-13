<div class="card mb-2" style="border-color: #eee;">
    <div class="card-body">
        <div class="mb-2">
            <span class="float-end">
                <a href="{{ Forum::route('thread.show', $post) }}" class="text-muted">#{{ $post->sequence }}</a>
            </span>
            <strong>{{ $post->authorName }}</strong> | <small id="username" class="text-muted"><span>@</span>{{ $post->authorUsername }}</small> <span class="text-muted">{{ $post->posted }}</span>
        </div>
        {!!\Illuminate\Support\Str::limit(Forum::render($post->content)) !!}
    </div>
</div>
