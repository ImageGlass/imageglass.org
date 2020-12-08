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
    <a href="https://www.patreon.com/posts/view-and-export-42245882" target="_blank" title="View and export Exif data in ImageGlass 8.0" rel="noopener">
        <span class="tag-new">🎏</span>
        <span class="title">View and export Exif data in ImageGlass 8.0</span>
    </a>
</section>