<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <script src="https://kit.fontawesome.com/ad2af6c518.js" crossorigin="anonymous"></script>
</head>

<body>
    <br> <br> <br>
    <div class="card-container">

        <img class="round" src="{{asset ('images/'.Auth::user()->img)}}" height="200px" width="200 px" alt="user" />
        <h3>{{Auth::user()->name}}</h3>
        <h6>{{Auth::user()->email}}</h6>
        <p>reserves total: {{$total}}</p>
        <div class="buttons">
            <button class="primary">
                <a href="{{url('/ListBooks')}}">List Books</a>
            </button>

        </div>
        <div class="skills">
        </div>
    </div>



    <h1>Reserves</h1>


    <table id="customers">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reserve as $row)
            <tr>
                <td>{{$row->book->name}}</td>
                <td>{{$row->book->author}}</td>
                <td>{{$row->book->category->name}}</td>
                <td>
                    <form action="{{url('/deleteReserve/'.$row->id)}}" method="post" id="form-delete" class="d-inline-flex">
                        @csrf
                        <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" id="btn-delete"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
@include('sweetalert::alert')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $("body").on("click", "#btn-delete", function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro de eliminarlo?',
            text: "la reserva se eliminará permanentemente.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Eliminar',

        }).then((result) => {
            if (result.isConfirmed) {
                $("#form-delete").submit();

            }
        })

        // Other code here
    });
</script>

</html>