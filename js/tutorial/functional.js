/* Functional Programming  */

function fruit(sweetness){
    return sweetness * 3
}

const pear = fruit(1);
const apple = fruit(3)
const watermelon = fruit(5)


/* Higher-Order-Function*/
const numbers = [1,2,3,4,5,6,7];
const isGreaterThan = x => x > 4;

console.log(numbers.filter(isGreaterThan))
console.log(numbers.reduce((total,currentValue,currentIndex,arr)=>{return total-currentValue},450))

