<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <!-- les deux liens suivants sont des liens de google font: css => font-family: 'Skranji', cursive;  -->
    <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>CV AGBELOU Adjoukou</title>
</head>
<body>
<div id="main" class="container-fluid p-0">
  <img class="main-bg_img" src="cv-img/clavier+bloc-not.webp" alt="Ordinateur ouvert">
        <div id="main_nav-block" class="row col-lg sticky-top">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" role="navigation">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-center">
                            <li class="nav-item">
                                <a class="nav-link text-light p-5" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light p-5" href="formations.html">Formations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light p-5" href="experiences.html">Expériences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light p-5" href="competences.html">Compétences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light p-5" href="realisation.html">Réalisations</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-black-100 font-weight-bolder p-5" href="contactes.php">Contactes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black-100 font-weight-bolde p-5" href="cv-img\CV-DWWM-AGBELOU-Adjoukou.pdf" download="CV AGBELOU Adjoukou"><i class="fa fa-download dowloadLink" aria-hidden="true">PDF</i></a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
          <div>
              <h2 class="main_title col-lg-12 text-center bg-info p-5">CONTACTEZ-MOI</h2>
          </div>
            <!-- <div class="divider"></div> -->
            <div class="row bg-info p-5 m-0">
                <div class="col-lg-10 form_contact bg-light p-5">
                    <form id="contactForm" method="POST" action="" role="form">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="Last name" class="form-label">Nom ou Raison Sociale <span class="labelRequierStar">*</span></label>
                                <input type="text" id="nom" name="name" class="form-control" placeholder="Votre Nom" aria-label="last name" onblur='verifyInput("nom")'>
                                <span class="error errorMessage">Veuillez compléter ce champs</span>
                                <!-- <span class="error hide"></span>  -->
                            </div>
                            <div class="col-md-6">
                                <label for="first name" class="form-label">Prénom</label>
                                <input type="text" id="prenom" name="firstName" class="form-control" placeholder="Votre Prenom" aria-label="First name" onblur='verifyInput("")'>
                                <!-- <span class="errorMessage">Veuillez compléter ce champs</span> -->
                                <!-- <span class="error hide"></span>  -->
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="Email" class="form-label">Email <span class="labelRequierStar">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Votre Email" aria-label="email" onblur='verifyInput("email")'>
                                <span class="errorMessage">Veulliez saisir une adresse mail valide</span>
                                <!-- <span class="error hide"></span>  -->
                            </div>
                            <div class="col-md-6">
                                <label for="telephone" class="form-label">Téléphone<span class="labelRequierStar">*</span></label>
                                <input type="tel" id="telephone" name="telphone" class="form-control" placeholder="Numero de Telephone" aria-label="telephone" onblur='verifyInput("telephone")'>
                                <span class="errorMessage">Veulliez saisir un numero de téléphone valide</span>
                                <!-- <span class="error hide"></span>  -->
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message <span class="labelRequierStar">*</span></label>
                            <textarea class="form-control" id="message" name="message" placeholder="Saisissez votre message ici" rows="5" onblur='verifyInput("message")'></textarea>
                            <span class="errorMessage">Vous deviez saisir au minimum 100 caractères</span>
                            <!-- <span class="error hide"></span>  -->
                        </div>
                        <div class="labelRequierNotification mb-4">* Ces informations sont requises Je m'engages à les concerver à titre personnel</div>
                        <div class="col">
                            <input type="submit" class="form-control butonSubmit" name="envoyer" value="Envoyer">
                            <input type="hidden" class="form-control butonSubmit_disable" value="Envoyer">
                        </div>
                        <div id="feedBackMessage-success" class="alert alert-success" role="alert">
                            Message envoyé avec succès ! Merci de nous avoir contacté :)
                          </div>
                          <div id="feedBackMessage-failed" class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                          </div>
                                <script>
                                    //Fonction pour tester les valeurs des champs de saisie
                                    function verifyInput(variable){
                                            $("#"+variable+"span").addClass("errorMessage");
                                            $("#"+variable).css("border", "1px solid black");
                                            //On teste voir si le champ est vide
                                        if ($("#"+variable).val()==""){
                                            $("#"+variable+"+span").css("color", "red").removeClass("errorMessage");
                                            $("#"+variable).css("border", "1px solid red");
                                        }else{
                                            //On va tester la validité de l'email
                                            if (variable=="email"){
                                                if (!validateEmail($("#"+variable).val())){
                                                    $("#"+variable+"+span").html("Votre email n'est pas valide");
                                                    $("#"+variable+"+span").removeClass("errorMessage");
                                                    $("#"+variable).css("border", "1px solid red");
                                                }
                                            }
                                            //On va tester la validité du téléphone
                                            if (variable=="telephone"){
                                                if (!validateTel($("#"+variable).val())){
                                                    $("#"+variable+"+span").html("Votre numéro n'est pas valide");
                                                    $("#"+variable+"+span").removeClass("errorMessage");
                                                    $("#"+variable).css("border", "1px solid red");
                                                }
                                            }
                                        }
                                    }
                                        //Fonction pour valider telephone
                                    function validateTel(telephone){
                                        var pattern=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                                        return pattern.test(telephone);
                                    }
                                        //Fonction pour valider l'email
                                    function validateEmail(email){
                                        var pattern =/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
                                        return pattern.test(email);
                                    }
                                </script>
                    </form>
                </div>
            </div> 
            <div class="bg-info p-5">
                <div class="row col-lg-10 form_contact bg-light p-2">
                  <div class="col-lg-12 text-center p-4">
                    <!-- <img src="..." alt="..."> -->
                    <iframe class="p-1 w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.004911331363!2d2.342271115676386!3d48.915298679293066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66eea22d74a7b%3A0x70eeef4aa9c429b5!2s55%20Boulevard%20Ornano%2C%2093200%20Saint-Denis!5e0!3m2!1sfr!2sfr!4v1609294008841!5m2!1sfr!2sfr" width="0" height="0" frameborder="0" style="border:1px solid #d2ddd6;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                    <div class="card-body text-center p-3">
                      <h5 class="card-title">Adresse: </h5>
                      <p class="card-text">55 Boulevard Ornano 93200 Saint-Denis</p>
                      <p class="card-text"><small class="text-muted">AGBELOU Adjoukou</small></p>
                      <p class="card-text"><small class="text-muted">Email: mike.agbelou@gmail.com</small></p>
                      <p class="card-text"><small class="text-muted">Tel: 0662272975</small></p>
                    </div>
                </div>
            </div>
            <footer id="footer_block">
                <div>
                    <ul class=" row col-lg  m-auto ">
                        <!-- <a href="# "><i class='far fa-envelope-open' style='font-size:24px'></i>mike.agbelou@gmail.com</a> -->
                        <li class="list-inline-item ">
                            <a href="https://github.com/Mike031289 ">
                                <i class='fab fa-github-square' style='font-size:28px ; color:#fff'></i>
                            </a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="# ">
                                <i class='fab fa-linkedin' style='font-size:28px; color:#fff'></i>
                            </a>
                        </li>
                        <!-- <li class="list-inline-item ">
                        <a href="# ">
                            <i class='fas fa-info-circle' style='font-size:25px'></i>
                        </a>Mdph icone
                    </li> -->
                    </ul>
                    <div class="row col-lg">
                        <p class="col-lg text-center p-3 copyrightText">Copyright 2021 dmd All Rights Reserved</p>
                        <div class="col-lg  position-absolute">
                        <a class="gotTo_top-icone" href="contactes.php"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>
</div>
</body>

</html>