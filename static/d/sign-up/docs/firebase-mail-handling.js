
// // Import the functions you need from the SDKs you need
// import { initializeApp } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js";
// // TODO: Add SDKs for Firebase products that you want to use
// // https://firebase.google.com/docs/web/setup#available-libraries

// // Your web app's Firebase configuration
// const firebaseConfig = {
//     apiKey: "AIzaSyDjAG30jL0o76eHr8pTy9xYRmPuoIRPanU",
//     authDomain: "carfiy.firebaseapp.com",
//     projectId: "carfiy",
//     storageBucket: "carfiy.firebasestorage.app",
//     messagingSenderId: "728255811126",
//     appId: "1:728255811126:web:e36bd5d09466026f255297"
// };

// // Initialize Firebase
// const app = initializeApp(firebaseConfig);



// const actionCodeSettings = {
//     // URL you want to redirect back to. The domain (www.example.com) for this
//     // URL must be in the authorized domains list in the Firebase Console.
//     url: 'https://www.example.com/finishSignUp?cartId=1234',
//     // This must be true.
//     handleCodeInApp: true,
//     iOS: {
//         bundleId: 'com.example.ios'
//     },
//     android: {
//         packageName: 'com.example.android',
//         installApp: true,
//         minimumVersion: '12'
//     },
//     // The domain must be configured in Firebase Hosting and owned by the project.
//     linkDomain: 'custom-domain.com'
// };
// // import {  } from "./firebase/auth";
// const auth = getAuth();
// sendSignInLinkToEmail(auth, email, actionCodeSettings)
//     .then(() => {
//         // The link was successfully sent. Inform the user.
//         // Save the email locally so you don't need to ask the user for it again
//         // if they open the link on the same device.
//         window.localStorage.setItem('emailForSignIn', email);
//         // ...
//     })
//     .catch((error) => {
//         const errorCode = error.code;
//         const errorMessage = error.message;
//         // ...
//     });