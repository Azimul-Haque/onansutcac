<div class="widgets-container">

  <!-- Search Widget -->
  <div class="search-widget widget-item">

    <h3 class="widget-title">Search</h3>
    <form action="">
      <input type="text">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>

  </div><!--/Search Widget -->

  <!-- Categories Widget -->
  <div class="categories-widget widget-item">

    <h3 class="widget-title">Categories</h3>
    <ul class="mt-3">
      <li><a href="#">General <span>(25)</span></a></li>
      <li><a href="#">Lifestyle <span>(12)</span></a></li>
      <li><a href="#">Travel <span>(5)</span></a></li>
      <li><a href="#">Design <span>(22)</span></a></li>
      <li><a href="#">Creative <span>(8)</span></a></li>
      <li><a href="#">Educaion <span>(14)</span></a></li>
    </ul>

  </div><!--/Categories Widget -->

  <!-- Recent Posts Widget -->
  <div class="recent-posts-widget widget-item">

    <h3 class="widget-title">Recent News</h3>

    <div class="post-item">
      <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="flex-shrink-0">
      <div>
        <h4><a href="{{ route('index.index.single-news') }}">Nihil blanditiis at in nihil autem</a></h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    <div class="post-item">
      <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="flex-shrink-0">
      <div>
        <h4><a href="{{ route('index.index.single-news') }}">Quidem autem et impedit</a></h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    <div class="post-item">
      <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-3.webp') }}" alt="" class="flex-shrink-0">
      <div>
        <h4><a href="{{ route('index.index.single-news') }}">Id quia et et ut maxime similique occaecati ut</a></h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    <div class="post-item">
      <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-1.webp') }}" alt="" class="flex-shrink-0">
      <div>
        <h4><a href="{{ route('index.index.single-news') }}">Laborum corporis quo dara net para</a></h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    <div class="post-item">
      <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="flex-shrink-0">
      <div>
        <h4><a href="{{ route('index.index.single-news') }}">Et dolores corrupti quae illo quod dolor</a></h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

  </div><!--/Recent Posts Widget -->

  <!-- Tags Widget -->
  <div class="tags-widget widget-item">

    <h3 class="widget-title">Tags</h3>
    <ul>
      <li><a href="#">App</a></li>
      <li><a href="#">IT</a></li>
      <li><a href="#">Business</a></li>
      <li><a href="#">Mac</a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Office</a></li>
      <li><a href="#">Creative</a></li>
      <li><a href="#">Studio</a></li>
      <li><a href="#">Smart</a></li>
      <li><a href="#">Tips</a></li>
      <li><a href="#">Marketing</a></li>
    </ul>

  </div><!--/Tags Widget -->

</div>

<style>
  .recent-posts-widget .post-item {
    display: flex;
    margin-bottom: 15px;
  }

  .recent-posts-widget .post-item:last-child {
    margin-bottom: 0;
  }

  .recent-posts-widget .post-item img {
    width: 80px;
    margin-right: 15px;
  }

  .recent-posts-widget .post-item h4 {
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .recent-posts-widget .post-item h4 a {
    color: var(--default-color);
    transition: 0.3s;
  }

  .recent-posts-widget .post-item h4 a:hover {
    color: var(--accent-color);
  }

  .recent-posts-widget .post-item time {
    display: block;
    font-style: italic;
    font-size: 14px;
    color: color-mix(in srgb, var(--default-color), transparent 50%);
  }
</style>