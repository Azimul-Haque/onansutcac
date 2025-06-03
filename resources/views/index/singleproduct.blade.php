@extends('layouts.index')
@section('title') Title 1 | Products @endsection

@section('third_party_stylesheets')

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Product</h1>
        <p>Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Product Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ asset('vendor/dewi/assets/img/news/blog-post-2.webp') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>
                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                  </p>

                  <p>
                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                  </p>

                  <blockquote>
                    <p>
                      Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                    </p>
                  </blockquote>

                  <p>
                    Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                    Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                    Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                  </p>

                  <h3>Et quae iure vel ut odit alias.</h3>
                  <p>
                    Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                    Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                    Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                  </p>
                  <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                  <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                  <p>
                    Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                    Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                  </p>
                  <p>
                    Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                  </p>

                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#" class="badge bg-secondary" style="color: #FFFFFF;">Business</a></li>
                  </ul>

                  <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Creative</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Tips</a></li>
                    <li><a href="#" class="badge bg-primary" style="color: #FFFFFF;">Marketing</a></li>
                  </ul>
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        

        </div>

        <div class="col-lg-4 sidebar">

          @include('partials._productsidebar')

        </div>

      </div>
    </div>

    <section id="relevant-technologies" class="section light-background" style="background-image: url('YOUR_BACKGROUND_IMAGE_URL.jpg'); background-size: cover; background-position: center; min-height: 70vh; display: flex; align-items: center; justify-content: center;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Relevant Markets</h2>
        <p>See Where We Make an Impact<br></p>
      </div><!-- End Section Title --><br>

      <div class="container" data-aos="fade-up">

        <div class="relevant-technologies-widget p-4">
          <div class="row">
            <div class="col-md-4">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link custom-nav-link active" id="v-pills-ro-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ro" type="button" role="tab" aria-controls="v-pills-ro" aria-selected="true">RO Infinity (ROI)</a>
                <a class="nav-link custom-nav-link" id="v-pills-bio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bio" type="button" role="tab" aria-controls="v-pills-bio" aria-selected="false">Bio Infinity (Bio-I)</a>
                <a class="nav-link custom-nav-link" id="v-pills-smartops-tab" data-bs-toggle="pill" data-bs-target="#v-pills-smartops" type="button" role="tab" aria-controls="v-pills-smartops" aria-selected="false">SmartOps AI</a>
                <a class="nav-link custom-nav-link" id="v-pills-sce-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sce" type="button" role="tab" aria-controls="v-pills-sce" aria-selected="false">Selective Contaminant Extraction (SCE)</a>
                <a class="nav-link custom-nav-link" id="v-pills-cge-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cge" type="button" role="tab" aria-controls="v-pills-cge" aria-selected="false">Carrier Gas Extraction (CGE)</a>
                <a class="nav-link custom-nav-link" id="v-pills-fro-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fro" type="button" role="tab" aria-controls="v-pills-fro" aria-selected="false">Free Radical Oxidation (FRO)</a>
              </div>
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-ro" role="tabpanel" aria-labelledby="v-pills-ro-tab" tabindex="0">
                  <p>Combining physical and chemical technologies to target a wide range of difficult-to-remove contaminants at varying loads. Works synergistically with other Gradiant technologies to achieve exacting treatment objectives.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-bio" role="tabpanel" aria-labelledby="v-pills-bio-tab" tabindex="0">
                  <p>Leveraging advanced biological processes for efficient and sustainable wastewater treatment, focusing on nutrient removal and organic degradation. Ideal for various industrial and municipal applications.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-smartops" role="tabpanel" aria-labelledby="v-pills-smartops-tab" tabindex="0">
                  <p>Utilizing artificial intelligence and machine learning to optimize operational efficiency, predict maintenance needs, and enhance decision-making in complex water treatment systems.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-sce" role="tabpanel" aria-labelledby="v-pills-sce-tab" tabindex="0">
                  <p>Specialized technology for precision removal of specific contaminants, ensuring targeted treatment with minimal impact on overall water quality. Highly effective for challenging waste streams.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-cge" role="tabpanel" aria-labelledby="v-pills-cge-tab" tabindex="0">
                  <p>Innovative solution for efficient removal of volatile organic compounds (VOCs) and other gaseous contaminants from liquid streams, often used in industrial wastewater purification.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
                <div class="tab-pane fade" id="v-pills-fro" role="tabpanel" aria-labelledby="v-pills-fro-tab" tabindex="0">
                  <p>An advanced oxidation process generating highly reactive free radicals to break down persistent organic pollutants, effectively treating even the most refractory compounds in water.</p>
                  <a href="#" class="btn btn-primary discover-more-btn mt-3">DISCOVER MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      /* --- Custom CSS for the Widget --- */

      .relevant-technologies-widget {
        background-color: rgba(255, 255, 255, 0.7); /* White with 70% opacity */
        backdrop-filter: blur(10px); /* Frosted glass effect */
        border-radius: 15px; /* Rounded corners for the widget */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Soft shadow */
        padding: 30px; /* Internal padding */
        min-height: 400px; /* Ensure a decent height for the widget */
        display: flex; /* Use flexbox to center content vertically if needed */
        align-items: center; /* Vertically center content */
      }

      /* Styling for the left navigation links */
      .custom-nav-link {
        color: #6a1aed; /* Your desired text color for inactive links */
        font-weight: 500;
        padding: 10px 20px;
        margin-bottom: 8px; /* Space between links */
        border-radius: 0; /* Remove default pill rounding */
        transition: all 0.3s ease; /* Smooth transition for hover/active */
        position: relative; /* For the active line */
        background-color: transparent; /* Ensure no default grey background */
      }

      .custom-nav-link:hover {
        color: #4a00af; /* Darker hover color */
        background-color: rgba(255, 255, 255, 0.3); /* Slightly brighter hover background */
      }

      .custom-nav-link.active {
        color: #000; /* Text color for active link */
        font-weight: 600;
        background-color: transparent; /* No background fill, just the border */
        position: relative; /* For the line */
      }

      .custom-nav-link.active::before {
        content: '';
        position: absolute;
        left: 0; /* Align to the left edge */
        top: 50%;
        transform: translateY(-50%);
        width: 5px; /* Thickness of the active line */
        height: 80%; /* Height of the active line */
        background: linear-gradient(to bottom, #8a2be2, #4a00af); /* Gradient for the active line */
        border-radius: 2px; /* Slightly rounded ends for the line */
      }

      /* Styling for the Discover More button */
      .discover-more-btn {
        background: linear-gradient(to right, #8a2be2, #4a00af); /* Your desired gradient */
        border: none;
        color: white;
        padding: 10px 25px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .discover-more-btn:hover {
        transform: translateY(-2px); /* Slight lift on hover */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        color: white; /* Ensure text color remains white on hover */
      }

      /* Adjustments for text in content area */
      .tab-content p {
        color: #333; /* Darker text for readability */
        line-height: 1.8;
      }
    </style>

    


    


@endsection

@section('third_party_scripts')

@endsection