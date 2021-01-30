const pRumah = prompt('Pilih Tipe Rumah : (1)Rose 120.000.000, (2)Gold 300.000.000, (3)Platinum 360.000.000');
const kredit = prompt('(12), (18), (24) */bulan');
const dp = 20/100;
if (pRumah == 1) {
	const r = dp*120000000;
	const sisa = 120000000-r;
	console.log('Type Rumah : Rose');
	console.log('Harga Rumah : 120.000.000');
	console.log(`Uang Muka : ${r}`);
	console.log(`Sisa : ${sisa}`);
	if(kredit == 24){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 18){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 12){
		console.log(`Lama kredit : ${kredit}`);
	}else {
		alert('Lama Kredit Salah!');
	}
	let angsuran = sisa/kredit;
	console.log(`Angsuran : ${angsuran}`);
	console.log('\n');
	console.log('>>>Tabel Angsuran<<<');
	console.log(`Bulan ke 	Angsuran 		Sisa 	`);
	for(let i=1;i<=kredit;i++){
		console.log(`${i}			${angsuran}			${sisa-(i*angsuran)}`);
	}
}else if(pRumah == 2) {
	const g = dp*300000000;
	const sisa = 300000000-g;
	console.log('Type Rumah : Gold');
	console.log('Harga Rumah : 300.000.000');
	console.log(`Uang Muka : ${g}`);
	console.log(`Sisa : ${sisa}`);
	if(kredit == 24){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 18){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 12){
		console.log(`Lama kredit : ${kredit}`);
	}else {
		alert('Lama Kredit Salah!');
	}
	let angsuran = sisa/kredit;
	console.log(`Angsuran : ${angsuran}`);
	console.log('\n');
	console.log('>>>Tabel Angsuran<<<');
	console.log(`Bulan ke 	Angsuran 		Sisa 	`);
	for(let i=1;i<=kredit;i++){
		console.log(`${i}			${angsuran}			${sisa-(i*angsuran)}`);
	}
}else if(pRumah == 3){
	const p = dp*360000000;
	const sisa = 360000000-p;
	console.log('Type Rumah : Platinum');
	console.log('Harga Rumah : 360.000.000');
	console.log(`Uang Muka : ${p}`);
	console.log(`Sisa : ${sisa}`);
	if(kredit == 24){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 18){
		console.log(`Lama kredit : ${kredit}`);
	}else if(kredit == 12){
		console.log(`Lama kredit : ${kredit}`);
	}else {
		alert('Lama Kredit Salah!');
	}
	let angsuran = sisa/kredit;
	console.log(`Angsuran : ${angsuran}`);
	console.log('\n');
	console.log('>>>Tabel Angsuran<<<');
	console.log(`Bulan ke 	Angsuran 		Sisa 	`);
	for(let i=1;i<=kredit;i++){
		console.log(`${i}			${angsuran}			${sisa-(i*angsuran)}`);
	}
}else {
	alert('Tipe Rumah Salah!');
}