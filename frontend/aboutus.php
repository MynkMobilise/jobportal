<?php include('layout/header.php');?>
<?php
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $pageCntSql = "SELECT * FROM `pagescontent` WHERE `type` = 'about'";
    $pageCntArr = $conn->query($pageCntSql);
?>

<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>About us</h1>
                    <span></span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="office-location-area pt-120 mb-120">
    <div class="container">
        <div class="row mb-120">
            <div class="col-lg-12 mb-70">
            <?php
            
                            
            // Check if any rows were returned
            if ($pageCntArr->num_rows > 0) {
                // Output data of each row
                while ($row = $pageCntArr->fetch_assoc()) {
                ?>
                <p><?php echo $row['contents'] ?></p>
                <?php    
                        // You can access other columns similarly
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php');?>