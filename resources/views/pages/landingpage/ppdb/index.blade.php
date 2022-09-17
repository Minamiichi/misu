@extends('layouts.landingpage')

@section('content')
   
<!-- Star Faq
============================================= -->
<div class="faq-area default-padding">
    <div class="container">
        <div class="faq-items">
            <div class="row align-center">

                <div class="col-lg-6">
                    <div class="faq-content wow fadeInUp">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Where can I get analytics help?
                                    </h4>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How much does data analytics costs?
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What kind of data is needed for analysis?
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="/landingPage/assets/img/illustration/17.png" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Faq -->
@auth
    @if (Auth::user()->status == 'INACTIVE'))
  
    @endif
@endauth
   
@endsection