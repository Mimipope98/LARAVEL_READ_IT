<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <div class="container">
            @yield('content')
          </div>
        </div>
        

        @include('template.partials._aside')

          <div class="sidebar-box ftco-animate">
            <h3>Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">cat</a>
              <a href="#" class="tag-cloud-link">abstract</a>
              <a href="#" class="tag-cloud-link">people</a>
              <a href="#" class="tag-cloud-link">person</a>
              <a href="#" class="tag-cloud-link">model</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section> <!-- .section -->