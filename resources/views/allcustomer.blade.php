<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('cssfile/allcustomer.css') }}">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
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
        <div class="heading">
            <h1>Customer's Details</h1>
        </div>
        <table class="table table-striped">
            <thead>

                <tr>
                    <th scope="col">SR.</th>
                    <th scope="col">Customer's Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile NO.</th>
                    <th scope="col">Date of Service </th>
                    <th scope="col">Change Parts</th>
                    <th scope="co1">Actions</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row" style="color: var(--text-color);">{{ $row->id }}</th>

                    <td style="color: var(--text-color);">{{ $row->name }}</td>
                    <td style="color: var(--text-color);">{{ $row->address }}</td>
                    <td style="color: var(--text-color);">{{ $row->mobile }}</td>
                    <td style="color: var(--text-color);">{{ $row->date }}</td>
                    <td style="color: var(--text-color);">{{ $row->parts }}</td>
                    <td style="color: var(--text-color);"><a href="{{ url('edit-customer').'/'.$row->id }}" class="btn btn-primary">Edit</a> | <a href="{{ url('delete-customer').'/'.$row->id }}" class="btn btn-warning">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(Session::has('success'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
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