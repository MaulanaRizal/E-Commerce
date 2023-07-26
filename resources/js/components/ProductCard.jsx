import React from 'react';
import ReactDOM from 'react-dom/client';


function ProductCard(props){
    return(
        <div className="col-lg-3 mb-3">
            <div className="card product-item">
                <img className="card-img-top product-image product-image" src={props.image}  alt="Card image cap"/>
                <div className="card-body">
                    <h4 className="card-text product-name">{props.name}</h4>
                    <span className="small product-code">{props.code}</span><br />
                    <span className='text-center product-price'>{props.price}</span>
                </div>
            </div>
        </div>
    );
}

export default ProductCard;

const container = document.getElementById("productList");
if(container){
    const Root = ReactDOM.createRoot(container);
    const BaseUrl = window.location.origin;
    // let products = [];

    $.ajax({
        url:`${BaseUrl}/auth/cashier/getProduct`,
        type:'GET',
        success: function(response){
            if(response.length>0){
                // products = response;

                Root.render(<ProductCard key={index} products={response} />);

            }
        }
    });
    console.log(products);
    Root.render(<ProductCard name="Teh Pucuk" price='RP 4.000' code='STCK-indo' image={url} />)
}