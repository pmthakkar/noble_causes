<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>availableBooks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="availableBooks.css?v=3">
</head>

<body>
    <div class="container_search">
        <div class="search-container">
            <input type="text" placeholder="Search..." id="search">
        </div>
        <div id="searchr"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                var input = $(this).val();
                if (input != "") {
                    $.ajax({
                        url: "bookSearch.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchr").html(data);
                        }
                    });
                } else {
                    $("searchr").css("display", "none");
                }

            });
        });
        </script>
    </div>
    <div class="container">
        <div class="row">
            <?php 
            require 'connection.php';
            include "navbar2.php";
            // Define the number of items per page
            $itemsPerPage = 3;

            // Get the current page number from the URL, default to page 1
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the offset based on the current page
            $offset = ($currentPage - 1) * $itemsPerPage;

            $sql = "SELECT title, author, image FROM donate_book LIMIT $offset, $itemsPerPage";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '    <div class="card book-card">';
                    echo '        <img class="card-img-top img-fluid"  src="BookImage/'.$row['image'] . '" alt="' . $row['title'] . '">';
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

            // Calculate the total number of pages outside the loop
            $sqlCount = "SELECT COUNT(*) AS count FROM donate_book";
            $resultCount = $conn->query($sqlCount);
            $rowCount = $resultCount->fetch_assoc()['count'];
            $totalPages = ceil($rowCount / $itemsPerPage);

            // Set the maximum number of visible pages
            $maxVisiblePages = 1;

            ?>
        </div>

        <!-- Custom Pagination -->
        <ul class="pagination">
            <?php
            // Output "Previous" button
            echo '<li class="page-item ' . ($currentPage == 1 ? 'disabled' : '') . '">';
            echo '<a class="page-link" href="?page=' . ($currentPage - 1) . '" tabindex="-1" aria-disabled="true">Previous</a>';
            echo '</li>';

            // Output page links with ellipsis
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentPage || $i <= $maxVisiblePages || $i > $totalPages - $maxVisiblePages || ($i >= $currentPage - floor($maxVisiblePages / 2) && $i <= $currentPage + floor($maxVisiblePages / 2))) {
                    echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '">';
                    echo '<a class="page-link" href="?page=' . $i . '">' . $i . '</a>';
                    echo '</li>';
                } elseif (($i == $maxVisiblePages + 1 || $i == $totalPages - $maxVisiblePages) && $maxVisiblePages < $totalPages) {
                    echo '<li class="ellipsis">...</li>';
                }
            }

            // Output "Next" button
            echo '<li class="page-item ' . ($currentPage == $totalPages ? 'disabled' : '') . '">';
            echo '<a class="page-link" href="?page=' . ($currentPage + 1) . '">Next</a>';
            echo '</li>';
            ?>
        </ul>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>