const mongoose = require('mongoose');

const TaskSchema = new mongoose.Schema({
    title: {
        type: String
    },
    description: {
        type: String
    },
    status:{
        type:Boolean
    }
});

const Task = mongoose.model('task',TaskSchema);

module.exports = Task;