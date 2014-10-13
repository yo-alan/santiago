var sfw = {};
sfw['0'] = [' '];
sfw['1'] = ['Introducción a la Programación'];
sfw['2'] = ['Laboratorio de Programación I'];
sfw['3'] = ['Matemática Aplicada I'];
sfw['4'] = ['Inglés I'];
sfw['5'] = ['Técnicas Avanzadas de Programación'];
sfw['6'] = ['Estructura de Datos y Algoritmos'];
sfw['7'] = ['Paradigmas de Programación'];
sfw['8'] = ['Matemática Aplicada II'];
sfw['9'] = ['Inglés II'];
sfw['10'] = ['Laboratorio Avanzado de Programación II'];
sfw['11'] = ['Base de Datos I'];
sfw['12'] = ['Programación Web I'];
sfw['13'] = ['Redes y Seguridad Informática'];
sfw['14'] = ['Ingeniería de Software'];
sfw['15'] = ['Programación Web II'];
sfw['16'] = ['Base de Datos II'];
sfw['17'] = ['Gestión de Proyectos de Software'];

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
red['1'] = ['Expresión y Comunicación'];
red['2'] = ['Inglés I'];
red['3'] = ['Matemática Aplicada I'];
red['4'] = ['Arquitectura de Computadoras I'];
red['5'] = ['Electrónica I'];
red['6'] = ['Física para las Telecomunicaciones I'];
red['7'] = ['Programación I'];
red['8'] = ['Sistemas Operativos I'];
red['9'] = ['Programación II'];
red['10'] = ['Arquitectura de Computadoras'];
red['11'] = ['Física para las Telecomunicaciones II'];
red['12'] = ['Legislación de las Comunicaciones'];
red['13'] = ['Talleres de Tecnología Aplicada'];
red['14'] = ['Matemática Aplicada II'];
red['15'] = ['Programación III'];
red['16'] = ['Redes'];
red['17'] = ['Electrónica II'];
red['18'] = ['Arquitectura de Computadoras III'];
red['19'] = ['Sistemas Operativos II'];
red['20'] = ['Gestión y Administración Empresarial'];
red['21'] = ['Tratamiento de Señal'];
red['22'] = ['Equipos y Medios de Transmisión'];
red['23'] = ['Actualización Tecnológica I'];
red['24'] = ['Transmisión de Datos I'];
red['25'] = ['Actualización Tecnológica II'];
red['26'] = ['Transmisión de Datos II'];
red['27'] = ['Redes de Alta Velocidad'];
red['28'] = ['Sistemas Telefónicos'];
red['29'] = ['Ingeniería de Protocolos'];
red['30'] = ['Equipos y Medios de Transmisión'];
red['31'] = ['Sistemas Operativos III'];


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
		case 'RED':
		for(i = 1; i < 32; i++)
		{
			var x = new Option(red[i],i);
			modelList.options.add(x);
		}
		break;
		case 'ENF':
		for(i = 1; i < 19; i++)
		{
			var x = new Option(enf[i],i);
			modelList.options.add(x);
		}
		break;
		case 'SFW':
		for(i = 1; i < 18; i++)
		{
			var x = new Option(sfw[i],i);
			modelList.options.add(x);	
		}
		break;
	}
}
