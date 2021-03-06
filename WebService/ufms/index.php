<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UFMS</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" type="image/x-icon" href="imagens/ufms-logo-favicon.ico">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.deep_purple-pink.min.css">

    <link rel="stylesheet" href="mdl/material.min.css">
    <!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.material.min.css">-->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.material.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.material.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="mdl/material.min.js"></script>


    <script>
        $(document).ready(function () {
            $("#eventos-content-container").load("list-eventos.php");
        });


    </script>


</head>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <img id="logo" src="imagens/ufms-app-logo-icon.png"/>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>

        <?php

        if (isset($_SESSION['evento-added']) && ($_SESSION['evento-added'] == 1)) {
            echo '
                    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                         <a href="#overview" class="mdl-layout__tab">Home</a>
                         <a href="#eventos" class="mdl-layout__tab is-active">Eventos</a>
                         <a href="#disciplinas" class="mdl-layout__tab">Disciplinas</a>
                         <a href="#matriculas" class="mdl-layout__tab">Matriculas</a>
                         <a href="#notas" class="mdl-layout__tab">Notas</a>        
                     </div>
                     
                     <script>
                      $(document).ready(function () {
                        $("#overview").removeClass("is-active");
                        $("#eventos").addClass("is-active");
                        $("#eventos-content-container").load("list-eventos.php");
                        alert("Evento adicionado com sucesso!");
                      });
                    </script>
                   ';
        } else {
            echo '
                    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                        <a href="#overview" class="mdl-layout__tab is-active">Home</a>
                        <a href="#eventos" class="mdl-layout__tab">Eventos</a>
                        <a href="#disciplinas" class="mdl-layout__tab">Disciplinas</a>
                        <a href="#matriculas" class="mdl-layout__tab">Matriculas</a>
                        <a href="#notas" class="mdl-layout__tab">Notas</a>        
                     </div>
                     
                      <script>
                      $(document).ready(function () {
                        $("#overview").addClass("is-active");
                        $("#eventos").removeClass("is-active");
                        });
                    </script>
                ';
        }
        ?>


    </header>
    <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel" id="overview">
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text">
                        <h4>Projeto</h4>
                        Este projeto tem o objetivo de disponibilizar uma aplicação Android que funcionará
                        em conjunto com esta aplicação web para auxiliar na comunicação entre professores e alunos da
                        instituição <a href="http://cpan.sites.ufms.br/" target="_blank">UFMS</a>.
                        Para saber mais, acesse este projeto no <a target="_blank"
                                                                   href="https://github.com/luizhsda10/UFMSApp">GitHub</a>.
                    </div>
                    <div class="mdl-card__actions">
                        <a href="https://github.com/luizhsda10/UFMSApp" class="mdl-button">Conheça mais sobre este
                            projeto</a>
                    </div>
                </div>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
                    <li class="mdl-menu__item">Lorem</li>
                    <li class="mdl-menu__item" disabled>Ipsum</li>
                    <li class="mdl-menu__item">Dolor</li>
                </ul>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Eventos</h4>

                        <?php
                        require("UfmsDAO.php");
                        $eventos = UfmsDAO::getEventosOverview();

                        foreach ($eventos as $row) {
                            echo '
                               <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                  <div class="section__circle-container__circle mdl-color--primary eventos-home-section"><h5>' . substr(utf8_encode($row['app_nome_evento']), 0, 1) . '</h5></div>
                                 </div>
                                <div
                                    class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                    <h5><strong>' . utf8_encode($row['app_nome_evento']) . '</strong></h5>
                                    <p>' . utf8_encode($row['app_descricao_evento']) . '</p>
                                </div>
                                ';
                        }
                        ?>

                    </div>
                    <div class="mdl-card__actions">
                        <a href="#" class="mdl-button">Ver todos os eventos</a>
                    </div>
                </div>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
                    <li class="mdl-menu__item"><a href="#eventos">Ver todos os eventos</a></li>
                </ul>
            </section>

            <section class="section--footer mdl-color--white mdl-grid">
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                    <div class="section__circle-container__circle mdl-color--accent section__circle--big"
                         id="github-section"></div>
                </div>
                <div
                    class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <h4>Projeto no GitHub</h4>
                    <h5>Projeto disponível neste <a href="https://github.com/luizhsda10/UFMSApp" target="_blank">endereço</a>.
                    </h5>
                    Este projeto está disponível no GitHub sob licença Apache, ou seja, pode ser editado e
                    redistribuído!
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                    <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
                </div>
                <div
                    class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et
                    pariatur ex.
                </div>
            </section>
        </div>

        <div class="mdl-layout__tab-panel wrap-box-container" id="eventos">
            <section class="section--center mdl-grid mdl-grid--no-spacing">

                <div class="mdl-cell mdl-cell--12-col center-box-container">

                    <div class="mdl-grid">
                        <div class="mdl-layout-spacer"></div>


                        <div class="mdl-cell--12-col" id="eventos-content-container">
                        </div>

                        <div class="mdl-layout-spacer"></div>

                    </div>


                </div>

            </section>


        </div>

        <div class="mdl-layout__tab-panel" id="disciplinas">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--12-col">
                    <h4>Disciplinas</h4>

                    <ul class="collection">
                        <li class="collection-item avatar">
                            <img src="imagens/github-logo.png" alt="" class="circle">
                            <span class="title">Title</span>
                            <p>First Line <br>
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Title</span>
                            <p>First Line <br>
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">insert_chart</i>
                            <span class="title">Title</span>
                            <p>First Line <br>
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle red">play_arrow</i>
                            <span class="title">Title</span>
                            <p>First Line <br>
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>

                </div>
            </section>
        </div>

        <div class="mdl-layout__tab-panel" id="matriculas">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--12-col">
                    <h4>Matriculas</h4>
                    <p>Tela de matriculas...</p>
                </div>
            </section>
        </div>

        <div class="mdl-layout__tab-panel" id="notas">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--12-col">
                    <h4>Notas</h4>
                    <p>Tela de notas...</p>
                </div>
            </section>
        </div>

        <footer class="mdl-mega-footer">
            <div class="mdl-mega-footer--middle-section">
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Features</h1>
                    <ul class="mdl-mega-footer--link-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Updates</a></li>
                    </ul>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Details</h1>
                    <ul class="mdl-mega-footer--link-list">
                        <li><a href="#">Spec</a></li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Technology</h1>
                    <ul class="mdl-mega-footer--link-list">
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Patterns</a></li>
                        <li><a href="#">Usage</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contracts</a></li>
                    </ul>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">FAQ</h1>
                    <ul class="mdl-mega-footer--link-list">
                        <li><a href="#">Questions</a></li>
                        <li><a href="#">Answers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="mdl-mega-footer--bottom-section">
                <div class="mdl-logo">
                    More Information
                </div>
                <ul class="mdl-mega-footer--link-list">
                    <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Privacy and Terms</a></li>
                </ul>
            </div>
        </footer>
    </main>
</div>
<?php
unset($_SESSION['evento-added']);
?>
</body>
</html>
