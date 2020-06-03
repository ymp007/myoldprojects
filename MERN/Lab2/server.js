const http = require('http');
const path = require('path');
const fs = require('fs');

const server = http.createServer((req,res) => {
    if(req.url === "/") {
        res.write("Welcome to Api Home Page");
        res.end();
    }
    if(req.url === '/api/products') {
fs.readFile(path.join(__dirname,'api/data','products.json'),(err,data) => {
    if(err) {
        console.log(err);
    }else{
        res.writeHead(200,{'Content-Type' : 'application/json'});
        res.end(data);
    }
});
    }
});

const PORT = 3000;
server.listen((PORT), () => {
    console.log("Server Running on "+PORT);
});