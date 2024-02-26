<?php include('layout/header.php');?>
<?php
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query
    $fCatsql = "SELECT jobcategory.id, jobcategory.name,count(jobs.id) as ttljobs
                FROM jobcategory
                LEFT JOIN jobs ON jobcategory.id = jobs.jobcat WHERE jobcategory.featured = 1
                GROUP BY jobcategory.id";
    // Execute query
    $fCareArr = $conn->query($fCatsql);

    $jobPost = "SELECT * FROM jobs";
    $jobPostArr = $conn->query($jobPost);
    
    $locationSql = "SELECT * FROM `locations`";
    $locationArr = $conn->query($locationSql);

    $blogSql = "SELECT * FROM `blogs`";
    $blogArr = $conn->query($blogSql);
?>

<div class="hero3">
    <div class="hero-wapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>To Choose <span>Right Jobs.</span></h1>
                        <p><span>2400</span> Peoples are daily search in this portal, <span>100</span> user added job
                            portal!</p>
                        <div class="job-search-area">
                            <form>
                                <div class="form-inner job-title">
                                    <img src="assets/images/icon/job3.svg" alt>
                                    <input type="text" placeholder="What jobs are you looking for?">
                                </div>
                                <div class="form-inner">
                                    <button type="submit" class="primry-btn-2 "><img
                                            src="assets/images/icon/search-icon.svg" alt> Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img class="img-fluid" src="assets/images/bg/hero3-img-with-vec.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home1-category pt-120 mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                <div class="section-title1">
                    <h2>Featured Jobs <span>Category</span></h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
                <div class="explore-btn">
                    <a href="category.html">Explore More <span><img src="assets/images/icon/explore-elliose.svg"
                                alt></span></a>
                </div>
            </div>
        </div>
        <div
            class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 cf justify-content-center">
            <?php
            
                            
                // Check if any rows were returned
                if ($fCareArr->num_rows > 0) {
                    // Output data of each row
                    while ($row = $fCareArr->fetch_assoc()) {
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
                            <h5><a href="job-listing1.html"><?php echo $row['name'] ?></a></h5>
                            <p>Job Available: <span><?php echo $row['ttljobs'] ?></span></p>
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
    </div>
</div>


<div class="home1-featured-area mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                <div class="section-title1">
                    <h2>Latest <span>Posted</span> Jobs</h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
                <div class="explore-btn">
                    <a href="job-listing1.html">Explore More <span><img src="assets/images/icon/explore-elliose.svg"
                                alt></span></a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <?php               
            // Check if any rows were returned
            if ($jobPostArr->num_rows > 0) {
                // Output data of each row
                while ($row = $jobPostArr->fetch_assoc()) {
                ?>
            <div class="col-xl-4 col-lg-6">
                <div class="feature-card">
                    <div class="company-area">
                        <div class="logo">
                            <img src="assets/images/bg/company-logo/company-01.png" alt>
                        </div>
                        <div class="company-details">
                            <div class="name-location">
                                <h5><a href="job-details.html"><?php echo $row['title'] ?></a></h5>
                                <p><?php echo $row['job_type'] ?></p>
                            </div>
                            <div class="bookmark">
                                <i class="bi bi-bookmark"></i>
                            </div>
                        </div>
                    </div>
                    <div class="job-discription">
                        <ul>
                            <li>
                                <img src="assets/images/icon/arrow2.svg" alt>
                                <p><span class="title">Salary:</span> $80-$110 / <span class="time"><?php echo $row['salary'] ?></span></p>
                            </li>
                            <li>
                                <img src="assets/images/icon/arrow2.svg" alt>
                                <p><span class="title">Vacancy:</span> <span> <?php echo $row['vacancy'] ?></span></p>
                            </li>
                            <li>
                                <img src="assets/images/icon/arrow2.svg" alt>
                                <p><span class="title">Deadline:</span> <span> <?php echo $row['expirydate'] ?></span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="job-type-apply">
                        <div class="apply-btn">
                            <a href="job-details.html"><span><img src="assets/images/icon/apply-ellipse.svg"
                                        alt></span>Apply Now</a>
                        </div>
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
    </div>
</div>


<div class="home1-work-process mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex justify-content-center">
                <div class="section-title1 text-center">
                    <h2>JOBES Working <span>Process</span></h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
            </div>
        </div>
        <div class="row g-lg-4 gy-5 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-work-process one text-center">
                    <div class="icon">
                        <img src="assets/images/icon/account-create.svg" alt>
                    </div>
                    <div class="work-content">
                        <h5><a href="register.html">Account Create</a></h5>
                        <p>To create your account be confident & safely.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-work-process two text-center">
                    <div class="icon">
                        <img src="assets/images/icon/create-resume.svg" alt>
                    </div>
                    <div class="work-content">
                        <h5><a href="edit-profile.html">Upload Resume</a></h5>
                        <p>Upload your resume with create account.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-work-process one text-center">
                    <div class="icon">
                        <img src="assets/images/icon/job-find.svg" alt>
                    </div>
                    <div class="work-content">
                        <h5><a href="job-listing1.html">Find Jobs </a></h5>
                        <p>To create your account be confident & safely.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-work-process two text-center">
                    <div class="icon">
                        <img src="assets/images/icon/job-apply.svg" alt>
                    </div>
                    <div class="work-content">
                        <h5><a href="job-listing1.html">Apply Jobs</a></h5>
                        <p>To create your account be confident & safely.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home1-location-area mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                <div class="section-title1">
                    <h2>Get Job Nearby Your <span>Location</span></h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
                <div class="swiper-btn1 d-flex align-items-center">
                    <div class="left-btn prev-1">

                    </div>
                    <div class="right-btn next-1">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper location-slider">
                <div class="swiper-wrapper">
                <?php               
                    // Check if any rows were returned
                    if ($locationArr->num_rows > 0) {
                        // Output data of each row
                        while ($row = $locationArr->fetch_assoc()) {
                        ?>
                    <div class="swiper-slide">
                        <div class="location-card"
                            style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background: #fff;padding: 36px;border-top: 3px solid var(--primary-color1);">

                            <div class="location-content text-center">
                                <h5><a href="#"><img src="assets/images/icon/location.svg" alt><?php echo $row['location'] ?></a>
                                </h5>
                                <p>Job Available: <span>0</span></p>
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
            </div>
        </div>
    </div>
</div>




<div class="home1-article-area mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex justify-content-center">
                <div class="section-title1 text-center">
                    <h2>Recent Blog<span> Post</span></h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
            </div>
        </div>
        <div class="row g-lg-4 gy-5 justify-content-center">
            <?php               
            // Check if any rows were returned
            if ($blogArr->num_rows > 0) {
                // Output data of each row
                while ($row = $blogArr->fetch_assoc()) {
                ?>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="recent-article-wrap">
                    <div class="recent-article-img">
                        <img class="img-fluid" src="assets/images/blog/blog-img-01.png" alt>
                        <div class="publish-area d-xl-none d-flex">
                            <a href="blog-grid.html"><span>02</span>March</a>
                        </div>
                    </div>
                    <div class="recent-article-content">
                        <div class="recent-article-meta">
                            <div class="publish-area">
                                <a href="blog-grid.html"><span>02</span>March</a>
                            </div>

                        </div>
                        <h4><a href="blog-details.html"><?php echo $row['title'] ?></a></h4>
                        <div class="explore-btn">
                            <a href="blog-details.html"><span><img src="assets/images/icon/explore-elliose.svg"
                                        alt></span> Explore More</a>
                        </div>
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
    </div>
</div>


<?php include('layout/footer.php');?>