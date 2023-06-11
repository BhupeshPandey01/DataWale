<!DOCTYPE html>
<!--=== Coding by Bhupesh === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="{{ url('cssfile/global.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Global Enterprises</title>
</head>

<body>

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Global Enterprises</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{ url('global')}}">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="{{ url('allcustomer') }}">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">All Customer</span>
                    </a></li>
                <li><a href="{{ url('newcustomer')}}">
                        <i class="uil uil-user-plus"></i>
                        <span class="link-name">Add New Customer</span>
                    </a></li>
            </ul>
            <div class="logout-main">
                <ul class="logout-mode">
                    <li><a href="{{ url('login') }}">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>

                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Dark Mode</span>
                        </a>

                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <main>
            <div class="intro">
                <h1>Wellcome To Global Enterprises</h1>
                <p>This is for Our Service Record's</p>
            </div>
            <div class="achievements">
                <div class="work">
                    <i class="fas fa-atom"></i>
                    <p class="work-heading">Safe_Data</p>
                    <p class="work-text">The app facilitates you with saving of data with security. At the end of the day, the goals are simple: safety and security.</p>
                </div>
                <div class="work">
                    <i class="fas fa-skiing"></i>
                    <p class="work-heading">Feature</p>
                    <p class="work-text">Make it easy to find your details in just on click. Require less amount of time to execute Your personal details</p>
                </div>
                <div class="work">
                    <i class="fas fa-ethernet"></i>
                    <p class="work-heading">Benifits</p>
                    <p class="work-text">The records of each customer are stored individually along with the date. Benifits Tracking your data according to your date. </p>
                </div>
            </div>
            <div class="about-me">
                <div class="about-me-text">
                    <h2>About Me</h2>
                    <p>I am Bhupesh Pandey. I am a web developer and I love to create websites. I am a very good developer and I am always looking for new projects.I have a lot of network skills and I am very good at them. I am very good at networking and I am always looking for new network skills.</p>
                </div>
                <img src="{{ URL('/images/bhupesh.jpg')}}" alt="me">
            </div>
        </main>
    </section>
    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark") {
            body.classList.toggle("dark");
        }

        let getStatus = localStorage.getItem("status");
        if (getStatus && getStatus === "close") {
            sidebar.classList.toggle("close");
        }

        modeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                localStorage.setItem("mode", "dark");
            } else {
                localStorage.setItem("mode", "light");
            }
        });

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                localStorage.setItem("status", "close");
            } else {
                localStorage.setItem("status", "open");
            }
        })
    </script>
</body>

</html>