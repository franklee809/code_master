let user = {
    name: "John",
    age: 30,
    _password: "***"
  };

  user = new Proxy(user, {
    ownKeys(target) {
      return Object.keys(target).filter(key => !key.startsWith('_'));
    }
  });

  // "ownKeys" filters out _password
  for(let key in user) console.log(key); // name, then: age

  // same effect on these methods:
  console.log( Object.keys(user) ); // name,age
  console.log( Object.values(user) ); // John,30