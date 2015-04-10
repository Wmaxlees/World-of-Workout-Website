<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
		<script>
			var username = getCookie("woe-user");
			if (username === "") {
				Window.alert("Login!");
			}

		</script>

        <table style="border-bottom: 1px solid black; width: 100%;">
            <tr>
                <td style="width:210px;">
                    <img id="profile_picture" src="http://media4.popsugar-assets.com/files/2013/10/18/233/n/1922283/ad57fc860e590b49_thumb_temp321963991382151012.xxxlarge/i/Arnold-Schwarzenegger-Recites-Lines-Reddit.jpg" />
                </td>
                <td valign="bottom">
                    Username<br />
                    Level: 1
                </td>
            </tr>
        </table>

        <div id="stats">
            <br />
            <span id="stat_name">Abdominal:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Biceps:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Deltoids:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Erector Spinae:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Gastrocnemius & Soleus:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Gluteus:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Hamstrings:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Latissimus Dorsi &amp; Rhomboids:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Obliques:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Pectoralis:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Quadriceps:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Trapezius:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
            <span id="stat_name">Triceps:</span> 1
            <br />
            <div class="progress" style="height: 10px; width: 500px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
            </div>
        </div>
    </body>
</html>