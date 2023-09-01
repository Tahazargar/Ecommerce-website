<section class="hero-wrap" style="background-image: url({{ asset('/back/images/hero/' . $hero->image) }});">
    <div class="overlay"></div>
    <div class="container-lg">
      <div class="row min-vh-100 align-items-center justify-content-center text-center">
        <div class="col-lg-9 ">
          <div class="hero-wrap-content position-relative">
            <span class="subheading text-white fs-5 fw-bold">{{' از ' . $hero->foundation }}</span>
            <h1 class="fs-1 text-white fw-bold lh-5 py-3 my-5">{{ $hero->description }}</h1>
            <p class="mt-5">
              <a href="{{ $hero->contact }}" class="btn btn-dark w-25 py-3">تماس با ما</a>
              <a href="{{ $hero->faq }}" class="btn btn-primary w-25 text-dark py-3">سوالات متداول</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
