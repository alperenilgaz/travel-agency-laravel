@extends('front.layout.master')


@section('main-content')


        <div class="page-top" style="background-image: url('uploads/banner.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Partnering to create a strong community</h2>
                        <div class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                                <li class="breadcrumb-item active">Partnering to create a strong community</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post pt_50 pb_50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-item">
                            <div class="main-photo">
                                <img src="uploads/blog-1.jpg" alt="">
                            </div>
                            <div class="sub">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> On: 25 December, 2023</li>
                                    <li><i class="fas fa-th-large"></i> Category: <a href="">Fundraising</a></li>
                                </ul>
                            </div>
                            <div class="description">
                                <p>
                                    Lorem ipsum dolor sit amet, no unum senserit constituam has, has an enim recusabo, dolorum consequuntur ad quo. Nisl nonumes ea eam, at pro eleifend partiendo, alii summo ex nam. Eam impetus efficiantur ullamcorper no, ad est meliore patrioque sententiae, no eam atqui possit. An iriure meliore maiorum sed, quo an altera numquam. Nam eu commodo persecuti. Eu eos tibique delectus disputando, ei purto wisi euripidis mei, vis augue electram iudicabit ea.
                                </p>
                                <p>
                                    Eum id legimus rationibus, aeque eligendi ullamcorper mel et. Habeo officiis id usu, eu intellegat voluptatum definiebas nec, cu his error solet voluptua. Nec in wisi labore expetendis. His hinc verear ne, pri dignissim sententiae percipitur no, mel mollis ceteros gubergren in.
                                </p>
                                <p>
                                    Cu cum tota summo vulputate, ullum recusabo neglegentur per ex. Velit deleniti facilisi an usu, vim ludus prompta probatus ne. Ad eum ferri liber, sea no virtute facilisi. Id ius dico consectetuer. Te animal facilisis his, est ipsum putent te.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="right-item">
                            <h2>Latest Posts</h2>
                            <ul>
                                <li><a href="{{route('post')}}"><i class="fas fa-angle-right"></i> Education Material for Poor Children</a></li>
                                <li><a href="{{route('post')}}"><i class="fas fa-angle-right"></i> Partnering to create a strong community</a></li>
                                <li><a href="{{route('post')}}"><i class="fas fa-angle-right"></i> Turning your emergency donation into instant aid</a></li>
                                <li><a href="{{route('post')}}"><i class="fas fa-angle-right"></i> Charity provides educational boost for children</a></li>
                                <li><a href="{{route('post')}}"><i class="fas fa-angle-right"></i> Directly Support Individuals Charity</a></li>
                            </ul>

                            <h2 class="mt_40">Categories</h2>
                            <ul>
                                <li><a href="{{route('category')}}"><i class="fas fa-angle-right"></i> Donation</a></li>
                                <li><a href="{{route('category')}}"><i class="fas fa-angle-right"></i> Charity</a></li>
                                <li><a href="{{route('category')}}"><i class="fas fa-angle-right"></i> Education</a></li>
                                <li><a href="{{route('category')}}"><i class="fas fa-angle-right"></i> Health</a></li>
                                <li><a href="{{route('category')}}"><i class="fas fa-angle-right"></i> Fundraising</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection