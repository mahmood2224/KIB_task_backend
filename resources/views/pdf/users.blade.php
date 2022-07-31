<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">balance</th>
        <th scope="col">password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users  as $row)
    <tr>
        <th scope="row">{{$row->userId}}</th>
        <td>{{$row->balance}}</td>
        <td>{{$row->realPassword}}</td>
        <td><a title="طباعه وجه الكارت" target="_blank" href="http://sahel.ahmeds.club//Admin/User/pdf?type=1&user_id={{$row->id}}" class="btn btn-primary waves-effect btn-circle waves-light">card</a>
        </td>
    </tr>
        @endforeach

    </tbody>
</table>
</div>
</body>
</html>
