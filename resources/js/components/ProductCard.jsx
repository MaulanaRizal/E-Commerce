import React,{useEffect} from 'react';
import ReactDOM from 'react-dom/client';


let orders = [];
let totalOrder = []


function ProductCard(props){

    const rupiah = (number)=>{
        return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR"
        }).format(number);
    }

    const sum = (arr) =>{
        const total = arr.reduce((a, b) => a + b, 0);
        return total;
    }

    function addProduct(e){

        let orderItem = {
            code : "",
            product : "",
            price : 0,
            quantity : 0
        }

        orders.push(props)
        totalOrder.push(props.price)

        let element = `<div class="order-item mb-2" id="order-${props.code}">
            <div class="product">
                <p class="mb-0">${props.name} </p>
                <span>${rupiah(props.price)}</span>
            </div>
            <input type="number" class="quantity float-right form-control" value="1" min="1" > 
            <button class="btn btn-danger btn-delete-order"><i class="fa fa-trash"></i></button>
        </div>`;

        $('#orderList').append(element);

        sessionStorage.setItem("orders","")
        //$('#totalOrder').text(50000);

        // console.log(order)
        // console.log(totalOrder)
    }

    return(
        <div className="col-lg-3 mb-3" id={props.code} onClick={addProduct}> 
            <div className="card product-item">
                <img className="card-img-top product-image product-image" src={props.image}  alt="Card image cap"/>
                <div className="card-body">
                    <h4 className="card-text product-name">{props.name}</h4>
                    <input type='hidden' value={props.name} />
                    <span className="small product-code">{props.code}</span><br />
                    <input type='hidden' value={props.code} />
                    <span className='text-center product-price'>Rp {props.price}</span>
                    <input type='hidden' value={props.price} />
                </div>
            </div>
        </div>
    );
    
}


export default ProductCard;


