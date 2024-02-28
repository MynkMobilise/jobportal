<?php include('layout/header.php');?>

<div class="dashboard-area mb-120" style="padding-top:20px;">
    <div class="container-fluid">
        <?php include('layout/sidebar.php');?>

    </div>
</div>
<div class="col-lg-9">
    <div class="dashboard-inner">
        <div class="author-area">
            <div class="author-img">
                <img src="assets/images/bg/author1.png" alt>
            </div>
            <div class="author-content">
                <span>Hello, Welcome to Dashboard</span>
                <h4><?php echo $_SESSION['name'] ?></h4>
            </div>
        </div>
        <div class="counter-area">
            <div class="row g-lg-4 g-md-5 gy-5 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="counter-single">
                        <div class="counter-icon">
                            <img src="assets/images/icon/tt-applied.svg" alt="image">
                        </div>
                        <div class="coundown">
                            <p>Total Applied</p>
                            <div class="d-flex align-items-center">
                                <h3 class="odometer">
                                    250
                                </h3>
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="counter-single two">
                        <div class="counter-icon">
                            <img src="assets/images/icon/save-job.svg" alt="image">
                        </div>
                        <div class="coundown">
                            <p>Saved Jobs</p>
                            <div class="d-flex align-items-center">
                                <h3 class="odometer">
                                    150
                                </h3>
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-wrapper">
            <h5 class="title">Current Applied Jobs:</h5>
            <div class="scroll-table">
                <table class="eg-table table category-table mb-0">
                    <thead>
                        <tr>
                            <th>Job Tittle</th>
                            <th>Apply Date</th>
                            <th>Company</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="assets/images/bg/company-logo/company-06.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">Senior UI/UX Designer</a></h6>
                                            <span><img src="assets/images/icon/calender2.svg" alt> 1 days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="assets/images/icon/location.svg" alt>New-York, USA</li>
                                            <li>
                                                <img src="assets/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $60-$90 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">03/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Tech.Bath Com...
                                </a></td>
                            <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="assets/images/bg/company-logo/company-02.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">React JS Developer</a></h6>
                                            <span><img src="assets/images/icon/calender2.svg" alt> 1 days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="assets/images/icon/location.svg" alt>Dhaka, Bangladesh</li>
                                            <li>
                                                <img src="assets/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $80-$100 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">07/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Gangster Group</a>
                            </td>
                            <td data-label="Status"><button class="eg-btn yellow-btn">Interview</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="assets/images/bg/company-logo/company-03.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">WordPress Developer</a></h6>
                                            <span><img src="assets/images/icon/calender2.svg" alt> 2 days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="assets/images/icon/location.svg" alt>West London, UK</li>
                                            <li>
                                                <img src="assets/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $30K-$40K / <span
                                                        class="time">Monthly</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">10/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Zoomly.Co Ltd</a>
                            </td>
                            <td data-label="Status"><button class="eg-btn orenge-btn">Canceled</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="assets/images/bg/company-logo/company-04.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">Mern-Stack Developer</a></h6>
                                            <span><img src="assets/images/icon/calender2.svg" alt> 1 week ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="assets/images/icon/location.svg" alt>New-York, USA</li>
                                            <li>
                                                <img src="assets/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $20-$50 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">13/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Marko-land Ltd</a>
                            </td>
                            <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="assets/images/bg/company-logo/company-05.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">PHP Developer</a></h6>
                                            <span><img src="assets/images/icon/calender2.svg" alt> 2 week ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="assets/images/icon/location.svg" alt>New-York, USA</li>
                                            <li>
                                                <img src="assets/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $40K-$60K / <span class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">18/08/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Bistro.Tech
                                    Group</a></td>
                            <td data-label="Status"><button class="eg-btn green-btn">Success</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="featured-jobs-area">
            <div class="section-title">
                <h4>Featured Jobs:</h4>
            </div>
        </div>
    </div>
    <div class="swiper feature-slider2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="feature-card2">
                    <div class="company-area">
                        <span></span>
                        <div class="logo">
                            <img src="assets/images/bg/company-logo/company-02.png" alt>
                        </div>
                        <div class="company-details">
                            <div class="name-location">
                                <h5><a href="job-details.html">UI/UX Engineer</a> <span>Full Time,
                                        Remote<span></span></span></h5>
                                <ul>
                                    <li><a href="company-details.html">Norland Company</a></li>
                                    <li class="verified"><img src="assets/images/icon/verified.svg" alt> Verified
                                        Company</li>
                                </ul>
                            </div>
                            <div class="bookmark">
                                <i class="bi bi-bookmark-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="job-discription">
                        <ul class="one">
                            <li>
                                <p><span class="title">Location:</span> Chicago, Australia</p>
                            </li>
                            <li>
                                <p><span class="title">Salary:</span> $90-$140 / <span class="time">Per Hour</span></p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p><span class="title">Experience:</span> 2-3 Years</p>
                            </li>
                            <li>
                                <p><span class="title">Deadline:</span><span class="time"> 3 February, 2023</span></p>
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
            <div class="swiper-slide">
                <div class="feature-card2">
                    <div class="company-area">
                        <span></span>
                        <div class="logo">
                            <img src="assets/images/bg/company-logo/company-03.png" alt>
                        </div>
                        <div class="company-details">
                            <div class="name-location">
                                <h5><a href="job-details.html">React JS Developer</a> <span>Full Time,
                                        Remote<span></span></span></h5>
                                <ul>
                                    <li><a href="company-details.html">UX.UI Company</a></li>
                                    <li class="verified"><img src="assets/images/icon/verified.svg" alt> Verified
                                        Company</li>
                                </ul>
                            </div>
                            <div class="bookmark">
                                <i class="bi bi-bookmark-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="job-discription">
                        <ul class="one">
                            <li>
                                <p><span class="title">Location:</span> Dhaka, Bangladesh</p>
                            </li>
                            <li>
                                <p><span class="title">Salary:</span> $80K-$110K / <span class="time">Per Month</span>
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p><span class="title">Experience:</span> 2-3 Years</p>
                            </li>
                            <li>
                                <p><span class="title">Deadline:</span><span class="time"> 3 February, 2023</span></p>
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
            <div class="swiper-slide">
                <div class="feature-card2">
                    <div class="company-area">
                        <span></span>
                        <div class="logo">
                            <img src="assets/images/bg/company-logo/company-04.png" alt>
                        </div>
                        <div class="company-details">
                            <div class="name-location">
                                <h5><a href="job-details.html">Receptionist</a> <span>Full Time, Part
                                        Time<span></span></span></h5>
                                <ul>
                                    <li><a href="company-details.html">Germaine Group Ltd</a></li>
                                    <li class="verified"><img src="assets/images/icon/verified.svg" alt> Verified
                                        Company</li>
                                </ul>
                            </div>
                            <div class="bookmark">
                                <i class="bi bi-bookmark-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="job-discription">
                        <ul class="one">
                            <li>
                                <p><span class="title">Location:</span> West London, Uk</p>
                            </li>
                            <li>
                                <p><span class="title">Salary:</span> $50K-$60K / <span class="time">Per Hour</span></p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p><span class="title">Experience:</span> 2-2.5 Years</p>
                            </li>
                            <li>
                                <p><span class="title">Deadline:</span><span class="time"> 4 February, 2023</span></p>
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
        </div>
    </div>
</div>
</div>
</div>
<?php include('layout/footer.php');?>