
## Entītiju relāciju datu modelis (ER-diagramm)

Lai izveidotu datu bāzes shēmu vai datu modeli un izprastu veidojamās datu bāzes uzbūvi un pamatprincipus, tika izmantota ER diagramma (skat. Sistēmas ER diagram.). Tas sastāv no entītijām un relācijām un ļauj datus uztvert kā objektus un izprast to savstarpējo saistību. 
7.att. Sistēmas ER diagramma

•	Lietotājs – pirmais lietotāju tips, var meklēt un skatīties ziņas.

•	Redaktors – otrais lietotāju tips, var moderēt un rediģēt lietotājas rakstus un ziņas.

•	Administratos – trešais lietotāju tips. Var darīt viss, kas pieējams citiem lietotājiem, bet arī moderēt pašus lietotājus (pirmo un otro lietotāju tipu). “Appoints” nozīme ka administrators var pievienot vai nolīgt redaktorus.

•	Ziņas – Entitīja kas redaktors var izveidot un rediģēt.

•	Raksts – Entitīja kas lietotājs var izveidot un papildināt, un redaktors var moderēt pirms publicēšānas. 

•	Profils – Entitīja kas piedēr katram lietotājām, un to var rediģēt pēc dizaina, un pēc lietotāja datiem kas iespējams tikai administratoram.

Manā Sistēmas ER diagramma starp klases objektiem ir attiecības viens pret daudziem vai daudzi pret daudziem. 

•	Viens pret daudziem attiecības nozīmē, ka vienam objektam var būt saistīti vairāki citi objekti, bet citam objektam var būt saistīts tikai viens objekts. 

•	Daudzi pret daudziem attiecības nozīmē, ka dažiem objektiem var būt saistīti vairāki citi objekti, un otrādi - citiem objektiem var būt saistīti arī vairāki citi objekti. 

### Manā diagrammā objekti ir savienoti šādi:

•	Tabulā “Lietotājs” – attēloti individuāli sistēmas lietotāji, katram lietotājam ir savs sēgvards, e-pasts, parole un statuss. “Users” attiecas pret “Raksts” ka daudz prēt daudziem, jo daudzie lietotāji var rakstīt daudz rakstus. Arī attiecība starp “Lietotājs” un “Ziņas” ir daudz pret daudziem, jo daudzie lietotāji var lasīt daudz ziņas.

•	Tabulā “Ziņas” – atsevišķa tabulā, tos var veidot “Redaktors” kas ir lietotāju tips. ”Ziņas” pret “Redaktors” attiecas kā “viens pret daudziem. Daudzas ziņas var veidot dažādi “Redaktori”. Daduzas ziņas var lasīt daudz lietotājus.

•	Tabula “Raksts” – atsevišķa tabula. Rakstus var veidot “Lietotājs”. Viens lietotājs var veidot daudzus rakstus. Viens “Administrators” var moderēt dažādus rakstus. “Administrators” ir lietotāju tips.
