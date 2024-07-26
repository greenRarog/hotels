<x-blog.layout>
	<div id="templatemo_menu">
                
        <ul>
            <li><a href="#" class="current">Blog</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>	
    
    </div>
     <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="#" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="#" target="_parent">Curabitur sed</a></li>
                <li><a href="#" target="_parent">Praesent adipiscing</a></li>
                <li><a href="#" target="_parent">Duis sed justo</a></li>
                <li><a href="#" target="_parent">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="#" target="_parent">Free CSS Templates</a></li>
                <li><a href="#" target="_parent">Flash Templates</a></li>
                <li><a href="#" target="_parent">Premium Themes</a></li>
                <li><a href="#" target="_parent">Web Design Blog</a></li>
                <li><a href="#" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="{{ env('APP_URL') . '/t_images/slider/1.jpg' }}" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="{{ env('APP_URL') . '/t_images/slider/2.jpg' }}" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="{{ env('APP_URL') . '/t_images/slider/3.jpg' }}" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="{{ env('APP_URL') . '/t_images/slider/4.jpg' }}" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
        
            <div class="post_section">
            
                <span class="comment"><a href="blog_post.html">128</a></span>
            
                <h2><a href="blog_post.html">Aliquam lorem ante dapibus</a></h2>
                
    
            	December 28, 2048 | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <img src="{{ env('APP_URL') . '/t_images/templatemo_image_01.jpg' }}" alt="image 1" />
                
                <p>Clean Blog is a <a href="#" target="_parent">Free HTML-CSS Template</a> provided by <a href="#">templatemo.com</a> for everyone. Validate <a href="#" rel="nofollow">XHTML</a> &amp; <a href="#" rel="nofollow">CSS</a>. Donec enim enim, imperdiet quis, mollis a, elementum a, diam. Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nulla et nunc commodo ante ornare imperdiet.</p>
              <a href="blog_post.html">Continue reading...</a>
                
            </div>
                
            <div class="post_section">
                    
                <span class="comment"><a href="blog_post.html">256</a></span>
            
                <h2><a href="blog_post.html">Lorem ipsum dolor sit amet</a></h2>
                
                December 24, 2048 | <strong>Author:</strong> Steve | <strong>Category:</strong> <a href="#">Web Design</a>
                
                <img src="{{ env('APP_URL') . '/t_images/templatemo_image_02.jpg' }}" alt="image 2" />
                
                <p>Credits go to <a href="#" target="_blank">Smashing Magazine</a> for icons, <a href="#" target="_blank">Free photos</a> for photos, and <a href="#" target="_blank">Serie3</a> for the slider. Ut nec vestibulum odio. Vivamus vitae nibh eu sem malesuada rutrum et sit amet magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <a href="#">Continue reading...</a>
            
            </div>
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>  	
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->


</x-blog.layout>