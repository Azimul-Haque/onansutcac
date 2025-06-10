<div class="widgets-container">

  {{-- <!-- Blog Author Widget -->
  <div class="blog-author-widget widget-item">

    <div class="d-flex flex-column align-items-center">
      <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
      <h4>Jane Smith</h4>
      <div class="social-links">
        <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
        <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
      </div>

      <p>
        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
      </p>

    </div>
  </div><!--/Blog Author Widget --> --}}

  {{-- <!-- Search Widget -->
  <div class="search-widget widget-item">

    <h3 class="widget-title">Search</h3>
    <form action="">
      <input type="text">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>

  </div><!--/Search Widget --> --}}

  <!-- Categories Widget -->
  {{-- <div class="categories-widget widget-item">

    <h3 class="widget-title">Products</h3>
    <ul class="mt-3">
      @foreach($products as $product)
        <li>
          <img src="{{ asset('images/products/' . $product->image) }}" alt="" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
          <a href="{{ route('index.singleproduct', $product->slug) }}">{{ $product->title }}<span>(USA, SG)</span></a>
        </li>
      @endforeach
    </ul>

  </div> --}}
  <!--/Categories Widget -->

  <div class="recent-posts-widget widget-item">

    <h3 class="widget-title">Products</h3>
    @foreach($products as $product)
    <div class="post-item">
      @if($product->image && file_exists(public_path('images/products/' . $product->image)))
        <img src="{{ asset('images/products/' . $product->image) }}" alt="N/A" class="flex-shrink-0">
      @else
        <img src="https://placehold.co/100x100/40b0e0/ffffff?text=P" alt="N/A" class="flex-shrink-0">
      @endif
      <div>
        <h4><a href="{{ route('index.singleproduct', $product->slug) }}">{{ $product->title }}</a></h4>
        {{-- <time datetime="2020-01-01">{{ date('F d, Y', strtotime($product->created_at)) }}</time> --}}
      </div>
    </div><!-- End recent post item-->
    @endforeach
  </div>

  <!-- Recent Posts Widget -->
  <div class="recent-posts-widget widget-item">

    <h3 class="widget-title">Markets</h3>

    @foreach($markets as $market)
      <div class="post-item">
        <img src="{{ asset('images/markets/' . $market->image) }}" alt="N/A" class="flex-shrink-0">
        <h4><a href="{{ route('index.singlemarket', $market->slug) }}">{{ $market->title }}</a></h4>
        {{-- <time datetime="2020-01-01">Jan 1, 2020</time> --}}
      </div><!-- End recent post item-->
    @endforeach
    
  </div><!--/Recent Posts Widget -->

  <!-- Tags Widget -->
  {{-- <div class="tags-widget widget-item">

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

  </div> --}}
  <!--/Tags Widget -->

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
    width: 50px;
    height: 50px;
    object-fit: cover;
    margin-right: 15px;
  }

  .recent-posts-widget .post-item h4 {
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 5px;
    padding: 10px 0px 10px 0px;
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