<?php echo include('layout/header.php');?>
<?php
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query
    $jobCatsql = "SELECT jobcategory.id, jobcategory.name,count(jobs.id) as ttljobs
                FROM jobcategory
                LEFT JOIN jobs ON jobcategory.id = jobs.jobcat WHERE jobcategory.featured = 0
                GROUP BY jobcategory.id
                LIMIT 10";
    // Execute query
    $jobCatArr = $conn->query($jobCatsql);

?>
<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>Job Category</h1>
                    <span></span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Job Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="category-listing-area pt-120 mb-120">
    <div class="container">
        <div class="row g-lg-4">
            <div class="col-lg-12">
                <div class="row g-4 mb-25">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="show-item">Showing results 10 in 200 jobs list</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-md-end">
                        <form>
                            <div class="form-inner">
                                <input type="text" placeholder="Search..">
                                <button class="primry-btn-2" type="submit"><img
                                        src="assets/images/icon/search-category.svg" alt></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div
                    class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 cf justify-content-center mb-70">
                    <?php
            
                            
                    // Check if any rows were returned
                    if ($jobCatArr->num_rows > 0) {
                        // Output data of each row
                        while ($row = $jobCatArr->fetch_assoc()) {
                        ?>
                    <div class="col">
                        <div class="single-category">
                            <div class="category-top">
                                <div class="icon">
                                    <img src="assets/images/icon/account-finance.svg" alt>
                                </div>
                                <div class="sl-no">
                                    <h6>01</h6>
                                </div>
                            </div>
                            <div class="category-content">
                                <h5><a href="job-listing1.html">Account &amp; Finance</a></h5>
                                <p>Job Available: <span>44</span></p>
                            </div>
                        </div>
                    </div>
                    <?php    
                        // You can access other columns similarly
                    }
                        } else {
                            echo "0 results";
                        }


                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="pagination-area">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"></a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link"
                                            href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php');?>

