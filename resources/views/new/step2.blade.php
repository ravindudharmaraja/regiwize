@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card">
    <img  class="img" src="/image/logo2.png" alt="Regewize Logo">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">
                    <img src="/image/logo.png" alt="Regewize Logo">
                    <!-- <h3>Regewize</h3> -->
                </div>
                <div class="steps-content">
                    <h3>Step <span class="step-number">1</span></h3>
                    <p class="step-number-content active">Tell us about your company.</p>
                    <p class="step-number-content d-none">Tell us about your company.</p>
                    <p class="step-number-content d-none">Who's in charge?</p>
                    <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
                    <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
                </div>
                <ul class="progress-bar">
                    <li class="active"><p class="progress-text">State</p></li>
                    <li><p class="progress-text">About Company</p></li>
                    <li><p class="progress-text">Owners</p></li>
                    <li><p class="progress-text">Personal Details</p></li>
                    <li><p class="progress-text">Address Details</p></li>
                    <!-- <li>Create Your Account</li> -->
                </ul>   
            </div>
            <div class="right-side">
                <div class="main active">
                        <small><i class="fas fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Choose The State</h2>
                            <p>Select the state in which you want to incorporate your new company.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select id="state">
                                    <option>State of formation</option>
                                    <option>Califonia</option>
                                    <option>Colorado</option>
                                    <option>BA</option>
                                    <option>B-COM</option>
                                    <option>B-SC</option>
                                    <option>MBA</option>
                                    <option>MCA</option>
                                    <option>M-COM</option>
                                    <option>M-TECH</option>
                                </select>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Tell Us About Your company</h2>
                            <!-- <p>Tell s About Your company</p> -->
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="company_name">
                                <span>Company Name</span>
                            </div>
                            <div class="input-div"> 
                                <div class="input-div">
                                    <select id="company_type" required require>
                                        <option disabled selected>Select Type</option>
                                        <option>Limited Liability Company</option>
                                        <option>LLC</option>
                                        <option>L.L.C.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required  id="website">
                                <span>Website</span>
                            </div>
                            <div class="input-div">
                            <div class="input-div">
                                <select id="industry">
                                    <option disabled selected>Select Industry</option>
                                    <option>Accounting and tax</option>
                                    <option>Accounting and tax preparation</option>
                                    <option>Advertising</option>
                                    <option>Agriculture</option>
                                    <option>Art and photography</option>
                                    <option>Artificial intelligence</option>
                                    <option>Augmented reality</option>
                                    <option>B2B</option>
                                    <option>Community</option>
                                    <option>Construction</option>
                                    <option>Consulting</option>
                                    <option>Consumer</option>
                                    <option>Crypto</option>
                                    <option>Developer tools</option>
                                    <option>Online retailer</option>
                                    <option>Education</option>
                                    <option>Enterprise</option>
                                    <option>Entertainment</option>
                                    <option>Financial services</option>
                                    <option>Other health and fitness services</option>
                                    <option>Other food services</option>
                                    <option>Government</option>
                                    <option>Hardware</option>
                                </select>               
                            </div>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="business" required require id="bussiness">
                                <span>Business Description</span>  
                            </div>                       
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>   
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Who's in Charge?</h2>
                            <p>Let us know who all the owners of the company are along with their percentage of holdings. If you’re a startup, it can just be one person.</p>
                        </div>
                        <div class="owner-list">
                            <!-- Initial owner input fields here -->
                            <div class="individual-owner">
                                <div class="input-text">
                                    <div class="input-div">
                                        <input type="text" required require id="first_name">
                                        <span>First Name</span>
                                    </div>
                                    <div class="input-div">
                                        <input type="text" required require id="last_name">
                                        <span>Last Name</span>
                                    </div>
                                    <div class="input-div">
                                        <input type="number" required require id="ownership" min="0" max="100">
                                        <span>Ownership Percentage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="company-owner" style="display: none;">
                                <div class="input-text">           
                                    <div class="input-div">
                                        <input type="text" required require id="company_name">
                                        <span>Company Name</span>
                                    </div>
                                    <div class="input-div">
                                        <input type="number" required require id="ownership" min="0" max="100">
                                        <span>Ownership Percentage</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="checkbox" id="owner_type_checkbox">
                                <label for="owner_type_checkbox">Owner is a company</label>
                            </div>
                        </div> 
                        <div class="buttons button_space">
                            <button class="add_button" style="border: none; background-color: none; padding: 5px 10px; cursor: pointer;"><b>+ Add Owner<b></button>
                        </div>
                        <br>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" id="continue_button" disabled>Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>About Responsible Party</h2>
                            <p>This is the responsible person shown in tax ID, bank account, and other documents.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="first_name">
                                <span>First Name</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require id="last_name">
                                <span>Last Name</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="phone">
                                <span>Phone number</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require id="email">
                                <span>Email</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <span>Do you have SSN or ITIN?</span>
                            </div>
                            <br>
                            <div class="input-div">
                                <input type="radio" name="responsible_party" id="yes" value="Yes" onclick="showSSNField()">
                                <label for="yes">Yes</label>
                                <br>
                                <input type="radio" name="responsible_party" id="no" value="No" onclick="hideSSNField()">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="ssn-field" style="display: none;">
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required  id="ssn">
                                <span>SSN or ITIN Number</span>
                            </div>
                            
                        </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main ">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Mailing Address</h2>
                            <p>Tell us where you want to receive your company mails. We'll also use this address in your tax forms for the responsible party entered in the previous screen.</p>
                        </div>
                        <div class="input-text">
                        <div class="input-div">
                                <select id="country">
                                    <option disabled selected>Select Country</option>
                                    <option>India</option>
                                    <option>France</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                    <option>Germany</option>
                                    <option>Russia</option>
                                    <option>China</option>
                                    <option>Japan</option>
                                    <option>Pakistan</option>
                                </select>
                            
                            </div>
                            <div class="input-div"> 
                            <div class="input-div">
                                <select id="region">
                                    <option disabled selected>Select State/Regiom</option>
                                    <option>India</option>
                                    <option>France</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                    <option>Germany</option>
                                    <option>Russia</option>
                                    <option>China</option>
                                    <option>Japan</option>
                                    <option>Pakistan</option>
                                </select>
                            
                            </div>
                            </div>
                        </div>   
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="address">
                                <span>Street Adress</span>   
                            </div> 
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="city">
                                <span>City</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require id="zip">
                                <span>Zip Code</span>
                            </div>
                        </div>    
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" onclick="saveToFirebasePage2()">Save</button>
                        </div>
                    </div>
                    <!-- <div class="main ">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Create Your Account</h2>
                            <p>Save your information by creating an account so you can always come back to it.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="email">
                                <span>Your Email</span>   
                            </div>
                        </div>
                        <div class="input-text">
                        <div class="input-div">
                                <input type="text" required require id="password">
                                <span>Password</span>   
                            </div>
                        </div>
                        
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button" onclick="saveToFirebasePage2()">Register</button>
                        </div>
                    </div> -->
                    <div class="main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                        
                        <div class="text congrats">
                            <h2>Congratulations!</h2>
                            <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/9.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.4.0/firebase-auth.js"></script>

    <script>

