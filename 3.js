var s = '';
var a = '';
var teks1 = ['D','U','M','B','W','A','Y','S']
for(var i = 0; i<8;i++){

	s +='<tr>';
	for(var j = 0; j < i; j++){
		// s += '  ';
		s += '<td>'+'  '+'</td>';

	}

	// s+=teks1[i];
	s += '<td>'+teks1[i]+'</td>';
	s +='</tr>';
	// s += '\n';
}

console.log(s);


for(var d=7;d>=0;d--){
	a +='<tr>';
	for(var j = 0; j < d; j++){
		// a += '  ';
		a += '<td>'+'  '+'</td>';

	}
	a += '<td>'+teks1[d]+'</td>';
	a +='</tr>';
	// a +=teks1[d];
	// a += '\n';
}
console.log(a);

document.write('<table border=1>'+s+'</table><br>');
document.write('<table border=1>'+a+'</table>');







