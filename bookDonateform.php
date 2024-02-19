<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="donateform.css?v=2" />

</head>

<body>
    <?php  
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

    }else{
  header("Location:login.php");
    }?>
    <?php
    require ("connection.php");

    $insert = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST["title"];
        $author = $_POST["author"];
        $course = $_POST["course"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        if (isset($_POST['submit']) && isset($_FILES['image'])) {
	
            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];
        
            if ($error === 0) {
                if ($img_size > 5000000) {
                    $em = "Sorry, your file is too large.";
                    echo '<script>alert("'.$em.'")</script>';
                }else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png"); 
        
                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'BookImage/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
        
        
                        $sql = "INSERT INTO `donate_book` (`title`, `author`, `course`, `pickup_date`, `image`, `description`) VALUES ('$title', '$author', '$course', '$date', '$new_img_name', '$description');";
                        $result = mysqli_query($conn, $sql);
        header("Location:education.php");
        
        }else {
        $em = "You can't upload files of this type";
        echo '<script>alert("'.$em.'")</script>';
        }
        }
        }else {
        $em = "unknown error occurred in file upload!";
        echo '<script>alert("'.$em.'")</script>';
        }
        }
         }
        

    ?>
    <div> <?php include ("navbar2.php") ?></div>
    <section class="container">
        <header>Donate Book</header>
        <form action="#" class="form" method="POST" id="prog" enctype="multipart/form-data">

            <div class="input-box">
                <label><i class="fa fa-book" aria-hidden="true"></i> Book Title</label>
                <input type="text" name="title" placeholder="Enter Book Title" required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label><i class="fa fa-user" aria-hidden="true"></i> Author Name</label>
                    <input type="text" name="author" placeholder="Enter Author Name" required />
                </div>
                <div class="select-box">
                    <label><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Courses</label>
                    <select name="course">
                        <option value="jee">JEE</option>
                        <option value="neet">NEET</option>
                        <option value="upsc">UPSC</option>
                        <option value="gpsc">GPSC</option>
                    </select>

                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Pickup Date</label>
                    <input type="date" name="date" placeholder="Pickup Date" required />
                </div>
                <div class="image-box">
                    <label><i class="fa fa-picture-o" aria-hidden="true"></i> Upload Book Image</label>
                    <input type="file" name="image" required />
                </div>
            </div>
            <div class="input-box">
                <label> <i class="fa fa-edit"></i> Book Description</label>
                <input type="textarea" name="description" placeholder="Enter Description" required />
            </div>


            <button type="submit" name="submit">Donate</button>
        </form>
    </section>

    <div class="sfooter">
        <?php include("footer.php") ?>
    </div>
</body>

</html>