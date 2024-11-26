<div class="m-10 bg-gradient-to-r from-primary via-gray-500 to-primary relative">
  <div class="max-w-full relative m-auto" id="image-slideshow">

    @for($i = 0; $i < count($images); $i++)
      <div class="slideshow-child slideshow-fade">
        <img class="aspect-video object-contain max-h-[80vh] rounded-xl" src="{{ $images[$i] }}" style="width:100%">
      </div>
    @endfor

    <button class="slideshow-prev" onclick="plusSlides(-1)">&#10094;</button>
    <button class="slideshow-next" onclick="plusSlides(1)">&#10095;</button>
  </div>

  <div class="text-center w-full absolute bottom-4 left-0 flex justify-center">
    <div class="px-3 py-1 bg-black rounded-md">
      @for($i = 0; $i < count($images); $i++)
        <span class="slideshow-dot" onclick="setSlide({{ $i + 1 }})"></span>
      @endfor
    </div>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function setSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("slideshow-child");
      let dots = document.getElementsByClassName("slideshow-dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove("slideshow-active");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].classList.add("slideshow-active");
    }
  </script>
</div>
