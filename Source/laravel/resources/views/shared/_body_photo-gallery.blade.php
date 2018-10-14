<ul class="grid-gallery">
    @foreach($_gallery as $item)
    @php
        $img_url = getFileUrl($item["link"], $_gallery_category);
    @endphp

    <li class="gallery-item">
        <img src="{{ $img_url }}" alt="ImageGlass {{ $item["link"] }}"/>
    </li>
    @endforeach
</ul>