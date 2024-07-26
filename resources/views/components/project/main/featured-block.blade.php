<div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Наши отели</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($items as $item)
                <div class="feature-full-1col">
                    <div class="image" style="background-image: url({{ env('APP') . 'images/hotel_feture_1.jpg' }});">
                        <div class="descrip text-center">
                            <p><small>For as low as</small><span>$100/night</span></p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->short_description }}</p>
                        <p><a href="/hotel/{{ $item->name }}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                    </div>
                </div>
            @endforeach

<!--             <div class="feature-full-2col">
                <div class="f-hotel">
                    <div class="image" style="background-image: url({{ env('APP') . 'images/hotel_feture_2.jpg' }});">
                        <div class="descrip text-center">
                            <p><small>For as low as</small><span>$99/night</span></p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Hotel Bora</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, 
                        in suscipit urna condimentum sed. </p>
                        <p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                    </div>
                </div>
                <div class="f-hotel">
                    <div class="image" style="background-image: url({{ env('APP') . 'images/hotel_feture_3.jpg' }});">
                        <div class="descrip text-center">
                            <p><small>For as low as</small><span>$99/night</span></p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>D’Morvie</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
                        <p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>