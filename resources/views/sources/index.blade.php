@extends('base')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Here you find the most reliable sources for RC's</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Help us avoid scammers! <br/> Help us build this community!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">
                        We've got at the moment 20 rc sources all across the world and all reliable!<br/>
                        To being able to provide this service and check if all sources are good we rely on donations<br/>
                        So please if you like our service and want to see updated reliable sources please DONATE US
                    </p>
                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="3D92D5G5JCQUU" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_PT/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Reliable Sources</h3>
                        <p class="text-muted mb-0">Our Sources are constantly tested to check if they are still good</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">Our last update was 28/11/2021</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ready to Use</h3>
                        <p class="text-muted mb-0">Just choose and use</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class="text-muted mb-0">Because we all want our chems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sources -->
    <section class="page-section bg-primary" id="sources">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vendor</th>
                            <th scope="col">Country</th>
                            <th scope="col">Url</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Rating</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sources as $source)
                            <tr>
                                <td>{{$source->vendor}}</td>
                                <td>{{$source->country->country}}</td>
                                <td><a href="{{$source->url}}">{{$source->url}}</a></td>
                                <td>{{$source->notes}}</td>
                                <td>
                                    @for ($i = 0; $i < $source->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="3D92D5G5JCQUU" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_PT/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Please help us and Donate!</h2>
            <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="3D92D5G5JCQUU" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_PT/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <a class="btn btn-primary btn-xl" href = "mailto: xbugszone@gmail.com">Send Email</a>

            </div>
        </div>
    </section>
@endsection
