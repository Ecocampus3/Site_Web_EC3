<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Éco-Campus 3 | Ensemble vert un avenir durable</title>

    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--[if lt IE 9]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom fonts and styles -->
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,900' rel='stylesheet' type='text/css'>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
    <link href="css/style_connexion.css" rel="stylesheet" media="all" type="text/css">

    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- ==== HEADER & NAVBAR ==== -->
    <header>
        <!-- Balise navbar custom -->
        <div class="navbar-custom page-scroll">
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand ombrage" href="#page-top">
                            <img src="img/logoEC3.png" alt="Logo Éco-Campus 3" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-custom">
                        <ul class="nav navbar-nav">
                            <li class="active hidden">
                                <a href="#page-top"></a>
                            </li>

                            <li>
                                <a href="#asso">L'association</a>
                            </li>
                            <li>
                                <a href="#projects">Nos projets</a>
                            </li>

                            <li>
                                <a href="#contact">Nous contacter</a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                             <li>
                                <a href="#user" data-toggle="modal" data-target="#log"><i class="fa fa-user"></i></a>
                            </li>
                            <li><a href="#shop"><i class="fa fa-shopping-cart fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>
    </header>

    <!-- Fenetre login !-->
    <div class="modal fade" id="log">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#f6f6f7 !important;">
            <div class="modal-header onmymodal">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button" style="color:#86CC00 !important;">×</button>
            </br>
            </div>


            <div class="modal-body" style="background:#f6f6f7 !important;">

                    <p style="text-align:center;"><img src="img/logoEC3.png" width="100"></p></br>
                        <ul  class="tab-group ">
                            <li class="active"><a  href="#login" data-toggle="tab">Connexion</a></li>
                            <li><a href="#signup" data-toggle="tab">Demande de création</a></li>
                            <li><a href="#sup" data-toggle="tab" style="display:none;"></a></li>
                         </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="login">
                                <form action="" method="post">

                                <div class="field-wrap">
                                            <input type="text" name="identifiant" value="" placeholder="Identifiant" required>
                                    </div>

                                    <div class="field-wrap">
                                        <input type="password" name="password" value="" placeholder="Mot de passe" required>

                                    </div>

                                    <div class="not_available" align="center">
                                        <p>Service pas encore disponible</p></br>
                                    </div>
                                        <!--<p class="forgot"><a href="#forgot">Mot de passe oublié ?</a></p>-->
                                    <button type="submit" value="connexion" id="connexion" name="connexion" class="button button-block" > Connexion</button>
                                    

                                    </form>
                            </div>
                            <div class="tab-pane" id="signup">
                                <form action="" method="post">

                                 <div class="field-wrap">
                                        <label>Nom<span class="req">*</span></label>
                                        <input type=" text" id="nom" name="nom" required autocomplete="off"/>
                                    </div>

                                    <div class="field-wrap">
                                        <label>Prénom<span class="req">*</span></label>
                                        <input type="text" id="prenom" name="prenom" required autocomplete="off" />
                                    </div>

                                     <div class="field-wrap">
                                        <label>Adresse e-mail<span class="req">*</span></label>
                                        <input type="email" id="mail" name="mail" required autocomplete="off"/>
                                    </div>               

                                    <button type="submit" value="creation" id="creation" name="creation" class="button button-block" >Envoyer la demande</button>
                                 </form>
  
                            </div>
                             <div class="tab-pane" id="sup"></div>

                        </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

    <!-- ==== INTRO ==== -->

    

    <div id="intro-custom">
              <div class="centered">
                 <div class="content">
                    <h1>ECOCAMPUS<span> 3</span></h1>
                    <h2>Ensemble vert un avenir durable !</h2>
                </div>
            </div>
        </div>

    <div class="bande_info" >
        </br>
        <p style="font-style:italic;">Nous n'héritons pas de la terre de nos parents, nous l'empruntons à nos enfants</br></p>
        <p>Antoine de Saint-Exupéry</br>Inspiration d’innovutt : https://www.innovutt.fr/</p>
        </br>
    </div>
        <div id="asso">
            <div id="photo-about-asso">

                <div class="container">
                     <div class="row">
                        <div class="intro-custom-content" align="center">      
                            <div class="content">
                                    <p>Créée en 2004, Éco-Campus 3 est une association à but non lucratif qui œuvre pour
                                     la promotion des actions environnementales en faveur d’un développement durable au sein de 
                                     l’Université de Technologie de Troyes, mais également dans l’agglomération troyenne.
                                       </p>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

    

    

    <div class="bande_info">
        </br>
            <p>Venez jeter un coup d'oeil à nos divers <span>projets</span></br></p>

        </br>
    </div>



<!--<div id="projects">
  <div class="content_trois">
    </br>
      <p>Nos projets pour 2018</p>
    </br>
  </div>
</div>


<div class="projet_potager" align="center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="content">
          <p>
            <img src="../img/projetpotager2.jpg" alt="imagedupotager" width="400"/>
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="content">
          <p>Un potager à été installé près de l'UTT, nous espérons y récolter pleins de légumes tout a long de l'année.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="projet_potager" align="center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="content">
          <p>Les paniers de légumes sont de retour ! Toujours pour 5 euros et avec un large choix de produits locaux de qualité</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="content">
          <p>
            <img src="../img/ecopaniers4.jpg" alt="imagedupotager" width="400"/>
        </p></br>
        </div>
      </div>
    </div>
  </div>
