<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
</head>
<body>
 {{-- <a href="{{ route('viewstudent')}}">View Students</a>    --}}
<div class="container mt-4">
    <form action="{{ route('student.addstudentnew')}}" method="post">
        @csrf
           <div class="mb-3">
         
            Name &nbsp &nbsp &nbsp &nbsp<input type="text" name="name" placeholder="Name"/>
</div>
<div class="mb-3">
         Weight &nbsp &nbsp
         <input type="text" name="weight" placeholder="Weight"/>
</div>
         <input type="submit" class="btn btn-primary" value="Submit"/>
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

