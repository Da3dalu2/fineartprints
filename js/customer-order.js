function isDateValid(date, optionval) {
    const orderDate = new Date(date);
    const todayDate = new Date();
    var t1 = orderDate.getTime();
    var t2 = todayDate.getTime();

    if (parseInt(optionval) >= parseInt((t2-t1)/(24*3600*1000)) || optionval == "All") {
        return true;
    }
    return false;
}

function getOrders(data) {
    let orders = "";
    for(let i=0; i < data.length; i++){
        let order = "";
        if ((data[i]["Status"] == $("#ship_option").val() || $("#ship_option").val() == "All")
         && isDateValid(data[i]["Order_date"], $("#date_option").val())) {
            order = `
            <li class="nav item mb-3 col-12">
                <div class="row p-0 col-12 col-md-12 ml-1 d-flex align-items-center">
                    <div class="col-10 offset-1 col-md-10 offset-md-1 bg-dark text-white p-0">
                        <ul class="nav text-left">
                            <li style="font-size:14px;" class="nav-item col-6 col-lg-2 m-0 py-2">Id: 
                            ${data[i]["Order_id"]}
                            </li>
                            <li style="font-size:14px;" class="nav-item col-6 col-lg-4 m-0 py-2">Order date: 
                            ${data[i]["Order_date"]}
                            </li>
                            <li style="font-size:14px;" class="nav-item col-6 col-lg-4 m-0 py-2">Shipping date: 
                            ${data[i]["Shipped_date"]}
                            </li>
                            <li style="font-size:14px;" class="nav-item col-6 col-lg-2 m-0 py-2">Total: /</li>
                        </ul>
                    </div>
                </div>
                <div class="row col-md-12 p-0 ml-1">
                    <div class="col-10 offset-1 offset-md-1 col-md-10 bg-light border-top border-right border-left">
                        <ul id="product" class="pl-4 my-2">
                        </ul>
                    </div>
                </div>
            </li>
            `;
            orders += order;
        }
    }
    if (orders == "") {
        orders= `<li class="nav item mb-3 col-12">
                <div class="col-10 offset-1 text-center">
                <p class="text-center col-12" style="font-size:30px;">No result found<p>
                </div>
                </li>`;
    }
    return orders;
}

function getProducts(data) {
    let products = "";
    for(let i=0; i < data.length; i++){
        let product = "";
        product = `
        <li class="row mb-3">
            <div class="row col-12 col-md-6 p-0 bg-white border">
                <div class="col-12 text-center py-1 d-flex align-items-center">
                    <img class="mx-auto d-block" src="${data[i]["Image"]}" style="max-height:175px;max-width: 200px;" alt=""/>
                </div>
                <div class="text-center col-12">
                    <a href="#">${data[i]["Picture_title"]}</a>
                </div>
            </div>
            <div class="row col-12 col-md-6 p-0">
                <ul class="list-group col-12 m-0 p-0">
                    <li class="list-group-item col-12 col-md-12"><p class="text-left m-0">Technique:
                    ${data[i]["Description"]}</p></li>
                    <li class="list-group-item col-12 col-md-12"><p class="text-left m-0">Passpartout:
                    ${data[i]["Specifications"]}</p></li>
                    <li class="list-group-item col-12 col-md-12"><p class="text-left m-0">Frame:
                    ${data[i]["Framedesc"]}</p></li>
                    <li class="list-group-item col-12 col-md-12 text-left"><p class="text-left">Price:</p></li>
                </ul>
            </div>
        </li>
        `;
        products += product;
    }
    return products;
}
$(document).ready(function() {
    $.getJSON("api-customer-orders.php", function(data){
        const orders = getOrders(data[0]);
        $("#order").append(orders); 
        const products = getProducts(data[1]);
        $("#product").append(products);
    });
    $("#ship_option").on('change', function() {
        $("#order").empty();
        $("#product").empty();
        $.getJSON("api-customer-orders.php", function(data){
            const orders = getOrders(data[0]);
            $("#order").append(orders); 
            const products = getProducts(data[1]);
            $("#product").append(products);
        });
    });

    $("#date_option").on('change', function() {
        $("#order").empty();
        $("#product").empty();
        $.getJSON("api-customer-orders.php", function(data){
            const orders = getOrders(data[0]);
            $("#order").append(orders); 
            const products = getProducts(data[1]);
            $("#product").append(products);
        });
    });

   if ($("#notifnumber").val() == 0) {
       $("#data-toggle").hide();
       $("#clear").hide();
   } else {
        $("#data-toggle").show();
        $("#clear").show();
   }

});

