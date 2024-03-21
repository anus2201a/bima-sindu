@extends('admindashboard.layouts.app')
@section('content')
@extends('admindashboard.layouts.app')
@section('content')
@extends('admindashboard.layouts.app')
@section('content')
@extends('admindashboard.layouts.app')
@section('content')
@extends('admindashboard.layouts.app')
@section('content')

        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        <section class="nftmax-adashboard nftmax-show">
            <div class="container-fluid">
                <div class="row">

                     <div class="row border border-5 border-dark m-auto py-2">
                                                <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                    <h1 align="left"><b>Add Blog</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{ route ('blog.store')}}" enctype="multipart/form-data" method="POST">
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
                                                                    class="form-label last-name ">Tittle</label>
                                                                <input type="text" name="tittle" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('tittle'))
                                                                    <div class="text-danger">{{ $errors->first('tittle') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text" name="description" class="form-control"
                                                                    aria-label="Last name" required>
                                                                    @if($errors->has('description'))
                                                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            {{-- <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Description</label>
                                                                <input type="text"  name="description" class="form-control"
                                                                    aria-label="Last name">
                                                            </div> --}}
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
