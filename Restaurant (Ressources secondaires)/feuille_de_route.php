/**** application/classes/UserSession.class.php ****/


1- créer un class UserSession {


	-> Contructor => Verifier si le statut de la session courante est égale à la session existe, elle est active ou si aucune n'exite 
    	**Mots cles : session_status() ** 	
        http://php.net/manual/fr/function.session-status.php {
    	
        // Démarrage de la session
    
    
    }
    
    -> Methode create(.......){
    
    	//Construction de la session utilisateur 
        
        ***** Mots cles + def : Variables superglobale
        
        Le tableau $_SESSION
		Lorsqu'une session est créée, elle est par défaut vide. Elle n'a donc aucun intérêt. Il faut donc lui attribuer des valeurs à 			sauvegarder temporairement. Pour cela, le langage PHP met en place le tableau superglobal $_SESSION. Le terme superglobal 				signifie que le tabeau a une visibilité maximale dans les scripts. C'est à dire que l'on peut y faire référence de manière 				globale comme locale dans une fonction utilisateur sans avoir à le passer en paramètre. Le tableau $_SESSION peut-être indexé 			numériquement mais aussi associativement. En règle générale, on préfère la seconde afin de pouvoir donner des noms de variables 		de session clairs et porteurs de sens.

    
    }

	-> Methode destroy(){
    
    // Destruction de l'ensemble de la session
    
    
    
    }
    
    -> Methode isAuthenticated(){
    
    	// verifier si la clés correspondante à la session existe dans la table {
        
        	// si la session n'est pas vide{
            
            	renvoyer vrai 
            }
           
           renvoyer faux
        
        
        }
        
    -> Methode getEmail(){
    
    	// si il n'est pas authentifié{
        
        
        	renvoyer null
        
        }
        
        renvoyer email du tableau $_SESSION
    
    }
    
    
     -> Methode getFirstName(){
    
    	// si il n'est pas authentifié{
        
        
        	renvoyer null
        
        }
        
        renvoyer prenom du tableau $_SESSION
    
    }
    
    
         -> Methode getLastName(){
    
    	// si il n'est pas authentifié{
        
        
        	renvoyer null
        
        }
        
        renvoyer nom du tableau $_SESSION
    
    }
    
           -> Methode getFullName(){
    
    	// si il n'est pas authentifié{
        
        
        	renvoyer null
        
        }
        
         renvoyer prenom du tableau $_SESSION + nom du tableau $_SESSION
    
    }
    
         -> Methode getUserId(){
    
    	// si il n'est pas authentifié{
        
        
        	renvoyer null
        
        }
        
        renvoyer userId du tableau $_SESSION

    
    
    }


}





/**** application/classes/UserSessionFilter.class.php ****/


	class UserSessionFilter qui utilise l'interface InterceptingFilter{
    
    	-> methode run (............){
        
        retourne un tableau dans lequel on instancie la class userSession
        
        
        
        }

    }


/**** application/models/UserModel.class.php ****/


 créer une class UserModel {
 
 
 	-> Methode find(...){
    
    	// récupération de l'utilisateurs spécifié

    }
    
    
    
    -> Methode privé hashPassword(.......){
    
    	// Génération du sel, openssl_random_pseudo_bytes() va renvoyer n'importe quel type de caractères.
        // Or le chiffrement en blowfish nécessite un sel avec uniquement les caractères
        // a-z, A-Z ou 0-9.
         
        // On utilise donc bin2hex() pour convertir en une chaîne hexadécimale le résultat,
        // qu'on tronque ensuite à 22 caractères pour être sûr d'obtenir la taille
          
          //http://php.net/manual/fr/function.bin2hex.php
          
        puis on return les élément en parametre de la fonction 
        	
            crypt();
        
        http://devdocs.io/php/function.crypt
    
    
    
    
    }
    
    
    -> Methode signUp(.................................){
    
    	// On vérifie qu'il y a un utilisateur avec l'adresse e-mail spécifiée.
    
    
    	rquete sql filtrer par mail
        
        
        // on verifie si l'utilisateur existe déjà{
        
         	Parametrer un domaine d'execption avec un message indiquant que l'utilisateur à déjà un compte
        
              if(empty($user) == false)
        {
            throw new DomainException
            (
                "Il existe déjà un compte utilisateur avec cette adresse e-mail"
            );
        }
      
        
        requete sql INSERT INTO 
        
        
         // Hachage du mot de passe, le mot de passe en clair n'est JAMAIS 	enregistré et ne pourra JAMAIS être récupéré.
         
         
         // Insertion de l'utilisateur dans la base de données à l'aide de la méthode  executeSql() du fichier Database de la librairie
         
        // Ajout d'un message de notification qui s'affichera sur la page d'accueil.
         
    }
    
    
   -> Methode updateLoginTimestamp(...){
   
   		 // Mise à jour de la date de dernière connexion pour cet utilisateur.

   
   }
 
    
 
 
  	-> Methode findWithEmailPassword(... , ...){
    
    	// Récupération de l'utilisateur ayant l'email spécifié en argument.
        
        
        requete sql + filtre 
        
        
        
       // verifier que l'utilisateur existe et générer des domaine d'exception 
       
       si le resultat de la requete est vide {
       
        *** Mots clés : throw new DomainException ***
        
        exmple for free :)
        
        throw new DomainException
            (
                "Il n'y a pas de compte utilisateur associé à cette adresse email"
            );

       }
       
       
       // verifier que le mot de passe correspond bien à celui qui est stocké 
       
       si la methode verifyPassword (........) est egal à faux{
       
       paramétrer un domaine d'exception avec un message indiquant que le mot de pass est incorrect
       
       
       
       }
    
    }
    
    return les élément récuperer par la requête
 
 
 }
 
 
 
 /**** application/forms/UserForm.class.php ****/ 
 
 
 

/**** application/controllers/user/UserController.class.php ****/ 
 












































