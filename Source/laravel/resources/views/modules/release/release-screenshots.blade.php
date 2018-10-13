<section class="section-screenshots" id="screenshots">
    <div class="container">
        <h2 class="fs-h2">
            Screenshots
        </h2>

        <section class="">
            <ul class="grid-gallery py-3">
                @foreach($release_item["screen_shots"] as $item)
                @php
                    $img_url = getFileUrl($item["link"], "release");
                @endphp

                <li>
                    <img src="{{ $img_url }}" alt="ImageGlass {{ $release_item["version"] }}"/>
                </li>
                @endforeach
            </ul>
        </section>
        
    </div>
</section>

