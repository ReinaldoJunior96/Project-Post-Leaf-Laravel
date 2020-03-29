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
    <div class="shadow-lg p-3 mb-5 bg-white rounded col-sm-10 mt-5 text-center rounded">
        <table class="table font-montserrat ">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created in</th>
                <th scope="col">Updated in</th>
                <th>#</th>
                <th>%</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a href="{{route('user.edit',['user'=>$user])}}"><i class="fas fa-marker"></i></a></td>
                    <td>
                        <form name="form_delete" action="{{route('user.destroy',['user'=>$user])}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="#" onclick="this.parentNode.submit();"><i class="fas fa-trash"></i></a>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="{{asset('bootstrap.js')}}"></script>
<script src="{{asset('jquery.js')}}"></script>
</body>
</html>
