@extends('layout')

@section('content')
  <main>
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="gray">Articles</li>
      </ul> 


      <div class="col-md-12 art-img-marg">
        <div class="col-md-2">
          <a href="/article"><img src="images/1.jpg" width="150px" height="150px" alt="foto"></a>
        </div>
        <div class="col-md-10">
          <h4><a href="/article">Article 1</a></h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.
          </p>
        </div>
      </div>

            <div class="col-md-12 art-img-marg">
        <div class="col-md-2">
          <a href=""><img src="images/1.jpg" width="150px" height="150px" alt="foto"></a>
        </div>
        <div class="col-md-10">
          <h4><a href="/article">Article 2</a></h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.
          </p>
        </div>
      </div>

            <div class="col-md-12 art-img-marg">
        <div class="col-md-2" >
          <a href=""><img src="images/1.jpg" width="150px" height="150px" alt="foto"></a>
        </div>
        <div class="col-md-10">
          <h4><a href="/article">Article 3</a></h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, adipisci. Explicabo optio nobis omnis cumque voluptatum blanditiis nihil tempora mollitia, ut laborum dolorem quasi, fuga tempore ea. Perspiciatis, ratione, explicabo.
          </p>
        </div>
      </div>


      <div class="col-md-12">
        <div class="pagination">
          <a href="#"><</a>
          <a href="#">1</a>
          <a href="#" class="active">2</a>
          <a href="#">3</a>
          <a href="#">></a>
        </div>
      </div>

    </div>

  </main>
@endsection