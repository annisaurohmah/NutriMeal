import { db } from "../firestore.js";

import {doc, getDoc, collection, query, where, getDocs } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js"


// await setDoc(doc(citiesRef), {
//     name: "San Francisco", state: "CA", country: "USA",
//     capital: false, population: 860000,
//     regions: ["west_coast", "norcal"] });

// const docRef = doc(db, "menus", "U6NIDbNyCXbjvt6IlxP2");
// const docSnap = await getDoc(docRef);

// if (docSnap.exists()) {
//   console.log("Document data:", docSnap.data());
// } else {
//   console.log("No such document!");

// KALO MAU AMBIL SEMUA DATA TINGGAL HILANGIN "WHERE"
const q = query(collection(db, "menus"));
const querySnapshot = await getDocs(q);
querySnapshot.forEach((doc) => {
  console.log(doc.data()["nama"], doc.data()["harga"]);
});
// async function getComponent(){
//     // const querySnapshot = await getDocs(collection(db, "menus", "U6NIDbNyCXbjvt6IlxP2", "menu_components"));
//     // querySnapshot.forEach((doc) => {
//     // console.log(doc.id, " => ", doc.data());
//     // });
//     const menuComponentsSnapshot = await getDocs(collection(db, 'menu_components'));

//     // Mendapatkan semua referensi ke dokumen di koleksi 'components'
//     const componentRefs = menuComponentsSnapshot.docs.map(doc => doc.data().componentRef);

//     // Mengambil data dari setiap dokumen di koleksi 'components'
//     const componentDocs = await Promise.all(
//         componentRefs.map(async (componentRef) => {
//             const componentDoc = await getDoc(doc(db, 'components', componentRef));
//             return { id: componentRef, ...componentDoc.data() };
//         })
//     );

//     console.log(componentDocs);
// };

// $(document).ready(function () {
//     $("#clickHere").click(getComponent);
// });