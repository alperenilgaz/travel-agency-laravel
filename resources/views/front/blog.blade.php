@extends('front.layout.master')

@section('main-content')

        <div class="page-top" style="background-image: url('uploads/banner.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                        <div class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog pt_70 pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-1.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Partnering to create a strong community</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        In order to create a good community we need to work together. We need to help, support each other and be respectful to each other.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-2.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Turning your emergency donation into instant aid</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        We are working hard to help the poor people. We are trying to provide them food, shelter, clothing, education and medical assistance.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-3.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Charity provides educational boost for children</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        In order boost the education of the children, we are providing them books, pens, pencils, notebooks and other necessary things.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-1.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Partnering to create a strong community</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        In order to create a good community we need to work together. We need to help, support each other and be respectful to each other.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-2.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Turning your emergency donation into instant aid</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        We are working hard to help the poor people. We are trying to provide them food, shelter, clothing, education and medical assistance.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item pb_70">
                            <div class="photo">
                                <img src="uploads/blog-3.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('post')}}">Charity provides educational boost for children</a>
                                </h2>
                                <div class="short-des">
                                    <p>
                                        In order boost the education of the children, we are providing them books, pens, pencils, notebooks and other necessary things.
                                    </p>
                                </div>
                                <div class="button-style-2 mt_20">
                                    <a href="{{route('post')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('front.layout.pagination')
            </div>
        </div>

        

@endsection