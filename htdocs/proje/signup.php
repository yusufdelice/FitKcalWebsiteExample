<!DOCTYPE html>
<html lang="tr">        <!-- sayfa dilini türkçe olarak gösterdik -->
<head>
    <meta charset="UTF-8">      <!-- utf-8 charsetini kullanıyoruz türkçe harflerde dahil olabiliyor.-->
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        <!-- sayfanın boyutunun bakıldığı cihaz ekranının genişliğine göre uyumlu olması için. -->
    <title>FitKcal</title>      <!-- site penceresinin başlığı -->
    <link rel="stylesheet" href="signupstyle.css">        <!-- ayrı tuttuğumuz css dosyasını linkliyoruz. -->
</head>

<body>
        <!-- HEADER BAŞLANGICI-->
    <header>        <!-- sayfanın en üstünde yer alan kısım -->        
        <div class="navi">
            <nav>       <!-- site içindeki diğer sayfalara gitmemize olanak sağlayacak olan navigasyon kısmı -->
                <a href="index.php"><div class="logo">Fit<span>Kcal</span></div></a>        <!-- sitenin en üstünde olacak olan logo -->
                <ul class="linkler">      <!-- sayfa içi gezinti linkleri -->
                    <li><a href="index.php">Anasayfa</a></li> <?php
                    if(isset($_SESSION["useruid"]))
                    {
                    echo "<li><a href = 'profile.php'>Hesabım</a>";
                    echo "<li><a href = '/includes/logout.inc.php'>Çıkış Yap</a>";
                    }
                    else{
                    echo "<li><a href='login.php'>Giriş Yap</a></li>";    
                    }
                ?>
                </ul>
            </nav>
        </div>
    </header>

    <section class="kayit">
        <div class="kutu">
                <div class ="alt-kutu">
                    <form class= "girdi-kismi" action="includes/signup.inc.php" method="post"> <!-- Girilen bilgiler buraya gönderilir .inc dememizin sebebi bu php dosyasının bir sayfa değil ancak bilgi tutan bir php sayfası olduğunu belirtmek. -->
                        <input class = "girdi" type="text" name="name" placeholder="İsim Soyisim">
                        <input class = "girdi" type="text" name="email" placeholder="E-mail">
                        <input class = "girdi" type="text" name="uid" placeholder="Kullanıcı Adı">
                        <input class = "girdi" type="password" name="pwd" placeholder="Şifre">
                        <input class = "girdi" type="password" name="pwdrepeat" placeholder="Şifrenizi Tekrar Giriniz">
                        <button class = "girdi-buton" type="submit" name="submit">Kayıt Ol</button>
                    </form>
                    <?php
                        if(isset($_GET["error"])){
                        if($_GET["error"] == "passwordsdontmatch"){
                            echo '<script> 
                            alert("Şifreleriniz Uyuşmuyor, Tekrar Deneyin."); 
                            </script>';
                        }
                        else if($_GET["error"] == "none"){
                            echo '<script> 
                            alert("Başarıyla Kaydoldunuz."); 
                            </script>';
                        }
                        else{
                            echo '<script> 
                            alert("Hata Meydana Geldi, Tekrar Deneyin."); 
                            </script>';
                        }
                    }
                    ?>
            </div>
        </div>
    </section>
</body>
</html>