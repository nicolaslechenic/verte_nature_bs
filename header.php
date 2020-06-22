<header>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" >
                    Connection
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">S'identifier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <form action="/action_page.php" class="was-validated">
                                    <div class="form-group">

                                        <label for="uname">Adresse Mail:</label>
                                        <input type="text" id="InputEmail1" class="form-control"
                                            placeholder="Entrer votre mail">
                                        <span id="mailErrormodal"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Mot de passe:</label>
                                        <input type="password" class="form-control" id="InputPassword1"
                                            placeholder="Entrer votre mot de passe">
                                        <span id="mdpError"></span>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" required>
                                            J'accepte les conditions générale.
                                            <div class="valid-feedback">Valide</div>
                                            <div class="invalid-feedback">Veuillez cocher pour continuer.</div>
                                        </label>
                                    </div>
                                    <button type="submit" id="envoi_modal" class="btn btn-success">Soumettre</button>

                                </form>

                                </br>
                                <h4>S'inscrire</h4>
                                </br>
                                <form action="/action_page.php">
                                    <label for="usrname">Votre Mail </label>
                                    <input type="text" class="form-control" id="usrname" name="usrname" required></br>

                                    <label for="psw">Mot De Passe</label>
                                    <input type="password" class="form-control" id="psw" name="psw"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        required>
                                    </br>
                                    <button type="submit" class="btn btn-success">Soumettre</button>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                            </div>



                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <figure>
                                <a href="index.html"><img src="public/images/logos/logo-verte-nature2.png" alt="logo-verte-nature"
                                        class="img-fluid img-logo"></a></figure>
                        </div>
                    </div>
                    <!-- A grey horizontal navbar that becomes vertical on small screens  -->

                    <nav class="navbar navbar-expand-sm bg-success navbar-dark justify-content-center">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Links -->
                        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item  bg-muted ">
                                    <a id="page" class="nav-link " href="index.html">Accueil</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="presentation.html">Présentation</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="boutique.html">Boutique</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="contact.html">Contact/Accès</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
</header>