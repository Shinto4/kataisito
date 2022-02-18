<?php 
if (isset($_POST['name']) && isset($POST['message'])) {

$name = $_POST['name'];
$message = $POST['message'];
$to = 'katai.supp0rt@gmail.com';
$subject = 'Supporto';
$body = '
<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    </head>
    <body style="font-family: "Nunito", sans-serif; font-size: 20px; text-align: center;">
        <h1>MODULO</h1>
        <p>Nome: '.$name.'<p>
        <p>Testo: '.$message.'</p>
    </body>
</html>
';
$send(mail($to, $subject, $body));

if($send) {
echo "<script> alert('Grazie per aver inviato')</script>";

} else {
    echo "<script> alert('Non puoi lasciare in bianco')</script>";
}
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Katai</title>
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css"> 
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<link rel="icon" href="https://cdn.discordapp.com/icons/801373178227851274/a4501f3e6e3569e30cf31791ecb289b6.jpg?size=512">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
<div class="parte1" id="banner">
</div>
<h1 class="titolo" id="titolo">katai</h1>


<div class="carte">
<div class="dscard">
<p class="testo scrittads">DISCORD</p>
<img src="https://cdn.discordapp.com/icons/801373178227851274/a4501f3e6e3569e30cf31791ecb289b6.jpg?size=512" class="discord">
<h1 class="nomeserver">Katai</h3>
<a class="unisciti" href="https://discord.gg/BQF5xyCteR" target="_blank">Unisciti</a>
</div>

<div class="igcard">
    <p class="testo scrittaig">INSTAGRAM</p>
    <img src="./img/logoig.jpg" class="discord">
    <h1 class="nomeserver">Katai</h3>
    <a class="uniscitiig" href="https://instagram.com/katai_comunity?utm_medium=copy_link" target="_blank">Unisciti</a>
    </div>
    
</div>

<div class="separatore"></div>
<h1 class="testo">COSA OFFRIAMO</h1>
<div class="sfondodescrizione">
    <p class="descrizione">Stai cercando un server dove chattare in tutta tranquillità e magari fare qualche nuova amicizia? Allora questo server fa per te!<br>
        Inoltre possiamo offrirti:<br><br>
        
        🤲 Partnership<br>
        
        🤖Vari bot con cui divertirti<br>
        
        👮‍♂️ Staff disponibile e attivo<br>
        
        🎁 Eventi di tutti i tipi<br>
        
        🎖 Ruoli che ti daranno dei vantaggi quando raggiungi un certo livello<br>
        
        💎 Giveaway con vari premi<br>
        
        🔮 Boostando otterrai una chat vocale privata e un posto assicurato negli eventi su twitch<br>
        
        🌐 Server minecraft</p>
 </div>

 <div class="separatore"></div>
 <h1 class="testo">RECENSIONI:</h1>

 <div class="recensioni">
 <div class="recensione1">
    <img class="img-recensore" src="./img/fotorecensore1.jpg">
    <h2 class="nome-recensore">Yuriko#9430</h2>
    <img class="stelle5" src="./img/5stelle.png">
    <p class="testo-recensione">Il server Katai è molto bello e accogliente ed è anche sempre molto attivo. 
        Gli helper, i mod, gli admin, lo staff in generale svolge molto bene il suo lavoro. 
        La cosa che mi piace di più di questo server è la gente, sono tutti simp.</p>
    
 </div>

 <div class="recensione2">
    <img class="img-recensore" src="./img/fotorecensore2.jpg">
    <h2 class="nome-recensore">ScrivaSia#4114</h2>
    <img class="stelle4" src="./img/4stelle.png">
    <p class="testo-recensione">Il server è pieno di gente simpatica,lo staff è gentile e sempre disponibile.Non sempre le regole son rispettate,sia dagli staffer che i non,sarebbe più opportuno far rispettare le regole da tutti, ma non fa niente, a me il server piace.</p>
    
 </div>

 <div class="recensione3">
    <img class="img-recensore" src="./img/fotorecensore3.jpg">
    <h2 class="nome-recensore">Encyclopedia#5301</h2>
    <img class="stelle5" src="./img/5stelle.png">
    
    <p class="testo-recensione">Le persone sono molto gentili, non ho mai avuto problemi con nessuno e mi trovo davvero tanto bene. Organizzazione e preparazione sono ottime e anche lo staff. A parer mio una delle migliori community.</p>
    
 </div>
</div>



<div class="separatore"></div>

<h1 class="testo">SEZIONE EVENTI</h1>
<div class="vincitori">
<a class="bottone-vincitori" href="vincitori.php">VISITA</a>
</div>


<div class="separatore"></div>

<h1 class="testo">CONTATTACI</h1>

<form class="gform" method="post" action="">
    <p class="tipo-input">Nome:</p><input type="text" placeholder="" name="name" class="input-nome">
    <p class="tipo-input">Messaggio:</p> <textarea name="message" class="input-testo"></textarea>
    <input type="submit" class="input-invia" value="INVIA" onclick="inviato()">
</form>

 <div class="endbar">
     <p class="credits">Sito creato da Ale e Cri | Sans_#6776 | Shinto#6645 <br><br> Founder del server: Prop3r#9479<br></p>
    
 </div>

</body>

<script>
    $("#titolo").ready(function(){
        $("#titolo").fadeIn("slow")
    })

    
</script>

<script>
    
   //funzione messaggio inviato

   function inviato() {
     alert("MESSAGGIO INVIATO! (non inviarne troppi in poco tempo)")
   }
     </script>
</html>

