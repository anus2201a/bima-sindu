@extends('home.layouts.app')
@section('content')



<main>

    <!-- sec-privacy-policy start here -->
    <section class="sec-privacy-policy">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="privacy-deatils">
                        <h2 class="heading-two">{{ get_cms('section_1_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_1_desc_1','privacy_policy','value') }}</p>
                        <p>{!! get_cms('section_1_desc_2','privacy_policy','value') !!}</p>
                        <h2 class="heading-two">{{ get_cms('section_2_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_2_desc_1','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_3_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_3_desc_1','privacy_policy','value') }}</p>
                        <p>{{ get_cms('section_3_desc_2','privacy_policy','value') }}</p>
                        <p>{{ get_cms('section_3_desc_3','privacy_policy','value') }}</p>
                        <p>{{ get_cms('section_3_desc_4','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_4_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_4_desc_1','privacy_policy','value') }}</p>
                        <p>{{ get_cms('section_4_desc_2','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_5_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_5_desc_1','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_6_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_6_desc_1','privacy_policy','value') }}</p>
                        <p>{{ get_cms('section_6_desc_2','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_7_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_7_desc_1','privacy_policy','value') }}</p>
                        <h2 class="heading-two">{{ get_cms('section_8_tittle_1','privacy_policy','value') }}</h2>
                        <p>{{ get_cms('section_8_desc_1','privacy_policy','value') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- sec-privacy-policy end here -->
</main>


         @endsection
