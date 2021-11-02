const { scryptSync, randomBytes, timingSafeEqual } = require('crypto');

function signup(email, password) {
    const salt = randomBytes(16).toString('hex');
    const hashedPassword = scryptSync(password, salt, 64).toString('hex');

    const user = {email, password: `${salt}:${hashedPassword}`};

    return user;
}

function login(email, password) {
    const user = users.find(user => user.email === email);

    const [salt, key] = user.password.split(':');
    const hashedBuffer = scryptSync(key, salt, 64).toString('hex');

    // prevent timing attacks
    const keyBuffer = Buffer.from(key, 'hex');
    const match     = timingSafeEqual(hashedBuffer, keyBuffer);

    if(match){
        return 'Login successful';
    }
    return 'Login failed';
}