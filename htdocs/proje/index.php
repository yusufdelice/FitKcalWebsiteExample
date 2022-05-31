<?php
    session_start();
    include "includes/dbh.inc.php";
    ?>

<!DOCTYPE html>
<html lang="tr">        <!-- sayfa dilini türkçe olarak gösterdik -->
<head>
    <meta charset="UTF-8">      <!-- utf-8 charsetini kullanıyoruz türkçe harflerde dahil olabiliyor.-->
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        <!-- sayfanın boyutunun bakıldığı cihaz ekranının genişliğine göre uyumlu olması için. -->
    <title>FitKcal</title>      <!-- site penceresinin başlığı -->
    <link rel="stylesheet" href="style.css">        <!-- ayrı tuttuğumuz css dosyasını linkliyoruz. -->
</head>
<body>
        <!-- HEADER BAŞLANGICI-->
    <header>        <!-- sayfanın en üstünde yer alan kısım -->        
        <div class="navi">
            <nav>       <!-- site içindeki diğer sayfalara gitmemize olanak sağlayacak olan navigasyon kısmı -->
                <div class="logo">Fit<span>Kcal</span></div>        <!-- sitenin en üstünde olacak olan logo -->
                <ul class="linkler">      <!-- sayfa içi gezinti linkleri -->
                    <li><a href="#idhakkimizda">Hakkımızda</a></li>
                    <li><a href="#idservices">Hizmetlerimiz</a></li>
                    <li><a href="#iduyelikpaketleri">Üyelik Paketleri</a></li>
                    <li><a href="#idiletisim">İletişim</a></li>
                    <?php
                    if(isset($_SESSION["useruid"]))
                    {
                    echo "<li><a href = 'profile.php'>Hesap Detayları</a>";
                    echo "<li><a href = 'includes/logout.inc.php'>Çıkış Yap</a>";
                    }
                    else{
                    echo "<li><a href='login.php'>Giriş Yap</a></li>";    
                    echo "<li><a href='signup.php'>Kayıt Ol</a></li>";
                    }
                    ?>
                </ul>
            </nav>
            <div class="icerik">       <!-- site ortası içeriği -->
                <h1>FITK(C)AL SPOR SALONU</h1> <br>       <!-- bir başlık -->
                <a href="signup.php"><button class="btn">Hemen Bize Katıl</button></a>       <!-- buton -->
            </div>
        </div>
    </header>
    <!-- HAKKIMIZDA KISMI -->
    <section class = "hakkimizda">
        <div class = "row", id="idhakkimizda">     <!-- resim ve içeriği kapsayan div -->
            <div class = "resim">
                <img src = "./resimler/hakkimizdaresim.jpg">      <!-- hakkımızda kısmında gözükecek resim -->
            </div>
            <div class ="icerik">      <!-- resimin yanındaki metin -->
                <h1>Biz Kimiz </h1>
                <p> Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                    yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin.Yer tutucu metin yer tutucu metin yer
                    tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer
                    tutucu metin yer tutucu metin.</p>
                <p> Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                    yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin. Yer tutucu metin yer tutucu metin yer
                    yer tutucu metin yer tutucu metin yer tutucu metin.Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                    yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin.</p>
            </div>
        </div>
    </section>
    <!-- HİZMETLERİMİZ KISMI -->
    <section class = "hizmetlerimiz">
        <h1  id="idservices">Hizmetlerimiz</h1>      <!-- Spor salonunun verdiği servislerin listesi -->
        <div class = "container">
            <div class = "box">
                <img src="./resimler/yuzme.jpg">
                <div class="bilgilendirme">
                    <h3>Yüzme</h3>
                    <p>Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                        yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin. Yer tutucu metin yer tutucu metin yer
                        yer tutucu metin yer tutucu metin yer tutucu metin.</p>
                </div>
            </div>
            <div class = "box">
                <img src="./resimler/agirlikkaldirma.jpg">
                <div class="bilgilendirme">
                    <h3>Ağırlık Kaldırma</h3>
                    <p>Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                        yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin. Yer tutucu metin yer tutucu metin yer
                        yer tutucu metin yer tutucu metin yer tutucu metin.</p>
                </div>
            </div>
            <div class = "box">
                <img src="./resimler/cardio.jpg">
                <div class="bilgilendirme">
                    <h3>Kardiyo</h3>
                    <p>Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                        yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin. Yer tutucu metin yer tutucu metin yer
                        yer tutucu metin yer tutucu metin yer tutucu metin.</p>
                </div>
            </div>
            <div class = "box">
                <img src="./resimler/yoga.jpg">
                <div class="bilgilendirme">
                    <h3>Yoga</h3>
                    <p>Yer tutucu metin. Yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin
                        yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin yer tutucu metin. Yer tutucu metin yer tutucu metin yer
                        yer tutucu metin yer tutucu metin yer tutucu metin.</p>
                </div>
            </div>
        </div>
    </section>
        <!-- ÜYELİK PAKETLERİ KISMI -->
        <section class ="uyelikpaketleri">
            <h1 id="iduyelikpaketleri">Paketlerimiz</h1>
            <div class = "uyelikkartlari">
                <div class = "uyelikkutulari">
                    <h2>Basit</h2>
                    <h3><span>Aylık </span>40<sup>₺</sup></h3>  
                    <p>1 Ay</p>
                    <ul>
                        <li><img class="icon" src="./resimler/icon.png">ağırlık kaldırma</i></li>
                        <li><img class="icon" src="./resimler/icon.png">yüzme</i></li>
                        <li><img class="icon" src="./resimler/icon.png">kardiyo</i></li>
                        <li><img class="icon" src="./resimler/icon.png">yoga</i></li>                       
                        <li>hediye protein tozu</i></li>
                        <li>hediye kitap: "Kas Yapmanın 10 Kuralı"</i></li>
                        </ul>
                        <?php 
                            if(isset($_POST["basit"])){
                                $sql = "UPDATE users SET usersSub = 1 WHERE usersUid = '$_SESSION[useruid]' ;";
                                mysqli_query($conn, $sql);
                            }
                        ?>
                        <form method="post">
                            <input class="btn" name="basit" type="submit" value="Satın Al">
                        </form>
                </div>
                <div class = "uyelikkutulari">
                    <h2>Gelişmiş</h2>
                    <h3><span>Aylık </span>35<sup>₺</sup></h3>
                    <p>3 Ay</p>
                        <ul>
                        <li><img class="icon" src="./resimler/icon.png">Ağırlık Kaldırma</i></li>
                        <li><img class="icon" src="./resimler/icon.png">Yüzme</i></li>
                        <li><img class="icon" src="./resimler/icon.png">Kardiyo</i></li>
                        <li><img class="icon" src="./resimler/icon.png">Yoga</i></li>
                        <li><img class="icon" src="./resimler/icon.png">hediye protein tozu</i></li>
                        <li>hediye kitap: "Kas Yapmanın 10 Kuralı"</i></li>
                       </ul>
                        <?php 
                            if(isset($_POST["gelismis"])){
                                $sql = "UPDATE users SET usersSub = 2 WHERE usersUid = '$_SESSION[useruid]' ;";
                                mysqli_query($conn, $sql);
                            }
                        ?>
                        <form method="post">
                            <input class="btn" name="gelismis" type="submit" value="Satın Al">
                        </form>
                </div>
                <div class = "uyelikkutulari">
                    <h2>Premium</h2>
                    <h3><span>Aylık </span>30<sup>₺</sup></h3>
                    <p>6 ay</p>
                    <ul>
                        <li><img class="icon" src="./resimler/icon.png">ağırlık kaldırma</i></li>
                        <li><img class="icon" src="./resimler/icon.png">yüzme</i></li>
                        <li><img class="icon" src="./resimler/icon.png">kardiyo</i></li>
                        <li><img class="icon" src="./resimler/icon.png">yoga</i></li>
                        <li><img class="icon" src="./resimler/icon.png">hediye protein tozu</i></li>
                        <li><img class="icon" src="./resimler/icon.png">Hediye Kitap: "Kas Yapmanın 10 Kuralı"</i></li>
                    </ul>
                    <?php 
                            if(isset($_POST["premium"])){
                                $sql = "UPDATE users SET usersSub = 3 WHERE usersUid = '$_SESSION[useruid]' ;";
                                mysqli_query($conn, $sql);
                            }
                        ?>
                        <form method="post">
                            <input class="btn" name="premium" type="submit" value="Satın Al">
                        </form>
                </div>
            </div>
        </section>
        <!-- İLETİŞİM KISMI BAŞLANGICI -->
        <section class="iletisim">
            <h1 id="idiletisim">İletişim</h1>
            <form action="includes/comm.inc.php" method="post">>
                <div class="input_box">
                    <input type="text" name="name" placeholder="Adınız">
                    <input type="text" name="surname" placeholder="Soyadınız">
                </div>
                <div class="input_box">
                    <input type="email" name="email" placeholder="E-mailiniz">
                    <input type ="number" name="number" placeholder="Telefon Numaranız">
                </div>
                <textarea cols="30" rows="10" name="message" placeholder="Mesajınız... (Sınır 500 Karakterdir.)"></textarea>
                <input type="submit" value="Bize Ulaşın" class = "btn">
            </form>
            <?php
                if (isset($_GET["error"])){
                if($_GET["error"] == "noneMessage"){
                    echo '<script> 
                            alert("Başarıyla Gönderdiniz."); 
                            </script>';
                }  
            }
            ?>
        </section>
        <!-- FOOTER KISMI -->
        <footer>
            Yusuf Talha Delice tarafından  yapılmıştır 2021
        </footer>
</body>

</html>