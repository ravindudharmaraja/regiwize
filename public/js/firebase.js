
// Replace with your Firebase project configuration
 const firebaseConfig = {
    apiKey: "AIzaSyA9ZL-qcfVcNmq4pNHeIPdstCRjxmFAhgI",
    authDomain: "regiwize-6f0a9.firebaseapp.com",
    databaseURL: "https://regiwize-6f0a9-default-rtdb.firebaseio.com",
    projectId: "regiwize-6f0a9",
    storageBucket: "regiwize-6f0a9.appspot.com",
    messagingSenderId: "1046816670588",
    appId: "1:1046816670588:web:1a0f02f0d95d851563daf9",
    measurementId: "G-8JYYX3FJT0"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Initialize Firebase Authentication and get a reference to the service
const auth = firebase.auth();

// Initialize Firebase Database and get a reference to the service
const database = firebase.database();

//setup register function
function registerUser() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    auth.createUserWithEmailAndPassword(email, password)
        .then(function() {
            var user = auth.currentUser;
            var database_ref = database.ref();

            var user_data = {
                email: email,
            }
            

            database_ref.child('users/' + user.uid).set(user_data)
                .then(function() {
                    // User data saved successfully
                    console.log("User data saved to Firebase.");

                    // Sign in the user after successful registration
                    auth.signInWithEmailAndPassword(email, password)
                        .then(function() {
                            console.log("User signed in after registration.");
                            // Redirect to the next page
                            navigateToNewStep2();
                        })
                        .catch(function(error) {
                            var errorCode = error.code;
                            var errorMessage = error.message;
                            alert(errorMessage);
                        });
                })

        })
        .catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorMessage);
        });
}
function navigateToNewStep2() {
    window.location.href = "/new/register"; // Replace with the URL of the next page
}












