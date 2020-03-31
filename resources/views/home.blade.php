@extends('layouts.home')

@section('head')
    <!-- Styles -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>

        
        @font-face {
            font-family: MVAWAHEED;
            src: url('{{ asset('fonts/MVAWAHEED.TTF') }}');
        }

 

    .hider{
    display:none;
    }

    .dv, .thaanaKeyboardInput {
        font-family: MVAWAHEED;
        direction: rtl;
        font-size: 1.2rem;
        line-height: 1.1;
    }

    </style>



@endsection

@include('particles.nav')

@section('content')

<br>

<div class="row">

    <div class="col">

        <div class="input-group">
            <input type="text"  class="form-control" name="search" id="search" placeholder="Serach" autocomplete="off">
            <input type="hidden" name="search_thaanaKeyboardState" value="phonetic">
            <div class="input-group-btn">
                <button class="btn btn-default " id="languageChange" >EN</button>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col">

        <ul class="hider list-group"  id="result">
        
        </ul>
    </div>

</div>




    

<div class="container">
    <button type="button" class="btn btn-danger mb-2 ml-3 mt-2">
        Breaking News <span class="badge badge-light">4</span>
    </button>    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-3 active">

                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 1</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 2</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 3</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 4</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 5</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 6</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card 7</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span style="background-color: black" class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span style="background-color: black" class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- partial -->



@endsection

@section('js')

<script src="{{asset('js/jtk-4.2.1.pack.js')}}"></script>
    

<script>

    $("#languageChange").click(
        function() {
            var lang = $(this).text();
            switch(lang) {
                case "EN" :
                    $(this).addClass("dv").text("ހށ");
                    $("#search").addClass("dv").attr("placeholder","ހޯދާ").val('').focus();
                    thaanaKeyboard.setHandlerById("search","enable");
                    break;
                case "ހށ" :
                    $(this).removeClass("dv").text("EN");
                    $("#search").removeClass("dv").attr("placeholder","Enter a word").val('').focus();
                    thaanaKeyboard.setHandlerById("search","disable");
                    break;
            }
            return false;
        }
    );



    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('search.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       
       success:function(data)
       {
        var ul = document.getElementById("result");
        var english = /^[A-Za-z0-9]*$/;
        $('#result').empty();
        if(data['total_data'] <= 0)
        {
            var li = document.createElement("li");
            li.appendChild(document.createTextNode('No Data Found'));
            li.classList.add("list-group-item");
            ul.appendChild( li )
        }

        for( var i = 0; i < data['total_data']; i++ )
        { 
            o = data['data'][i];

            var li = document.createElement("li");
            const anchor = document.createElement('a');
            anchor.href = o.link;
            anchor.innerText = o.title;
            li.appendChild(anchor);

            // var li = document.createElement("li");
            // li.appendChild(document.createTextNode("<a href='sss'>"+o.title+"</a>"));
            li.classList.add("list-group-item");
            if (!english.test(o.title))
            {
                li.classList.add("dv");
                li.classList.add("text-right");
            }
            ul.appendChild( li );     
        } 
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      $('#result').removeClass("hider");  
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>
@endsection

@push('js')


