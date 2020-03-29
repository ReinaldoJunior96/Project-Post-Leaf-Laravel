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
<div class="container mt-2 d-flex justify-content-center col-sm-10">
    <div class="shadow-lg p-3 mb-5 bg-white rounded col-sm-5 mt-5 text-center rounded">
        <div class="text-center">
            <img src="{{asset('images/folha.png')}}" class="rounded img-login" alt="..." width="30%">
            <h3 class="font-speacial-elite mt-2 text-gray-suave">Welcome to Post Leaf</h3>
        </div>
        <form method="POST" action="" class="p-4">
            @csrf
            <div class="form-group mt-3">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div
                            class="input-group-text bg-white rounded-0 border-bottom border-top-0
                            border-right-0 border-left-0">
                            <i class="fas fa-at text-info"></i></div>
                    </div>
                    <input type="email"
                           class="form-control form-login rounded-0 border-bottom border-top-0 border-right-0
                           border-left-0 font-montserrat "
                           id="inlineFormInputGroupUsername2" placeholder="Email"
                           name="email">
                </div>
            </div>
            <div class="form-group mt-4 ">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div
                            class="input-group-text bg-white rounded-0 border-bottom border-top-0 border-right-0
                            border-left-0">
                            <i class="fas fa-key text-info"></i></div>
                    </div>
                    <input type="password"
                           class="form-control form-login rounded-0 border-bottom border-top-0 border-right-0 border-left-0 font-montserrat "
                           id="inlineFormInputGroupUsername2" placeholder="Password"
                           name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-info text-white font-speacial-elite col-sm-4 mt-3">Login <i class="fas fa-paper-plane"></i></button>
            <div class="text-center d-flex justify-content-center">
                <div class="row ">
                    <footer class="mt-3">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight"><a href="{{route('user.create')}}"
                                                                       style="text-decoration: none"
                                                                       class="font-montserrat text-gray-suave">
                                    Register
                                </a></div>
                            <div class="p-2 flex-fill bd-highlight"><a href="{{route('user.index')}}"
                                                                       style="text-decoration: none"
                                                                       class="font-montserrat text-gray-suave">
                                    Show users

                                </a></div>
                        </div>


                    </footer>
                </div>
            </div>


        </form>
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="{{asset('bootstrap.js')}}"></script>
<script src="{{asset('jquery.js')}}"></script>
</body>
</html>
