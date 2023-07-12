@extends('devtech.master')

@section('body')
    <!-- bannar -->
    <header class="container-fluid">
        <section class="container-fluid banner">
            <h3 class=" m-auto display-center">BANGLADESH</h3>
            <h1>Dev Tech</h1>
            <h2>Asociates</h2>
        </section>
    </header>
    <!-- products -->
    <section class="py-5 container-fluid products ">
        <h1>Our Products </h1>
        <h4><i class="fas fa-star "></i> What We Make <i class="fas fa-star"></i></h4>
        <div class="row  g-5 mx-3">
            <div class="col-md-2"></div>
            <div class="col-md-4 product-one">
                <a href="./fabric.html">
                    <div class="card topic  ">
                        <img src="{{asset('/')}}front/image/DT - Fabric/DT-02 Critical Jacquard Medium weight.jpg" height="350" class="card-img   "
                             alt="...">
                        <div class="card-img-overlay product-fabric   d-flex justify-content-center align-items-end ">
                            <h2 class="border border-light border-3  px-3">Fabric</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="./women-wears.html">
                    <div class="card topic">
                        <img src="{{asset('/')}}front/image/dress/08.jpg" height="350" class="card-img " alt="...">
                        <div class="card-img-overlay  d-flex justify-content-center align-items-end">
                            <h2 class="border border-light border-3  px-3">Women Wears</h2>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>
    <!-- work -->
    <section class="py-5 container-fluid work">
        <h1 class="text-center">Soup to Nuts</h1>
        <h4><i class="fas fa-star "></i>What We Do <i class="fas fa-star"></i></h4>
        <div class="pt-5 row row-cols-md-5 row-cols-1 text-center">
            <a href="" data-bs-toggle="modal" data-bs-target="#cotton">
                <div class="col box">
                    <img src="{{asset('/')}}front/image/work/fibre.png" height="100" alt=""> <br>
                    <p class="fs-4">100% Cotton , Organic Cotton</p>

                </div>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#dye">
                <div class="col box">
                    <img src="{{asset('/')}}front/image/work/dye.png" height="100" alt=""> <br>
                    <p class="fs-4"> Fabric Dye ,Azo-free dyes</p>
                </div>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#loom">
                <div class="col box">
                    <img src="{{asset('/')}}front/image/work/loom.png" height="100" alt=""> <br>
                    <p class="fs-4">Get bit loom sample woven according to your fabric</p>
                </div>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#dress">
                <div class="col box">
                    <img src="{{asset('/')}}front/image/work/dress.png" height="100" alt=""><br>
                    <p class="fs-4">Cut and sew dresses</p>
                </div>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#packet">
                <div class="col">
                    <img src="{{asset('/')}}front/image/work/packet.png" height="100" alt=""> <br>
                    <p class="fs-4">production and shipment</p>
                </div>
            </a>
        </div>
    </section>

    <!-- story -->
    <section class="pb-3 pt-5  container-fluid story">
        <h1>Our Story</h1>
        <h4><i class="fas fa-star "></i> Who We Are <i class="fas fa-star"></i></h4>
        <div class="row row-cols-1 row-cols-md-2 g-5 mx-3">
            <div class="col">
                <div class="card">
                    <img src="{{asset('/')}}front/image/banner/2.jpg" height="400" alt="">
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quae? Excepturi modi distinctio blanditiis
                        voluptates! Consequuntur ab earum possimus cum vel quia ex voluptas magni dolorem! Eius quaerat molestias
                        minima?</p>

                    <a href="./about.html"><button class="btn btn-outline-success">Read more .....</button> </a>

                </div>
            </div>

        </div>

    </section>


    <!-- Modal 1-->
    <div class="modal fade" id="cotton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="dye" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3-->
    <div class="modal fade" id="loom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 4-->
    <div class="modal fade" id="dress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5-->
    <div class="modal fade" id="packet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
