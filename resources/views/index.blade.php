<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="text" placeholder="Nhập email cần kiểm tra" name="email" value="{{request('email')}}">
        <input type="submit" value="Check">
    </form>
    @if(!empty(request('email')))
        Ket qua: {{$check?'Dung dinh dang Email':'Sai dinh dang email'}}
        @endif
</div>

</body>
</html>
