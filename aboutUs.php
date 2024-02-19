<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="about.css?v=2">

    <title>about us</title>
</head>

<body>
<?php 
session_start();
?>
    <div class="navb">
        <?php include("navbar2.php"); ?>
    </div>

    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-center">
        <div class="col-md-10">
          <img src="about.jpg" class="img-fluid" alt="Centered Image">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3 text-center">
            <h2>Who We Are?</h2>
        
            <p class="mb-5 col-md-12 mx-auto" style="text-align: justify !important;">Nourishing minds and bodies through the power of
                food and education for a healthier and brighter future.Empowering communities through our food and education charity,
                envisioning a world where every individual has access to nourishment and knowledge,
                fostering sustainable growth, and creating opportunities for a brighter and more equitable
                future.</p>
        </div>
    </div>
</div>
<div class="col-12 d-md-flex">
    <div class="col-md-5 mx-auto mb-4 card">
        <h4 class="mb-3 text-center pt-3">Food</h4>
        <p class="text-center mb-3" style="text-align: justify !important;">
            Food donation involves individuals or organizations contributing edible items to support
            those in need,
            addressing issues of hunger and food insecurity. This altruistic act not only provides
            essential sustenance
            but also fosters a sense of community and social responsibility, creating a positive
            impact on the lives of
            recipients.
        </p>
        <div class="d-flex justify-content-center pb-2">
            <button class="button btn btn-primary text-center" id="myButton">Read more..</button>
        </div>
    </div>

    <div class="col-md-5 mx-auto mb-4 card">
        <h4 class="mb-3 text-center pt-3">Education</h4>
        <p class="text-center  mb-3" style="text-align: justify !important;">
            Book donation is a philanthropic effort where individuals or groups contribute books to
            benefit education,
            literacy, and community access to reading materials. This act not only promotes learning
            but also enhances
            the availability of diverse resources, making knowledge more accessible to a broader
            audience.
        </p>
        <div class="d-flex justify-content-center pb-2">
            <button class="button btn btn-primary text-center" id="myButton2">Read more..</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function() {
        location.href = "food.php";
    };
    </script>
    <script type="text/javascript">
    document.getElementById("myButton2").onclick = function() {
        location.href = "education.php";
    };
    </script>

    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>