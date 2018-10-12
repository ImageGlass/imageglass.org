@php
    $id = $release_item["id"];
    $title = $release_item["title"];

    $version = $release_item["version"];
    $release_type = $release_item["release_type"];

    $slug = $release_item["slug"];
    $url = URL::to("release/".$slug."-".$id);
    $download_url = URL::to("release/".$slug."-".$id."/download?type=portable");

    $release_date = formatDateTime($release_item["updated_at"], "Y/m/d H:i:s");
@endphp

{{--  JSON format  --}}
@if ($content_type == "application/json")
{
    "format": "1.0",
    "release": {
        "title": "{{ $title }}",
        "version": "{{ $version }}",
        "release_type": "{{ $release_type }}",
        "url": "{{ $url }}",
        "download_url": "{{ $download_url }}",
        "release_date": "{{ $release_date }}"
    }
}

{{--  XML format  --}}
@else
<ImageGlass>
	<Update>
        <Info newVersion="{{ $version }}" 
            versionType="{{ $release_type }}" 
            level="Recommended" 
            link="{{ $url }}" 
            size="13.7 MB" 
            pubDate="{{ $release_date }}" 
            decription="{{ $url }}" 
        />
	</Update>
</ImageGlass>
@endif