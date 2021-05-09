<section id="services" class="services section-bg">
   
      <div class="container">
        <div class="section-title">

          <h2 data-aos="fade-in">Services</h2>
          @foreach($data3 as $print)
          <p data-aos="fade-in">{{$print->heading}}</p>
          @endforeach
       </div>
          <div class="row">
            @foreach($data3 as $print)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset("/storage/cover_images2/".$print->image_one) }}" style="height:500px;width:500px">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                <p class="card-text">{{ $print->title_one }}</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
           @endforeach
          </div>
          
         
        </div>
         </div>
      </div>
   
    </section><!-- End Services Section -->
