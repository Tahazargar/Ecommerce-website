<section class="blogs py-5">
    <div class="blog-title py-5">
      <h6 class="fs-6 fw-bold text-center text-primary">وبلاگ ما </h6>
      <h1 class="text-center fw-bold mt-4">بلاگ های اخیر</h1>
    </div>

    <div class="container-lg ">
      <div class="row py-5">
        @foreach($blogs as $blog)
              <div class="col-lg-4 col-md-6 mt-3 mt-md-0">
                  <div class="blog-item bg-white">
                      <div class="blog-img position-relative">
                          <a href="{{ route('blog.detail', ['id' => $blog->id]) }}">
                              <img src="{{ asset('back/images/blog/' . $blog->image) }}" class="w-100" alt="{{ $blog->alt }}">
                              <div class="date">{{ $blog->Jalali() }}</div>
                          </a>
                      </div>
                      <div class="blog-text px-4">
                          <div class="blog-info d-flex py-3">
                              <div class="author d-flex">
                                  <i class="fas fa-user"></i>
                                  <h6 class="pe-1">{{ $blog->user->name }}</h6>
                              </div>
                          </div>
                          <div class="blog-text-title">
                              <a href="{{ route('blog.detail', ['id' => $blog->id]) }}">
                                  <h2 class="fs-5 fw-bold">{{ $blog->subject }}</h2>
                              </a>
                          </div>
                          <div class="blog-decription">
                              <p class="text-muted py-3">{{ \Illuminate\Support\Str::limit(strip_tags($blog->body), 100) }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
      <div class="more-blog text-center">
        <a href="{{ route('blog') }}" class="text-dark bg-primary fw-bold px-5 p-2">همه بلاگ ها</a>
      </div>
    </div>
  </section>
