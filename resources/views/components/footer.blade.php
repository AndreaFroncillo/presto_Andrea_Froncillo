<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1 fbi-custom"
        href="https://www.facebook.com"
        role="button"
        ><i class="bi bi-facebook"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1 bg-dark"
        href="https://x.com"
        role="button"
        ><i class="bi bi-twitter-x"></i
      ></a>


      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1 insta-i-custom"
        href="https://www.instagram.com"
        role="button"
        ><i class="bi bi-instagram"></i
      ></a>

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <div class="col-md-5 offset-md-1 mb-3 text-center">
    <h5>{{ __('ui.become_revisor_title') }}</h5>
    <p>{{ __('ui.become_revisor_text') }}</p>

    <a href="{{route('become.revisor')}}" class="btn btn-success">{{ __('ui.become_revisor_button') }}</a>
  </div>
  <!-- Copyright -->
  <div class="text-center p-3 footer-custom">
    © 2025 Copyright:
    <a class="text-body" href="#">Presto.it</a>
  </div>
  <!-- Copyright -->
</footer>