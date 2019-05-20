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
    <a href="https://medium.com/@d2phap/im-renovating-the-core-library-of-imageglass-e39aa26569bc" target="_blank" title="I’m renovating the core library of ImageGlass" rel="noopener noreferrer">
        <span class="tag-new">✍ New blog!</span>
        <span class="title">I’m renovating the core library of ImageGlass</span>
    </a>
</section>