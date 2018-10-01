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
		<loc>{{ url('moon') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>

	<url>
		<loc>{{ url('releases') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc>{{ url('themes') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc>{{ url('languages') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>

	<url>
		<loc>{{ url('docs') }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>

	<url>
		<loc>{{ url("docs/features") }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>

	<url>
		<loc>{{ url("docs/supported-formats") }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>

	<url>
		<loc>{{ url("docs/ui-shortcuts-reference") }}</loc>
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
		<loc>{{ url("release", $post["slug"]."-".$post["id"]) }}</loc>
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
		<loc>{{ url("theme", $post["slug"]."-".$post["id"]) }}</loc>
		<lastmod>{{ $dt->format('c') }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>1</priority>
	</url>
	@endforeach

</urlset>