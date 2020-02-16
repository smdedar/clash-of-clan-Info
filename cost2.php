

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COC Info</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Matrial ICON CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- External JS -->
    <script src="app.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="style1.css">
    <!-- Google Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.4/lib/darkmode-js.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/b1cb080696.js"></script> -->


<style>
body{
    background-color:#a9a9a9;
}

td > * {
    vertical-align : middle;
}

#position{
  font-size: 10px;
  padding: 0px;
  margin: 2px;
}

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  .page-footer {
    padding-top: 0px;
  }

</style>

</head>
<body class="grey darken-3 white-text">
    <div class="container">

    <div class="row">
      <form class="" action="cost2.php" method="post">
        <div class="row">
          <div class="col l3 s2">
              
          </div>
          <div class="input-field col l4 s6">
            <input name="clanTag" type="text" placeholder="Clan Tag #CLY00QYU" class="validate white-text" required>
          </div>
          <div class="input-field col l5 s4">

            <button class="btn-floating btn-large waves-effect waves-light red" type="submit" name="action">
              <i class="material-icons right">search</i>
            </button>
          </div>
        </div>
      </form>
    </div>
      
        <div class="card horizontal grey darken-3 ">
          
            <div id="badgeDesktop"class="hide-on-med-and-down card-image">
              
            </div>
            
            
            <div class="card-stacked">

              <div class="card-content white-text">

              <div id="badgeMobile" class="hide-on-large-only" >
                 
              </div>
                <h5 id="clanName" class="header"></h5>
                <p id="clanDescription" style="text-align: justify; "></p>
                <div class="row">
                    
                    <div class="col m6 s12 grey darken-3">
                        <div class="collection grey darken-3 ">
                            <a href="#!" class="collection-item  amber lighten-2 black-text"><span id="clanPoints" class="badge yellow black-text">10</span><img src="img/clan point.webp" height="15px" width="15px" alt=""> Clan Points</a>
                            <a href="#!" class="collection-item amber black-text"><span id="clanVersusPoints" class="badge blue white-text">12554</span><img src="img/tp2.png" height="15px" width="15px" alt=""> Clan Versus Point</a>
                            <a href="#!" class="collection-item orange amber lighten-2 black-text"><span id="requiredTrophies" class=" white-text badge blue"></span> <img src="img/clan point.webp" height="15px" width="15px" alt=""> Required Tropies</a>     
                            <a href="#!" class="collection-item amber black-text"><span id="location" class="white-text badge red">4</span><i class="material-icons">location_on</i> Location</a>
                        </div>
                        <!-- <input placeholder="Movie Download Link" id="first_name" type="text" class="validate collection-item"> -->
                    </div>
                    <div class="col m6 s12 grey darken-3">
                     <!--   <div class="collection grey darken-3">
                            <a href="#!" class="collection-item amber lighten-2 black-text"><span class="new badge yellow">1</span> <img src="img/warwin.png" height="15px" width="15px" alt="">  War Won</a>
                            <a href="#!" class="collection-item  amber black-text "><span class="new badge black">4</span> <img src="img/warwin.png" height="15px" width="15px" alt=""> War Tie</a>
                            <a href="#!" class="collection-item red white-text"><span class="new badge blue">4</span> <img src="img/warwin.png" height="15px" width="15px" alt=""> War Lost</a>
                            <a href="#!" class="collection-item amber black-text"><span class="new badge red">4</span><img src="img/warwin.png" height="15px" width="15px" alt=""> War Win Streak</a> 
                        </div>  -->
                    </div>
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">save</i></a>
              </div>
              
            </div>
          </div>



          <table class="highlight">
            <thead>
              <tr>
                  <th>League</th>
                  <th>Name</th>
                  <th>Troops Donate</th>
                  <th>Troops Recceived</th>
                  <th>Trophies</th>
              </tr>
            </thead>
    
            <tbody id="members">
              <tr>
                <td><img src="https://api-assets.clashofclans.com/leagues/36/L-HrwYpFbDwWjdmhJQiZiTRa_zXPPOgUTdmbsaq4meo.png" alt="" srcset=""></td>
                <td>Dedar Alam <p id="position">Co Leader</p></td>
                <td><i class="material-icons">arrow_upward</i> 105078</td>
                <td><i class="material-icons">arrow_downward</i> 105078</td>
                <td>2117 <img src="img/clan point.webp" height="15px" width="15px" alt=""></td>
              </tr>
            </tbody>
          </table>

          <footer class="page-footer grey darken-2">
            <div class="footer-copyright">
              <div class="container">
                © 2020 Developed By Dedar
              </div>
            </div>
          </footer>
    </div>



    
    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


<?php

if( isset($_POST["action"]) ) { 
  $clantag = $_POST['clanTag'];  //get data from drop downlist
  //echo  $clantag;
}else{
  $clantag = "#CLY00QYU";
}
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjNiODk5ODE3LTRhYTEtNGI4Yi04Y2EzLTU3NjMzZjIxNjIyYSIsImlhdCI6MTU4MTY5NDE2OSwic3ViIjoiZGV2ZWxvcGVyLzViZjY1YTgxLTZlMzUtMzBkNi05YzY0LWM2YzQ3ZTdhNmFjMiIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjEwMy43Ni4xNTQuMTMwIiwiMTUzLjkyLjAuMTAiXSwidHlwZSI6ImNsaWVudCJ9XX0.PMmbEDsiKNJXy6mb6Xy9DZvp6zeC5LoAMKJ4vjPF7sUycX7VFbyfbekrGV8h2YnT0WtooBMUd3kcIk_RAn6cDA";

$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);

$ch = curl_init($url);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);
?>


<script type="text/javascript">
//pass PHP variable declared above to JavaScript variable
var ar = <?php echo json_encode($data) ?>;
console.log(ar.name);
console.log(ar.members);

var html = '';
var league, position, name, troopsdonate, troopsreceived, tropies;

for( var i=0; i<ar.members; i++){
    league = ar.memberList[i].league.iconUrls.tiny;
    position = ar.memberList[i].role;
    name = ar.memberList[i].name;
    tropies = ar.memberList[i].trophies;
    troopsdonate = ar.memberList[i].donations;
    troopsreceived = ar.memberList[i].donationsReceived;
    console.log(name);
    console.log(troopsreceived);

   html += '<tr> <td><img src="'+ league +'" alt="" srcset=""></td> <td>'+ name +'<p id="position">'+  position +'</p></td> <td><i class="material-icons">arrow_upward</i> '+ troopsdonate +'</td> <td><i class="material-icons">arrow_downward</i> '+  troopsreceived +'</td> <td>'+ tropies +' <img src="img/clan point.webp" height="15px" width="15px" alt=""></td> </tr>';
}

document.getElementById('members').innerHTML = html;
document.getElementById('clanName').innerHTML = ar.name;
document.getElementById('clanDescription').innerHTML = ar.description;
document.getElementById('badgeDesktop').innerHTML = '<img src="'+ ar.badgeUrls.medium +'">';
document.getElementById('badgeMobile').innerHTML = '<img style="margin: auto; display: block;" src="'+ ar.badgeUrls.medium +'">';

document.getElementById('clanPoints').innerHTML = ar.clanPoints;
document.getElementById('clanVersusPoints').innerHTML = ar.clanVersusPoints;
document.getElementById('requiredTrophies').innerHTML = ar.requiredTrophies;
document.getElementById('location').innerHTML = ar.location.name;








</script>