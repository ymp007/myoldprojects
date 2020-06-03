const express = require('express');
const taskRouter = require('./routes/api/taskNODB');
const userRouter = require('./routes/api/userNODB');
const connectDB = require('./config/connectDB');

const app = express();


//database Connection
connectDB();
//set a middleware to parse data
app.use(express.json());

app.use('/api/tasks',taskRouter);
app.use('/api/users',userRouter);



app.listen(5000);
