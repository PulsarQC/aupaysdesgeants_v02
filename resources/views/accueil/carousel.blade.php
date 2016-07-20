
    <div id="moncarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#moncarousel" data-slide-to="0" class="active"></li>
        <li data-target="#moncarousel" data-slide-to="1"></li>
        <li data-target="#moncarousel" data-slide-to="2"></li>
        <li data-target="#moncarousel" data-slide-to="3"></li>
        <li data-target="#moncarousel" data-slide-to="4"></li>
        <li data-target="#moncarousel" data-slide-to="5"></li>
     </ol>
     <ul class="carousel-inner">
       <li class="item active">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img1)}}" alt="{{$accueil[0]->titre_img1}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img1}}</h2>
         </div>
       </li>
       <li class="item">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img2)}}" alt="{{$accueil[0]->titre_img2}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img2}}</h2>
         </div>
       </li>
       <li class="item">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img3)}}" alt="{{$accueil[0]->titre_img3}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img3}}</h2>
         </div>
       </li>
       <li class="item">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img4)}}" alt="{{$accueil[0]->titre_img4}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img4}}</h2>
         </div>
       </li>
       <li class="item">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img5)}}" alt="{{$accueil[0]->titre_img5}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img5}}</h2>
         </div>
       </li>
       <li class="item">
          <div class="col-sm-6 col-xs-12 col-sm-offset-3">
           <img src="{{asset('uploads/'.$accueil[0]->img6)}}" alt="{{$accueil[0]->titre_img6}}" class="img-responsive img-carousel">
           <h2>{{$accueil[0]->titre_img6}}</h2>
         </div>
       </li>
    </ul>    
    <a class="left carousel-control" href="#moncarousel" role="button" data-slide="prev">
        <span id="left" class="fa fa-arrow-circle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#moncarousel" role="button" data-slide="next">
        <span id="right" class="fa fa-arrow-circle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>       
</div>