const { createHmac } = require('crypto');

const key = 'super-secret';
const message = 'Hello World';

const hmac = createHmac('sha256', key).update(message).digest('hex');
console.log("🚀 ~ file: hmac.js ~ line 7 ~ hmac", hmac)


const key2 = 'other-password';
const message2 = 'Hello World';

const hmac2 = createHmac('sha256', key2).update(message2).digest('hex');

console.log("🚀 ~ file: hmac.js ~ line 11 ~ hmac2", hmac2)