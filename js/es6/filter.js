const product = [
    {name:'ipad',category:'devices'},
    {name:'sony tv',category:'TV'},
    {name:'super vision ',category:'blender'},
    {name:'galaxy note 5',category:'phone'},
    {name:'iphone 7',category:'phone'}
]

const result = product.filter((currentVal,Index,Array)=>{
    return currentVal.category == 'TV' 
})
console.log(result)