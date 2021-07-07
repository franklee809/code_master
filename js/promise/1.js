function test(){
    this.name = 1;
    // console.log(this);
    const a = new Promise((resolve, reject) => {
        // console.log(this);
        resolve(1);
    }).then(res => {
        console.log(this)
    });
    return a;
}

test();