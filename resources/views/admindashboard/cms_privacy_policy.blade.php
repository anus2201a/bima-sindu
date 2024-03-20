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
                                                <h1 align="left"><b>Privacy Policy Page</b></h1>
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
                                                <h3>Section 1</h3>
                                            </div>
                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_1_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_1_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_1_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_1_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description 2</label>
                                                                <input type="text" value=" {{ get_cms('section_1_desc_2', 'privacy_policy', 'value') }}"
                                                                    name="section_1_desc_2" class="form-control" required
                                                                    aria-label="First name">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="personal-informations-head mt-4">
                                                <h3>Section 2</h3>
                                            </div>

                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_2_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_2_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_2_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_2_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head mt-4">
                                                <h3>Section 3</h3>
                                            </div>

                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_3_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_3_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_3_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_3_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">

                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 2</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_3_desc_2', 'privacy_policy', 'value') }}"
                                                                    name="section_3_desc_2" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 3</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_3_desc_3', 'privacy_policy', 'value') }}"
                                                                    name="section_3_desc_3" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-4 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description 4</label>
                                                                <input type="text" value=" {!! get_cms('section_3_desc_4', 'privacy_policy', 'value') !!}"
                                                                    name="section_3_desc_4" class="form-control" required
                                                                    aria-label="First name">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head">
                                                <h3>Section 4</h3>
                                            </div>
                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_4_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_4_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_4_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_4_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-4 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description 2</label>
                                                                <input type="text" value=" {!! get_cms('section_4_desc_2', 'privacy_policy', 'value') !!}"
                                                                    name="section_4_desc_2" class="form-control" required
                                                                    aria-label="First name">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head mt-4">
                                                <h3>Section 5</h3>
                                            </div>

                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_5_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_5_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_5_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_5_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head">
                                                <h3>Section 6</h3>
                                            </div>
                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_6_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_6_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-4">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_6_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_6_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-4 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description 2</label>
                                                                <input type="text" value=" {!! get_cms('section_6_desc_2', 'privacy_policy', 'value') !!}"
                                                                    name="section_6_desc_2" class="form-control" required
                                                                    aria-label="First name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head mt-4">
                                                <h3>Section 7</h3>
                                            </div>

                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_7_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_7_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_7_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_7_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="personal-informations-head mt-4">
                                                <h3>Section 8</h3>
                                            </div>

                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Tittle 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_8_tittle_1', 'privacy_policy', 'value') }}"
                                                                    name="section_8_tittle_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description 1</label>
                                                                <input type="text"
                                                                    value="{{ get_cms('section_8_desc_1', 'privacy_policy', 'value') }}"
                                                                    name="section_8_desc_1" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="personal-informations-from-btn">
                                                <input type="hidden" name="tag" value="privacy_policy">
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
