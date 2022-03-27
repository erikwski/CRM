<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo_con_sfondo.jpg"/>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/all_compile.css">
    <script src="lib/jQuery.js"></script>
    <script src="lib/wski.js"></script>
  </head>
  <body class="m-0 text-center body_login flex items-center justify-center flex-col h-screen bc_background">
    
    <div id="login" class="relative mt-0 p-2.5 flex flex-col max-w-md w-11/12 sm:w-4/5 md:w-2/3 rounded-xl bc_opacity_primary py-8 px-2 md:px-4">
      <img src="img/logo.png" alt="none" class="h-40 w-40 mx-auto -mt-4 mb-8">
      
      <div class="flex flex-col mb-2 px-6">
        <div class="flex relative ">
          <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
              </path>
            </svg>
          </span>
          <input type="text" id="mail" class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-yellow-900 focus:border-transparent" placeholder="Your email"/>
        </div>
      </div>
      <div class="flex flex-col mb-6 px-6">
        <div class="flex relative ">
          <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z">
              </path>
            </svg>
          </span>
          <input type="password" id="password" class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-yellow-900 focus:border-transparent" placeholder="Your password"/>
        </div>
      </div>
    
      
      <button 
        type="submit" 
        id="try_login"
        class="w-3/6 self-center rounded-3xl p-1.5 text-2xl mb-15 bc_primary secondary_on_hover"
      >Login</button>
    </div>
    <script>
      let wski = new Wski()
      const API = wski.getLinkApi("login");
      $("html").keypress((e)=>{
        if(e.keyCode === 13) $("#try_login").click();
      })
      $("#try_login").click(async()=>{
        if(!$("#mail").val().length || !$("#password").val().length) return alert("Compila i campi scemo");
        wski.caricamentoInizio()
        let j = await $.get("api/api.login.php",{
          f: "checkLogin",
          mail: $("#mail").val(),
          password: $("#password").val(),
        })
        if(j.length){ 
          //errore
          wski.caricamentoFine()
          alert(j)
        }else{
          //carico home
          wski.caricaPagina("views/timer.php", true)
        }
      })
    </script>
</body>
</html>