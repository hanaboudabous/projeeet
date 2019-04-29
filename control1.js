function verif1(ch)
{
var test=true;
	for (i = 0;i < ch.length ; ++i)
	{
		if((ch.charAt(i) < "a" || ch.charAt(i) > "z") && (ch.charAt(i) < "A" || ch.charAt(i) > "Z")&& ch.charAt(i)!=" ")
		{
			test=false;
		}
	}
   return test;
}

function verif(){
	if(f.id.value==""){
 alert('Vous devez saisir id du livreur!');
   return false;
   }

   if(f.nom.value==""){
 alert('Vous devez saisir le nom!');
   return false;
   }
   if(verif1(f.nom.value)==false)
{         alert("Le nom doit etre composé de lettres et d'espaces !");
          return false;
   }
    if(f.prenom.value==""){
 alert('Vous devez saisir le prenom!');
   return false;
   }
   if(verif1(f.prenom.value)==false)
{         alert("Le prenom doit etre composé de lettres et d'espaces !");
          return false;
   }
    if(f.datedenaissance.value==""){
 alert('Vous devez saisir la date de naissance!');
   return false;
   }
    if(f.nbjtravail.value==""){
 alert('Vous devez saisir le nombre des jours de travail!');
   return false;
   }
 
      if(isNaN(f.nbjtravail.value))
{      alert("Le nbjtravail doit etre numerique!");
       return false;
   }
   if(f.telephone.value==""){
 alert('Vous devez saisir votre telephone!');
   return false;
   }
   if(isNaN(f.telephone.value))
{      alert("Le telephone doit etre numerique!");
       return false;
   }
      if(f.telephone.value.length!=8)
{      alert("Le telephone doit etre composé de 8 chiffres!");
       return false;
   }
}