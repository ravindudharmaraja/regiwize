@extends('layouts.app')
@section('content')
<div class="container">
    
    <div class="card">
    <img  class="img1" src="/image/logo2.png" alt="Regewize Logo">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">
                    <img src="/image/logo.png" alt="Regewize Logo">
                    <!-- <h3>Regewize</h3> -->
                </div> 
                <div class="left-text">
                    <h3>A few clicks away from creating your company</h3>
                </div> 
                <br> 
                <div>
                    <p class="left-p" >Manage your business in minutes. Save time and money.</p>
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
                                <input type="text"  required require id="email">
                                <span>Email</span>
                            </div>
                            <div class="input-div"> 
                            <div class="input-div">
                                <input type="password" required require id="password">
                                <span>Password</span>
                            </div>
                            </div>
                        </div>
                        <div class="buttons">
                        <button class="next_button" onclick="registerNewUser();">Register</button>
                        <span class="already-account" onclick="navigateToLogin();"><a href="#">I have an account</a></span>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="loadingSpinner"></div> -->
<!--               
    <script>
    
    function registerUser() {
        // Capture form input values
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Create a new user using Firebase Authentication
        firebase.auth().createUserWithEmailAndPassword(email, password)
            .then((userCredential) => {
                // User registration successful
                const user = userCredential.user;
                console.log("User registered successfully:", user);

                // You can now save additional user data to your Firebase Realtime Database if needed
                // For example, store the user's email or other details.
                // You can also redirect the user to the next page after successful registration.
            })
            .catch((error) => {
                // Handle errors during user registration
                const errorCode = error.code;
                const errorMessage = error.message;
                console.error("Error registering user:", errorCode, errorMessage);
            });
    }

</script> -->

@endsection          

