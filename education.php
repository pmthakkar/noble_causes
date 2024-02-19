<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="education.css">

    <title>education</title>
</head>

<body>
<?php 
session_start();
?>
    <div class="navb">
        <?php include("navbar2.php"); ?>
    </div>

    <div class="image-container">
        <img src="2f.jpg" class="img-fluid"  alt="image not set" id="front">
    </div>
    <div class="button-container col-12">
        <button type="button" class="btn btn-secondry donate-button align-self-center"
                id="myButton">Donate Book</button>
        
            <button type="button" class="btn btn-secondry donate-button align-self-center" id="myButton2">Available
                Books</button>
        
    </div>
    <div class="box-container">

        <div class="box-description">
            <h2>Importance of Book Donation</h2>
            <p>Book donations are important as they serve as a powerful catalyst for education and knowledge
                dissemination, particularly in underserved communities or regions with limited access to educational
                resources. By providing books, individuals gain access to a wealth of information, fostering literacy,
                critical thinking, and lifelong learning. Book donations contribute to breaking the cycle of poverty by
                empowering individuals with the tools needed for personal development and improved socio-economic
                prospects. Additionally, they play a vital role in promoting cultural exchange, fostering a sense of
                global interconnectedness, and enhancing community well-being. Through the generosity of book donations,
                communities can bridge educational gaps, empower individuals to pursue their aspirations, and contribute
                to the overall enrichment and enlightenment of society.</p>
        </div>
        <img class="box-image" src="book9.jpg" alt="image is not set">
    </div>
    <div class="box-container">
        <img class="box-image" src="book10.png" alt="image is not set">
        <div class="box-description">
            <h2>Book Donation</h2>
            <p>Book donation is a noble act that serves to bridge the gap between knowledge and those in need. When
                individuals or organizations contribute books, they not only share the joy of reading but also empower
                communities with the tools for education and personal growth. Donating books is a powerful way to foster
                literacy, especially in underserved areas where access to educational resources may be limited. By
                providing books, donors play a crucial role in promoting a culture of learning and intellectual
                curiosity. Furthermore, book donations contribute to the recycling and repurposing of literature,
                promoting sustainability and minimizing waste. Ultimately, the act of donating books embodies the belief
                that knowledge is a valuable resource that should be accessible to all, irrespective of socio-economic
                backgrounds, and can have a lasting impact on the lives of those who receive these literary treasures.
            </p>
        </div>

    </div>

    <script type="text/javascript">
    document.getElementById("myButton").onclick = function() {
        location.href = "bookDonateform.php";
    };
    </script>
    <script type="text/javascript">
    document.getElementById("myButton2").onclick = function() {
        location.href = "availableBooks.php";
    };
    </script>

    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>