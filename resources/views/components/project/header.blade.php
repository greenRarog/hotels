<div id="fh5co-header">
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <h1 id="fh5co-logo"><a href="#">Luxe</a></h1>
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        @foreach($items as $item)
                        <li><a class="{{ request()->path() == $item->url ? 'active' : ''}}" href="{{ $item->url }}">{{ $item->alias }}</a></li>
                        @endforeach
<!--                         
                        <li>
                            <a href="hotel.html" class="fh5co-sub-ddown">Hotel</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="#">Luxe Hotel</a></li>
                                <li><a href="#">Deluxe Hotel</a></li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">King Hotel</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Five Star Hotel</a></li> 
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>