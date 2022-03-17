<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo_con_sfondo.jpg"/>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/all_compile.css">
    <script src="lib/jQuery.js"></script>
    <script src="lib/wski.js"></script>
  </head>
<body class="m-0 text-center overflow-hidden" >

    
      <h1 class=" text-3xl text-center mt-0 mb-50 text-white w-full p-0.5" >Login</h1>
      <img src="img/logo.png" alt="none" class="h-200 w-200 mt-0 mb-50">
    
    <div id="login"  class="relative h-1000 mt-0 rounded-t-sm p-2.5 flex flex-col ml">
      <input type="text" id="mail" placeholder="mail/username..." 
        class="mt-50 roudend-md p-2.5 mb-10 text-white placeholder:text-white placeholder:opacity-70">
      
        <input type="password" id="password" placeholder="password..."
        class="mt-50 roudend-md p-2.5 mb-10 text-white placeholder:text-white placeholder:opacity-70" >
        
      
      <button type="submit" id="try_login"
      class="w-3/6 slef-center rounded-sm p-1.5 text-2xl mb-15">
      Login</button>
      <p class="mt-0 self-center opacity-40 underline text-white">Password dimenticata?</p>
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