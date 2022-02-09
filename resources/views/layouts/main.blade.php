<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>
 </head>
 <body>
     <style>
         li:hover{
            cursor: pointer;
            }
     </style>
     <main class="container p-4">
     @section("header")
     <header class="d-flex justify-content-end pt-1 align-items-center"> 
         @if(Auth::check())
         <span class="mt-2 mx-2 p-2 align-middle flex-grow-1"> <i class="material-icons align-middle mx-2" style="font-size:2em">account_circle </i>{{Auth::user()->email}}</span>
         @endif
         <div class="d-flex-fill    ">
         <a type="button" class="btn btn-primary d-flex-inline" href="/register" >Регистрация </a>   
         <a type="button" class="btn btn-primary d-flex-inline" href="/login">Войти</a>
        </div>
     </header>
     <h2 class="text-danger text-center mt-2">*Превышен лимит ключа -расчет работать не будет !</h2>
     @endsection
     @yield("header")
     @yield("content")
    </main>
    <script src="{{asset('js/shipping.js')}}"> </script>

</body>
</html>