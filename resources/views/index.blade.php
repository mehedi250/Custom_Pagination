<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Custom Pagination - Index</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .page-num{
                cursor: pointer;
            }
            #search{
                border: 1px solid black;
                border-radius: 4px;
            }
        </style>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                        </li>
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container py-5">
            <form method="GET" action="{{route('site.index')}}" enctype="multipart/form-data" id="data-form">
                <div class="row">
                    <div class="col-md-6">
                        Show 
                        <select name="row" id="row-number">
                            <option value="10" {{(request()->row==10)?"selected":""}}>10</option>
                            <option value="25" {{(request()->row==25)?"selected":""}}>25</option>
                            <option value="50" {{(request()->row==50)?"selected":""}}>50</option>
                            <option value="100" {{(request()->row==100)?"selected":""}}>100</option>
                        </select>
                        entries
                    </div>
                    <div class="col-md-6 text-end">
                        Search <input type="text" name="search" autocomplete="off" class="py-1 px-2" id="search" value="{{request()->search}}">
                    </div>
                </div>
                <div class="w-100 ajax-html" >
                    <table class="table table-striped page-table" data-id='{{$page}}'>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            if(request()->row == null){
                                $row = 0;
                            }
                            else{
                                $row = request()->row;
                            }

                            $c = ($page-1)*$row;
                            @endphp
                            @forelse ($students as $item)
                            <tr>
                            <th scope="row">{{str_pad($c+$loop->index+1, 3, "0", STR_PAD_LEFT)}}</th>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->email}}</td>
                            </tr>    
                            @empty
                        
                            <tr>
                                <td class="text-center" colspan="3">
                                    No data found!
                                </td>
                            </tr>  
                          
                            @endforelse
                        </tbody>
                    </table> 
                    <div class="row page-btn-box">
                        <div class="col-md-4">
                            <p class="page-item">Showing {{($row_view*($page-1))+1}} to {{($row_view*($page-1))+count($students)}} of {{$current_student_count}} entries</p>
                        </div>
                        <div class="col-md-8 text-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                <li class="page-item {{($page==1)?"disabled":"page-num"}}" data-id='-1'>
                                    <a class="page-link"  tabindex="-1">Previous</a>
                                </li>
                               
                                @for ($i = 1; $i <= ceil($page_count); $i++)
                                    <li class="page-item page-num {{($page==$i)?"active":""}}" data-id='{{$i}}'><a class="page-link">{{$i}}</a></li>
                                @endfor
                                
                                {{-- <li class="page-item" data-id='2'><a class="page-link" >2</a></li>
                                <li class="page-item" data-id='3'><a class="page-link">3</a></li> --}}
                                <li class="page-item  {{($page==$i-1)?"disabled":"page-num"}}" data-id='0'>
                                    <a class="page-link ">Next</a>
                                </li>
                                </ul>
                            </nav>        
                        </div>
                    </div>
                </div>
            </form>
        </div>

      


    <script>
        $(document).ready(function () {
            function ajax_request(){
                var row_num = $('#row-number').val();
                var search = $('#search').val();

                $.ajax({
                    url: "{{ route('site.index_ajax') }}",
                    dataType: "json",
                    type:'GET',
                    data: {row:row_num, search:search},
                    success: function(data) {
                        $('.ajax-html').html(data);
                    }
                });
            }
            

            // $('.page-num').click(function(){
            //     var page = $(this).data('id');
               
            //     if(page==-1){
            //         page = current_page-1;
            //     }
            //     else if(page==0){
            //         page = current_page+1;
            //     }
            //     if(page>0){
            //         var html = '<input type="hidden" name="page" class="page-number" value="'+page+'"">';
            //         $('#data-form').append(html);
            //         $('#data-form').submit();
            //     }       
                
            // });
            $('#row-number').change(function(){
                // var row_num = $('#row-number').val();
                // alert(row_num);
                ajax_request();
               
                
            });
            $('#search').keyup(function(){
                // var search = $('#search').val();
                // alert(search);
                ajax_request();
               
                
            });
        });
        $(document).on('click',".page-num", function(){

            var current_page = $('.page-table').data('id');
            var page = $(this).data('id');
               
            if(page==-1){
                page = current_page-1;
            }
            else if(page==0){
                page = current_page+1;
            }
            if(page>0){
                var html = '<input type="hidden" name="page" class="page-number" value="'+page+'"">';
                $('#data-form').append(html);
                $('#data-form').submit();
            }  
        });
        
    </script>
    </body>
</html>
