
 <div id="video_page">
        <div class="text-block">
            <div class="text-container">
                {{--  <h1 class="title text-white">{{__($section->title)}}</h1>
                <span class="text-white ">{{__($section->sub_title)}}</span>
                <button class="btn-create-room">Create Room</button>  --}}
            </div>
        </div>
        {{--  <video autoplay="" muted="" loop="" id="myVideo">  --}}
            {{--  <iframe class="video_cover" src="https://www.youtube.com/embed/{{count($section->contents) >0 ? $section->contents[0]->video :''}}?&autoplay=1&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3&playlist={{count($section->contents) >0 ? $section->contents[0]->video :''}}" allowfullscreen="" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; border: 0px;"></iframe>  --}}
            <iframe class="video_cover" src="https://www.youtube.com/embed/{{count($section->contents) >0 ? $section->contents[0]->video :''}}?autoplay=1&amp;mute=1&amp;enablejsapi=1&loop=1&playlist={{count($section->contents) >0 ? $section->contents[0]->video :''}}" allowfullscreen="" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; border: 0px;"></iframe>
            {{--  <amp-youtube id="myVideo" class="video_gl" autoplay loop  layout="responsive" data-videoid="{{count($section->contents) >0 ? $section->contents[0]->video :''}}"></amp-youtube>  --}}
        {{--  </video>  --}}
    </div>
<script>
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        // true for mobile device
            $(".video_cover").attr('src',`https://www.youtube.com/embed/{{count($section->contents) >0 ? $section->contents[0]->video :''}}`);
    }
</script>