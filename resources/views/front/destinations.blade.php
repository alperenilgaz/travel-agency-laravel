 @extends('front.layout.master')

 @section('main-content')
 
 <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Destinations</h2>
                        <div class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Destinations</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="destination pt_70 pb_50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Australia</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Thailand</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Canada</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Dubai</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Portugal</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Morocco</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-7.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Venice</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item pb_25">
                            <div class="photo">
                                <a href="{{route('destination')}}"><img src="uploads/destination-8.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="{{route('destination')}}">Paris</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                
                @include('front.layout.pagination')
            </div>
        </div>
@endsection
 