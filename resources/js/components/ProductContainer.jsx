import React from "react";
import ReactDOM from 'react-dom/client';
import ProductCard from "./ProductCard";


function ProductContainer(props){
    const BaseUrl = window.location.origin;
    return(
        props.list.map(item=>(
            <ProductCard key={item.id} name={item.product_name} price={item.price} code='STCK-indo' image={item.image_product==null?BaseUrl+"/assets/images/no-image.jpg":`${BaseUrl}/product/${item.image_product}`}/>
        ))
    )
}


export default ProductContainer;

let productList = []
$(document).ready(()=>{
    const BaseUrl = window.location.origin;
    $.ajax({
        url:`${BaseUrl}/auth/cashier/getProduct`,
        contentType: 'application/json',
        type:'GET',
        success: (result)=>{
            const container = document.getElementById("productList");
            const Root = ReactDOM.createRoot(container);
            // console.log(result)
            Root.render(<ProductContainer list={result}  />);
        },
        error: (error)=>{
            alert(`Ups!, Somthing wrong with server. Please contact Admin for infrom the problem.\n${error}`)
        }
    });
})



