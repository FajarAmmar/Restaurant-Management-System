<!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>

                       @foreach($data as $data) 

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div style ="width: 500px; height: 500px; " class="menu-thumb">
                              <a href="/foodimage/{{$data->image}}" class="image-popup" title="American Breakfast">
                                   <img src="/foodimage/{{$data->image}}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>{{$data->title}}</h3>
                                             <p>{{$data->description}}</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Rp. {{$data->price}}</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    @endforeach


               </div>
          </div>
     </section>