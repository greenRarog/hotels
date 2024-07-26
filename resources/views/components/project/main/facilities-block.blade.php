<div id="hotel-facilities">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Hotel Facilities</h2>
                </div>
            </div>
        </div>

        <div id="tabs">
            <nav class="tabs-nav">
                @foreach($items as $item)
                <a href="#" class="{{ $loop->index == 0 ? 'active' : '' }}" data-tab="{{ 'tab' . ++$loop->index }}">
                    <i class="{{ $item->icon }}"></i>
                    <span>{{ $item->name }}</span>
                </a>
                @endforeach
            </nav>
            <div class="tab-content-container">
                @foreach($items as $item)
                <div class="tab-content {{ $loop->index == 0 ? 'active show' : '' }}" data-tab-content="{{ 'tab' . ++$loop->index }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
                            </div>
                            <div class="col-md-6">
                                <span class="super-heading-sm">Международного Уровня</span>
                                <h3 class="heading">{{ $item->name }}</h3>
                                {{ $item->description }}
                                @if(!is_null($item->service_hours))
                                <p class="service-hour">
                                    <span>Service Hours</span>
                                    <strong>{{ $item->service_hours }}</strong>
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>