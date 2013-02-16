<!doctype html>
<html>
	<head>
		<title>Sample Site</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript">

			Ajax = function() {
				this.request 	= new XMLHttpRequest();
				this.url 		= null;
				this.method 	= 'GET';
				this.args		= null;
				this.async		= true;				
				this.callback 	= null;
			}

			Ajax.prototype.init = function(obj) {
				// set
				this.url 		= obj.url;
				this.method 	= obj.method 	|| 'GET';
				this.callback 	= obj.callback;
				this.async 		= obj.asyn 		|| true;
				this.args 		= obj.args 		|| "";
				
				var self = this;
				this.request.onreadystatechange = function() {
					if (this.readyState==4 && this.status==200) {
						self.callback(this.responseXML);
					} else {
						console.log('Status' + "\t" + 'Ready State\n');
						console.log(this.status + "\t" + this.readyState);
					}
				}

				// run
				this.request.open(this.method, this.url, this.async);

				if(this.method = 'GET') {
					this.request.send();
				} 
				else if(this.method = 'POST') {
					this.request(this.args);
				}

			}

			window.onload = function() {
				// var request = new XMLHttpRequest();

				// request.onreadystatechange = function() {
				// 	//console.log(request.responseText);
				// 	if (request.readyState==4 && request.status==200) {
				// 		console.log(0);
				// 	} else if (request.status == 501) {
				// 		console.log(request.responseText);
				// 	}
				// }
				// request.open('GET', 'test.php', true);
				// request.send();

				/*
				var a = new Ajax();

				a.init({
					url 	: 'get_all_media.php?index=0',
					method 	: 'POST',
					args 	: 'index=0',
					callback : function(responseXML) {
						var doc = responseXML.getElementsByTagName("root");
						var media = doc[0].getElementsByTagName("media");
						var el 	= document.getElementById('right-pane');
						for(i=0;i<media.length;i++){
							var title = media[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
							var url = media[i].getElementsByTagName("url")[0].childNodes[0].nodeValue;
							var category = media[i].getElementsByTagName("category")[0].childNodes[0].nodeValue;
							el.innerHTML += "<div class='ajax-response'><strong>"+ title +"</strong><br><img src='" + url + "'></div>"
						}

						// var el 	= document.getElementById('right-pane');

						// for (i=0; media.length; i++) {
						// 	el.innerHTML += "<div class='ajax-response'>" + doc + '</div>';
						// }
					}
				});
				*/
			};

		</script>
	</head>
	<body>
		<div id='top-bar'>
			<div id="menu">
				<ul>
					<li> <a class='active' href="/Ajaxed">Home</a></li>
					<li> <a href="?page=popular">Popular</a></li>
				</ul>
			</div>
		</div>

		<div id="container">
			<div id='right-pane'>
				<?php require $bodyURL; ?>
			</div>
		</div>
		<footer>
			&copy; 2013 Taner
		</footer>
	</body>
</html>