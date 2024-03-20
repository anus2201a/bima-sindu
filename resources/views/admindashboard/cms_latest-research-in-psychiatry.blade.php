@extends('admindashboard.layouts.app')
@section('content')
    {{-- @dd(get_cms('section_1_main_tittle','home')) --}}

    <!-- End Header -->

    <!-- NFTmax Dashboard -->
    <section class="nftmax-adashboard nftmax-show">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12 setting-main  ">
                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">

                                <div class="row">

                                    @if (session()->has('success'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong> {{ session()->get('success') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="col-lg-12">
                                        <div class="row border border-5 border-dark m-auto py-2">
                                            <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                <h1 align="left"><b>Latest Research in Psychiatry</b></h1>
                                            </div>
                                            <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                            </div>
                                        </div><br>
                                        <form action="{{ route('update-cms') }}" enctype="multipart/form-data"
                                            method="POST">
                                            @csrf
                                            <div class="personal-informations-head">
                                                <h3>Banner Section</h3>
                                            </div>
                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                               
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Banner Image</label>
                                                                <input type="file" name="banner_image"
                                                                    class="form-control" aria-label="First name">
                                                                <br>
                                                                <img src="{{ asset(get_cms('banner_image', 'latest_research_in_psychiatry', 'value')) }}"
                                                                    style="border-radius: 12px;" width="200"
                                                                    height="auto" alt="">

                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Main Tittle</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('banner_tittle', 'latest_research_in_psychiatry', 'value') }}"
                                                                    name="banner_tittle" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    

                                                </div>

                                                <div class="personal-informations-head mt-4">
                                                    <h3>Section 1</h3>
                                                </div>

                                                <div class="personal-informations-from">
                                                    <div class="personal-informations-from-item">
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Heading</label>
                                                                    <input type="text"
                                                                        value=" {!! get_cms('section_1_heading', 'latest_research_in_psychiatry', 'value') !!}"
                                                                        name="section_1_heading" class="form-control" required
                                                                        aria-label="First name">
                                                                </div>
                                                                <div class="col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Main Tittle</label>
                                                                    <input type="text"
                                                                        value=" {!! get_cms('section_main_tittle', 'latest_research_in_psychiatry', 'value') !!}"
                                                                        name="section_main_tittle" class="form-control" required
                                                                        aria-label="First name">
                                                                </div>
    
    
                                                            </div>
                                                        </div>
    
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Description 1</label>
                                                                    <input type="text"
                                                                        value=" {!! get_cms('section_1_desc_1', 'latest_research_in_psychiatry', 'value') !!}"
                                                                        name="section_1_desc_1" class="form-control" required
                                                                        aria-label="First name">
                                                                </div>
                                                                <div class="col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Description 2</label>
                                                                    <input type="text"
                                                                        value=" {!! get_cms('section_1_desc_2', 'latest_research_in_psychiatry', 'value') !!}"
                                                                        name="section_1_desc_2" class="form-control" required
                                                                        aria-label="First name">
                                                                </div>
    
    
                                                            </div>
                                                        </div>
    
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Section 1 Image</label>
                                                                    <input type="file" name="section_1_image"
                                                                        class="form-control" aria-label="First name">
                                                                    <br>
                                                                    <img src="{{ asset(get_cms('section_1_image', 'latest_research_in_psychiatry', 'value')) }}"
                                                                        style="border-radius: 12px;" width="200"
                                                                        height="auto" alt="">
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="personal-informations-from-btn">
                                                    <input type="hidden" name="tag" value="latest_research_in_psychiatry">
                                                    <button type="submit" class="btn-one">Save Changes</button>
                                                </div>
                                            </div>



                                        </form>
                                    </div>

                                </div>






                            </div>









                      
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- End NFTmax Dashboard -->
    </div>
@endsection
