import { db } from "../firestore.js";

import {doc, getDoc, collection, query, where, getDocs } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js"

async function getComponent(){
    const q = query(collection(db, "components"));
    const querySnapshot = await getDocs(q);
    querySnapshot.forEach((doc) => {
        $("#kandungan").append(
            '<option value="' + doc.data()["nama"] + '">' + doc.data()["nama"] + '</option>'
        );
        $("#alergi").append(
            '<option value="' + doc.data()["nama"] + '">' + doc.data()["nama"] + '</option>'
        );
    });
};

$(document).ready(function () {
    getComponent();
    
    $( '#kandungan' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
        closeOnSelect: false,
    } );

    $( '#alergi' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
        closeOnSelect: false,
    } );

    $( '#activity' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
    
});