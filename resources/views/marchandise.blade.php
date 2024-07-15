<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/partie1.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="container">
        <div class="header-fils">
            <div class="div1">  
                <img src="image/produit_logo.jpg" width="80" height="50">
            </div>
            <div class="parent">
                    <div class="div1">
                        <a href="index.html"  class="lil">Accueil</a>&nbsp;&nbsp;
                        <a href="apropos.html"  class="lil">A propos</a>&nbsp;&nbsp;
                        <a href="reservation.html"  class="lil">Réservation</a>&nbsp;&nbsp;

                        @if (Route::has('login'))
                        <div class="login">
                        <ul class="login-nav">
                            @auth
                            <li>
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}" class="">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="">
        <div class="slader">
            <div class="container">
             <div class="ni">
                 <div class="--">
                     {{-- <div><img src="../images/arrow-gauche.png" width="45" height="45"></div> --}}
 
                     <div class="slider">
                       <div class="white">
                         <h2 class="text">En un clic reserver votre marchandise</h2>
                         <p class="text">
                             signification utilisée à titre provisoire pour calibrer une mise <br>
                             en page, le texte définitif venant remplacer le faux-texte dès <br>
                             qu'il est prêt ou que la mise en page est achevée. Généralement.
                         </p>
                         <button class="bb">Nous ecrire</button>
                        </div>  
                     </div>
                 </div>
             {{-- <div><img src="../images/arrow-left.png" width="45" height="45"></div> --}}
             </div>
           </div>
            </div>

          <div class="forum">
              <div class="rita">   
            <div>
               <label class="text1">Nom_marchandise</label><br>
               <input type="text" class="lille" placeholder="nom_marchandise">
            </div>
            <div>
                <label class="text1">Prix</label><br>
                <input type="text" class="lille" placeholder="prix">
            </div>
            <div>
                <label class="text1">Libelle</label><br>
                <input type="text" class="lille" placeholder="libelle">
            </div>
            <div>
                <label class="text1">Quantite</label><br>
                <input type="text" class="lille" placeholder="quantite">
            </div>
            <div><br>
                <button class="bbb">Reserver</button>
            </div>
        </div>
        </div><br><br>  
            <div class="temoi">
                <h3 class="pau"><strong class="blue">Marchandise a Vendre<br>
                  Les marchandises disponible pour les clients</strong></h3>
              </div>
            <div class="client">
                {{-- <div><img src="../images/arrow-right.png" width="45" height="45"></div> --}}
                <div class="unclients">
                    <div><img src="image/produit1.jpg" width="230px" height="140px"></div>
                    <div>
                        <nav>
                            Une marchandise de luxe <br> 
                             Une marchandise de luxe
                        </nav>
                        <div class="cat">
                            <div>
                                <h2>2700.00$</h2>
                            </div>
                            <div>
                                <button class="Reserver">Reserver</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unclients">
                    <div><img src="image/produit2.jpg" width="230px" height="140px"></div>
                    <div>
                        <div>
                            <nav>
                            Une marchandise de luxe <br> 
                             Une marchandise de luxe
                        </nav>
                            <div class="cat">
                                <div>
                                    <h2>2700.00$</h2>
                                </div>
                                <div>
                                    <button class="Reserver">Reserver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unclients">
                    <div><img src="image/produit4.jpg" width="230px" height="140px"></div>
                    <div>
                        <div>
                            <nav>
                            Une marchandise de luxe <br> 
                             Une marchandise de luxe
                        </nav>
                            <div class="cat">
                                <div>
                                    <h2>2700.00$</h2>
                                </div>
                                <div>
                                    <button class="Reserver">Reserver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unclients">
                    <div><img src="image/produit7.jpg" width="230px" height="140px"></div>
                    <div>
                        <div>
                            <nav>
                            Une marchandise de luxe <br> 
                             Une marchandise de luxe
                        </nav>
                            <div class="cat">
                                <div>
                                    <h2>2700.00$</h2>
                                </div>
                                <div>
                                    <button class="Reserver">Reserver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div><img src="../images/arrow-lefte.png" width="45" height="45" class="fleche"></div> --}}
            </div>
        </div>
    </div>
    </div>
    <div class="back">
          <div class="temoi">
            <h3 class="pau"><strong class="blue">Temoignage<br>
              Ce qu'ils disent à propos de notre travail</strong></h3>
          </div>
          <div class="container">
            <div class="v">
              {{-- <div><img src="../images/arrow-right.png" width="45" height="45"></div> --}}
              <div class="tetet">
                Mohamed est l'un des développeurs les plus allumés avec qui j'ai eu le plaisir de travailler. <br>
                 Il voit le site dans son ensemble et comprend les besoins en données [...] <br>
                  ne se limitant pas à la demande mais ce qu'elle cherche à accomplir. <br>
                   Il m'aide à couvrir tous les angles. Selon mon expérience, <br>
                    ça en fait un développeur hors pair et son travail devrait être <br>
                     souligné comme un travail de grande qualité.
              </div>
              {{-- <div><img src="../images/arrow-lefte.png" width="45" height="45"></div> --}}
            </div>
            <div class="profile">
              <div>
                <img src="image/produit7.jpg" width="50px" height="50px" class="pro">
              </div>
              <div class="tet">
                <h6>Raphael Calgaro <br>
                  Digital/Web Analytics Consultant <br> 
                   Logisco, Canada</h6>
              </div>
            </div>
    </main>
    
    <footer class="footer">
        <section class="grid">
            <div class="container">
            <div class="--">
            <div>
                <img src="image/logo.png" alt="" srcset="">
                <p class="ecriture">
                    signification utilisée à titre provisoire pour calibrer une mise <br>
                    en page, le texte définitif venant remplacer le faux-texte dès <br>
                    qu'il est prêt ou que la mise en page est achevée. Généralement, <br> 
                   on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. <br>
                   Le lorem ipsum est, en imprimerie, une suite de mots sans <br> 
                </p>
            </div>
           <div class="box">
              <h3 class="tit">Pages</h3>
                    <a href="index.html"></i>Accueil</a><br>
                    <a href="about.php"></i>A propos</a><br>
                    <a href="shop.php"></i>Reservatiopn</a><br>
           </div>
           
           <div class="box">
            <h3 class="tit">Pages</h3>
                  <a href="home.php"></i>Accueil</a><br>
                  <a href="about.php"></i>A propos</a><br>
                  <a href="shop.php"></i>Reservatiopn</a><br>
         </div>
     
           <div class="boxe">
              <h3 class="tit">contact nous</h3>
                    <a href="#"><i class="fas fa-phone"></i>777375911</a><br>
                    <a href="#"><i class="fas fa-phone"></i>783174021</a><br>
                    <a href="#"><i class="fas fa-envelope"></i>ndiayesalimata71@gmail.com</a><br>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>Kaolack,Senegal-route national 1 face LMTK</a>
           </div>
     
           <div class="boxer">
              <h3 class="tit">Suivez-nous sur</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a><br>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a><br>
                    <a href="#"><i class="fab fa-instagram"></i>instagram</a><br>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
           </div>
     
        </section>
    </div>
    <div class="credit">&copy; copyright @ <?= date('Y'); ?> by \ <span>SAlimata Ndiaye</span> | all rights reserved!</div>
     </footer>
</body>
</html>