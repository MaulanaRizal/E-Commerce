import React from 'react';
import ReactDOM from 'react-dom/client';


function ProductCard(props){
    // console.log(props.item)
    return(
        <div className="col-lg-3 mb-3">
            <div className="card product-item">
                <img className="card-img-top product-image product-image" src={props.image}  alt="Card image cap"/>
                <div className="card-body">
                    <h4 className="card-text product-name">{props.name}</h4>
                    <span className="small product-code">{props.code}</span><br />
                    <span className='text-center product-price'>Rp {props.price}</span>
                </div>
            </div>
        </div>
    );
}

export default ProductCard;
// let productList = []
// $(document).ready(()=>{
//     const BaseUrl = window.location.origin;
//     $.ajax({
//         url:`${BaseUrl}/auth/cashier/getProduct`,
//         contentType: 'application/json',
//         type:'GET',
//         success: (result)=>{
//             const container = document.getElementById("productList");
//             const Root = ReactDOM.createRoot(container);
//             // console.log(result)
//             result.map(item=>(
//                 Root.render(<ProductCard item={result} key={item.id} name={"Beras Dua Lele"} code={"123456"} price={"100.000"}  />)
//             ))
//         },
//         error: (error)=>{
//             alert(`Ups!, Somthing wrong with server. Please contact Admin for infrom the problem.\n${error}`)
//         }
//     });
// })


