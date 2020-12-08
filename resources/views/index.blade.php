@extends("theme/lte/layout")
@section('titulo')
    Inicio
@endsection
@section('contenido')
    <!--link rel="stylesheet" href="{.{asset('css/.css')}}"-->{{-- 
    <link href="{{ asset('slick/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet" type="text/css" / --}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <div class="slider autoplay slick-initialized slick-slider">
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1476px; transform: translate(-861px, 0px);"><div class="multiple slide cloned" style="width: 123px;"><h3>4</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>5</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>6</h3></div><div class="multiple slide" style="width: 123px;"><h3>1</h3></div><div class="multiple slide" style="width: 123px;"><h3>2</h3></div><div class="multiple slide" style="width: 123px;"><h3>3</h3></div><div class="multiple slide" style="width: 123px;"><h3>4</h3></div><div class="multiple slide active" style="width: 123px;"><h3>5</h3></div><div class="multiple slide" style="width: 123px;"><h3>6</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>1</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>2</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>3</h3></div></div></div>
                        
                        
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1476px; transform: translate(-984px, 0px);"><div class="multiple slide cloned" style="width: 123px;"><h3>4</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>5</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>6</h3></div><div class="multiple slide" style="width: 123px;"><h3>1</h3></div><div class="multiple slide" style="width: 123px;"><h3>2</h3></div><div class="multiple slide" style="width: 123px;"><h3>3</h3></div><div class="multiple slide" style="width: 123px;"><h3>4</h3></div><div class="multiple slide" style="width: 123px;"><h3>5</h3></div><div class="multiple slide active" style="width: 123px;"><h3>6</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>1</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>2</h3></div><div class="multiple slide cloned" style="width: 123px;"><h3>3</h3></div></div></div>

                        <a href="javascript:void(0)" class="slick-prev" style="display: block;">Previous</a>
                        <a href="javascript:void(0)" class="slick-next" style="display: block;">Next</a>
                        
                      <a href="javascript:void(0)" class="slick-prev" style="display: block;">Previous</a><a href="javascript:void(0)" class="slick-next" style="display: block;">Next</a><ul class="slick-dots" style="display: block;"><li class=""><a href="javascript:void(0)">1</a></li><li class=""><a href="javascript:void(0)">2</a></li><li class=""><a href="javascript:void(0)">3</a></li><li class=""><a href="javascript:void(0)">4</a></li><li class="active"><a href="javascript:void(0)">5</a></li><li class=""><a href="javascript:void(0)">6</a></li></ul></div>
                      <ul class="slick-dots" style="display: block;"><li class="active"><a href="javascript:void(0)">1</a></li><li class=""><a href="javascript:void(0)">2</a></li><li class=""><a href="javascript:void(0)">3</a></li><li class=""><a href="javascript:void(0)">4</a></li><li class=""><a href="javascript:void(0)">5</a></li><li class=""><a href="javascript:void(0)">6</a></li></ul>
                    </div>
                    <div class="card-footer">
                        <a href="" class="col-md-12">Ver Mas</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
   {{--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
   <style>
     .autoplay >div{
       margin-right: 100px;
       margin-left: 100px;
     }
     .slide-item {/*Cards*/
      float:center;
    background-color: #f1f1f1;
        width: 250px;
     max-width :271px;
      height:50px;
    /* max-height: 271px; */
     
    /* margin:  15px 15px 15px 15px ;
    padding:  15px 15px 15px 15px ; */
    text-align: center;
    line-height: 75px;
    font-size: 10px;    
    border-radius: 9px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    
    }
   </style>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0.001,
        });
    });
  </script>
 
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src={{ asset('slick/slick.min.js') }}></script>
@endsection
