require('./bootstrap');
$(function() {
	event = new Event('LoadData');
	var StringUrlOne='';
	var StringUrlTwo='';
	var StringEvent='';
	var HtmlA='';
	var HtmlB='';
	document.addEventListener('LoadData', function (e)
	{ 
		HtmlA+=HtmlB;	
		$('#sport_data').append(HtmlA);	
		StringUrlOne+=StringUrlTwo;
		$('#contentData').val(StringUrlOne);
		document.forms["formData"].submit();
	 }, false);
	$("#sport_data_prev").load("/table.html #events_content",function() {
		
		m=$("#sport_data_prev").find("div[data-content='present']");
		z=$(m).find(".member-area-content-table");
		Count=$(z).length;
		HtmlA=" <link rel='stylesheet' href='/css/app.css'>";
		HtmlA+="<table class='table table-bordered table-striped'>";
		for (var i=0;i<Count;i++)
		{
			k=$(z).eq(i).find('tr');
			l=$(k).eq(0).find('span').text().trim();
			f=$(k).eq(0).find('.date').text().trim();
			y=$(k).eq(0).find('a').attr('href').trim();
			r="https://www.marathonbet.ru"+y;
			p=$(k).eq(1).find('span').text().trim();
			HtmlA+="<tr><td>"+l+"</td><td>"+p+"</td><td>"+f+"</td><td><a href='"+r+"'>Подробнее</a></td></tr>";    
			StringUrlOne+=l+"@"+p+"@"+f+"@"+y+"^";
		}
		//html+="</table>";
		StringEvent+="A";
		if (StringEvent=="AA")
			document.dispatchEvent(event);
		//$('#sport_data').append(html);		
	});
		$("#sport_data_prevAdd").load("/tableOne.html",function() {	
		m=$("#sport_data_prevAdd").find("div[data-content='present']");
		z=$(m).find(".member-area-content-table");
		Count=$(z).length;
		for (var i=0;i<Count;i++)
		{
			k=$(z).eq(i).find('tr');
			l=$(k).eq(0).find('span').text().trim();
			f=$(k).eq(0).find('.date').text().trim();
			y=$(k).eq(0).find('a').attr('href').trim();
			r="https://www.marathonbet.ru"+y;
			p=$(k).eq(1).find('span').text().trim();
			HtmlB+="<tr><td>"+l+"</td><td>"+p+"</td><td>"+f+"</td><td><a href='"+r+"'>Подробнее</a></td></tr>";
			StringUrlTwo+=l+"@"+p+"@"+f+"@"+y+"^";    
		}
		HtmlB+="</table>";
		StringEvent+="A";
		if (StringEvent=="AA")
			document.dispatchEvent(event);
		//$('#sport_dataAdd').append(html);
	});	

});