</div>!-->
<div id="projects" class="container">
</br></br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.Potager.jpg"  style="width:100%;">
         <div class="carousel-caption" >
         <h3>Nous sommes en charge du potager collaboratif de l'UTT. </br>En plus de cultiver des fruits et légumes, 
            nous voulons profiter de cette terre pour sensibiliser les étudiants aux techniques d'agriculture éco-responsable.</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/2.ecopaniers.jpg"  style="width:100%;">
        <div class="carousel-caption">
        <h3>Chaque semestre, nous vendons des fruits et légumes locaux et le plus souvent bios au personnel et étudiants de l'UTT.</br>
            Nous les complétons parfois avec les récoltes du potager !.</h3>
        </div>
      </div>
    
    
      <div class="item">
        <img src="img/3.autres-events.jpg" style="width:100%;">
        <div class="carousel-caption">
        <h3>Nous sommes également présents sur plusieurs évnènements de l'agglomération et de Campus 3 tout au long de l'années :</br>
         Nuits de Champagne, Nuit Campus 3, Clés de Troyes, et d'autres encore !

        </div>
      </div>

      <div class="item">
        <img src="img/4.films_debats.png" style="width:100%;">
        <div class="carousel-caption">
            <h3>Nous organisons régulièrement des projections de films</br> et des débats autour des questions climatiques et du développement durable.

        </div>
      </div>

      <div class="item">
        <img src="img/5.radio_campus3.JPG" style="width:100%;">
        <div class="carousel-caption">
        <h3>Nous sommes également présent sur les ondes avec des chroniques sur le développement durable sur Radio Campus 3 (88.7).</br>
         La radio des étudiants de l'agglomération Troyenne.


        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </br></br>

</div>


    <div class="bande_info">
        </br>
            <p>Contactez-nous, nous répondrons à vos <span>questions</span></br></p>
        </br>
    </div>
            
    <div id="contact">
        <div class="container">
            <div class="section-content">
                <h1 class="section-header">Rester en<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Contact avec nous</span></h1>
            </div>
            <div class="contact-section">
            <div class="container">
                <form action="index.php" method="post">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="form-group">
                            <input type="text" name="field1" class="form-control"  placeholder=" Entrer votre nom">
                        </div>
                        <div class="form-group">
                            <input type="email" name="field2" class="form-control" id="exampleInputEmail" placeholder=" Entrer votre adresse mail">
                        </div>  
                       <div class="form-group">
                            <input type="tel" name="field3" class="form-control" id="telephone" placeholder=" Entrer votre numéro de téléphone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <textarea  class="form-control" name="field4" id="description" placeholder="Entrer votre message"></textarea>
                        </div>
                        <div>
                            <div align="center">
                            <button type="submit" value="mail" id="mail" name="mail"  class="btn btn-primary submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i>  Envoyer le message</button>
                            </div>
                        </div>
                        
                    </div>
                </form>

               
            </div>
             <div class="content_footer" align="center">
                 <div class="container">
                <div class="row">
                  <div class="Ccollg-12 col-md-12 col-xs-12 col-sm-12 ">
                    <div align="center">
                      <h1>Éco-Campus 3</h1>
                        <p><br>12 rue Marie Curie
                        <br>10000 Troyes
                        <br>
                        <a href="mailto:ecocampus3@utt.fr">ecocampus3@utt.fr</a></p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
<?php 

ini_set("display_errors",0);error_reporting(0); 
$nom=$_POST['field1'];
$add_mail=$_POST['field2'];
$tel=$_POST['field3'];
$message=$_POST['field4'];

if (!empty($_POST['field1']) && !empty($_POST['field2']) && !empty($_POST['field3']) && !empty($_POST['field4']) ){
     $to      = 'ecocampus3@utt.fr';
      $subject = 'ecocampus';
      $message =$nom." vous a envoye un message:\r\n".$message."\r\n"."Son adresse mail est: ".$add_mail."\r\n"."Son numéro de téléphone est: ".$tel;

      $headers = array(
          'From' => $add_mail,
          'Reply-To' => 'ecocampus3@utt.fr',
          'X-Mailer' => 'PHP/' . phpversion()
      );
      mail($to, $subject, $message, $headers);
  
}
?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
    <link rel="stylesheet" href="slider/css/tcf-slider.min.css">

    <script src="//code.jquery.com/jquery.min.js"></script>

    <script src="slider/js/tcf-slider.min.js"></script>
</body>
<script>

$('#tcf-slider').tcf_slider({
  images: [{
    src: "https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_960_720.jpg",
    caption:"Nous sommes en charge du potager collaboratif de l'UTT. En plus de cultiver des fruits et légumes, nous voulons profiter de cette terre pour sensibiliser les étudiants aux techniques d'agriculture éco-responsable."
  }, {
    src: "img/2.ecopaniers.jpg",
    caption:"Image 2"
  }, {
    src: "img/3.autres-events.jpg",
    caption:"Image 3"
  }, {
    src: "img/4.films_debats.png",
    caption:"Image 4"
  }, {
    src: "img/5.radio_campus3.JPG",
    caption:"Image 5"
  }]
})

$('#tcf-slider').tcf_slider({

  // an array of images
  images: [], 

  // enable carousel mode
  loop: true,

  // autoplay
  autoChange: true,

  // 'slide', 'fade' or 'none'
  transition: "slide",

  // autoplay interval
  changeInterval: 4000,

  // transition duration
  transitionDuration: 400
  
})

</script>

</html>
