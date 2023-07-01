@extends('devtech.master')

@section('body')
    <header>
        <img src="{{asset('/')}}front/image/logo.jpg" width="100%"   alt="...">
    </header>
    <!-- products -->
    <section class="py-5 container-fluid products ">
        <h1 class="text-center pb-3 text-success ">Our Products </h1>
        <div class="row row-cols-1 row-cols-md-2 g-5 mx-3">
            <div class="col ">
                <a href="./fabric.html">
                    <div class="card topic  ">
                        <img src="./image/DT - Fabric/DT-16 Fountain fabric Medium weight.jpg" height="350" class="card-img   "
                             alt="...">
                        <div class="card-img-overlay  d-flex justify-content-center align-items-end ">
                            <h2 class="card-title text-light  border border-light border-3  px-3">Fabric</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="./women-wears.html">
                    <div class="card topic">
                        <img src="./image/dress/03.jpg" height="350" class="card-img " alt="...">
                        <div class="card-img-overlay  d-flex justify-content-center align-items-end">
                            <h2 class="card-title text-light border border-light border-3  px-3">Women Wears</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- what-we-do -->
    <section class="py-5 container-fluid what-we-do bg-light">
        <h1 class="text-center pb-3 pt-2 text-success">Working Process</h1>
        <div class="py-5 d-flex g-2 align-items-stretch align-items-center justify-content-around flex-sm-column flex-md-row">
            <!-- <div class="row row-cols-1 row-cols-md-5 g-4 d-flex justify-content-center">-->
            <p class="text-center mx-1 pt-5">
                <img src="./image/work/fibre.png" height="100" alt=""> <br>
                <span class="fs-4">100% Cotton , Organic Cotton</span>
            </p>

            <p class="text-center mx-1 pt-5">
                <img src="./image/work/dye.png" height="100" alt=""> <br>
                <span class="fs-4"> Fabric Dye ,Azo-free dyes</span>
            </p>


            <p class="text-center mx-1 pt-5">
                <img src="./image/work/loom.png" height="100" alt=""> <br>
                <span class="fs-4">Get bit loom sample woven according to your fabric</span>
            </p>


            <p class="text-center mx-1 pt-5">
                <img src="./image/work/dress.png" height="100" alt=""><br>
                <span class="fs-4">Cut and sew dresses</span>
            </p>


            <p class="text-center mx-1 pt-5">
                <img src="./image/work/packet.png" height="100" alt=""> <br>
                <span class="fs-4">production and shipment</span>
            </p>

        </div>


    </section>
    <!-- story -->
    <section class="py-3 container-fluid story">
        <h1 class="text-center pt-2 pb-3 text-success">Our Story</h1>
        <div class="row row-cols-1 row-cols-md-2 g-5 mx-3">
            <div class="col">
                <div class="card">
                    <img src="./image/dress/05.jpg" height="500" alt="">
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quae? Excepturi modi distinctio blanditiis
                        voluptates! Consequuntur ab earum possimus cum vel quia ex voluptas magni dolorem! Eius quaerat molestias
                        minima?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis tempora in voluptas est doloribus illum
                        assumenda asperiores ducimus architecto? Repellat ab dignissimos vitae a dicta eum fugiat quam cupiditate
                        mollitia.</p>

                    <a href="./about.html"><button class="btn btn-outline-success">Read more .....</button> </a>

                </div>
            </div>

        </div>

    </section>
@endsection
