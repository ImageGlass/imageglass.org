{{-- @if (count(@$_blog_posts) > 0)
    @php
        $blog_post = @$_blog_posts[0];
        $post_total_days = getTotalDays($blog_post->pubDate);
    @endphp

    @if ($post_total_days < 15)
    <section class="blog-post-new">
        <a href="{{ $blog_post->link }}" target="_blank" rel="noopener noreferrer nofollow">
            <span class="tag-new">💥 New!</span>
            <span class="title">{{ $blog_post->title }}</span>
        </a>
    </section>
    @endif
@endif --}}

<section class="blog-post-new">
    <a href="https://www.patreon.com/posts/imageglass-and-39849218" target="_blank" title="ImageGlass Preview and the future of ImageGlass" rel="noopener">
        <span class="tag-new">🏔</span>
        <span class="title">ImageGlass Preview and the future of ImageGlass</span>
    </a>
</section>