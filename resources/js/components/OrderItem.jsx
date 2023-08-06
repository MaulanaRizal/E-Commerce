import React from "react";
import ReactDOM from "react-dom/client";

function OrderItem(props){
    return (
        <div className="order-item mb-2">
            <div className="product">
                <p className="mb-0">Name Product </p>
                <span>Rp 80.000</span>
            </div>
            <input type="number" className="quantity float-right form-control" value="1"/>
        </div>
    )
}

export default OrderItem;

$(document).ready(()=>{
    const container = document.getElementById("orderList");
    const Root = ReactDOM.createRoot(container);
    Root.render(<OrderItem/>);
})
