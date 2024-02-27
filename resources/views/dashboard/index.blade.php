<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: url('{{ asset("bgbts.png") }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbarNav { 
            padding-left: 500px;
            background-color: #CEAB8B;
        }
        .navbar-brand{ 
           color: #D74444;

font-family: "Henny Penny";
font-size: 46px;
font-style: normal;
font-weight: 400;
line-height: normal;
        }

        .navbar {
            position: relative;
            z-index: 1;
            background-color: #CEAB8B;
        }

 
        .dropbtn {
            background-color: transparent;
            color: #000;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

      
        .dropdown-content a:hover {
            background-color: #BC9F81;
        }


        .dropdown:hover .dropdown-content {
            display: block;
        }

      
        .dropdown:hover .dropbtn {
            background-color: #BC9F81;
            color: #000;
        }
        
        /* Set initial display to none for dropdown-content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #826644;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Bootstrap Container */
        .container {
            position: relative;
            z-index: 2;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">MemoriesOfSchool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <div class="dropdown">
                <li class="nav-item active">
                    <a class="dropbtn" href="#">HOME</a>
                </li>
                </div>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="dropbtn">ABOUT SCHOOL</button>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="#">UR School</a>
                            <a class="dropdown-item" href="#">Kata Sambutan</a>
                            <a class="dropdown-item" href="#">The Teacher</a>
                            <a class="dropdown-item" href="#">Organisasi</a>
                            <a class="dropdown-item" href="#">Event</a>
                            <a class="dropdown-item" href="#">Angket</a>
                        </div>
                    </div>        
                </li>
                <div class="dropdown">
                <li class="nav-item active">
                    <a class="dropbtn" href="#">STUDENTS</a>
                </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Congrats</h2>
                <h2>Class of 2024</h2>
            </div>
            <div class="col-md-4">
                <!-- Additional content, if any -->
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional, if you need Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Add JavaScript to handle dropdown display
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownBtn = document.querySelector('.dropbtn');
            var dropdownContent = document.querySelector('.dropdown-content');

            dropdownBtn.addEventListener('click', function() {
                dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
