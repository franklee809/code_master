export default class User {
    constructor(name){
        this.name = name;
    }
}

export function checkUserName(user) {
    return user.name;
}

export function checkUserEmail(){
    return 'User Email';
}
