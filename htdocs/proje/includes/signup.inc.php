<?php   // php tag'ini kapatmayacağız çünkü kapatırsak ve tag'ın sonrasına herhangi bir girdi olursa bu sistemde hataya yol açabilir, bu dosya sadece php içereceği için kapatmaya gerek yok.


if(isset($_POST["submit"])){  // kullanıcılar eğer bu php dosyasını url isminden açmaya çalışırlarsa başaramamaları için bir if statement'ı ekliyoruz.

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";   
/*
    if(emptyInputSignup($name, $email, $usernmame, $pwd, $pwdRepeat) !== false){ // eğer kullanıcı bir kutuyu boş bırakmışsa hata döndürüyoruz.
    header("location: ../signup.php?error=emptyinput"); //kullanıcı kayıt sayfasına geri yönlendiriliyor. ayrıca url'de hatayı belirtiyoruz ki daha sonra bir mesaj hazırlayabilelim.
    exit(); //kodun çalışmasını durduruyoruz.
    }
     if(invalidUid($usernmame) !== false){ // eğer kullanıcı adı kurallara uymuyorsa hata döndürüyoruz.
    header("location: ../signup.php?error=invailduid");
    exit();
    }
    
    if(invalidEmail($email) !== false){ // eğer email kurallara uymuyorsa hata döndürüyoruz.
    header("location: ../signup.php?error=invalidemail"); 
    exit(); 
    }
    */  
    if(pwdMatch($pwd, $pwdRepeat) !== false){ // eğer şifreler uyuşmuyorsa hata döndürüyoruz.
    header("location: ../signup.php?error=passwordsdontmatch"); 
    exit(); 
    }
    if(uidExists($conn, $username, $email) !== false){ // eğer kullanıcı adı veya email zaten varsa  hata döndürüyoruz.
    header("location: ../signup.php?error=usernametaken"); 
    exit(); 
    }
    createUser($conn, $name, $email, $username, $pwd);  //eğer hatasız kayıt olduysa kullanıcı oluşturuyouz.

}
else{
    header("location: ../signup.php");
    exit();
}