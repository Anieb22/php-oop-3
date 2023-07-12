<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php 

    include './generals/comunicazioni.php';
    include './generals/email.php';
    include './generals/messaggio.php';
    include './generals/notifiche_push.php';
    
    $comunicazioni = [
        new Email('email@test.com', 'email-destinatario@test.com', 'Mando email', 'Messaggio email', 'Suoneria Predefinita(messaggio)','allegato.file','o','u','a'),
        new Messaggio('email@test.com', 'email-destinatario@test.com', 'Rispondo email', 'Messaggio email', 'Suoneria Predefinita(messaggio)','Messaggio letto','Risposta messaggio'),
        new Notifiche('email@test.com', 'email-destinatario@test.com', 'Icona', 'Messaggio email', 'Suoneria Predefinita(messaggio)','fab fa-simplybuilt'),
    ];

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        <title>PHP OOP 3</title>
    </head>
    <body>
        <div class='container'>
            <h1>Comunicazioni</h1>
            <div class='row'>
                <div class='col-md-12'>
                    <div>
                        <div>
                            Email
                        </div>
                        <?php foreach($comunicazioni as $comunicazione) { ?>
                                <h5><?php echo $comunicazione->oggetto; ?></h5>
                                <p><?php echo $comunicazione->messaggio; ?></p>
                                <ul>
                                    <li>Mittente: <?php echo $comunicazione->mittente; ?></li>
                                    <li>Destinatari: <?php echo $comunicazione->destinatari; ?></li>
                                    <li>Suono avviso: <?php echo $comunicazione->suonoAvviso ?></li>
                                    <li>Colore led: <?php echo Comunicazione::$coloreLed ?></li>
                                    <?php if($comunicazione instanceof Email) { ?>
                                        <li>Allegati: <?php echo $comunicazione->allegati; ?></li>
                                        <li>Notifica di consegna: <?php echo $comunicazione->notificheConsegna ? 'sì' : 'no'; ?></li>
                                        <li>Inoltrata: <?php echo $comunicazione->inoltra ? 'sì' : 'no'; ?></li>
                                        <li>Stampata: <?php echo $comunicazione->stampate ? 'sì' : 'no'; ?></li>
                                    <?php } if($comunicazione instanceof Messaggio) { ?>
                                        <li>Notifica Letta: <?php echo $comunicazione->notificheLettura ? 'sì' : 'no'; ?></li>
                                        <li>Risposta: <?php echo $comunicazione->risposta ?> Ciao tutto bene</li>
                                    <?php } if($comunicazione instanceof Notifiche) { ?>
                                    <?php } ?>
                                </ul>
                                <div>
                                    <small>Inviata: <?php echo date('Y-m-d H:i:s'); ?></small>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
</body>
</html>