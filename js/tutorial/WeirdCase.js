function toWeirdCase(string){
  
    let arr = string.split(" ");
    return arr.map((currentVal)=>{
      let a = currentVal.split("")
        let b = a.map((val,index)=>{
            return (index+1)%2 != 0? val.toUpperCase() : val.toLowerCase()
        });
        return b.join('')
    }).join(" ")
    
  }


console.log(toWeirdCase("Hello"));
// console.log(4%2);

