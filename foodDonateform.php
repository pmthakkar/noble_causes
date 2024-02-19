<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="foodDonate.css?v=1" />

</head>

<body>
    <?php  
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

}else{
  header("Location:login.php");
}?>
    <div> <?php include ("navbar2.php") ?></div>
    <section class="container">
        <header>Donate Food</header>
        <form action="#" class="form">
            <div class="column">
                <div class="food-box">
                    <h3><i class="fa fa-clock-o" aria-hidden="true"></i> Frequency of Donation</h3>
                    <div class="frequency-option">
                        <div class="frequency">
                            <input type="radio" id="check-one" name="frequency" value="Onetime" />
                            <label for="check-one">One time</label>
                        </div>
                        <div class="frequency">
                            <input type="radio" id="check-daily" name="frequency" value="Daily" />
                            <label for="check-daily">Daily</label>
                        </div>

                    </div>
                </div>

                <div class="food-box">
                    <h3><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Food Type</h3>
                    <div class="type-option">
                        <div class="type">
                            <input type="radio" id="check-cook" name="type" value="Cooked" />
                            <label for="check-cook">Cooked</label>
                        </div>
                        <div class="type">
                            <input type="radio" id="check-raw" name="type" value="Raw" />
                            <label for="check-raw">Raw</label>
                        </div>
                        <div class="type">
                            <input type="radio" id="check-packed" name="type" value="Packed" />
                            <label for="check-packed">Packed</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="select-box">
                <label><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Food Validity</label>
                <select>
                    <option>One Day</option>
                    <option>Two-Three Days</option>
                    <option>One Week</option>
                    <option>More than Week</option>
                </select>
            </div>


            <div class="input-box">
                <label> <i class="fa fa-edit"></i> Specifications</label>
                <input type="textarea" placeholder="Enter Specifications" />
            </div>


            <button>Donate</button>
        </form>
    </section>

    <div class="sfooter">
        <?php include("footer.php") ?>
    </div>
</body>

</html>