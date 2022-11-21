<!DOCTYPE html>
<html xml:lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hola Mon</title>
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }
        </style>
    </head>
    <body>
        <section>
            <h3>Enunciat de l'exàmen</h3>
            <p>A partir de l'array d'albums obtingut de la pàgina web (https://www.allmusic.com/)</p>
            <ol>
                <li>
                    Fes la classe \App\Objectes\Album:
                    <ul>
                        <li>Amb les propietats que marca l'index de l'array
                            (totes són String, llevat del year que és int)</li>
                        <li>Amb el constructor de php8</li>
                        <li>Documentada amb phpDocBlocs </li>
                        <li>En el namespace App\Objectes</li>
                        <li>Amb els getters i setters de totes les propietats (els setter són mètodes encadenats)</li>
                        <li>Amb el metode __toString() que mostra un div amb tots
                            les propietas tal com està en la prova</li>
                    </ul>
                </li>

                <li>
                    A partir de la pàgina login.html:
                    <ul>
                        <li>Un usuari quedarà logejat i podrà ingresar en qualsevol pàgina posterior
                            si el password conicideix en qualsevol dels titles de l'album
                            (en minuscules i despres de pasar per la funció eliminar_tildes()).</li>
                        <li>Guarda un array amb tots els albums en una variable de sessió
                            (albums) en la pàgina login.php</li>
                        <li>A partir d'ací cap pàgina es podrà visitar sense estar loguejat</li>
                        <li>Se le redirixirà a la pàgina main.php i se li mostrarà:
                            <ul>
                                <li>Un nav amb el nom de l'usuari, uns enllaços per a fer logout i
                                    un altre per a participar en un concurs (header.php)</li>
                                <li>El resultat del mètode __toString de l'album triat</li>
                            </ul>
                        </li>
                        <li>Tant si el login ha sigut correcte com si no es guardarà
                            un registre en un fitxer accesos.log (warning en cas de que no e info en cas de que si)</li>
                        <li>Utilitza un logFactory en App\Util</li>
                        <li>Si el login és incorrecte se le redixirà a la pàgina login.html</li>
                    </ul>
                </li>
                <li>
                    A partir de la pàgina autorizacion.php:
                    <ul>
                        <li>Per a poder validar el formulari hem de comprovar
                            <ul>
                                <li>El nom complet ha d'estar i tindre al meys dos paraules</li>
                                <li>L'email siga vàlid</li>
                                <li>L'any de naixement siga entre 1970 i 2000</li>
                                <li>Estiga marcat el consentiment de l'usuari</li>
                                <li>Una foto de l'usuari que s'ha de guardar en la
                                    carpeta fotos amb el nick de l'usuari</li>
                            </ul>
                        </li>
                        <li>S'ha d'utilitzar l'exempció FormInvalidException que posarem en el nom d'espai
                            App\Exceptions</li>
                        <li>El formulari es tracta en la mateixa pàgina</li>
                        <li>Els resultats anteriors han d'eixir si hi ha alguna exempció
                            al costat del missatge pertinent</li>
                        <li>Si el formulari és correcte passarem a la pàgina concurso.php</li>
                    </ul>
                </li>
                <li>
                    A partir de concurso.php:
                    <ul>
                        <li>Fes les options d'album a partir de l'array d'albums</li>
                        <li>L'enquesta es pot omplir tres vegades</li>
                        <li>Quan s'ha arribat a les tres vegades o l'usuari polsa finalitzar l'enquesta</li>
                            <ul>
                                <li>Se li mostrarà a l'usuari els albums que haja triat</li>
                            </ul>
                    </ul>
                </li>
            </ol>
        </section>

        <?php $album = include_once('albums.php');
              dd($album);
        ?>
    </body>
</html>
