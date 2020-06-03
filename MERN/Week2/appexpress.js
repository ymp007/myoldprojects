const express = require('express');
const path = require('path');
const tasklist = require('./data/task');
const app = express();

const PORT = 4000;
app.get('/', (req,res) => res.send("hello from express"));
app.get('/about', (req,res) => {
    res.sendFile(path.join(__dirname,'public','about.html'));
});
app.get('/api/tasks', (req,res) => {
    res.json(tasklist);
});
app.listen(PORT, () => console.log("server Running on "+PORT));