<?php
// bonjour
*diedhiou
fatoumata

echo "bonjour on va à l'école <br /> bonsoir ";
$age=50;
$nom="faye";
$prenom="mahatma";
$agereel=32.80;
$question=TRUE;
$match=NULL;
echo $age." ".$question;
echo $match;
echo "<br />Bonjour Moussa a ".$age."ans ";
echo "<br /> Salut ".$nom." tu as fait ".$agereel."km";


$noteMathematique=15;
$noteFrancais=12;
$resultat=0;
$resultat= $noteMathematique + $noteFrancais ;
echo "<br /> Maths+Fr=". $resultat;

$noteMathematique1=18;
$noteFrancais1=19;
$resultat1=0;
$resultat1= $noteMathematique1 / $noteFrancais1 ;
echo "<br /> Maths-Fr=". $resultat1;

$noteMathematique2=12;
$noteFrancais2=15;
$resultat2=0;
$resultat2= $noteMathematique2 % $noteFrancais2 ;
echo "<br /> Maths % Fr=" . $resultat2;
echo "<br />" .$noteFrancais."+". $noteMathematique."=".$resultat;

$moyenne=12;
$age=19;
$password=13;
$voiture="jakarta";
$age2=10;

if($voiture=="clando") 
{
	echo "clando";
}
else if ($voiture=="N.N")
    {
	echo "N.N";
    }
else if($voiture=="Moto")	
{
	echo "Moto";
}
else if ($voiture=="Range")
{
	echo "Range";
}
else if($voiture=="Car")
{
	echo "Car";
}
else if($voiture=="Bus")
{
	echo "Bus";
}
else if($voiture=="jakarta")
{
	echo "jakarta ";
}
else {
	echo "Desole ";
}

$age2=10;
$noteSvt=2;
Switch($age2)
{
	case 1:
	echo" vous avez 1ans";
    break;
	case 2:
	echo"vous avez 2ans";
	break;
	case 3:
	echo"vous avez 3ans";
	break;
	case 4:
	echo"vous avez 4ans";
    break;
	case 5:
	echo"vous avez 5ans";
	break;
	case 6:
	echo"vous avez 6ans";
	break;
	case 7:
	echo"vous avez 7ans";
    break;
	case 8:
	echo"vous avez 8ans";
	break;
	case 9:
	echo"vous avez 9ans";
	break;
	case 10:
	echo "vous avez 10 ans<br /> ";
	break;
	
	
	default:
    echo " desole,pas de resultat ";
	break;
	}
while($noteSvt<10)
   {
	echo " Annee prochaine <br /> ";
	$noteSvt += 1;
}
$noteSvt=2;
while($noteSvt<10)
   {
	echo $noteSvt. ",Desole Annee prochaine <br /> ";
	$noteSvt += 1;
}
echo "Felicitation";
*/
$prenom[0]="saliou <br />";
$prenoms[1]="moussa";
$nom[2]="diop";
//echo $prenom[0];
/*$etudiant=array("saliou","diop",18);
foreach ($etudiant as $ism)
{
echo $ism."<br />";
}
$etudiants=array("prenom" => "saliou" , "classe" => "liage", "quartier" => "foire");
foreach($etudiants as $isms => $information)
{
	echo $etudiants." ".$information;
}
$noteLiage=7;
do{
	echo " Anne prochaine <br />"; $noteLiage +=1;
}while($noteLiage<10)
	{
	  echo"Anne prochaine <br />";
	  $noteLiage +=1; 
}
$noteLiages=7;
for($noteLiage=3;$noteLiages<10;$noteLiages ++)
{
	echo "Annee prochaine <br />";
}
function controlecontinu ($noteAttendue)
{
	$result=$noteAttendue/2;
	echo $resulat;
}
$programmation=27;
controlecontinu($programmation);

$phrase="Modou va bien";
$Compteur=strlen( $phrase);
echo $Compteur;

$phrase="Modou va bien";
$Compteur2=str_shuffle( $phrase);
echo $Compteur;

echo" <br /> <br />";
$jour=date('d');
echo $jour;

echo" <br /> <br />";
$heure=date('m');
echo $mois;

echo" <br /> <br />";
$annee=date('Y');
echo $annee;

echo" <br /> <br />";
$heure=date('h');
echo $heure;

echo" <br /> <br />";
$minute=date('i');
echo $minute;

echo" <br /> <br />";
$seconde=date('s');
echo $seconde;

$datecomplete=date('d-m-Y');
echo $datecomplete;
*/
?>

<a href="transmission.php?event=mariage&amp;region=dakar"> mariage a dakar </a>
