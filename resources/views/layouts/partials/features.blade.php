<section id="features" class="features section-bg">
     
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Features</h2>
          @foreach($data4 as $select)
          <p data-aos="fade-in">{{$select->h_one}}</p>
          @endforeach 
        </div>

        @foreach($data4 as $select)
        <div class="row content">
          
          <div class="col-md-5" data-aos="fade-right">
           
            <img src="{{ asset("/storage/cover_features/".$select->image) }}" style="height:400px;width:400px">
         </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>{{$select->h_two}}</h3>
            <p class="font-italic">
              {{$select->h_three}}
            </p>
            <ul>
              <li><i class="icofont-check"></i>{{$select->h_four}}</li>
              <li><i class="icofont-check"></i> {{$select->h_five}}</li>
            </ul>

          </div>
        </div>
      
        @endforeach
       

       
      </div>
       
    </section><!-- End Features Section -->
