<?php
include "koneksi.php";
$sql="SELECT sum(jumlah_hotel) as jumlah_hotel, sum(berbintang) as berbintang, sum(nonbintang) as nonbintang FROM jumlah_hotel";
$hasil=mysqli_query($conn,$sql);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Jumlah Hotel - Pemerintah Kota Palembang</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logopalembang.png">
</head>
    <body>
    <?php
        while($data=mysqli_fetch_array($hasil)){
?>
    <div class="counter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2 class="h2-heading">Jumlah Hotel di Kota Palembang</h2>
                <br>
                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="<?php echo $data['berbintang']; ?>" data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Hotel Berbintang</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="<?php echo $data['nonbintang']; ?>" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Hotel Non-Bintang</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="<?php echo $data['jumlah_hotel']; ?>" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Jumlah Hotel</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->
<?php
 }
?>
    <script src="js/purecounter.min.js"></script>
    </body>
</html>
