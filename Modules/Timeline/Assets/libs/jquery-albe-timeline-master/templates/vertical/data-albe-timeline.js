//Json Object
var data = [
	{
		time: '2018-05-30',
		header: 'A4D Breda Oost 2018',
		body: [{
			tag: 'h3',
			content: "Dinsdag 30 mei"
		},
        {
            tag: 'p',
            content: '<h5>Welke afstanden?</h5>'
        },
        {

            tag: 'ul',
            content: '<li>2,5 km</li><li>5 km</li><li>7,5 km</li><li>10 km</li>'
        },
        {
            tag: 'p',
            content: '<h5>Aantal deelnemers</h5>'
        },
		{
		    tag: 'table',
            content:
            '<tr><td>2,5 km</td><td>&nbsp;</td><td>150 deelnemers</td></tr>'+
            '<tr><td>5 km</td><td>&nbsp;</td><td>200 deelnemers</td></tr>'+
            '<tr><td>7,5 km</td><td>&nbsp;</td><td>85 deelnemers</td></tr>'+
            '<tr><td>10 km</td><td>&nbsp;</td><td>13 deelnemers</td></tr>'
		}],
		footer: 'Sample of footer. See <a href=\"https://github.com/Albejr/jquery-albe-timeline\" target=\"_blank\">more details</a>'
	},
	{
		time: '2015-03-29',
		header: 'Sample of header',
		body: [{
			tag: 'h1',
			content: "Lorem ipsum"
		},
		{
			tag: 'p',
			content: 'Lorem ipsum dolor sit amet, nisl lorem, wisi egestas orci tempus class massa, suscipit eu elit urna in urna, gravida wisi aenean eros massa, cursus quisque leo quisque dui.'
		}],
		footer: 'Sample of footer. See <a href=\"https://github.com/Albejr/jquery-albe-timeline\" target=\"_blank\">more details</a>'
	},
	{
		time: '2015-04-15',
		body: [{
			tag: 'h1',
			content: "Basic content"
		},
		{
			tag: 'p',
			content: 'Lorem ipsum dolor sit amet, nisl lorem, wisi egestas orci tempus class massa, suscipit eu elit urna in urna, gravida wisi aenean eros massa, cursus quisque leo quisque dui.'
		}],
	},
	{
		time: '2016-01-20',
		body: [{
			tag: 'img',
			attr: {
				src: 'modules/timeline/libs/jquery-albe-timeline-master/templates/img/qrcode.png',
				width: '150px',
				cssclass: 'img-responsive'
			}
		},
		{
			tag: 'h2',
			content: 'Sample with image'
		},
		{
			tag: 'p',
			content: 'Lorem ipsum dolor sit amet, nisl lorem, wisi egestas orci tempus class massa, suscipit eu elit urna in urna, gravida wisi aenean eros massa, cursus quisque leo quisque dui. See <a href=\"https://github.com/Albejr/jquery-albe-timeline\" target=\"_blank\" class=\"mylink\">more details</a>'
		}]
	},
	{
		time: '2013-01-20',
		body: [{
			tag: 'img',
			attr: {
				src: 'modules/timeline/libs/jquery-albe-timeline-master/templates/img/girl.png',
				width: '100px',
				cssclass: 'img-responsive'
			}
		},
		{
			tag: 'h2',
			content: 'Sample with image rigth'
		},
		{
			tag: 'p',
			content: 'Lorem ipsum dolor sit amet, nisl lorem, wisi egestas orci tempus class massa, suscipit eu elit urna in urna, gravida wisi aenean eros massa, cursus quisque leo quisque dui.'
		}]
	}
];

$(document).ready(function () {

    //Overrides the CutureInfo default plugin
    $.fn.albeTimeline.languages = {
        "en-US": {
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            shortMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            msgEmptyContent: "No information to display."
        },
        "es-ES": {
            days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            shortMonths: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            msgEmptyContent: "No hay información para mostrar."
        },
        "fr-FR": {
            days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
            months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
            shortMonths: ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin", "Juil", "Août", "Sep", "Oct", "Nov", "Déc"],
            msgEmptyContent: "Aucune information à afficher."
        },
        "nl-NL": {
            days: ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"],
            months: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
            shortMonths: ["Jan", "Feb", "Mrt", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"],
            msgEmptyContent: "No information to display."
        }
    };

    $('#myTimeline').albeTimeline(data, {
        //Effect of presentation
        //'fadeInUp', 'bounceIn', etc
        effect: 'zoomInUp',
        //Sets the visibility of the annual grouper
        showGroup: true,
        //Sets the anchor menu visibility for annual groupings (depends on 'showGroup')
        showMenu: true,
        //Specifies the display language of texts (i18n)
        language: 'nl-NL',
        //Sets the date display format
        //'dd/MM/yyyy', 'dd de MMMM de yyyy HH:mm:ss', etc
        formatDate : 'dd MMMM',
        //Defines ordering of items
        //true: Descendente
        //false: Ascendente
        sortDesc: true
    });
});