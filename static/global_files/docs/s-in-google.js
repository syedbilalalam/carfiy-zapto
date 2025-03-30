// Import Firebase modules
import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js';
import { getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-auth.js';

// Your Firebase configuration (from Firebase Console > Project Settings)
const firebaseConfig = {
    apiKey: "AIzaSyDjAG30jL0o76eHr8pTy9xYRmPuoIRPanU",
    authDomain: "carfiy.firebaseapp.com",
    projectId: "carfiy",
    storageBucket: "carfiy.firebasestorage.app",
    messagingSenderId: "728255811126",
    appId: "1:728255811126:web:e36bd5d09466026f255297"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const provider = new GoogleAuthProvider();

// Function to Sign in with Google
window.signInWithGoogle = function () {
    signInWithPopup(auth, provider)
        .then(async (result) => {
            const user = result.user;
            const idToken = await user.getIdToken(); // Get the Firebase ID token

            // console.log("User signed in:", user);
            // console.log("ID Token:", idToken); // This is what we send to the backend

            // Send the ID token to the backend
            fetch("./workers/signinwithgoogle.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ idToken: idToken })
            })
            .then(response => {
                console.log("Backend Response:", response);
                if(response.redirected)
                    window.location.assign(response.url);
            })
            .catch(error => {
                console.error("Error sending token to backend:", error);
            });

        })
        .catch((error) => {
            console.error("Error during sign-in:", error);
        });
};


// Managing click events
const googleButton = sel('#googleSignIn');
const fbButton = sel('#fbButton');
const signInWithGoogleRedirector = ()=>{
    googleButton.onclick = null;
    Swal.fire({
        title: 'Loading...',
        text: 'Please wait',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading(); // Show the loading spinner
        }
    }).then(e=>{
        googleButton.onclick= signInWithGoogleRedirector;
    });
    window.signInWithGoogle();
};
googleButton.onclick = signInWithGoogleRedirector;

fbButton.onclick = ()=>{
    Swal.fire({
        icon: 'info',
        text: 'Sign in with Facebook is not available at the time :('
    });
}