function saveToFirebasePage2() {
    // Check if a user is currently authenticated
    var user = firebase.auth().currentUser;
    if (user) {
        var uid = user.uid;

        // Capture form input values
        const company_name = document.getElementById("company_name").value;
        const website = document.getElementById("website").value;
        const bussiness = document.getElementById("bussiness").value;
        const first_name = document.getElementById("first_name").value;
        const last_name = document.getElementById("last_name").value;
        const ownership = document.getElementById("ownership").value;
        const phone = document.getElementById("phone").value;
        const email = document.getElementById("email").value;
        const ssn = document.getElementById("ssn").value;
        const address = document.getElementById("address").value;
        const city = document.getElementById("city").value;
        const company_type = document.getElementById("company_type").value;
        const industry = document.getElementById("industry").value;
        const country = document.getElementById("country").value;
        const region = document.getElementById("region").value;
        const state = document.getElementById("state").value;


            // Reference to the Firebase database
        const database = firebase.database();

        // Create a new database entry
        const commonDataRef = database.ref("companies").child(uid);

        // Define the data to be posted
        const postData = {
            company_name: company_name,
            website: website,
            bussiness: bussiness,
            first_name: first_name,
            last_name: last_name,
            ownership: ownership,
            email: email,
            ssn: ssn,
            address: address,
            city: city,
            region: region
        };

        // Push the data to Firebase
        commonDataRef.set(postData)
            .then(function () {
                console.log("Data posted to Firebase successfully.");
            })
            .catch(function (error) {
                console.error("Error posting data to Firebase: " + error.message);
            });
    } else {
        console.log("User is not authenticated or authentication process not complete.");
    }
}
    </script>
@endsection          

