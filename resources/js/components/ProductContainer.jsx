import React,{useState} from "react";
import ReactDOM from 'react-dom/client';
import ProductCard from "./ProductCard";


function ProductContainer(props){
    const ProductList = props.list;
    const BaseUrl = window.location.origin;
    const [products,setProducts] = useState(ProductList);

    

    const renderProduct = () =>{
        const query = $('#inputProduct').val();
        let filtered = ProductList.filter(function(product){
            const productName = product.product_name.toLowerCase();
            const codeStock = product.code_stock.toLowerCase();
            const result = productName.includes(query)||codeStock.includes(query);

            if(result==true)return product;
        });
        setProducts(filtered);
    }

    const search = (args) =>{
        $('#inputProduct').on('keypress',function(event){
            if(event.key === "Enter"){
                renderProduct();
            }
        });

        $('#searchProduct').on('click',function(event){
            renderProduct();
        });

    }

    const test = () => {
        console.log("Hello..")
    }

    return(
        <div>
            <div className="input-group">
                <input onChange={search} type="text" id="inputProduct" className="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"/>
                <div className="input-group-append">
                    <button onClick={search} className="btn btn-primary" id="searchProduct" type="button">
                        <i className="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
            <hr/>
            <div className="row product-list" id="productList">
                {products.map(item=>(
                    <ProductCard 
                        key={item.id} 
                        name={item.product_name} 
                        price={item.price} 
                        code={item.code_stock} 
                        image={item.image_product==null?BaseUrl+"/assets/images/no-image.jpg":`${BaseUrl}/product/${item.image_product}`}
                    />
                    )
                )}
            </div>
        </div>
    )
}


export default ProductContainer;


$(document).ready(function(){
    const BaseUrl = window.location.origin;
    $.ajax({
        url:`${BaseUrl}/auth/cashier/getProduct`,
        contentType: 'application/json',
        type:'GET',
        dataType:'json',
        success: (result)=>{
            sessionStorage.setItem("products", JSON.stringify(result));
            const container = document.getElementById("productContainer");
            const Root = ReactDOM.createRoot(container);
            Root.render(<ProductContainer list={result}  />);
        },
        error: (error)=>{
            alert(`Ups!, Somthing wrong with server. Please contact Admin for infrom the problem.\n${error}`)
        }
    });


})
