<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('animate.css')}}">

    <title>Post Leaf</title>
    <style>


    </style>
</head>
<body class="">
<div class="container mt-3 d-flex justify-content-center col-sm-10">
    <div class="shadow-lg p-3 mb-5 bg-white align-self-center rounded col-sm-1 mt-5 text-center rounded "
         style="height: 180px">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item "><img src="{{asset('images/folha.png')}}" class="rounded img-login" alt="..."
                                              style="width: 1.8em"></li>
            <a href="{{route('welcome')}}">
                <li class="list-group-item border-bottom"><i class="fas fa-home fa-x2"></i></li>
            </a>
            <a href="{{route('user.create')}}">
                <li class="list-group-item"><i class="fas fa-plus"></i></li>
            </a>
        </ul>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded col-sm-5 mt-5 text-center rounded">
        <div class="text-center">
            <img src="{{asset('images/folha.png')}}" class="rounded img-login" alt="..." width="30%">
            <h3 class="font-speacial-elite mt-2">Post Leaf / Register</h3>
        </div>
        @foreach($user as $u)
            <form method="POST" action="{{route('user.update',['user'=>$u->id])}}" class="p-4">
                @method('PUT')
                @csrf
                <div class="form-group mt-3">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div
                                class="input-group-text bg-white rounded-0 border-bottom border-top-0
                            border-right-0 border-left-0">
                                <i class="fas fa-user text-gray-suave"></i></div>
                        </div>
                        <input type="text"
                               class="form-control form-login rounded-0 border-bottom border-top-0 border-right-0
                           border-left-0 font-montserrat "
                               id="inlineFormInputGroupUsername2" placeholder="What's your name?"
                               name="name"
                               value="{{$u->name}}">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div
                                class="input-group-text bg-white rounded-0 border-bottom border-top-0
                            border-right-0 border-left-0">
                                <i class="fas fa-at text-gray-suave"></i></div>
                        </div>
                        <input type="email"
                               class="form-control form-login rounded-0 border-bottom border-top-0 border-right-0
                           border-left-0 font-montserrat "
                               id="inlineFormInputGroupUsername2" placeholder="Email"
                               name="email"
                               value="{{$u->email}}">
                    </div>
                </div>
                <div class="form-group mt-4 ">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div
                                class="input-group-text bg-white rounded-0 border-bottom border-top-0 border-right-0
                            border-left-0">
                                <i class="fas fa-key text-gray-suave"></i></div>
                        </div>
                        <input type="password"
                               class="form-control form-login rounded-0 border-bottom border-top-0 border-right-0 border-left-0 font-montserrat "
                               id="inlineFormInputGroupUsername2" placeholder="Password"
                               name="password"
                               value="{{$u->password}}">
                    </div>
                </div>
                @if(isset($_GET['status']) and $_GET['status'] == 'fail')
                    <div class="alert alert-warning mt-2" role="alert">
                        I'm sorry, your email is already in use :(
                    </div>
                @endif
                <button type="submit" class="font-montserrat btn btn-warning text-white col-sm-6 mt-3">Save <i
                        class="fas fa-save"></i></button>


            </form>
        @endforeach
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="{{asset('bootstrap.js')}}"></script>
<script src="{{asset('jquery.js')}}"></script>
</body>
</html>
