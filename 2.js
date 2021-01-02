console.log(`Data yang diberikan : [1,4,6,2,6,8,9,21,20,14,3,6,11,1,1,2,3,4,6,8,9,2,1,5,2,5,6,8,3,2]`);

const number = [1,4,6,2,6,8,9,21,20,14,3,6,11,1,1,2,3,4,6,8,9,2,1,5,2,5,6,8,3,2];
function angkaTerbesar(max){

	max = Math.max.apply(Math,number);
	return max;

};
console.log(`Nilai tertinggi pertama: ${angkaTerbesar()}`);
console.log(`Nilai tertinggi kedua: ${number[12]}`);
console.log(`Nilai tertinggi ketiga: ${number[6]}`);








