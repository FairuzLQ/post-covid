<?php 

    include "admin/conn.php";
    $userEmail = "";
                
    if(isset($_POST['subscribe'])){
        $userEmail = $_POST['email'];
        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            $insertdata = mysqli_query($con, "INSERT INTO subscriber(email) VALUES('$userEmail')");
            alert("Anda berhasil berlangganan! Terima kasih telah berlangganan - Post Covid");
            echo "<script>window.location.href = 'Subscribe.php'</script>";
            /*$subject = "Terima kasih telah berlangganan - Post Covid";
            $message = "Terima kasih telah berlangganan pada blog kami. Anda akan terus mendapatkan informasi terbaru dari kami.";
            $sender = "From: elqimochammad@ymail.com";
            if(mail($userEmail, $subject, $message, $sender)){
                alert("Anda berhasil berlangganan!");
                $userEmail = "";
                }
            else{
                alert("Terjadi eror! Anda gagal berlangganan!");
                }
            }*/
        }
    }
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
?>