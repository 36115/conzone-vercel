<div id="form-card" class="card mb-1 mt-2 shadow-sm {{ $thread->pinned ? 'pinned' : '' }} {{ $thread->locked ? 'locked' : '' }} {{ $thread->trashed() ? 'deleted' : '' }}" :class="{ 'border border-blue-500': state.selectedThreads.includes({{ $thread->id }}) }">
    <div class="card-body">
        <div class="row align-items-center text-center">
            <div class="col-sm text-md-start">
                <span class="card-title h5">
                    <a href="{{ Forum::route('thread.show', $thread) }}" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">{{ $thread->title }}</a>
                </span>
                <br>
                <p class="text-muted small mb-2">Posted <span class="text-muted">@include ('forum::partials.timestamp', ['carbon' => $thread->created_at])</span> by <b><a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">{{ $thread->authorDisplayName }}</a></b> | <small id="username" class="text-muted"><span>@</span>{{ $thread->authorUsername }}</small></p>
    
                @if (!isset($category))
                    <br>
                    <a href="{{ Forum::route('category.show', $thread->category) }}">{{ $thread->category->title }}</a>
                @endif
            </div>
            <div class="col-sm text-md-end">
                @if ($thread->pinned)
                    <span class="badge rounded-pill bg-info fw-light m-1">{{ trans('forum::threads.pinned') }}</span>
                @endif
                @if ($thread->locked)
                    <span class="badge rounded-pill bg-warning fw-light m-1">{{ trans('forum::threads.locked') }}</span>
                @endif
                @if ($thread->userReadStatus !== null && !$thread->trashed())
                    <span class="badge rounded-pill bg-success fw-light m-1">{{ trans($thread->userReadStatus) }}</span>
                @endif
                @if ($thread->trashed())
                    <span class="badge rounded-pill bg-danger fw-light m-1">{{ trans('forum::general.deleted') }}</span>
                @endif
                <span class="badge rounded-pill bg-primary fw-light m-1" @if (isset($category))style="background: {{ $category->color_light_mode }};"@endif>
                    {{ trans('forum::general.replies') }}:
                    {{ $thread->reply_count }}
                </span>
            </div>
    
            @if ($thread->lastPost)
                <div class="col-sm text-md-end text-muted">
                    <a href="{{ Forum::route('thread.show', $thread->lastPost) }}">{{ trans('forum::posts.view') }} &raquo;</a>
                    <br>
                    <span class="text-muted mx-2">Active: @include ('forum::partials.timestamp', ['carbon' => $thread->lastPost->created_at])</span>
                    <br>
                    By <small id="username" class="text-muted"><span>@</span>{{ $thread->lastPost->authorUsername }} ({{ $thread->lastPost->authorRole }})</small>
                </div>
            @endif
    
            @if (isset($category) && isset($selectableThreadIds) && in_array($thread->id, $selectableThreadIds))
                <div class="col-sm" style="flex: 0;">
                    <input type="checkbox" name="threads[]" :value="{{ $thread->id }}" v-model="state.selectedThreads">
                </div>
            @endif
        </div>
    </div>
</div>
