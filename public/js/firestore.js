import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js"


const firebaseConfig = {
    apiKey: "AIzaSyCseDTCIpLjKSPzBrulmLJAWxE9TePbHfI",
    authDomain: "nutrimealtrial.firebaseapp.com",
    databaseURL: "https://nutrimealtrial-default-rtdb.firebaseio.com",
    projectId: "nutrimealtrial",
    storageBucket: "nutrimealtrial.appspot.com",
    messagingSenderId: "266554431561",
    appId: "1:266554431561:web:8b89143e54803c9a48c798",
    measurementId: "G-VGPJGVRY70"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

export { db };