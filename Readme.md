1. Kodėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?

Kadangi faile kuriame yra ši funkcija nėra taikoma "strict_types" direktyva, vykdant šią funkciją yra pakeičiami argumentų "data types" iš float ir string į integers. Todėl sudedami skaičiai 3, 2 (panaikinta dešimtainė dalis(floor)), 1 (iš string paverstas į integer). Šių skaičių suma yra 6.

2. Kas ir kodėl nutiko bandant kviesti Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)?

Gautas Fatal error. Šiame faile (kur yra deklaruota funkcija) buvo taikoma strict_types direktyva - todėl kai vykdant šią funkciją, kuriai galima perduoti tik argumentus kurie yra integeriai (nurodyta deklaruojant funkciją - int ...\$numbers), buvo perduoti argumentai 3, 2.2, '1' - buvo gautos 2 TypeError klaidos - pirmoji dėl argumento 2.2 - tai yra float tipo kintamasis, o ne integer, antroji dėl '1' - tai yra string tipo kintamasis, o ne integer. Kadangi taikoma strict_types direktyva turi būti perduoti būtent tokie argumentai kurie nurodyti deklaruojant funkciją - nėra vykdoma "implicit casting".
