<!DOCTYPE html>
<html lang="tr-TR">

    <head>
        
        <meta charset="utf-8">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="stiller/css/style.css">

        <!-- Ikon Kutuphanesi -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link rel="icon" type="image/x-icon" href="stiller/img/Logo-ikon.ico"/>
    
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <title>Web Teknolojileri Projesi</title>

        <style>
            .footer{
                margin-top: 200px;
            }
        </style>

    </head>

    <body class="text-center">

        <div class="header-nightsky">
        
            <nav class="navbar navbar-defaul ">
                <div class="container">

                    <a class="navbar-brand" href="index.html" style="padding-top: 0%;"><img src="stiller/img/Logo.png" alt="Fotoğrafım" id="fotoLogo"></a>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" title="Anasayfa">Anasayfa</a></li> 
                            <li><a href="ozgecmis.html" title="CV">Özgeçmiş</a></li>
                            <li><a href="gine.html" title="Gine">Gine</a></li>
                            <li><a href="mirasimiz.html" title="Mirasımız">Mirasımız</a></li>
                            <li><a href="iletisim.html" title="İletişim">İletişim</a></li>

                        </ul>
                    </div>
                </div>
            </nav>

            <div class="hero">
                

                 <?php 

                    include("users.php");
                  

                    if (($_POST["email"] == $username) and ($_POST["password"] == $password))
                    {
                    $_SESSION["login"] = "true";
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;

                    $kullaniciAdi=substr($username, 0, strrpos($username,"@")); 

                    echo('<h1>Sisteme Giriş Başarı</h1> <br>'.'<h3> HOŞGELDİNİZ Sayın </h3> "'. "<h2> $kullaniciAdi </h2>". '" <h3> Sisteme Giriş Başardınız </h3>');

                    }

                    else 
                    {
                        echo '<h1>Başarısız Giriş</h1> <br>'. '<h3>Kullancı Adı veya Şifre Yanlış Girdiniz</h3> <br>';
                        echo "<h3>Lütfen kontrol edip tekrar deneyin</h3>";
                        header("Refresh: 3; url=login.html");
                    }

               ?>

            </div>

        </div>

      

        <footer class="footer" >

        <address> SAÜ Web-Teknolojileri-Projesi &copy; Seidy KANTE 2021 </address> 

        </footer>
    

        <!-- BOOTSTRAP -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

</html>
