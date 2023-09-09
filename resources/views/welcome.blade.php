@extends('layouts.app')
@section('content')
<div class="container">
    <figure class="snip1157">
        <blockquote>You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why we think faster than we speak. Hobbes: Probably so we can think twice.
            <div class="arrow"></div>
        </blockquote>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg" alt="sq-sample3" />
        <div class="author">
            <h5>R Dharmaraja <span> lexsolution.com</span></h5>
        </div>
    </figure>
    <div class="card">
        <div class="form">
            <div class="left-side1" id="backgroundChange">
                <div class="left-heading1">
                    <img src="/image/logo.png" alt="Regewize Logo">
                </div>
            </div>
            <div class="right-side">
                <div class="main1 active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Launch and Manage your LLC in the US</h2>
                            <p>Form a new company from scratch or onboard your existing US company. Manage compliance essentials in one place.</p>
                        </div>
                        <div class="custom-container" onclick="navigateToNewStep1()">
                            <i class="fas fa-landmark fa-3x icon-with-border"></i>
                            <div class="text-container">
                                <div class="title">SETUP A NEW LLC</div>
                                <i class="fas fa-arrow-right arrow-icon"></i>
                            </div>
                        </div>
                        <div class="custom-container" onclick="navigateToExistingStep1()">
                            <i class="fas fa-gear fa-3x icon-with-border"></i>
                            <div class="text-container">
                                <div class="title">MANAGE MY EXISTING LLC</div>
                                <i class="fas fa-arrow-right arrow-icon"></i>
                            </div>
                        </div>

                        
                       
                        
            </div>
        </div>
    </div>
@endsection          

