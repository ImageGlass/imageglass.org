<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>{{ url('') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc>{{ url('download') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
    </url>
    
    <url>
		<loc>{{ url('doc') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>

	<url>
		<loc>{{ url('support') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.6</priority>
	</url>

	<url>
		<loc>{{ url('source') }}</loc>
		<changefreq>yearly</changefreq>
		<priority>0.5</priority>
	</url>

	<url>
		<loc>{{ url('about') }}</loc>
		<changefreq>monthly</changefreq>
		<priority>0.5</priority>
	</url>


	<url>
		<loc>{{ url('news') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>

	<url>
		<loc>{{ url('release') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc>{{ url('theme') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc>{{ url('language') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>




	@foreach ($news_items as $post)

	@php
	$dt = new DateTime($post["updated_at"]);
	$dt->setTimeZone(new DateTimeZone('Asia/Singapore'));
	@endphp

	<url>
		<loc>{{ url("news", $post["slug"]."-".$post["id"]) }}</loc>
		<lastmod>{{ $dt->format('c') }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>1</priority>
	</url>
	@endforeach



    @foreach ($release_items as $post)
    
	@php
	$dt = new DateTime($post["updated_at"]);
	$dt->setTimeZone(new DateTimeZone('Asia/Singapore'));
	@endphp

	<url>
		<loc>{{ url("download/release", $post["slug"]."-".$post["id"]) }}</loc>
		<lastmod>{{ $dt->format('c') }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>1</priority>
	</url>
	@endforeach



    @foreach ($theme_items as $post)
    
	@php
	$dt = new DateTime($post["updated_at"]);
	$dt->setTimeZone(new DateTimeZone('Asia/Singapore'));
	@endphp

	<url>
		<loc>{{ url("download/themes", $post["slug"]."-".$post["id"]) }}</loc>
		<lastmod>{{ $dt->format('c') }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>1</priority>
	</url>
	@endforeach

</urlset>