<link rel="stylesheet" href="{{ asset('frontend/css/style.c') }}">
<!-- Menu -->

<div class="menu" id="Menu">
    <h1><span>Menu</span></h1>
    
    <select name="vendor" id="vendor">
        <option value="">Select Vendor</option>
        @if($vendors && count($vendors) > 0)
            @foreach($vendors as $vendor)
                <option value="{{ $vendor['id'] }}">{{ $vendor->vendor_name }}</option>
            @endforeach
        @endif
    </select>

    <br>
    <br>

    <div class="menu_box">
        @foreach($menus as $menu)
        <div class="menu_card">

            <div class="menu_image">
                <img src="{{ url('storage/menu_images/' . basename($menu->menu_pic)) }}">
            </div>

            <div class="small_card">
                <i class="icon-basket2"></i>
            </div>

            <div class="menu_info">
                <h2>{{ $menu->menu_name }}</h2>
                <p>{{ $menu->menu_desc }}</p>
                <h3>@if ($menu->vendor)
                        {{ $menu->vendor->vendor_name }}
                    @else
                    No Vendor
                    @endif
                </h3> 
                <h3>Rp. {{ $menu->menu_price }}</h3>
                <div class="menu_icon">
                    <i class="icon-basket2"></i>
                </div>
                <a href="{{ route('addMenu.to.order', $menu->id) }}" class="menu_btn">Order Now</a>
            </div>

        </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function(){
            $("#category").on('change', function(){
                var category = $(this).val();
                $.ajax({
                    url:"{{ route('menu' )}}",
                    type: "GET",
                    data: {'category'.category},
                    success:function(data){
                        var menus = data.menus;
                        var html = '';
                        if(menus.length>0){
                            for(let i=0; i<menus.length; i++){
                                html +='<tr>\
                                        <td>'+(menus[i]['id'])+'</td>\
                                        <td>'+menus[i]['menu_name']+'</td>\
                                        <td>'+menus[i]['menu_price']+'</td>\
                                        <td>'+menus[i]['menu_desc']+'</td>\
                                        </tr>';
                            }
                        } else {
                            html += '<tr>\
                                        <td>Tidak ada menu tersedia</td>\
                                    </tr>';
                        }
                        $("#body").html(html);
                    }
                })
            })
        })
    </script>

</div>
