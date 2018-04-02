@extends('layout')

@section('content')
  <main>
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/articles">Articles</a></li>
        <li class="gray">article</li>
      </ul> 
      <div class="row">
        <div class="col-xs-4">
          <div class="row col-xs-12">
            <div class="col-xs-12">
              <a data-fancybox="gallery" href="images/1.jpg">
                <img src="images/1.jpg" width="100%" style="max-height: 300px;" alt="">
              </a> 
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/7.jpg">
                <img src="images/7.jpg" class="article-image" alt="">
              </a>
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/6.jpg">
                <img src="images/6.jpg" class="article-image" alt="">
              </a>
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/5.jpg">
                <img src="images/5.jpg" class="article-image" alt="">
              </a>
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/4.jpg">
                <img src="images/4.jpg" class="article-image" alt="">
              </a>
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/3.jpg">
                <img src="images/3.jpg" class="article-image" alt="">
              </a>
            </div>
            <div class="col-xs-4">
              <a data-fancybox="gallery" href="images/2.jpg">
                <img src="images/2.jpg" class="article-image" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nulla repellat eaque. Atque, soluta quasi temporibus blanditiis rem voluptatibus accusamus nostrum facere beatae molestias quo, autem, ipsam voluptate itaque dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nulla repellat eaque. Atque, soluta quasi temporibus blanditiis rem voluptatibus accusamus nostrum facere beatae molestias quo, autem, ipsam voluptate itaque dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nulla repellat eaque. Atque, soluta quasi temporibus blanditiis rem voluptatibus accusamus nostrum facere beatae molestias quo, autem, ipsam voluptate itaque dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nulla repellat eaque. Atque, soluta quasi temporibus blanditiis rem voluptatibus accusamus nostrum facere beatae molestias quo, autem, ipsam voluptate itaque dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nulla repellat eaque. Atque, soluta quasi temporibus blanditiis rem voluptatibus accusamus nostrum facere beatae molestias quo, autem, ipsam voluptate itaque dolores.</p>
        </div>
      </div>
    </div>
  </main>
@endsection