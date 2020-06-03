const bcrypt  = require('bcryptjs');
let pass = "AKH";
bcrypt.genSalt(10, function(err, salt) {
    bcrypt.hash("Yash@1234", salt, function(err, hash) {
        console.log(hash);
    });
});