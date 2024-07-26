<div id="fh5co-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Новости</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4">
                    <div class="blog-grid" style="background-image: url({{ asset('storage/' . $item->Miniature->fullPath) }});">
                        <div class="date text-center">
                            <span>{{ $item->created_at_day }}</span>
                            <small>{{ $item->created_at_month }}</small>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="#">{{ $item->name }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>