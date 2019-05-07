function addToCart(type) {
    if (type == "inc") {
        let quant = document.getElementById('val2').value;
        let data = { name: "Incandescent Light Bulbs", Price: 3.95, quantity: quant }
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    } else if (type == "hal") {
        let quant = document.getElementById('val4').value;
        let data = { name: "Halogen Light Bulbs", Price: 5.00, quantity: quant }

        console.log(data.Price);
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    } else if (type == "led") {
        let quant = document.getElementById('val1').value;
        let data = { name: "L.E.D. Light Bulbs", Price: 2.95, quantity: quant }
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    } else if (type == "blk") {
        let quant = document.getElementById('val6').value;
        let data = { name: "Black Light Bulbs", Price: 3.95, quantity: quant }
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    } else if (type == "neo") {
        let quant = document.getElementById('val5').value;
        let data = { name: "Neon Light Bulbs", Price: 8.95, quantity: quant }
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    } else { // flo
        let quant = document.getElementById('val3').value;
        let data = { name: "Fluorescent Light Bulbs", Price: 3.95, quantity: quant }
        data.Price = data.price * quant;

        insertIntoCart(JSON.stringify(data));

    }
}

function insertIntoCart(data) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Success");
        }
    };
    xhttp.open("POST", "additem.php?data=" + data, true);
    xhttp.send();
}