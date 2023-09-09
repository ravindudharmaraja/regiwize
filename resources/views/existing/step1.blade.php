@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">
                    <img src="/image/logo.png" alt="Regewize Logo">
                    <!-- <h3>Regewize</h3> -->
                </div> 
                <div class="left-text">
                    <h3>Manage your business with StartGlobal</h3>
                </div> 
                <br> 
                <div>
                    <p class="left-p" >Start your company in minutes. Save time and money.</p>
                </div>   
            </div>
            <div class="right-side">    
            <div class="main active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Start your business now.</h2>
                            <p>Creating your company in US is just a few steps away, Enter your email address to continue.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="email">
                                <span>Email</span>
                            </div>
                            <div class="input-div"> 
                            <div class="input-div">
                                <input type="text" required require id="phone">
                                <span>Phone</span>
                            </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button" onclick="navigateToExistingStep2()">Get Started</button>
                            <span class="already-account" onclick="navigateToNewStep1()"><a href="#">I have an existing US company</a></span>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
    
@endsection          

