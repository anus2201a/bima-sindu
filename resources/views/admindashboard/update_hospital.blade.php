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
                                                    <h1 align="left"><b>Team Member</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{route ('hospital.update.store' , $data->id)}}" enctype="multipart/form-data" method="POST">
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
                                                                <input type="text" value="{{$data->name}}" name="name" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Phone No</label>
                                                                <input type="text" value="{{$data->phone_no}}" name="phone_no" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Address</label>
                                                                <input type="text" value="{{$data->address}}" name="address" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">City</label>
                                                                <input type="text" value="{{$data->city}}" name="city" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">State</label>
                                                                <input type="text" value="{{$data->state}}" name="state" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Zip Code</label>
                                                                <input type="text" value="{{$data->zipcode}}" name="zipcode" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Category</label>
                                                                    <select value="{{$data->name}}" class="form-control" name="hospital_type" aria-label="Last name">
                                                                        <option selected>Please Select </option>
                                                                        <option {{ $data->type == 'for_youth' ? 'selected' : ''}} value="for_youth">FOR YOUTH</option>
                                                                        <option {{ $data->type == 'parent_and_family' ? 'selected' : ''}} value="parent_and_family">PARENT AND FAMILY</option>
                                                                        <option {{ $data->type == 'for_school' ? 'selected' : ''}} value="for_school">FOR SCHOOL</option>
                                                                      </select>

                                                                    {{-- <input type="text" name="category"
                                                                    class="form-control" aria-label="Last name"> --}}
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Timing</label>
                                                                <input type="time" value="{{$data->timing}}" name="timing" class="form-control"
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text"value="{{$data->description}}"  name="description" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Image</label>
                                                                <input type="file" value="{{$data->image}}" name="image" class="form-control"
                                                                    aria-label="First name">
                                                                        <br>
                                                                        <img src="{{ asset($data->image) }}" style="border-radius: 10px;"  width="200" height="auto" alt="">

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
