<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-image {
            background-image: url('../img/banner-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            position: relative;
        }
        body {
            font-family: Arial, sans-serif;
            color: white;
        }
        .bold-white-text {
            color: white;
            font-weight: bold;
        }
        </style>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <!-- <link rel="stylesheet" href="css/tooplate-style.css"> -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
    <section class="banner" id="top">
    <?php include 'navbar.php'; ?>
    
        <div class="container">
            <h2 class="bold-white-text">Dhruv Burada</h2>
            <p class="bold-white-text">Dhruv Burada is the user and founder of this website. He is passionate about the techno world and loves to share his knowledge with others. He has a strong background in web development and is always eager to learn new technologies.</p>
            <h2 class="bold-white-text">Paul Lawrence</h2>
            <p class="bold-white-text">Paul Lawrence is a renowned web developer and a close friend of Dhruv. He has been a great source of inspiration for Dhruv and has helped him grow his skills in web development.</p>
            <h2 class="bold-white-text">Archil Gajera</h2>
            <p class="bold-white-text">Archil Gajera is another close friend of Dhruv. He is a skilled web designer and has been instrumental in creating the visually appealing layout of this website. Archil's creativity and design skills have significantly contributed to the overall look and feel of the website.</p>
        </div>
    </section>
</body>
</html>