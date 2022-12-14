<div>
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Courses
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

        <div class="row d-flex flex-wrap justify-content-between course-wrapper">
            <div class="pb-4 col-sm-12 coursess">
                <h4 class="text-center pt-3"> Web & Application
                </h4>
                <li><a class="dropdown-item" href="web-design.php"><i class="fas fa-star text-warning "></i> Responsive Web
                        Design </a></li>
                <li><a class="dropdown-item" href="web-development.php"><i class="fas fa-star text-warning "></i> Professional Web
                        Development</a></li>
                <li><a class="dropdown-item" href="python.php"><i class="fas fa-star text-warning"></i> Python</a></li>
            </div>
            <div class="pb-4 col-sm-12 py-3 coursess">
                <h4 class="text-center ">Networking</h4>
                <li><a class="dropdown-item" href="ccna.php"><i class="fas fa-star text-warning"></i> Cisco Certified
                        Network Associate</a></li>
                <li><a class="dropdown-item" href="ccnp.php"><i class="fas fa-star text-warning"></i> CCNA
                        (Professional)</a></li>
            </div>

            <div class="pb-4 col-sm-12 py-3 coursess">
                <h4 class="text-center">Grapich Design</h4>
                <li><a class="dropdown-item" href="uiux.php"><i class="fas fa-star text-warning"></i> UX/UI Design</a>
                </li>
                <li><a class="dropdown-item" href="3d.php"><i class="fas fa-star text-warning"></i> 3D Animation</a></li>
                <li><a class="dropdown-item" href="graphic.php"><i class="fas fa-star text-warning"></i> Professional
                        Graphic
                        Design</a>
                </li>
            </div>
            <div class="pb-4 col-sm-12 coursess">
                <h4 class="text-center">Other</h4>
                <li><a class="dropdown-item" href="redhat.php"><i class="fas fa-star text-warning"></i>
                        RED HAT - Linux</a>
                <li><a class="dropdown-item" href="windows-server.php"><i class="fas fa-star text-warning"></i>
                        Microsoft Windows
                        Server
                        2016</a>
                <li><a class="dropdown-item" href="cbyer.php"><i class="fas fa-star text-warning"></i> Cyber Security</a>
                <li><a class="dropdown-item" href="ceh.php"><i class="fas fa-star text-warning"></i> CEH - Certified Ethical Hacker</a>
                <li><a class="dropdown-item" href="isp.php"><i class="fas fa-star text-warning"></i> ISP
                        Setup And
                        Administration Using MikroTik</a>
            </div>
            <div class="pb-4 col-sm-12 coursess">
                <h4 class="text-center">Application</h4>
                <li><a class="dropdown-item" href="app-dev.php"><i class="fas fa-star text-warning"></i> Android App
                        Development
                    </a></li>

            </div>
            <div class="pb-4 col-sm-12 coursess">
                <h4 class="text-center">Digital Markiting</h4>

                <li><a class="dropdown-item" href="affiliat.php"><i class="fas fa-star text-warning"></i> Affiliate
                        Marketing</a></li>
                <li><a class="dropdown-item" href="digital-marketing.php"><i class="fas fa-star text-warning"></i> Digital Marketing</a>
                </li>
                <li><a class="dropdown-item" href="aws.php"><i class="fas fa-star text-warning"></i> AWS - Amazon Web Service</a>
                </li>
            </div>
            <?php

if ($page !== "course") {
    ?>
                <li class="pb-2 px-5"><a class="dropdown-item bg-primary text-light text-center" href="course.php"><i class="fas fa-star text-warning"></i> View All</a>
                </li>
            <?php
}

?>

        </div>
    </ul>
</div>