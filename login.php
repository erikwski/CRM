<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo_con_sfondo.jpg"/>
    <link rel="stylesheet" href="css/login.css">
    
    <script src="lib/jQuery.js"></script>
    <script src="lib/wski.js"></script>
  </head>
<body >

    
      <h1 >Login</h1>
      <img src="img/logo.png" alt="none">
    
    <div id="login">
      <input type="text" id="mail" placeholder="mail/username..." >
      
        <input type="password" id="password" placeholder="password..." >
        
      
      <button type="submit" id="try_login">Login</button>
      <p>Password dimenticata?</p>
    </div>





    <script>
      let wski = new Wski()
      const API = wski.getLinkApi("login");
      $("#try_login").click(async()=>{
        if(!$("#mail").val().length || !$("#password").val().length) return alert("Compila i campi scemo");
        let j = await $.get("api/api.login.php",{
          f: "checkLogin",
          mail: $("#mail").val(),
          password: $("#password").val(),
        })
        if(j.length){ 
          //errore
          alert(j)
        }else{
          //carico home
          wski.caricaPagina("views/timer.php", true)
        }
      })
    </script>
</body>
</html>