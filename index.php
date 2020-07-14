<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="projectDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="involveDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Get Involved
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="involveDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
                <button type="button" id="button" class="btn btn-warning"><span></i>Donate Now</i></span></button>

            </div>
        </div>
    </nav>
    </header>
    <main>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="https://www.iwcwtministry.org/wp-content/uploads/2014/08/slide1-1.jpg" class="d-block w-100" alt="...">


                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide4.jpg" class="d-block w-100" alt="...">


                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide6.jpg" class="d-block w-100" alt="...">


                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </main>




    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>


        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p><button type="button" class="btn btn-outline-info btn-lg">View</button>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.iwcwtministry.org/wp-content/uploads/2014/08/slide1-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://www.iwcwtministry.org/wp-content/uploads/2014/08/slide1-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
    <div class="container my-4">
        <div class="row">
            <div id="currentHeading" class="col-md-12">
                <h4>CURRENT PROJECTS</h4>
                <p><a class="view-all" href="#">View all +</a>
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 my-2">
                    <div class="card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">CHILD PROTECTION</h5>
                                    <p class="card-text">The Child Protection Programme is a core sector of our work. We utilize a child rights programming framework and keep in mind the cross-cutting themes of child participation, non-discrimination and best interests of children.</p>
                                    <p class="card-text"><a href="./projectList/childProtection.php" class="btn btn-primary">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2">
                    <div class="card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">WOMEN EMPOWERMENT</h5>
                                    <p class="card-text">Women in India consistently lag behind men in terms of access to education, health care, jobs etc. Apart from the economic and social inequality, women are victims of heinous crimes such as dowry deaths, rape, molestation and immoral trafficking.</p>
                                    <p class="card-text"><a href="./projectList/womenEmpowerment.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-md-4 my-2">
                    <div class="card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">TRAIN WOMEN TO EARN & LIVE – END POVERTY.</h5>
                                    <p class="card-text">This project will empower disadvantaged women and girls through imparting skill training, computer training’s, educational scholarships and Self help, which will help to generate an income for their families and give a better chance of survival.</p>
                                    <p class="card-text"><a href="./projectList/train-women-to-earn-live-end-poverty.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 my-2">
                    <div class="card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">FOOD FOR HUNGRY CHILDREN</h5>
                                    <p class="card-text">One in eight women, men and children go to bed hungry every night and by 2025 nearly a billion young people will face poverty because of the damage done to them now through hunger and malnutrition.</p>
                                    <p class="card-text"><a href="./projectList/food-for-hungry-children.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <h4 style="text-align: center;margin-top:50px;"><span><strong> EARNED BADGES 2019:<br>
                </strong></span></h4>
        <h2 style="text-align: center;margin-top:40px;"><span class="row">
                <div class="column">
                    <noscript><img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png" alt="" style="width:70%"></noscript><img class=" lazyloaded" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png" data-src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png" alt="" style="width:70%">
                </div>
                <p></p>
            </span></h2>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>