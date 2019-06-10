/**
 * require the http and fs libraries
 */
let http = require('http');
let fs = require('fs');


/**
 * When the server gets a request the hnadleresponse callback function is called and decides
 * what to do with the request.
 * 
 * @param {Request Object} req 
 * @param {Response Object} resp 
 */
function handleResponse(req, resp) {
    console.log('received request for url: ' + req.url);

    switch (req.url) {
        case '/home':
            fs.readFile('./views/home.html', 'utf8', function formResponse(err, html) {
                if (!err) {
                    resp.writeHead(200, { "Content-Type": "text/html" });
                    resp.write(html);
                    resp.end();
                } else {
                    console.log(err);
                    resp.writeHead(400, { "Content-Type": "text/html" });
                    resp.write("<h1>404 Page Not Found</h1>");
                    resp.end();
                }
            });
            break;

        case '/getData':
            let json = JSON.stringify({
                name: "Andrew Jester",
                class: "CS-313"
            });
            resp.writeHead(200, { "Content-Type": "application/json" });
            resp.write(json);
            resp.end();
            break;

        default:
            resp.writeHead(400, { "Content-Type": "text/html" });
            resp.write("<h1>404 Page Not Found</h1>");
            resp.end();
            break;
    }
}

//creates the server
let server = http.createServer(handleResponse);
//listens on port 8080
server.listen(8080);
//ensures the server is running by writing to the console
console.log('listening on port 8080');