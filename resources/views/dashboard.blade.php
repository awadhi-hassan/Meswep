<x-app-layout>
    <x-slot name="header">
        <strong>Dashboard</strong>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ( Auth::user() )
                Hello <strong>{{ Auth::user()->name }}</strong>, welcome to MESWEP's online platform.                
            @else
                Hello, welcome to MESWEP's online platform.                
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 style="color: #0f893b"><strong>Muslim Education Secretariat-Western Province</strong></h4>
                    <div class="mt-2">
                        Muslim Education Secretariat-Western Province (MESWEP) is the official representative of Muslim Education Council (MEC)
                        in Kakamega, Bungoma, Busia and Vihiga and consequently, the official sponsor of all Muslim Educational Institutions in
                         this region in accordance with Article 53 of the Constitution of Kenya.         
                    </div>

                    <div class="d-flex" style="justify-content:space-evenly">
                        <div class="col-7">
                            <!-- Slideshow container -->
                            <div class="slideshow-container mt-3">
                            
                                <!-- Full-width images with number and caption text -->
                                @for ($i = 1; $i <= 13; $i++)
                                    <div class="slideshow justify-start">
                                        <div class="numbertext">{{$i}} / 13</div>
                                        <img src="{{ asset("storage/media/kakamega{$i}.jpg") }}" id="mosques">
                                        <div class="text">Kakamega Jamia Mosque</div>
                                    </div>                                    
                                @endfor                           
                            </div>
                            <br>
                            
                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                @for ($i = 0; $i <=13 ; $i++)
                                    <span class="dot" onclick="currentSlide({$i})"></span>                                    
                                @endfor
                            </div>                    
                        </div>
                        <div>
                            <div class="mt-4" style="text-align: center">
                                <h5 style="color: #0f893b"><strong>Where we work.</strong></h5>
                                MESWEP works in the counties of Kakamega, Bungoma Busia and Vihiga in the Western region of Kenya.
                            </div>
    
                            <div class="mt-4">
                                <h5 style="color: #0f893b; text-align:center;"><strong>Who we work with.</strong></h5>
                                MESWEP works with all Muslim education institutions from pre-primary, Primary, Secondary and post-secondary education institutions including
                                 madrassas. MESWEP networks with all education actors and may affiliate with such likeminded bodies/organizations from within and without the
                                 area of operation including outside the country. MESWEP is affiliated to and works closely with Muslim Education Council (MEC) outlined
                                 in Article 53 of the Constitution of Kenya (the Basic Education Act).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();
        
            // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

            // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("slideshow");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }            
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "flex";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 10000); // Change image every 2 seconds
        }      
    </script>

</x-app-layout>