<!-- dessert -->
<section id="cheffs" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading">Available &nbsp; Menu &nbsp;</h2>
                <hr class="heading_space">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cheffs_wrap_slider">
                    <div id="our-cheffs" class="owl-carousel">

                        @foreach($menus as $menu)
                        <div class="item">
                            <div class="cheffs_wrap">
                                <div class="menu_card">

                                    <div class="menu_image">
                                        <img src="{{ url('storage/menu_images/' . basename($menu->menu_pic)) }}" alt="Menu Image">
                                    </div>

                                    <div class="small_card">
                                        <i class="icon-basket2"></i>
                                    </div>

                                    <div class="menu_info">
                                        <h2>{{ $menu->menu_name }}</h2>
                                        <small>{{ $menu->menu_price }}</small>
                                        <p>@if ($menu->vendor)
                                                {{ $menu->vendor->vendor_name }}
                                            @else
                                            No Vendor
                                            @endif
                                        </p>
                                        <a href="#" class="menu_btn">Order Now</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
