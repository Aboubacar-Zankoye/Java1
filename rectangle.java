public  class  Rectangle  étend la  figure {
     
           // Instances d'attributs
             double largeur privée ;
          // Attributs classe ou Attributs static

            // Constructeur => méthode concrète d'instance
               rectangle public ( double  longueur , double  largeur ) {
                        
                          ça . longueur = longueur;
                        
                       
                          ça . largeur = largeur;
                        
              }
               
              // Getters methodes instances concretes
           
              public  double  getLargeur () {
                retourner  cela . largeur;
             }
             // setters methodes instances concrets
              public  void  setLargeur ( double  largeur ) {
                 ça . largeur = largeur;
              }
             
              // Méthodes Getters Setters pour les bétons statiques
            

              // metiers => UC
              // Redéfinition
                 double  demiPerimetre public () {
                     retourner  cela . longueur +  this . largeur;
                }
              
                 double  surface publique () {
                  retourner  cela . longueur *  this . largeur;
                }
                 double  diagonale publique () {
                  retourner  Math . sqrt ( Math . pow ( this . longueur, 2 ) + Math . pow ( this . largeur, 2 ));
                }
              
  }