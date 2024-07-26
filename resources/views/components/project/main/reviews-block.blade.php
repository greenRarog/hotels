<div id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Честные отзывы клиентов</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4">
                    <div class="testimony">
                        <blockquote>
                            {!! $item->content !!}
                        </blockquote>
                        <p class="author"><cite>{{ $item->name }}</cite></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>