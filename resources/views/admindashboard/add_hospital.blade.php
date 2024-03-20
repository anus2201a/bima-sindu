@extends('admindashboard.layouts.app')
@section('content')

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
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif

                                        <div class="col-lg-12">
                                            <div class="row border border-5 border-dark m-auto py-2">
                                                <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                    <h1 align="left"><b>Add Hospital</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{ route ('hospital.store')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            {{-- <div class="personal-informations-head">
                                                <h3>Section 1</h3>
                                            </div> --}}
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Name</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('name'))
                                                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Phone No</label>
                                                                <input type="text" name="phone_no" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('phone_no'))
                                                                    <div class="text-danger">{{ $errors->first('phone_no') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Address</label>
                                                                <input type="text" name="address" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('address'))
                                                                    <div class="text-danger">{{ $errors->first('address') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">City</label>
                                                                <input type="text" name="city" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('city'))
                                                                    <div class="text-danger">{{ $errors->first('city') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">State</label>
                                                                <input type="text"  name="state" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('state'))
                                                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Zip Code</label>
                                                                <input type="number" name="zipcode" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('zipcode'))
                                                                    <div class="text-danger">{{ $errors->first('zipcode') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Category</label>
                                                                    <select class="form-control" name="hospital_type" aria-label="Last name" required>
                                                                        <option selected disabled value="">Please Select </option>
                                                                        <option value="for_youth">FOR YOUTH</option>
                                                                        <option value="parent_and_family">PARENT AND FAMILY</option>
                                                                        <option value="for_school">FOR SCHOOL</option>

                                                                      </select>
                                                                      @if($errors->has('hospital_type'))
                                                                      <div class="text-danger">{{ $errors->first('hospital_type') }}</div>
                                                                  @endif
                                                                    {{-- <input type="text" name="category"
                                                                    class="form-control" aria-label="Last name"> --}}
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Timing</label>
                                                                <input type="time" name="timing" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('timing'))
                                                                    <div class="text-danger">{{ $errors->first('timing') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text"  name="description" class="form-control"
                                                                    aria-label="Last name" required >
                                                                    @if($errors->has('description'))
                                                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Image</label>
                                                                <input type="file" name="image" class="form-control"
                                                                    aria-label="First name" required>
                                                                    @if($errors->has('image'))
                                                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                                                @endif
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                    {{-- </div> --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="personal-informations-from-btn">

                                                <button type="submit" class="btn-one">Submit</button>

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
