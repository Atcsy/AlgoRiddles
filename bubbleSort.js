const numbers = [12, 45, 1, 43, 8, 2, 99, 85, 77, 63, 19, 2];


function bubbleSort(array) {
  const length = array.length;
  for (i = 0; i < length; i++){
    for(j = 0; j < length; j++) {
      if (array[j] > array[j+1]) {
        //swap numbers
        let temp = array[j];
        array[j] = array[j+1];
        array[j+1] = temp;
      }
      //console.log(array[j])
    }
  }
}

bubbleSort(numbers);
console.log(numbers);


/*
Expected result:
[ 1, 2, 2, 8, 12, 19, 43, 45, 63, 77, 85, 99 ]
*/

