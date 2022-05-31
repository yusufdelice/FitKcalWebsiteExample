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
    <link rel="stylesheet" href="profilestyle.css">        <!-- ayrı tuttuğumuz css dosyasını linkliyoruz. -->
</head>
<body>
        <!-- HEADER BAŞLANGICI-->
    <header>        <!-- sayfanın en üstünde yer alan kısım -->        
        <div class="navi">
            <nav>       <!-- site içindeki diğer sayfalara gitmemize olanak sağlayacak olan navigasyon kısmı -->
                <div class="logo">Fit<span>Kcal</span></div>        <!-- sitenin en üstünde olacak olan logo -->
                <ul class="linkler">      <!-- sayfa içi gezinti linkleri -->
                    <li><a href = 'index.php'>Anasayfa</a></li>
                    <li><a href = 'includes/logout.inc.php'>Çıkış Yap</a></li>
                </ul>
            </nav>
    </header>
    <div class = "container">
        <div class="wrapper">   
            <h2>Hesabım</h2>

                <?php
                    $q=mysqli_query($conn,"SELECT * FROM users WHERE usersUid = '$_SESSION[useruid]' ;");
                    $row = mysqli_fetch_assoc($q);
                ?>
            
            <table class="table">
                <tr>
                    <td>
                    <?php echo "<b> Kullanıcı Adı: </b>"?>
                    </td>
                        
                    <td>
                        <?php echo $row['usersUid'];?>        
                    </td>
                </tr>

                <tr>
                    <td>
                    <?php echo "<b> İsim: </b>";?>    
                    </td>
                       
                    <td>
                        <?php echo $row['usersName'];?>  
                    </td>
                </tr>

                <tr>
                    <td>
                    <?php echo "<b> Email: </b>";?>
                    </td>
                        
                    <td>
                        <?php echo $row['usersEmail'];?>  
                    </td>
                </tr>

                <tr>
                    <td>
                    <?php echo "<b> Abonelik: </b>";?>
                    </td>
                        
                    <td>
                        <?php if ($row['usersSub'] == 1){
                            echo "Basit Seviye Abone";
                             }
                            elseif($row['usersSub'] == 2){
                            echo "Gelişmiş Seviye Abone";
                            }
                            
                            elseif($row['usersSub'] == 3){
                            echo "Premium Seviye Abone";
                            }
                            
                            else{
                            echo "Abone Değil";
                            }
                        ?>  
                    </td>
                </tr>
                </table>  
                </div>                          
                <div class="buton">
                <?php 
                            if(isset($_POST["iptal"])){
                                $sql = "UPDATE users SET usersSub = 0 WHERE usersUid = '$_SESSION[useruid]' ;";
                                mysqli_query($conn, $sql);
                            }
                        ?>
                        <?php
                        if ($row['usersSub'] != 0){ 
                        echo '<form method="post">';
                        echo '<input class="btn" onclick="myFunction()" name="iptal" type="submit" value="Aboneliği İptal Et ">';
                        echo '</form>'; 
                    } ?>
                </div>
                <script>
                function myFunction() {
                    alert("Aboneliğinizi İptal Edildi!");
                }
                </script>

           
        </div>
</body>
</html>