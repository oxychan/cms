<div class="col-md-3 shop_box"><a href="{{ route('single.slug', $item->id) }}">
    <img src="{{ asset('assets/images/' . $item->url_gambar) }}" class="img-responsive" alt=""/>
    <span class="new-box">
        {{ $new }}
    </span>
    <span class="sale-box">
        {{ $sale }}
    </span>
    <div class="shop_desc">
        <h3><a href="#">{{ $item->nama }}</a></h3>
        <p>{{ substr($item->deskripsi, 0, 50) }}... </p>

        {{ $prices }}

        <ul class="buttons">
            <li class="cart"><a href="#">Add To Cart</a></li>
            <li class="shop_btn"><a href="#">Read More</a></li>
            <div class="clear"> </div>
        </ul>
    </div>
</a></div>