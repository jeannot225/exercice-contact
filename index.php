
<!DOCTYPE html> 
<html>
    <head>
        <title>contactez-moi !</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial scale=1"> <!--le responsive-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> <!--lien jquery-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> <!--lien boostrap-->
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!--lien police texte lato-->
        <link rel="stylesheet" href="css/style.css"><!--lien css-->
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1" >
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="name">Nom <span class="blue"> *</span></label>
                                <input type="text" id="name" name="name"  class="form-contol" placeholder="votre nom" value="">
                                <p class="comments"></p>
                            </div>


                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-contol" placeholder="votre prénom" value="">
                                <p class="comments"></p>
                            </div>


                            <div class="col-md-6">
                                <label for="email">Email <span class="blue"> *</span></label>
                                <input type="text" id="email" name="email"  class="form-contol" placeholder="votre email" value="">
                                <p class="comments"></p>
                            </div>


                            <div class="col-md-6">
                                <label for="phone">Téléphone <span class="blue"> *</span></label>
                                <input type="text" id="phone" name="phone"  class="form-contol" placeholder="votre téléphone" value="">
                                <p class="comments"></p>
                            </div>


                            <div class="col-md-12">
                                <label for="message">Message <span class="blue"> *</span></label>
                                <textarea id="message" name="message"  class="form-control" placeholder="votre message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>


                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>


                            <div class="col-md-12">
                                <input type="submit" class="button1" value="envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
            




    </body>
</html>