const { createHash } = require('crypto');

function hash(input) {
    return createHash('sha256').update(input).digest('hex');
}


// Compare two strings in hash.
let password = '123456';
const hash1 = hash(password);

console.log("🚀 ~ file: hash.js ~ line 11 ~ hash1", hash1)
