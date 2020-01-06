const numbers = [0, 2, 12, 45, 1, 43, 8, 99, 85, 77, 63, 19, 2];


function selectionSort(array) {
  const length = array.length;
  for (let i = 0; i < length; i++){
    //set current index as minimum
    let min = i;
    let temp = array[i];
    for (let j = i+1; j < length; j++) {
      if (array[min] > array[j]) {
        //update minimum if current is lower that what we had previously
        min = j;
        //console.log(i,min);
      }  
    }
    //dont swap if i = min
    if (i !== min) {
        array[i] = array[min];
        array[min] = temp;
    }
  }
}

selectionSort(numbers);
console.log(numbers);


/*
Expected result:
[ 0, 1, 2, 2, 8, 12, 19, 43, 45, 63, 77, 85, 99 ]
*/


