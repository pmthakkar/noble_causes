<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="food.css">
</head>

<body>
<?php 
session_start();
?>
    <div class="navb">
        <?php include("navbar2.php"); ?>
    </div>

    <div class="image-container">
        <img src="food img.jpg" class="img-fluid" alt="image not set" id="front">
    </div>
    <div class="button-container col-12 ">
        <button type="button" class="btn btn-secondry donate-button align-self-center" id="myButton">Donate Food</button>

    </div>



    <div class="box-container">

        <div class="box-description">
        <h2 >Why Should I Donate ? </h2>
            <p>1 in 3 adults in Massachusetts faces food insecurity. At the same time, businesses in Massachusetts throw
                away thousands of pounds of healthy, edible food every day.By donating your excess food, you are helping
                the environment and ensuring that more people have access to
                healthy food. Additionally, donating your excess food rather than sending it to compost or landfill can
                save you waste-hauling
                costs and you may be eligible for tax incentives.
            </p>
        </div>
        <img class="box-image" src="animal10.jpg" alt="image is not set">
    </div>
    <div class="box-container">
        <img class="box-image" src="food2.jpg" alt="image is not set">
        <div class="box-description">
            <h2> What Can I Donate ?</h2>
            <p> We accept any non-plated food that has been handled in accordance with standard food-safety
                regulations – this can include grocery items, produce, wrapped sandwiches, salads, or prepared food
                that has been safely brought down to temperature (40 degrees or below). Please do not donate food
                that you would not be willing to serve your clients.
            </p>
            <p>We accept both frozen prepared food as well as fresh. Fresh food (i.e. sandwiches, salads, etc.) must
                be donated within 7 days of preparation. Food must be labeled with either preparation date or
                expiration/use by date.</p>
        </div>

    </div>


    <div class="box-container">

        <div class="box-description">
            <h2> How Does It Works ? </h2>
            <p> We make food donation easy. Our operations team will work with you to establish a convenient
                schedule for pick-up of your excess food based on the amounts available, your storage capacity, and
                our vehicle availability. Excess food should be stored in a safe manner.
            </p>
            <p>When our drivers arrive, they will place that food in boxes provided by Food For Free and transport
                them in refrigerated trucks to our own cooler and freezer storage or directly to one of our
                recipient agencies. We track all donations, both in and out, for safe record keeping and by request
                can provide you with how much food your organization has donated by weight.</p>

        </div>
        <img class="box-image" src="how_bg.webp" alt="image is not set">
    </div>
    <script type="text/javascript">
    document.getElementById("myButton").onclick = function() {
        location.href = "foodDonateform.php";
    };
    </script>
    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>