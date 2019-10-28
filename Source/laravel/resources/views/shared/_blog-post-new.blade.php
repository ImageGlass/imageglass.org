@if (count(@$_blog_posts) > 0)
    @php
        $blog_post = @$_blog_posts[0];
        $post_total_days = getTotalDays($blog_post->pubDate);
    @endphp

    @if ($post_total_days < 10)
    <section class="blog-post-new">
        <a href="{{ $blog_post->link }}" target="_blank" rel="noopener noreferrer">
            <span class="tag-new">New blog!</span>
            <span class="title">{{ $blog_post->title }}</span>
        </a>
    </section>
    @endif
@endif

<section class="blog-post-new">
    <a href="https://medium.com/@d2phap/enable-windows-file-explorer-sort-order-in-imageglass-7-ff63b4ab16a0" target="_blank" title="Enable Windows File Explorer sort order in ImageGlass 7" rel="noopener noreferrer">
        <span class="tag-new">📙 New blog!</span>
        <span class="title">Enable Windows File Explorer sort order in ImageGlass 7</span>
    </a>
</section>