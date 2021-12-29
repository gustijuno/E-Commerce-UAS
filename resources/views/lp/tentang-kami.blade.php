@extends('layouts.lp.main')

@section('title', 'Detail Produk')

@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">About Page</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- About Area Start -->
<section class="about-area">
    <div class="container container-2">
        <div class="row">
            <div class="col-lg-6 mb-res-sm-50px">
                <div class="about-left-image">
                    <img src="{{asset('templates/landing-page')}}/images/feature-bg/1.jpg" alt="" class="img-responsive" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-title">
                        <h2>Welcome To Ecolife</h2>
                    </div>
                    <p class="mb-30px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero officiis eveniet accusamus recusandae. Temporibus
                        amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo, temporibus vel! porro suscipit. Quibusdam culpa asperiores exercitationem architecto
                        quo, temporibus vel!
                    </p>
                    <p>
                        Sint voluptatum beatae necessitatibus quos mollitia vero, optio asperiores aut tempora iusto eum rerum, possimus, minus quidem ut saepe laboriosam. Praesentium aperiam accusantium minus repellendus accusamus neque iusto pariatur laudantium provident quod
                        recusandae exercitationem natus dignissimos, molestias quibusdam doloremque eaque fugit molestiae modi quam unde. Error est dolor facere.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Area End -->

@endsection
