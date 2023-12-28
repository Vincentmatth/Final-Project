@extends('_layouts.app')
@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Tickets
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('_components.alert')
                <table class="table">
                    <tbody>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{asset('images/Bundaran HI - Lebak Bulus Grab.png')}}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Bundaran HI - Lebak Bulus Grab</strong>
                                </p>
                                <p>
                                    December 24, 2021 <br> 13.30 - 13.45
                                </p>
                            </td>                        
                            <td>
                                <strong>Rp.15.000,00</strong>
                            </td>
                            <td>
                                <strong>Waiting for Payment</strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{asset('images/Blok M BCA - Dukuh Atas BNI.png')}}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Blok M BCA - Dukuh Atas BNI</strong>
                                </p>
                                <p>
                                    December 24, 2023 <br> 13.30 - 13.37
                                </p>
                            </td>
                            <td>
                                <strong>Rp.7.000,00</strong>
                            </td>
                            <td>
                                <strong><span class="text-green">Payment Success</span></strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{asset('images/Lebak Bulus Grab - Senayan Mastercard.png')}}" height="120" alt=" ">
                            </td>
                            <td>
                                <p class=" mb-2 ">
                                    <strong>Lebak Bulus Grab - Senayan Mastercard</strong>
                                </p>
                                <p>
                                    December 24, 2023 <br> 13.30 - 13.40
                                </p>
                            </td>
                            <td>
                                <strong>Rp.10.000,00</strong>
                            </td>
                            <td>
                                <strong><span class="text-red ">Canceled</span></strong>
                            </td>
                            <td>
                                <a href="# " class="btn btn-primary ">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection