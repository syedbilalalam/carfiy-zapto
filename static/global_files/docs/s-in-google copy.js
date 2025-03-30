// Import Firebase modules
import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js';
import { getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-auth.js';

const firebaseConfig = {
    apiKey: "AIzaSyDjAG30jL0o76eHr8pTy9xYRmPuoIRPanU",
    authDomain: "carfiy.firebaseapp.com",
};
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();

function signInWithGoogle() {
    const provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider)
        .then(result => {
            result.user.getIdToken().then(token => {
                fetch("workers/signinwithgoogle.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ idToken: token })
                })
                .then(response => response.json())
                .then(data => console.log("Server Response:", data));
            });
        })
        .catch(error => console.error(error));
}

const googleButton = sel('#googleSignIn');
const fbButton = sel('#fbButton');
googleButton.onclick = signInWithGoogle;
fbButton.onclick = ()=>{
    Swal.fire({
        icon: 'info',
        text: 'Sign in with Facebook is not available at the time :('
    });
}