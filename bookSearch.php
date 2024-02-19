<?php
require "connection.php";
    $input = $_POST['input'];
$sql = "SELECT title, author, image FROM donate_book WHERE title LIKE '%$input%' OR author LIKE '%$input%'";
$result = mysqli_query($conn,$sql);

if(isset($_POST['input'])){
    
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="col-md-4">';
        echo '    <div class="card book-card">';
        echo '        <img class="card-img-top img-fluid"  src="BookImage/' . $row['image'] . '" alt="' . $row['title'] . '">';
        echo '        <div class="card-body">';
        echo '            <h4 class="card-title text-center">' . $row['title'] . '</h5>';
        echo '            <h6 class="card-text text-center">By ' . $row['author'] . '</h6>';
        echo '           <button type="submit" name="submit">Apply for this Book</button>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
?>