const express = require('express');
const fs = require('fs');
const path = require('path');
const app = express();

const PORT = 4000;
app.get('/', (req,res) => res.send("Api through Express"));

app.get('/api/products', (req,res) => {
    fs.readFile(path.join(__dirname,'api/data','products.json'),(err,data) => {
        if(err) {
            console.log(err);
        }else{
            res.writeHead(200,{'Content-Type' : 'application/json'});
            res.end(data);
        }
    });
});
app.listen(PORT, () => console.log("server Running on "+PORT));