<aside class="shop-sidebar">
    <section class="shop-category pb-2">
        <h3 class="sidebar-title">Categories</h3>
        <ul class="nav flex-column">
            @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link sidebar-link" href="/{{ $category->code }}">{{$category->name}}
                    <span class="product-qty">({{$category->products->count()}})</span>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
    <section class="shop-brand pb-2">
        <h3 class="sidebar-title">Brands</h3>
        @foreach($brands as $brand)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="brand{{$brand->id}}">
            <label class="custom-control-label sidebar-link" for="brand{{$brand->id}}">{{$brand->name}}
                <span class="product-qty">(23)
                </span>
            </label>
        </div>
        @endforeach

    </section>
    <section class="shop-country">
        <h3 class="sidebar-title">Country</h3>
        @foreach($country_producer as $country)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="country{{$country->id}}">
            <label class="custom-control-label  sidebar-link" for="country{{$country->id}}">{{$country->name}}
                <span class="product-qty">(41)</span>
            </label>
        </div>
        @endforeach
    </section>
    <section class="shop-price-filter">
        <h3 class="sidebar-title">Price Filter</h3>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price1">
            <label class="custom-control-label sidebar-link" for="price1">₴0.00 - ₴9.92</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price2">
            <label class="custom-control-label sidebar-link" for="price2">₴10.00 - ₴19.95</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price3">
            <label class="custom-control-label sidebar-link" for="price3">₴20.00 - ₴29.94</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price4">
            <label class="custom-control-label sidebar-link" for="price4">₴30.00 - ₴39.99</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price5">
            <label class="custom-control-label sidebar-link" for="price5">₴40.00 - ₴49.99</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price6">
            <label class="custom-control-label sidebar-link" for="price6">₴50.00 - ₴74.99</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price7">
            <label class="custom-control-label sidebar-link" for="price7">₴75.00 - ₴99.97</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price8">
            <label class="custom-control-label sidebar-link" for="price8">₴100.00 - ₴249.99</label></div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="price9">
            <label class="custom-control-label sidebar-link" for="price9">₴250.00 - ₴499.99</label></div>
    </section>
</aside>