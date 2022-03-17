<x-app-layout>
<x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
      </h2>
</x-slot>
<link rel="stylesheet" type="text/css" href="/css/home.css">

<section id="home" style="heigth:1200px">
        <div class="central mt-5"><br><br>
          <h2>O que é o sistema CAPPeasy?</h2><br>
          <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br><br><br>
          
          <h2>Como funciona o fluxo do CAPPeasy?</h2><br>
          <!-- <img src="imagens/fluxo.jpg" alt="" width="750px"> -->

          <!-- Tentativa de aplicar slider -->
          <ul class="slider">
            <li>
              <input type="radio" id="slide1" name="slide" checked>
              <label for="slide1"></label>
              <img src="imagens/1.png" width="700px" alt="">
            </li>
            <li>
              <input type="radio" id="slide2" name="slide">
              <label for="slide2"></label>
              <img src="imagens/2.png" width="500px" alt="">
            </li>
            <li>
              <input type="radio" id="slide3" name="slide">
              <label for="slide3"></label>
              <img src="imagens/3.png" alt="">
            </li>
            <li>
              <input type="radio" id="slide4" name="slide">
              <label for="slide4"></label>
              <img src="imagens/4.png" alt="">
            </li>
          </ul>
        </div><br>

        <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagens/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagens/3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->

</section>
</x-app-layout>
