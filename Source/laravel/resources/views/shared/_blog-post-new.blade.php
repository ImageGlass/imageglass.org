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
    <a href="https://www.patreon.com/posts/new-imageglass-39518578" target="_blank" title="A new ImageGlass app just started!" rel="noopener noreferrer nofollow">
        <span class="tag-new">💥 New!</span>
        <span class="title">A new ImageGlass app just started!</span>
    </a>
</section>