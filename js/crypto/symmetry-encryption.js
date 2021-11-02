const { createCipheriv, randomBytes, createDecipheriv } = require('crypto');

// Cipher

// initialization vector
const message = 'I am a secret message';
const key = randomBytes(32);
const iv = randomBytes(16);


// Encrypt
const cipher = createCipheriv('aes256', key, iv);
const encryptedMessage = cipher.update(message, 'utf8', 'hex') + cipher.final('hex');
console.log("🚀 ~ file: symmetry-encryption.js ~ line 14 ~ encryptedMessage", encryptedMessage)


// Decrypt
const decipher = createDecipheriv('aes256', key, iv);
const decryptedMessage = decipher.update(encryptedMessage, 'hex', 'utf8') + decipher.final('utf8');
console.log("🚀 ~ file: symmetry-encryption.js ~ line 19 ~ decryptedMessage", decryptedMessage.toString('utf-8'));
