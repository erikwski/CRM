<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $is_logged = require("../api/check_login.php");
   if (!$is_logged) {
    header("Location: ../login.php");
    exit();
  }
  //ATTUALMENTE NON INCLUDO LA LIB PHP NELLE PAGINE DELLE VIEW
  //include 'wski.php'
?>
<head>
  <!--- basic page needs
  ================================================== -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Datawski</title>
  <meta name="author" content="erikwski" />

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="../css/all_compile.css" />
  <link rel="stylesheet" href="../css/dashboard.css" />

  <!-- icon of website
  ================================================== -->
  <link rel="shortcut icon" type="image/jpg" href="../img/logo_con_sfondo.jpg"/>
</head>
  
<div class="flex flex-row h-full">
  <nav id="menu" class="bg-white dark:bg-gray-800 w-20 h-screen justify-between flex flex-col fixed top-0 left-0">
    <div class="mt-10 mb-10">
        <a href="#">
            <img src="../img/logo.png" class="rounded-full w-10 h-10 mb-3 mx-auto"/>
        </a>
        <div class="mt-10">
            <ul>
                <li class="my-12 text-center">
                    <a href="clienti.php" class="wski_tooltip" data-tooltip="Clienti">
                        <span class="h-6 w-6 text-gray-500 dark:text-gray-300 mx-auto hover:text-yellow-900 dark:hover:text-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="my-12 text-center">
                    <a href="timer.php" class="wski_tooltip" data-tooltip="Timer">
                        <span class="h-6 w-6 text-gray-500 dark:text-gray-300 mx-auto hover:text-yellow-900 dark:hover:text-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 16 16">
                            <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="my-12 text-center">
                    <a href="storico.php" class="wski_tooltip" data-tooltip="Storico">
                        <span class="h-6 w-6 text-gray-500 dark:text-gray-300 mx-auto hover:text-yellow-900 dark:hover:text-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 16 16">
                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="my-12 text-center">
                    <a href="servizi.php" class="wski_tooltip" data-tooltip="Servizi">
                        <span class="h-10 w-10 text-gray-500 dark:text-gray-300 mx-auto hover:text-yellow-900 dark:hover:text-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="my-12 text-center">
                    <a href="utenti.php" class="wski_tooltip" data-tooltip="Utenti">
                        <span class="h-10 w-10 text-gray-500 dark:text-gray-300 mx-auto hover:text-yellow-900 dark:hover:text-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mb-4">
        <a href="#" class="wski_tooltip more_left" data-tooltip="logout" id="logout">
            <span>
                <svg class="fill-current h-8 w-8 text-gray-300 mx-auto hover:text-red-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                </svg>
            </span>
        </a>
    </div>
  </nav>
</div>

<div id="menu_opacity"></div>
<div id="loading">
    <div class="loader">
        <div class="arc"></div>
        <div class="arc"></div>
        <div class="arc"></div>
    </div>
</div>

<header id="header_page" class="text-center md:text-left p-2 md:p-4 text-4xl text-white uppercase fixed w-full top-0">
    <div id="div_menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </div>
  <h5 id="titolo"></h5>
</header>

<script src="../lib/jQuery.js"></script>
<script src="../lib/wski.js"></script>
<script src="../lib/global_event.js"></script>
<script>
//QUESTO JS VIENE ESEGUITO PER OGNI PAGINA
const wski = new Wski()
</script>