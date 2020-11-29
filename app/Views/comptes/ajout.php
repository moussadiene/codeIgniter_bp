<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus,
        .active {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }



        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 559px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <h2>Banque du peuple</h2>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>

                <li class="menu-item hidden"><a href="/">Home</a></li>
                <li class="menu-item hidden "><a href="/clients">Client</a>
                </li>
                <li class="menu-item hidden"><a href="/comptes" class="active">Compte</a></li>

            </ul>
        </div>


    </header>

    <!-- CONTENT -->



    <section>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb textè-center">
                <li class="breadcrumb-item"><a href="/comptes">Compte</a></li>
                <li class="breadcrumb-item " aria-current="page">Nouveau Compte</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                Liste Compte
            </div>
            <div class="card-body ">
                <form class="col-12" method="POST" action="/comptes">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="staticEmail" class="col-form-label">Numero</label>
                            <input type="numero" name="numero" class="form-control" id="numero" placeholder="Numero" required>

                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="inlineFormCustomSelect" class="col-form-label">Client</label>
                            <select class="custom-select form-control" id="inlineFormCustomSelect" name="client_id">
                                <option selected>Choose...</option>

                                <?php foreach ($clients as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?= $value->cni . " - " . $value->nom . " - " . $value->prenom ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <hr class="col-lg-11">
                        <div class="form-group col-lg-6 ">
                            <label for="inputPassword" class="col-form-label">Type Compte</label>
                            <br>
                            <div class="col-2"></div>
                            <div class="col-9" id="option_id">
                                <div class="radio radio-info">
                                    <input type="radio" name="typeCompte" id="courant" value="courant" class="radio-single " checked="checked" />
                                    <label for="inlineRadio1"> Courant </label>
                                </div>
                                <div class="radio ">
                                    <input type="radio" name="typeCompte" id="epargne" value="epargne" />
                                    <label for="inlineRadio2"> Simple Xeewel </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="typeCompte" id="bloque" value="bloquer" />
                                    <label for="inlineRadio2"> Bloquer </label>
                                </div>

                            </div>
                            <hr class="col-1">

                        </div>
                        <div class="form-group col-lg-6 " id="form_courant">
                            <label for="">Agios *</label>
                            <input type="number" name="agios" id="agios" class="form-control" value="20000" readonly />

                        </div>

                        <div class="form-group col-lg-6 ok" id="form_epargne">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Remuneration *</label>
                                    <input type="number" name="remuneration" id="remuneration" class="form-control" value="10000" readonly />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Frais d'ouverture *</label>
                                    <input type="number" name="fraisOuverture" id="fraisOuverture" class="form-control" value="15000" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12" id="form_bloque">
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6 row">
                                    <div class="form-group col-6">
                                        <label for="">Date Debut*</label>
                                        <input type="date" name="dateDebut" id="dateDebut" class="form-control" />
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Date Fin*</label>
                                        <input type="date" name="dateFin" id="dateFin" class="form-control" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group col-12">
                            <button type="reset" class="btn btn-dark btn-sm">Anuller</button>&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-success btn-sm">Enregistrer</button>
                        </div>
                    </div>

                    <!--div class="form-group col-6 courant">
                            <label for="inputPassword" class="col-form-label">agios</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                        </!--div>
                        <div class="form-group col-6 bloquer epargne">
                            <label for="inputPassword" class="col-form-label">renumeration</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                        </div>
                        <div class="form-group col-6 bloquer epargne">
                            <label for="inputPassword" class="col-form-label">Frais Ouverture</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                        </div>
                        <div class="form-group col-6 bloquer">
                            <label for="inputPassword" class="col-form-label">dateDebut</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                        </div>
                        <div class="form-group col-6 bloquer">
                            <label for="inputPassword" class="col-form-label">dateFin</label>
                            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                        </div>
                        <div-- class="form-group col-12">
                            <button type="reset" class="btn btn-dark">Anuller</button>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div-->


                </form>
            </div>
        </div>

    </section>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <!--footer class="fixed-bottom">
	<div class="environment">

		<p>Page rendered in {elapsed_time} seconds</p>

		<p>Environment: <?= ENVIRONMENT ?></p>

	</!--div>

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
			open source licence.</p>

	</div>

</footer-->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
        $(document).ready(function() {

            $('#example').DataTable();

            $('#form_courant').show();
            $('#form_epargne').hide();
            $('#form_bloque').hide();
            $('#courant').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').show();
                    $('#form_epargne').hide();
                    $('#form_bloque').hide();
                }
            });

            $('#epargne').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').hide();
                    $('#form_epargne').show();
                    $('#form_bloque').hide();
                }
            });

            $('#bloque').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').hide();
                    $('#form_epargne').hide();
                    $('.ok').show();
                    $('#form_bloque').show();
                }
            });
        });
    </script>

    <!-- -->

</body>

</html>