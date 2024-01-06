
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SPidy - web</title>
    <link rel="stylesheet" href="./style.css">
            <link rel="icon" href="SP (2).png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
    .navbar-nav .nav-link,
    .dropdown-menu .dropdown-item {
        color: white !important;
    }

    .dropdown-menu .dropdown-item:hover {
        color: black !important; /* Change color on hover */
    }

    .card {
        background-color: rgba(0, 0, 0, 0);
        color: white;
        margin: 1cm;
        align-items: center;
    }

    .card-title {
        font-size: 2cm;
    }

    @media screen and (max-width: 767px) {
    .card {
        width: 100%;
        margin: 1cm 0;
    }

    .card-body p.quotes {
        font-size: 0.5cm !important;
    }

    .text-center {
        margin: 5% !important;
    }

    .main {
        height: auto;
        width: 100%;
    }
}

    .card-title.custom-title {
        font-size: 2cm !important;
    }
    .notification-icon {
    position: fixed;
    animation: bounce 2s infinite;
    bottom: 23px;
    right: 20px;
    color: white;
    padding: 1px;
 
    cursor: pointer;
    z-index: 10003; /* Set a higher z-index to be above cursor-container */
}

.notification-icon img{
  background-color: #e080f5;
  border-radius: 50%;
}
.notification-icon i {
  
    font-size: 20px;
    margin: 5%;
}
#notification-bar {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #e080f5;
      color: white;
      padding: 10px;
      border-radius: 5px;
      display: none;
      z-index: 10004;
    }
    body .modal {
    z-index: 10004;
    background-color: rgba(0, 0, 0, 0.8) !important; /* Adjust the alpha value as needed */
    font-family: 'Quicksand', sans-serif;
    color: white; /* Adjust the text color as needed */
}
body .modal-content {
    background-color: rgba(0, 0, 0, 0.5) !important;
}

</style>

<body>
    <div id="overlay"></div>
    <div id="blob"></div>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="SP (2).png" alt="Bootstrap" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index11.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="note.html">Notes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Chat With BOT
                        </a>
                        <ul class="dropdown-menu"
                            style="background-color: rgba(0, 0, 0, 0.5); color: white;">
                            <li><a class="dropdown-item" href="os.html">Operating System</a></li>
                            <li><a class="dropdown-item" href="#">Computer networks</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Under process</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-disabled="true">Hacksprint</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <center>
        <div class="main" style=" margin-top: 5%; height: auto; width: 100%;">
            <a class="navbar-brand" href="#">
                <img src="SP (2).png" alt="Bootstrap" width="200" height="200">
            </a>
            <div class="card-body">
                <!-- Remove inline style and add class "custom-title" -->
                <p class="quotes" style="font-size: 1.5cm; font-family: 'Courier New', Courier, monospace; color: white;">" Strength lies in
                    unity "</p>
                <p class="card-text"></p>
            </div>

        </div>

        <br><br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="btnradio1" onclick="window.location.href='message.html'">Chat with group</label>
        
          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio1" onclick="window.location.href='index1.html'">TO-DO list</label>
        
          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio1" onclick="window.location.href='courses.html'">Courses</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio1" onclick="window.location.href='home.html'">Quiz</label>
        </div>
    </center>

<!-- Notification Modal -->
<button type="button" class="notification-icon" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificationModal" style="height: 1.3cm !important; width: 3cm; border-radius: 0.5cm !important; color:white !important; background-color: #00BFFF !important;" >
TechBites    </button>

    <!-- Notification Modal -->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">TechBites </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p style="text-align: left;">
                                ->Google Restricts Downloads of Airalo, Holafly in India for Not Complying With DoT
                                Policy<a
                                    href="https://www.gadgets360.com/telecom/news/google-restricts-holafly-airalo-download-esim-apps-dot-policy-report-4806561">Click
                                    Here</a><br><br>
                                ->Google Bard Advanced Tipped to Arrive as Paid Subscription, Might Be Linked to
                                Google One<a
                                    href="https://www.gadgets360.com/internet/news/google-bard-advanced-one-paid-subscription-trial-4805808">Click
                                    Here</a><br><br>

                                ->Dell XPS 13, XPS 14, XPS 16 Refreshed With Intel Core Ultra CPUs, Inbuilt AI
                                Features: Price, Specifications.<a
                                    href="https://www.gadgets360.com/laptops/news/dell-xps-13-14-16-price-intel-core-ultra-cpu-ai-features-north-america-launch-4804930">Click
                                    Here</a>


                </p>
            </div>
        </div>
    </div>

    <!-- font style  -->
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,700,500,600,1,300&display=swap" rel="stylesheet">
    <!-- partial -->
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
