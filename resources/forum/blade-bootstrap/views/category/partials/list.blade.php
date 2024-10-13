<div id="form-card" class="card mb-4 mt-3 shadow-sm">
    <div class="card-body">
        <div class="row align-items-center text-center">
            <div class="col-sm text-md-start">
                <h5 class="card-title">
                    <a href="{{ Forum::route('category.show', $category) }}" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">{{ $category->title }}</a>
                </h5>
                <p class="card-text text-muted fw-light">{{ $category->description }}</p>
            </div>
            <div class="col-sm-2 text-md-end">
                @if ($category->accepts_threads)
                    <span class="badge rounded-pill bg-primary fw-light my-2">
                        {{ trans_choice('forum::threads.thread', 2) }}: {{ $category->thread_count }}
                    </span>
                    <br>
                    <span class="badge rounded-pill bg-primary fw-light">
                        {{ trans_choice('forum::posts.post', 2) }}: {{ $category->post_count }}
                    </span>
                @endif
            </div>
            <div class="col-sm text-md-end text-muted">
                @if ($category->accepts_threads)
                    @if ($category->newestThread)
                        <div>
                            <a href="{{ Forum::route('thread.show', $category->newestThread) }}">{{ $category->newestThread->title }} </a>
                            @include ('forum::partials.timestamp', ['carbon' => $category->newestThread->created_at])
                        </div>
                    @endif
                    @if ($category->latestActiveThread && $category->latestActiveThread->post_count > 1)
                        <div>
                            <a href="{{ Forum::route('thread.show', $category->latestActiveThread->lastPost) }}">Re: {{ $category->latestActiveThread->title }} </a>
                            @include ('forum::partials.timestamp', ['carbon' => $category->latestActiveThread->lastPost->created_at])
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

    @if ($category->children->count() > 0)
        <div class="card-body">
            <hr>
            <h4 class="card-title">Subtopic of {{ $category->title }}</h4>
            @foreach ($category->children as $subcategory)
                <div class="list-group-item">
                    <div class="row align-items-center text-center">
                        <div class="col-sm text-md-start">
                            <h5 class="card-title mt-3">
                                <a href="{{ Forum::route('category.show', $subcategory) }}" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">{{ $subcategory->title }}</a>
                            </h5>
                            <div class="card-text text-muted fw-light">{{ $subcategory->description }}</div>
                        </div>
                        <div class="col-sm-2 text-md-end">
                            <span class="badge rounded-pill bg-primary fw-light">
                                {{ trans_choice('forum::threads.thread', 2) }}: {{ $subcategory->thread_count }}
                            </span>
                            <br>
                            <span class="badge rounded-pill bg-primary fw-light">
                                {{ trans_choice('forum::posts.post', 2) }}: {{ $subcategory->post_count }}
                            </span>
                        </div>
                        <div class="col-sm text-md-end text-muted">
                            @if ($subcategory->newestThread)
                                <div>
                                    <a href="{{ Forum::route('thread.show', $subcategory->newestThread) }}">{{ $subcategory->newestThread->title }}</a>
                                    @include ('forum::partials.timestamp', ['carbon' => $subcategory->newestThread->created_at])
                                </div>
                            @endif
                            @if ($subcategory->latestActiveThread && $subcategory->latestActiveThread->post_count > 1)
                                <div>
                                    <a href="{{ Forum::route('thread.show', $subcategory->latestActiveThread->lastPost) }}">Re: {{ $subcategory->latestActiveThread->title }}</a>
                                    @include ('forum::partials.timestamp', ['carbon' => $subcategory->latestActiveThread->lastPost->created_at])
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>