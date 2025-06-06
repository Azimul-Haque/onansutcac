@extends('layouts.index')
@section('title') Privacy Policy @endsection

@section('third_party_stylesheets')

<style>
  .faq-content {
    display: none;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }
</style>
  

@endsection

@section('content')
    <!-- Page Title -->
    {{-- <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('vendor/dewi/assets/img/page-title-bg.webp') }});"> --}}
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('images/other-pages-header-background.gif') }}');">
      <div class="container position-relative">
        <h1>Privacy Policy</h1>
        <p>Safeguarding Your Privacy, Always</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index.index') }}">Home</a></li>
            <li class="current">Privacy Policy</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="privacy" class="privacy section light-background">

      <div class="container aos-init aos-animate" data-aos="fade-up">
        <!-- Header -->
        <div class="privacy-header aos-init aos-animate" data-aos="fade-up">
          <div class="header-content">
            <div class="last-updated">Effective Date: February 27, 2025</div>
            <h1>Privacy Policy</h1>
            <p class="intro-text">This Privacy Policy describes how we collect, use, process, and disclose your information, including personal information, in conjunction with your access to and use of our services.</p>
          </div>
        </div>

        <!-- Main Content -->
        <div class="privacy-content aos-init aos-animate" data-aos="fade-up">
          <!-- Introduction -->
          <div class="content-section">
            <h2>1. Introduction</h2>
            <p>When you use our services, you're trusting us with your information. We understand this is a big responsibility and work hard to protect your information and put you in control.</p>
            <p>This Privacy Policy is meant to help you understand what information we collect, why we collect it, and how you can update, manage, export, and delete your information.</p>
          </div>

          <!-- Information Collection -->
          <div class="content-section">
            <h2>2. Information We Collect</h2>
            <p>We collect information to provide better services to our users. The types of information we collect include:</p>

            <h3>2.1 Information You Provide</h3>
            <p>When you create an account or use our services, you provide us with personal information that includes:</p>
            <ul>
              <li>Your name and contact information</li>
              <li>Account credentials</li>
              <li>Payment information when required</li>
              <li>Communication preferences</li>
            </ul>

            <h3>2.2 Automatic Information</h3>
            <p>We automatically collect and store certain information when you use our services:</p>
            <ul>
              <li>Device information and identifiers</li>
              <li>Log information and usage statistics</li>
              <li>Location information when enabled</li>
              <li>Browser type and settings</li>
            </ul>
          </div>

          <!-- Use of Information -->
          <div class="content-section">
            <h2>3. How We Use Your Information</h2>
            <p>We use the information we collect to provide, maintain, and improve our services. Specifically, we use your information to:</p>
            <ul>
              <li>Provide and personalize our services</li>
              <li>Process transactions and send related information</li>
              <li>Send notifications and updates about our services</li>
              <li>Maintain security and verify identity</li>
              <li>Analyze and improve our services</li>
            </ul>
          </div>

          <!-- Information Sharing -->
          <div class="content-section">
            <h2>4. Information Sharing and Disclosure</h2>
            <p>We do not share personal information with companies, organizations, or individuals outside of our company except in the following cases:</p>

            <h3>4.1 With Your Consent</h3>
            <p>We will share personal information with companies, organizations, or individuals outside of our company when we have your consent to do so.</p>

            <h3>4.2 For Legal Reasons</h3>
            <p>We will share personal information if we have a good-faith belief that access, use, preservation, or disclosure of the information is reasonably necessary to:</p>
            <ul>
              <li>Meet any applicable law, regulation, legal process, or enforceable governmental request</li>
              <li>Enforce applicable Terms of Service</li>
              <li>Detect, prevent, or otherwise address fraud, security, or technical issues</li>
              <li>Protect against harm to the rights, property, or safety of our users</li>
            </ul>
          </div>

          <!-- Data Security -->
          <div class="content-section">
            <h2>5. Data Security</h2>
            <p>We work hard to protect our users from unauthorized access to or unauthorized alteration, disclosure, or destruction of information we hold. In particular:</p>
            <ul>
              <li>We encrypt our services using SSL</li>
              <li>We review our information collection, storage, and processing practices</li>
              <li>We restrict access to personal information to employees who need that information</li>
            </ul>
          </div>

          <!-- Your Rights -->
          <div class="content-section">
            <h2>6. Your Rights and Choices</h2>
            <p>You have certain rights regarding your personal information, including:</p>
            <ul>
              <li>The right to access your personal information</li>
              <li>The right to correct inaccurate information</li>
              <li>The right to request deletion of your information</li>
              <li>The right to restrict or object to our processing of your information</li>
            </ul>
          </div>

          <!-- Policy Updates -->
          <div class="content-section">
            <h2>7. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the effective date at the top.</p>
            <p>Your continued use of our services after any changes to this Privacy Policy constitutes your acceptance of such changes.</p>
          </div>
        </div>

        <!-- Contact Section -->
        <div class="privacy-contact aos-init aos-animate" data-aos="fade-up">
          <h2>Contact Us</h2>
          <p>If you have any questions about this Privacy Policy or our practices, please contact us:</p>
          <div class="contact-details">
            <p><strong>Email:</strong> privacy@example.com</p>
            <p><strong>Address:</strong> 123 Privacy Street, Security City, 12345</p>
          </div>
        </div>

      </div>

    </section>
    

    <section id="stats" class="stats section light-background" style="background: linear-gradient(to right, #39b54a, #007cc2); color: white; padding: 80px 0; text-align: center;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 700; font-size: 2rem; margin-bottom: 10px; color: #ffffff;">Your Solution Hub</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">
          Navigate with ease. Expertise and support are just a click away.
        </p>
        <a href="{{ route('index.help-center') }}" class="btn btn-light" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Help Center
        </a>
        <a href="{{ route('index.information-center') }}" class="btn btn-dark" style="color: #39b54a; font-weight: 600; padding: 10px 24px; border-radius: 30px; animation: experience-float 3s ease-in-out infinite; margin: 5px;">
          Information Center
        </a>
      </div>
    </section>

    


@endsection

@section('third_party_scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
  document.querySelectorAll('.faq-item h3').forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const icon = header.querySelector('.faq-toggle');

      if (content.style.display === "block") {
        content.style.display = "none";
        icon.classList.remove('bi-dash-lg');
        icon.classList.add('bi-plus-lg');
      } else {
        content.style.display = "block";
        icon.classList.remove('bi-plus-lg');
        icon.classList.add('bi-dash-lg');
      }
    });
  });
</script>


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init(); // Initialize AOS if you're using it
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // This is for the +/- icon toggle, if it's not directly handled by Bootstrap's collapse.
    // If your theme uses a custom script for this, you'll need to adapt.
    const faqItems = document.querySelectorAll('.faq-item h3');

    faqItems.forEach(item => {
      item.addEventListener('click', function() {
        const faqContent = this.nextElementSibling;
        const toggleIcon = this.querySelector('.faq-toggle');

        // Toggle the active class on the faq-item
        this.parentNode.classList.toggle('active');

        // Toggle the display of the content
        if (faqContent.style.maxHeight) {
          faqContent.style.maxHeight = null;
          toggleIcon.classList.remove('bi-dash-lg');
          toggleIcon.classList.add('bi-plus-lg');
        } else {
          faqContent.style.maxHeight = faqContent.scrollHeight + "px";
          toggleIcon.classList.remove('bi-plus-lg');
          toggleIcon.classList.add('bi-dash-lg');
        }
      });
    });
  });
</script> --}}

@endsection