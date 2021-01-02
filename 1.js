const bayar = prompt('uang yang dibayar : ');

const hitungUangKembalian = function(uang, totalBayar){
	uang = bayar;
	totalBayar = 184600;
	console.log(`Uang dibayar : Rp ${uang}`);
	console.log(`Total Bayar : Rp ${totalBayar}`);
	console.log('================================');
	let kembalian = uang - totalBayar;
	const limaK = prompt('Kembalian uang pecahan Rp.5000 sebanyak');
	const sepuluhK = prompt('Kembalian uang pecahan Rp.10000 sebanyak');
	const limaRatus = prompt('Kembalian uang pecahan Rp.500 sebanyak');
	const seratus = prompt('Kembalian uang pecahan Rp.100 sebanyak');
	console.log(`Uang pecahan Rp.5000 sebanyak ${limaK} lembar`);
	console.log(`Uang pecahan Rp.10.000 sebanyak ${sepuluhK} lembar`);
	console.log(`Uang pecahan Rp.500 sebanyak ${limaRatus} lembar`);
	console.log(`Uang pecahan Rp.100 sebanyak ${seratus} lembar`);
	console.log('================================');
	const terbilang = prompt(`Kembalian anda Rp.${kembalian} masukkan angka terbilang nya:`)
	return `Kembalian : Rp ${kembalian} \nTerbilang : ${terbilang}`;


};
const jawaban = console.log(hitungUangKembalian(bayar,184600));










