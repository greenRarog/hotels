<x-blog.layout>
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
        @foreach($posts as $post)
            <div class="post_section">            
                <!-- <span class="comment"><a href="blog_post.html">счетчик комментов</a></span> -->
                <h2><a href="{{ env('APP_URL') . '/post/' . $post->id }}">{{ $post->title }}</a></h2>                
            	<!-- December 28, 2048 | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a> -->
                <!-- <img src="{{ env('APP_URL') . '/t_images/templatemo_image_01.jpg' }}" alt="image 1" /> -->                
                <p>{{ $post->description }}</p>
              <a href="{{ env('APP_URL') . '/post/' . $post->id }}">Продолжить чтение...</a>                
            </div>
        @endforeach
		</div>
    
  <div class="cleaner"></div>
  </div> 

  <div class="cleaner_h20"></div>  	
  
    <div class="cleaner"></div>
</div>
</x-blog.layout>