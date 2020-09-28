$(document).ready(function(){
 		$(".slider-one").owlCarousel({
            items: 5,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                }
            }
        });

  // Owl Carousel

$(".slider-two").owlCarousel({
            items: 11,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });

});

// $(document).ready(function(){
//   document.getElementById('latestAdded').innerHTML = `  
//                 <div class="card border mb-4 mb-md-0 col-md-4 col-12">
//                     <div class="card-body bg-light d-flex flex-row d-md-flex flex-column">
//                         <div class="card-img">
//                             <img src="{{$latest->img}}" class="card-img-top" alt="cars" style="height: 15vw">
//                         </div>
//                         <div class="card-content">
//                             <h5 class="card-title mt-1">{{$latest->category['name']}}, {{$latest->name}}, {{($latest->price)}} $, {{$latest->year}}</h5>
//                             <div class="card-content-features py-3">
//                                 <p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Odometr: {{$latest->odometr}} km</p>
//                                 <p class="card-text my-0"><i class="fas fa-gas-pump mr-2"></i>Engine type: {{$latest->engine}}</p>
//                                 <p class="card-text my-0"><i class="fas fa-truck-monster mr-2"></i>Transmission type: {{$latest->transmission}}</p>
//                             </div>
//                         </div>
//                         <a href="product/{{$latest->slug}}" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
//                     </div>
//                 </div>


//   `;
// });



