<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Cengek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .custom-gradient {
            background: rgb(39, 48, 68);
            background: linear-gradient(90deg, rgba(39, 48, 68, 1) 16%, rgba(226, 237, 255, 1) 76%);
        }
    </style>

</head>

<body>

    <x-navbar></x-navbar>


    <!-- hero -->
    <div class="container-flex jumbotron"
        style="height: 50vh; margin-top: 13vh; background-image: url(images/bantuan.png); background-size: cover; background-repeat: no-repeat;">
        <div class="row">
            <div class="col-12 text-center pt-5 mb-3">
                <h1>Bantuan</h1>
            </div>
            <div class="col-12 text-center mt-2 mb-2">
                <h5>Beri tahu kami apa masalah mu</h5>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="col-8">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- footer -->
    <div class="container-flex pb-5 text-white text-center" style="background-color: #273044;">
        <div class="col-md-12">
            <h4 class="display-7">Desa Wisata Tingkir Lor</h4>
            <a href="https://www.instagram.com/desawisata_tingkirlor/" class="text-white fw-bold">Instagram <i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@dewitingkirlor6946" class="text-white fw-bold">Youtube <i
                    class="bi bi-youtube"></i></a>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>