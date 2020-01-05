{{-- @if (count(@$_blog_posts) > 0)
    @php
        $blog_post = @$_blog_posts[0];
        $post_total_days = getTotalDays($blog_post->pubDate);
    @endphp

    @if ($post_total_days < 15)
    <section class="blog-post-new">
        <a href="{{ $blog_post->link }}" target="_blank" rel="noopener noreferrer">
            <span class="tag-new">💥 New!</span>
            <span class="title">{{ $blog_post->title }}</span>
        </a>
    </section>
    @endif
@endif --}}

<section class="blog-post-new">
    <a href="https://medium.com/@d2phap/viewing-multi-page-tif-format-e0dcc256f4f0" target="_blank" title="Experiment viewing multi-page TIF format!" rel="noopener noreferrer">
        <span class="tag-new">💥 New!</span>
        <span class="title">Experiment viewing multi-page TIF format!</span>
    </a>
</section>