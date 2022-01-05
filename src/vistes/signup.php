<html>
    <head>
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="icon" href="img/favicon.png" type="image/x-icon">
        <title>Hotel Cendrassos - Registre</title>
    </head>
    <body>
        <header><?php include("../src/vistes/nav.php") ?></header>
          <container>
              <div class="container-signup">
                <h1>Formulari Registre</h1>
                <form action="index.php" method="post">
                    <input type="hidden" name="r" value="validarSignup">
                    <input type="hidden" name="rol" value="client">
                    
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" class="form-control form-control-lg" name="nom" />
                    
                            <label class="form-label" for="cognoms">Cognoms</label>
                            <input type="text" class="form-control form-control-lg" name="cognoms"/>
                    
                    
                                <label for="data_naixament" class="form-label">Data Naixament</label>
                                <input type="date" class="form-control form-control-lg" name="data_naixament"/>
                        
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" />

                        
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password"/>

                    
                    <input id="button" type="submit" value="Registrar-se" />
                    
                </form>
            </div>
        </container>
        <footer>
            <?php include("../src/vistes/footer.php") ?>
        </footer>
    </body>
</html>