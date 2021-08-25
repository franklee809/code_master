/**
 * ?  Example 1 - Implicit Binding
 */
let user = {
    name: 'Tapas',
    address: 'freecodecamp',
    getName: function() {
        console.log(this.name);
    }
};

// user.getName();

let user2 = {
    name: 'Tapas',
    address: 'freecodecamp',
    getName: () => {
        console.log(this);
    }
};

user2.getName();

process.exit()

/**
 * ? Example 2 - Implicit Binding
 * @param {*} obj
 */
function decorateLogName(obj) {
    obj.logName = function() {
        console.log(this.name);
    }
};

let tom = {
    name: 'Tom',
    age: 7
};

let jerry = {
    name: 'jerry',
    age: 3
};

decorateLogName(tom);
decorateLogName(jerry);

tom.logName();
jerry.logName();