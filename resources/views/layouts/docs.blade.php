@extends('layouts.app')

@section('content')
<div class="container">
    <div style="padding: 50px 0 50px 0;">
        <div class="row">
            <div class="col-3">
                <h2 class="mb-2">
                    <b>
                        @yield('title')
                    </b>
                </h2>
                <div class="position-sticky d-flex flex-column text-left" style="top: 2rem;">
                    @yield('sidebar')
                </div>
            </div>
            <div class="col-9">
                <div style="text-align: justify;">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11" id="topButton">
        <svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 512 512"
            style="pointer-events: none;">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM135.1 217.4l107.1-99.9c3.8-3.5 8.7-5.5 13.8-5.5s10.1 2 13.8 5.5l107.1 99.9c4.5 4.2 7.1 10.1 7.1 16.3c0 12.3-10 22.3-22.3 22.3H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H150.3C138 256 128 246 128 233.7c0-6.2 2.6-12.1 7.1-16.3z" />
        </svg>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let mybutton = document.getElementById("topButton");
        
        window.onscroll = function () {
        scrollFunction();
        };
        
        function scrollFunction() {
        if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20 
        ) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
        }
        
        mybutton.addEventListener("click", backToTop);
        
        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    })
</script>
@endsection