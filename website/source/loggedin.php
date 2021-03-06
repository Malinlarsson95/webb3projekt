<?php
/*Starta session*/
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/*Om session för loggedin inte existerar skickas man till inloggningssidan*/
if(!isset($_SESSION['loggedin'])) {
    header("location: admin.php");
}
/*Om knappen för logga ut nollställs sessions*/
if(isset($_POST['logOut'])) {
    session_unset();
    header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malin Larsson</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/main.css">
    <!--FONTS-->
    <link rel="stylesheet" href="https://use.typekit.net/zvq2usk.css">
    <script src="https://kit.fontawesome.com/f02302bbd8.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--======HEADER======-->
    <header>
        <img src="images/portrait.png" alt="porträtt av Malin Larsson" id="portrait">
        <h1>Malin Larsson</h1>
    </header>
    <div id="wrapper">
        <!--======SIDEBAR======-->
        <div id="sidebar">
            <!--Section "Personliga uppgifter"-->
            <article id="sideArtOne">
                <h2>Personliga uppgifter</h2>
                <div class="line firstline"></div>
                <p>
                    <span class="bold">Namn:</span>
                    <span class="light" id="name">Malin Larsson</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Födelsedatum:</span>
                    <span class="light" id="birthday">29 Oktober 1995</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Nationalitet:</span>
                    <span class="light" id="country">Svensk</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Språk:</span>
                    <span class="light" id="language">Svenska, Engelska</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Körkort:</span>
                    <span class="light" id="driverlicense">B-körkort</span>
                </p>
                <div class="line lastline"></div>
            </article>
            <!--Section "Kontakt uppgifter"-->
            <article id="sideArtTwo">
                <h2>Kontakt</h2>
                <div class="line firstline"></div>
                <p>
                    <span class="bold">Telefon:</span>
                    <span class="light" id="phone">072-5501175</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">E-post:</span>
                    <span class="light" id="email"><a href="mala1812@student.miun.se">Länk</a></span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Adress:</span>
                    <span class="light" id="adress">Västra Tullgatan</span>
                </p>
                <div class="line"></div>
                <p>
                    <span class="bold">Ort:</span>
                    <span class="light" id="city">Hudiksvall</span>
                </p>
                <div class="line lastline"></div>
            </article>
            <!--Section "Programmerings erfarenheter"-->
            <article id="sideArtThree">
                <div class="makeTheMarginSmaller">
                <h2>Programmering</h2>
                <div class="line firstline"></div>
                <p>
                    <span class="bold">HTML</span>
                </p>
                <div class="dots">
                    <div id="HTMLDotOne" class="dot"></div>
                    <div id="HTMLDotTwo" class="dot"></div>
                    <div id="HTMLDotThree" class="dot"></div>
                    <div id="HTMLDotFour" class="dot"></div>
                    <div id="HTMLDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">CSS</span>
                </p>
                <div class="dots">
                    <div id="CSSDotOne"  class="dot"></div>
                    <div id="CSSDotTwo" class="dot"></div>
                    <div id="CSSDotThree" class="dot"></div>
                    <div id="CSSDotFour" class="dot"></div>
                    <div id="CSSDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">JavaScript</span>
                </p>
                <div class="dots">
                    <div id="JSDotOne" class="dot"></div>
                    <div id="JSDotTwo" class="dot"></div>
                    <div id="JSDotThree" class="dot"></div>
                    <div id="JSDotFour" class="dot"></div>
                    <div id="JSDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">PHP</span>
                </p>
                <div class="dots">
                    <div id="PHPDotOne" class="dot"></div>
                    <div id="PHPDotTwo" class="dot"></div>
                    <div id="PHPDotThree" class="dot"></div>
                    <div id="PHPDotFour" class="dot"></div>
                    <div id="PHPDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">Wordpress</span>
                </p>
                <div class="dots">
                    <div id="WPDotOne" class="dot"></div>
                    <div id="WPDotTwo" class="dot"></div>
                    <div id="WPDotThree" class="dot"></div>
                    <div id="WPDotFour" class="dot"></div>
                    <div id="WPDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">MySQL</span>
                </p>
                <div class="dots">
                    <div id="MySQLDotOne" class="dot"></div>
                    <div id="MySQLDotTwo" class="dot"></div>
                    <div id="MySQLDotThree" class="dot"></div>
                    <div id="MySQLDotFour" class="dot"></div>
                    <div id="MySQLDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">C#</span>
                </p>
                <div class="dots">
                    <div id="CSharpDotOne" class="dot"></div>
                    <div id="CSharpDotTwo" class="dot"></div>
                    <div id="CSharpDotThree" class="dot"></div>
                    <div id="CSharpDotFour" class="dot"></div>
                    <div id="CSharpDotFive" class="dot"></div>
                </div>
                <div class="line lastline"></div>
            </div>
            </article>
            <!--Section "Design erfarenheter"-->
            <article class="sideArtFour">
                <div class="makeTheMarginSmaller">
                <h2>Design</h2>
                <div class="line firstline"></div>
                <p>
                    <span class="bold">Adobe Photoshop</span>
                </p>
                <div class="dots">
                    <div id="PSDotOne" class="dot"></div>
                    <div id="PSDotTwo" class="dot"></div>
                    <div id="PSDotThree" class="dot"></div>
                    <div id="PSDotFour" class="dot"></div>
                    <div id="PSDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">Adobe XD</span>
                </p>
                <div class="dots">
                    <div id="XDDotOne" class="dot"></div>
                    <div id="XDDotTwo" class="dot"></div>
                    <div id="XDDotThree" class="dot"></div>
                    <div id="XDDotFour" class="dot"></div>
                    <div id="XDDotFive" class="dot"></div>
                </div>
                <div class="line"></div>
                <p>
                    <span class="bold">Adobe Illustrator</span>
                </p>
                <div class="dots">
                    <div id="AIDotOne" class="dot"></div>
                    <div id="AIDotTwo" class="dot"></div>
                    <div id="AIDotThree" class="dot"></div>
                    <div id="AIDotFour" class="dot"></div>
                    <div id="AIDotFive" class="dot"></div>
                </div>
                <div class="line lastline"></div>
            </div>
            </article>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="submit" name="logOut" value="Logga ut" id="logoutButton" />
            </form>
        </div>
        <!--======MAINCONTENT======-->
        <div id="maincontent">
            <article class="mainArt" id="mainArtTwo">
                <h2>Studier</h2>
                <!--
                    HERE WILL STUDIES FROM DATABASE BE WRITTEN
                -->   
            </article>
            <h3>Lägg till studie</h3>
                <div class="mainboxes">
                <form class="add" action="loggedin.php" method="post" id="addStudy">
                <input type="text" name ="educationName" id ="educationName" placeholder="Program/kurs"/><br>
                <input type="text" name ="school" id ="school" placeholder="Skola"/><br>
                <input type="text" name ="startDate" id ="startDate" placeholder="Start(åååå/mm)"/>
                <input type="text" name ="endDate" id ="endDate" placeholder="Slut(åååå/mm)"/><br>
                <input type="submit" name="addStudie" value="Lägg till" id="AddStudieButton" class="okButton" />
                </form>
                </div>
            <article class="mainArt" id="mainArtThree">
                <h2>Arbeten</h2>
                <!--
                    HERE WILL WORKS FROM DATABASE BE WRITTEN
                -->  
            </article>
            <h3>Lägg till arbete</h3>
                <div class="mainboxes">
                <form class="add" action="loggedin.php" method="post">
                <input type="text" name ="workTitle" id ="workTitle" placeholder="Arbetstitel"/><br>
                <input type="text" name ="workPlace" id ="workPlace" placeholder="Arbetsplats"/><br>
                <input type="text" name ="startDateWork" id ="startDateWork" placeholder="Start(åååå/mm)"/>
                <input type="text" name ="endDateWork" id ="endDateWork" placeholder="Slut(åååå/mm)"/><br>
                <input type="submit" name="addWork" value="Lägg till" id="AddWorkButton" class="okButton" />
                </form>
                </div>
            <article class="mainArt" id="mainArtFour">
                <h2>Skapade webbsidor</h2>
                <!--
                    HERE WILL WEBSITES FROM DATABASE BE WRITTEN
                -->  
            </article>
            <h3>Lägg till webbsida</h3>
                <div class="mainboxes">
                <form class="add" action="loggedin.php" method="post">
                <input type="text" name ="siteTitle" id ="siteTitle" placeholder="Namn på webbplats"/><br>
                <input type="text" name ="siteUrl" id ="siteUrl" placeholder="Url"/><br>
                <input type="text" name ="createdDate" id ="createdDate" placeholder="Skapad(åååå/mm)"/>
                <textarea id="siteDescription" rows="4">Beskrivning av webbplatsen</textarea>
                <input type="submit" name="addSite" value="Lägg till" id="AddSiteButton" class="okButton" />
                </form>
                </div>
        </div>
    </div>
    <!--======FOOTER=======-->
        <footer>
        <ul class="fa-ul">
            <li><i class="fa-li fa fas fa-user"></i>Malin Larsson</li>
            <li><i class="fa-li fa fas fa-phone"></i>072-5501175</li>
            <li><i class="fa-li fa fas fa-envelope"></i><a href="mala1812@student.miun.se">mala1812@student.miun.se</a></li>
          </ul>
        </footer>
    <script src="js/admin.js"></script>
</body>
</html>