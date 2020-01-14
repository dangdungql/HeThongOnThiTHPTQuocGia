const firebaseConfig = {
    apiKey: "AIzaSyDgKe1tJvqVyB_YXTOea3Y0jvFvkUrMv84",
    authDomain: "studyonline-86fa3.firebaseapp.com",
    databaseURL: "https://studyonline-86fa3.firebaseio.com",
    projectId: "studyonline-86fa3",
    storageBucket: "studyonline-86fa3.appspot.com",
    messagingSenderId: "131949000405",
    appId: "1:131949000405:web:6d305e5d4304e85695545c"
};

firebase.initializeApp(firebaseConfig);


// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();

// Disable deprecated feature