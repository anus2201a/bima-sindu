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
                                                    <h1 align="left"><b>Config Setting</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{route ('update-cms')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            {{-- <div class="personal-informations-head">
                                                <h3>Section 1</h3>
                                            </div> --}}
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        {{-- <div class="row"> --}}
                                                            <div class="col-12 col-md-12  col-lg-12">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Contact Number</label>
                                                                <input type="text" value="{{get_cms('contact_number','config','value')}}" name="contact_number" class="form-control" required
                                                                    aria-label="Last name">
                                                            </div>
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Email Address</label>
                                                                <input type="text"value="{{get_cms('email_address','config','value')}}"  name="email_address" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Address</label>
                                                                <input type="text" value="{{get_cms('address','config','value')}}" name="address" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Pinterest Link</label>
                                                                <input type="text"value="{{get_cms('pinterest_link','config','value')}}"  name="pinterest_link" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Instagram Link</label>
                                                                <input type="text"value="{{get_cms('instagram_link','config','value')}}"  name="instagram_link" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">LinkedIn Link</label>
                                                                <input type="text"value="{{get_cms('linkedIn_link','config','value')}}" name="linkedIn_link" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Facebook Link</label>
                                                                <input type="text"value="{{get_cms('facebook_link','config','value')}}"  name="facebook_link" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">@CopyRight</label>
                                                                <input type="text"value="{{get_cms('copy_right','config','value')}}"  name="copy_right" class="form-control" required
                                                                    aria-label="First name">
                                                                     <br>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="personal-informations-from-btn">
                                                    <input type="hidden" name="tag" value="config">
                                                <button type="submit" class="btn-one">Save Profile</button>

                                                </div>
                                            </div>


                                        </form>
                                        </div>

                                    </div>






                                </div>









                                <div class="tab-pane fade" id="v-pills-settings-3" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab-3">


                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="terams-main">
                                                <div class="terams-main-head">
                                                    <h2>Terms and Conditions</h2>
                                                </div>

                                                <div class="terams-main-text">
                                                    <h3>2. Acceptance</h3>
                                                    <p>What you do own when you buy an are the keys to a non-fungible –
                                                        perhaps unique – token. That token is yours to trade or hold or
                                                        display in Decentraland. But the digital file associated with an
                                                        NFT is just as easy to copy and paste and download as any other
                                                        – the Finally, players lose their NFTs sometimes according to
                                                        the rules and regulations of the NFT game.</p>
                                                </div>
                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                                        amet sint. Velit officia consequat duis enim velit mollit.
                                                        Exercitation veniam consequat sunt nostrud amet.Capacity. You
                                                        confirm that you have the legal capacity to receive and hold and
                                                        make use of the NFT under French jurisdiction and any other
                                                        relevant jurisdiction.Acceptance. By participating in the Sale,
                                                        You accept and agree to these Terms and Conditions without any
                                                        condition or restriction.
                                                        If You do not agree to this Contract, You shall not participate
                                                        in the Sale made by the Company Exercitation veniam consequat
                                                        sunt nostrud amet.Capacity. You confirm that you have the legal
                                                        capacity to receive and hold find to end.Contract, You shall not
                                                        participate in the Sale made by the Company Exercitation venia
                                                    </p>
                                                </div>



                                                <div class="terams-main-text-two">
                                                    <h3>In reality, the most important aspect of a great dashboard is
                                                        the part that gets the least amount of attention: The underlying
                                                        data. More than any other aspect, the data will make or break a
                                                        dashboard.Within this definition, successful administration
                                                        appears to rest on three basic skills, which we will call
                                                        technical, and conceptual.</h3>
                                                </div>

                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>The Company offers featuring the Betonyou universe. The holders
                                                        of one or more NFTs will be able to win cryptos while playing
                                                        video games. In the future, the Company plans to develop its own
                                                        games and Metaverse around the Betonyou universe (“Project”).
                                                        <br>
                                                        <br>
                                                        To release the NFTs and fund the project, the Company offers
                                                        NFTs from a dedicated website("Sale"). The web address of this
                                                        website will be given at the time of the mint. The NFT
                                                        acquisition does not confer any rights on the Company or in the
                                                        future development.
                                                    </p>
                                                </div>
                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>To the fullest extent permitted by applicable law, You undertake
                                                        to indemnify, defend and hold harmless the Company from and
                                                        against all claims, demands, actions, damages, losses, costs and
                                                        expenses (including attorneys’ fees) that arise from or relate
                                                        to (i) your Subscription or use of the NFTs; (ii) your
                                                        responsibilities or obligations under this Contract; and (iii)
                                                        your breach of this Contract.
                                                        <br>
                                                        <br>
                                                        Company undertakes to act with the care normally expected from a
                                                        professional in his field and to comply with the best practice
                                                        in force. The best endeavor obligation only binds the Company.
                                                    </p>
                                                </div>


                                            </div>
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
