    <footer id="footer" class="fh5co-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Company</h3>
                            <ul class="link">
                                @foreach($left_menuitems as $l_i)
                                    <li><a href="{{ $l_i->url }}">{{ $l_i->alias }}</a></li>
                                @endforeach                                
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>Our Facilities</h3>
                            <ul class="link">
                                <li><a href="#">Resturant</a></li>
                                <li><a href="#">Bars</a></li>
                                <li><a href="#">Pick-up</a></li>
                                <li><a href="#">Swimming Pool</a></li>
                                <li><a href="#">Spa</a></li>
                                <li><a href="#">Gym</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Подписка</h3>
                            <p>Подпишись на рассылку, чтобы не упустить выгодные скидки!</p>
                            <form action="#" id="form-subscribe">
                                <div class="form-field">
                                    <input type="email" placeholder="Email" id="email">
                                    <input type="submit" id="submit" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="icon-telegram-with-circle"></i></a>
                            <a href="#"><i class="icon-twitter-with-circle"></i></a>
                            <a href="#"><i class="icon-facebook-with-circle"></i></a>
                            <a href="#"><i class="icon-instagram-with-circle"></i></a>
                            <a href="#"><i class="icon-linkedin-with-circle"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>