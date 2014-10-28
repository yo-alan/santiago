var enf = {};
enf['0'] = [' '];
enf['1'] = ['Fundamentos de Enfermería'];
enf['2'] = ['Física y Química Biológica'];
enf['3'] = ['Anatomía y Fisiología'];
enf['4'] = ['Nutrición'];
enf['5'] = ['Psicología General y Evolutiva'];
enf['7'] = ['Bioestadística y Epistemología'];
enf['8'] = ['Enfermería del Adulto y del Anciano'];
enf['9'] = ['Psicología Social'];
enf['10'] = ['Farmacología'];
enf['11'] = ['Dietoterapía'];
enf['12'] = ['Enfermería en Salud Mental y Psiquiatría'];
enf['13'] = ['Computación Aplicada'];
enf['14'] = ['Enfermería Materno-Infantil y del Adolescente'];
enf['15'] = ['Inglés'];
enf['16'] = ['Enfermería Etica y Legal'];
enf['17'] = ['Antropología'];
enf['18'] = ['Enfermería en Salud Comunitaria'];

var red = {};
red['0'] = [' '];
red['19'] = ['Expresión y Comunicación'];
red['20'] = ['Inglés I'];
red['21'] = ['Matemática Aplicada I'];
red['22'] = ['Arquitectura de Computadoras I'];
red['23'] = ['Electrónica I'];
red['24'] = ['Física para las Telecomunicaciones I'];
red['25'] = ['Programación I'];
red['26'] = ['Sistemas Operativos I'];
red['27'] = ['Programación II'];
red['28'] = ['Arquitectura de Computadoras'];
red['29'] = ['Física para las Telecomunicaciones II'];
red['30'] = ['Legislación de las Comunicaciones'];
red['31'] = ['Talleres de Tecnología Aplicada'];
red['32'] = ['Matemática Aplicada II'];
red['33'] = ['Programación III'];
red['34'] = ['Redes'];
red['35'] = ['Electrónica II'];
red['36'] = ['Arquitectura de Computadoras III'];
red['37'] = ['Sistemas Operativos II'];
red['38'] = ['Gestión y Administración Empresarial'];
red['39'] = ['Tratamiento de Señal'];
red['40'] = ['Equipos y Medios de Transmisión'];
red['41'] = ['Actualización Tecnológica I'];
red['42'] = ['Transmisión de Datos I'];
red['43'] = ['Actualización Tecnológica II'];
red['44'] = ['Transmisión de Datos II'];
red['45'] = ['Redes de Alta Velocidad'];
red['46'] = ['Sistemas Telefónicos'];
red['47'] = ['Ingeniería de Protocolos'];
red['48'] = ['Equipos y Medios de Transmisión'];
red['49'] = ['Sistemas Operativos III'];

var sfw = {};
sfw['0'] = [' '];
sfw['50'] = ['Introducción a la Programación'];
sfw['51'] = ['Laboratorio de Programación I'];
sfw['52'] = ['Matemática Aplicada I'];
sfw['53'] = ['Inglés I'];
sfw['54'] = ['Técnicas Avanzadas de Programación'];
sfw['55'] = ['Estructura de Datos y Algoritmos'];
sfw['56'] = ['Paradigmas de Programación'];
sfw['57'] = ['Matemática Aplicada II'];
sfw['58'] = ['Inglés II'];
sfw['59'] = ['Laboratorio Avanzado de Programación II'];
sfw['60'] = ['Base de Datos I'];
sfw['61'] = ['Programación Web I'];
sfw['62'] = ['Redes y Seguridad Informática'];
sfw['63'] = ['Ingeniería de Software'];
sfw['64'] = ['Programación Web II'];
sfw['65'] = ['Base de Datos II'];
sfw['66'] = ['Gestión de Proyectos de Software'];


function selectMateria() {
	var i;
	var carrera;
	var x;
	var modelList = document.getElementById("mat");
	carrera = document.getElementById('carr').value;
	while (modelList.options.length) 
	{
	    modelList.remove(0);
	}
	switch(carrera)
	{
		case 'ENF':
		for(i = 1; i < 19; i++)
		{
			var x = new Option(enf[i],i);
			modelList.options.add(x);
		}
		break;
		case 'RED':
		for(i = 19; i < 50; i++)
		{
			var x = new Option(red[i],i);
			modelList.options.add(x);
		}
		break;
		case 'SFW':
		for(i = 50; i < 67; i++)
		{
			var x = new Option(sfw[i],i);
			modelList.options.add(x);	
		}
		break;
	}
}
