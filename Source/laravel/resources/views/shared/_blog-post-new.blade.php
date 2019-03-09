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
    <a href="https://medium.com/@d2phap/i-finally-have-a-blog-e76bedd8dd2e?source=rss-7e76d1910f11------2" target="_blank" title="I finally have a blog!" rel="noopener noreferrer">
        <span class="tag-new">✍</span>
        <span class="title">I finally have a blog!</span>
    </a>
</section>