<style>
    @media (max-width: 768px) {
        .carousel-inner .carousel-item > div {
            display: none;
        }
        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* large - display 6 */
    @media (min-width: 992px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(50%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-50%);
        }
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left{
        transform: translateX(0);
    }
    .movie-img {
        height:200px;width: 150px;background-color:  aqua;overflow: hidden;background-image: url("https://i.hizliresim.com/mX07R4.png");
        background-repeat:no-repeat;
        background-size: cover;
        object-fit: fill;
    }

    .movie-title {
        height: 40px; width:150px;background-color: black;overflow: hidden;
    }
</style>
<div class="container text-center my-3">
    <h2 class="font-weight-light">Bootstrap 4 Multi Item Carousel</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 1</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 2</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 3</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 4</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 5</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 6</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <div class="movie-card m-1">
                            <div class="movie-img">
                                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9i-t0o_ltZf_c5ZQ4F4kbuETdhNDdxsjIYKaofkjTM3BmHTqc" class="img-fluid"></a>
                            </div>
                            <div class="movie-title">
                                <a href="#">
                                    <p class="text-white text-sm-center font-small flex-center">Slide 6</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<a class="carousel-control-prev bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>--}}
        </div>
    </div>
    <h5 class="mt-2">Advances one slide at a time</h5>
</div>

