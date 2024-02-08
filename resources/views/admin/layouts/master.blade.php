<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            height:10%;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
h1{
    margin-top:25px;
}
footer {
    height:5%;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color:  black;
  color: white;
  text-align: center;
}
main{
    margin-top:10%;
}

    </style>
</head>
<body>
    <header>
        <nav><h1>ecommerce dashboard</h1></nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        copyright@Hello
    </footer>
</body>
</html>