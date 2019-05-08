let message = "Added";

function addToCart(type) {
    if (type == "inc") {
        let quant = document.getElementById('val2').value;
        let data = { name: "Incandescent Light Bulbs", Price: 3.95, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('incmessage').innerHTML = message;

    } else if (type == "hal") {
        let quant = document.getElementById('val4').value;
        let data = { name: "Halogen Light Bulbs", Price: 5.00, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('halmessage').innerHTML = message;

    } else if (type == "led") {
        let quant = document.getElementById('val1').value;
        let data = { name: "L.E.D. Light Bulbs", Price: 2.95, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('ledmessage').innerHTML = message;

    } else if (type == "blk") {
        let quant = document.getElementById('val6').value;
        let data = { name: "Black Light Bulbs", Price: 3.95, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('blkmessage').innerHTML = message;

    } else if (type == "neo") {
        let quant = document.getElementById('val5').value;
        let data = { name: "Neon Light Bulbs", Price: 8.95, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('neomessage').innerHTML = message;

    } else { // flo
        let quant = document.getElementById('val3').value;
        let data = { name: "Fluorescent Light Bulbs", Price: 3.95, quantity: quant }
        let fullPrice = data.Price * quant;
        data.Price = fullPrice.toFixed(2);

        insertIntoCart(JSON.stringify(data));
        document.getElementById('flomessage').innerHTML = message;

    }
}

function insertIntoCart(data) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {}
    };
    xhttp.open("POST", "additem.php?data=" + data, true);
    xhttp.send();
}

function removeItem(index) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.reload();
        }
    };
    xhttp.open("POST", "cart.php?index=" + index, true);
    xhttp.send();
}