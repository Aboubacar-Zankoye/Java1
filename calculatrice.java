import  java.util.Scanner ;

 calculatrice de classe  publique {
    public  static  void  main ( String [] args ) {
        int nbre1;
        int nbre2;
        int resultat = 0 ;
        char op;

        Scanner saisir =  nouveau  Scanner ( System . In );
        Système . dehors . println ( " Veuillez saisir la première valeur " );
        nbre1 = saisir . nextInt ();
        Système . dehors . println ( " Veuillez saisir la deuxième valeur " );
        nbre2 = saisir . nextInt ();
        Système . dehors . println ( " Veuillez saisir un opérateur " );
        op = saisir . suivant () . charAt ( 0 );

        commutateur (op) {
            cas  ' + ' :
                resultat = nbre1 + nbre2;
                casser ;
            cas  ' - ' :
                resultat = nbre1 - nbre2;
                casser ;
            cas  ' * ' :
                RESULTAT = nbre1 * nbre2;
                casser ;
            cas  ' / ' :
            si (nbre2 ! = 0 ) {
                resultat = nbre1 / nbre2;   
            } else {
                Système . dehors . println ( " Veuillez saisir un deuxieme nombre correct " );
            }

                casser ;
            par défaut :
            Système . dehors . println ( " Veuillez saisir un opérateur correct " );
                casser ;
        }
        Système . dehors . println ( " le résultat est: " + resultat);
    }
}