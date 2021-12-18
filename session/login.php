<html>
<head>
 <title>Login - Pemerintah Kota Palembang</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="icon" href="../images/logopalembang.png">
</head>
<body>
<div class="container">
    <div class="modal">
    <br><br><br>
    <center><img src="../images/logopalembang.png" id="logoplg"></center>
        <h1>Pemerintah Kota <br> Palembang</h1>

        <?php
        if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password Salah !</div>";
        }
        }
        ?>

        <div class="panel_login">
            <p class="tulisan_atas">Silahkan Login</p>

            <form action="cek_login.php" method="post">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username" required="required">

                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password" required="required">

                <input type="submit" class="tombol_login" value="LOGIN">
                <br/>
                <br/>
            </form>
        </div>
        <br>
        <br>
    </div>
</div>
</body>
</html>