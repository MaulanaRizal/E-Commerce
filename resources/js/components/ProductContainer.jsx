import React from "react";
import { ReactDOM,Component } from "react";
import './ProductCard'
import { render } from "react-dom";


class App extends ProductContainer{
    constructor(){
        super();
    }
}

render(){
    return(
        <p>Hallo</p>
    )
}

const container = document.getElementById("productList");
const BaseUrl = window.location.origin;

if(container){
    const Root = ReactDOM.createRoot(container);
    let products = [];
    $.ajax({
        url:`${BaseUrl}/auth/cashier/getProduct`,
        type:'GET',
        success: function(response){
            if(response.length>0){
                products = response;
            }
        }
    });
    
    console.log(products);
}

export default ProductContainer;

