<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/css/sidebar.css">

</head>

<body>

    @if (Route::is('first'))
        <h3>You donot have permission to show navbar</h3>
    @else
    @include('layouts.partials.sidebar')
        
    @endif


    @yield('content')






    {{-- script starts --}}
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        // let searchBtn = document.querySelector(".bx-search");
      
        closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });
      
        // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        //   sidebar.classList.toggle("open");
        //   menuBtnChange(); //calling the function(optional)
        // });
      
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
         if(sidebar.classList.contains("open")){
           closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
         }else {
           closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
         }
        }
    </script>
    {{-- script ends --}}
</body>

</html>