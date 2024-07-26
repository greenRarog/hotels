    <li>
        <div class="comment_box commentbox1">        
        <div class="gravatar">
        <img src="{{ env('APP_URL') . '/t_images/avator.png' }}" alt="author 2" />
        </div>
        <div class="comment_text">
        <div class="comment_author">{{ $subcomment->autor->name }}<span class="date">December 14, 2048</span><span class="time">10:20 AM</span></div>
        <p>{{ $subcomment->text }}</p>
        <div class="reply"><a href="#">Reply</a></div>
        </div>
        <div class="cleaner"></div>
        </div>                        
    </li>
@each("blog.subcomment", $subcomment->childs, "subcomment")