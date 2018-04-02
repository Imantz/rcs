@extends('layout')

@section('content')
  <main>
    <div class="container">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img width="100%" src="images/11.jpg" alt="image">
          </div>

          <div class="item">
            <img src="images/11.jpg" width="100%" alt="image">
        </div>
          <div class="item">
            <img src="images/11.jpg" width="100%" alt="image">
        </div>
          <div class="item">
            <img src="images/11.jpg" width="100%" alt="image">
        </div>
          <div class="item">
            <img src="images/11.jpg" width="100%" alt="image">
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
    </div>
    
    <div class="row">
      <h5 class="margin-recent-articles">3 most recent articles</h5>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-4">
          <div class="col-xs-4">
          <img src="images/1.jpg" width="100%" height="100px" class="index-img-padding" alt="image">
          </div>
          <h6><a href="/article">Article</a></h6>
          <p class="index-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus consequuntur nobis consequatur ratione dolorum, est provident, excepturi veniam minima repellendus corporis. Consequuntur optio qui ipsum distinctio neque sapiente quo saepe!</p>
      </div>
      <div class="col-sm-12 col-md-4">
          <div class="col-xs-4">
            <img src="images/1.jpg" width="100%" height="100px" class="index-img-padding" alt="image">
          </div>
            <h6><a href="/article">Article</a></h6>
            <p class="index-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus consequuntur nobis consequatur ratione dolorum, est provident, excepturi veniam minima repellendus corporis. Consequuntur optio qui ipsum distinctio neque sapiente quo saepe!</p>
      </div>
      <div class="col-sm-12 col-md-4">
          <div class="col-xs-4">
            <img class="index-img-padding" src="images/1.jpg" width="100%" height="100px" alt="image">
          </div>
            <h6><a href="/article">Article</a></h6>
            <p class="index-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus consequuntur nobis consequatur ratione dolorum, est provident, excepturi veniam minima repellendus corporis. Consequuntur optio qui ipsum distinctio neque sapiente quo saepe!</p>
      </div>  
    </div>
  </main>
@endsection