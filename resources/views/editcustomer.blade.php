<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="{{ url('cssfile/editcustomer.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div class="container">
            <form method="post" action="{{ url('update-customer') }}">
                @csrf

                @if(Session::has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
                <input type="hidden" name="id" value="{{$data->id}}" />
                <h1>Edit Customer's Details</h1>
                <div class="row">
                    <div class="col-md-12">
                        <label>Enter Name</label>
                        <div>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}" />
                        </div>
                        <label>Enter Address</label>
                        <div>
                            <input type="text" class="form-control" name="address" value="{{ $data->address }}" />
                        </div>
                        <label>Enter Mobile</label>
                        <div>
                            <input type="mobile" class="form-control" name="mobile" value="{{ $data->mobile}}" />
                        </div>
                        <label>Enter Date of Service</label>
                        <div>
                            <input type="date" class="form-control" name="date" value="{{ $data->date}}" />
                        </div>
                        <label>Enter Changed Parts Name</label>
                        <div>
                            <input type="parts" class="form-control" name="parts" value="{{ $data->parts}}" />
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <input type="submit" class="form-control btn btn-primary" value="Update Record" />
                    <a href="{{ url('allcustomer') }}" class="form-control btn btn-danger">Back</a>
                </div>
            </form>
        </div>
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