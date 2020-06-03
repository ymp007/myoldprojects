
<html>
<head>
<title>Hello World</title>
</head>
<body>
  <h1>
      <?php
        echo "Hello World";

       ?>
  </h1>
  <p id="log"></p>
  <button onclick="Login()">Login</button>
  <script type="text/javascript">
    function Login() {
      document.getElementById('log').innerHTML="You are Logged in";
    }
  </script>
</body>
</html>
