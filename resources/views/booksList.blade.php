<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books List</title>
    <link rel="stylesheet" href="{{asset('css/ListBook.css')}}">
    <script src="https://kit.fontawesome.com/ad2af6c518.js" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h1>List book</h1>
    </center>
    <div>
        <label for="">Filter by</label>
        <select name="" id="filter">
            <option value="" selected disabled>Category</option>
            <option value="0">All</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <br>
    <div>
        <table id="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category->name}}</td>
                    <td><a href="{{url('/addReserve/'.$book->id)}}" title="Add reserve"><i class="fa-solid fa-plus"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function create_list(data) {
            var table = $('#table');
            table.html('');
            var table_head = $('<tr>');
            table_head.append($('<th>').text('Title'))
            table_head.append($('<th>').text('Author'))
            table_head.append($('<th>').text('Category'))
            table_head.append($('<th>').text('Actions'))
            table.append(table_head);


            for (var x in data) {
                var tr = $('<tr>');
                tr.append($('<td>').text(data[x].name));
                tr.append($('<td>').text(data[x].author));
                tr.append($('<td>').text(data[x].category));
                tr.append($('<td>').html('<td><a href="{{url("/addReserve/".$book->id)}}" title="Add reserve"><i class="fa-solid fa-plus"></a></td>'));
                table.append(tr);
            };
        }
        $('#filter').on('change', function() {
            var filter = $(this).val();
            $.ajax({
                url: '{{url("/getBooks")}}/' + filter,
                type: 'GET',
                success: function(data) {
                    var d = JSON.parse(data);
                    create_list(d);
                }
            })
            if (filter == 0) {

                $.ajax({
                    url: '{{url("/getBooksAll")}}',
                    type: 'GET',
                    success: function(data) {
                        var d = JSON.parse(data);
                        create_list(d);
                    }
                })

            }

        })
    })
</script>

</html>