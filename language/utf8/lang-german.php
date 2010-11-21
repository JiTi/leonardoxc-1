<?php
/**************************************************************************/
/*  German language translation by                                        */
/*  Torsen (www.para365.com                                         */
/**************************************************************************/
/************************************************************************/
/* Leonardo: Gliding XC Server					        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr                                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/*                                                                      */
/* If you need to use double quotes (") remember to add a backslash (\),*/
/* so your entry will look like: This is \"double quoted\" text.        */
/* And, if you use HTML code, please double check it.                   */
/************************************************************************/

function setMonths() {
	global  $monthList,	$monthListShort, $weekdaysList;
	$monthList=array('Januar','Februar','Maerz','April','Mai','Juni',
					'Juli','August','September','Oktober','November','Dezember');
	$monthListShort=array('JAN','FEB','MRZ','APR','MAI','JUN','JUL','AUG','SEP','OKT','NOV','DEZ');
	$weekdaysList=array('Mo','Di','Mi','Do','Fr','Sa','So') ;
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Freier Flug");
define("_FREE_TRIANGLE","Flaches Dreieck");
define("_FAI_TRIANGLE","FAI Dreieck");

define("_SUBMIT_FLIGHT_ERROR","Bei der Übermittlung des Fluges ist ein Fehler aufgetreten");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pilot");
define("_NUMBER_OF_FLIGHTS","Anzahl Flüge");
define("_BEST_DISTANCE","Beste Distanz");
define("_MEAN_KM","Durchschnittliche # Kilometer pro Flug");
define("_TOTAL_KM","Summe Flugkilometer");
define("_TOTAL_DURATION_OF_FLIGHTS","Summe Flugstunden");
define("_MEAN_DURATION","Durschnittliche Flugstunden");
define("_TOTAL_OLC_KM","Summe XC Kilometer");
define("_TOTAL_OLC_SCORE","Summe Punkte");
define("_BEST_OLC_SCORE","Beste XC Punkte");
define("_From","von");

// list_flights()
define("_DURATION_HOURS_MIN","Dauer (h:m)");
define("_SHOW","Anzeigen");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","Der Flug wird in 1-2 Minuten aktiviert. ");
define("_TRY_AGAIN","Bitte versuche es später noch einmal");
define("_SEASON","Saison");
define("_TAKEOFF_LOCATION","Startplatz");
define("_TAKEOFF_TIME","Startzeitpunkt");
define("_LANDING_LOCATION","Landeplatz");
define("_LANDING_TIME","Landezeitpunkt");
define("_OPEN_DISTANCE","Luftlinie");
define("_MAX_DISTANCE","Maximale Distanz");
define("_OLC_SCORE_TYPE","XC Punkte Typ");
define("_OLC_DISTANCE","XC Distanz");
define("_OLC_SCORING","DHV-XC (International) Punkte");
define("_MAX_SPEED","Maximale Geschwindigkeit");
define("_MAX_VARIO","Maximales Steigen");
define("_MEAN_SPEED","Durchschnittsgeschw.(Luft)");
define("_MEAN_SPEED1","Durchschnitts km/h");

define("_MIN_VARIO","Maximales Sinken");
define("_MAX_ALTITUDE","Grösste Höhe (über NN)");
define("_TAKEOFF_ALTITUDE","Start Höhe (über NN)");
define("_MIN_ALTITUDE","Minimale Höhe (ner NN)");
define("_ALTITUDE_GAIN","Höhen Zugewinn");
define("_FLIGHT_FILE","Flug Datei");
define("_COMMENTS","Kommentare");
define("_RELEVANT_PAGE","relevante Webseiten URL");
define("_GLIDER","Hersteller/Gerät");
define("_PHOTOS","Fotos");
define("_MORE_INFO","Extras");
define("_UPDATE_DATA","Daten aktualisieren");
define("_UPDATE_MAP","Karte aktualisieren");
define("_UPDATE_3D_MAP","3D Karte aktualisieren");
define("_UPDATE_GRAPHS","Charts aktualisieren");
define("_UPDATE_SCORE","Punkte aktualisieren");

define("_TAKEOFF_COORDS","Start Koordinaten:");
define("_NO_KNOWN_LOCATIONS","Es gibt keine bekannten Fluggebiete!");
define("_FLYING_AREA_INFO","Fluggebiets Info");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Leonardo XC");
define("_RETURN_TO_TOP","Zurück nach oben");
// list flight
define("_PILOT_FLIGHTS","Flüge des Piloten");

define("_DATE_SORT","Datum");
define("_PILOT_NAME","Name des Piloten");
define("_TAKEOFF","Startplatz");
define("_DURATION","Dauer");
define("_LINEAR_DISTANCE","Luftlinie");
define("_OLC_KM","XC Kilometer");
define("_OLC_SCORE","XC Punkte");
define("_DATE_ADDED","Letzte Übermittlungen");

define("_SORTED_BY","Sortiert nach:");
define("_ALL_YEARS","Alle Jahre");
define("_SELECT_YEAR_MONTH","Jahr (und Monat) auswählen");
define("_ALL","Alle");
define("_ALL_PILOTS","Alle Piloten anzeigen");
define("_ALL_TAKEOFFS","Alle Starts anzeigen");
define("_ALL_THE_YEAR","Alle Jahre anzeigen");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Du hast keine Datei angegeben");
define("_NO_SUCH_FILE","Die angegebene Datei kann nicht gefunden werden");
define("_FILE_DOESNT_END_IN_IGC","Die angegebene Datei hat keine .igc Endung");
define("_THIS_ISNT_A_VALID_IGC_FILE","Keine gültige .igc Datei");
define("_THERE_IS_SAME_DATE_FLIGHT","Eine Datei mit dem selben Datum und Uhrzeit existiert bereits");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Wenn Du diese Datei ersetzen möchtest, sollte Du zuerst");
define("_OUTSIDE_SUBMIT_WINDOW","14 Tage Einreichfrist bereits abgelaufen.");
define("_DELETE_THE_OLD_ONE","die Alte löschen");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Eine Datei mit dem selben Nahmen exisitiert bereits");
define("_CHANGE_THE_FILENAME","Sollte dieser Flug unterschiedlich sein, dann ändere bitte den Dateinamen und versuche es noch einmal");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","Dein Flug wurde eingereicht");
define("_PRESS_HERE_TO_VIEW_IT","Zum ansehen hier klicken");
define("_WILL_BE_ACTIVATED_SOON","(er wird in 1-2 Minuten aktiviert)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Mehrere Flüge einreichen");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Nur Flüge ab 10.10.2006 werden in der Wertung angezeigt.<br>Flug Einreichfrist: 14 Tage.<br>Es werden nur IGC Datein in den ZIP verarbeitet");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","Übertrage die ZIP Datei<br>die die Flüge beinhaltet");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","Zum Einreichen der Flüge hier klicken");
define("_DHV_DISCLAIMER","Mit der Einreichung des Fluges bestätige ich, dass ich alle luftrechtlichen Bestimmungen eingehalten habe. Falls Freigaben für bestimmte Lufträume erforderlich waren, habe ich diese bei der zuständigen Stelle eingeholt.");
define("_FILE_DOESNT_END_IN_ZIP","Die angebene Datei hat keine .zip Endung");
define("_ADDING_FILE","Datei wird übertragen");
define("_ADDED_SUCESSFULLY","Übertragung erfolgreich");
define("_PROBLEM","Problem");
define("_TOTAL","Ingesamt wurden ");
define("_IGC_FILES_PROCESSED","Flüge wurden verarbeitet");
define("_IGC_FILES_SUBMITED","Flüge wurden übertragen");

// info
define("_DEVELOPMENT","Entwicklung");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","Projekt Webseite");
define("_VERSION","Version");
define("_MAP_CREATION","Karten Erstellung");
define("_PROJECT_INFO","Projekt Info");
define("_PROJECT_HELP","Hilfe");
define("_PROJECT_NEWS","News");
define("_PROJECT_RULES","Ausschreibung 2007");

// menu bar
define("_MENU_MAIN_MENU","Piloten");
define("_MENU_DATE","Datum auswählen");
define("_MENU_COUNTRY","Land auswählen");
define("_MENU_XCLEAGUE","Wertung");
define("_MENU_ADMIN","Admin");

define("_MENU_COMPETITION_LEAGUE","Wertung - Alle Kategorien");
define("_MENU_OLC","DHV-XC (International)");
define("_MENU_OPEN_DISTANCE","Offene Distanz");
define("_MENU_DURATION","Dauer");
define("_MENU_ALL_FLIGHTS","Alle Flüge anzeigen");
define("_MENU_FLIGHTS","Flüge");
define("_MENU_TAKEOFFS","Startplatz");
define("_MENU_FILTER","Filter");
define("_MENU_MY_FLIGHTS","Meine Flüge");
define("_MENU_MY_PROFILE","Mein Profil");
define("_MENU_MY_STATS","Meine Statistik");
define("_MENU_MY_SETTINGS","Meine Einstellungen");
define("_MENU_SUBMIT_FLIGHT","Flüge einreichen");
define("_MENU_SUBMIT_FROM_ZIP","Flüge mittels ZIP einreichen");
define("_MENU_SHOW_PILOTS","Statistik");
define("_MENU_SHOW_LAST_ADDED","Letzte Einreichungen anzeigen");

define("_SELECT_YEAR","Jahr auswählen");
define("_SELECT_MONTH","Monat auswählen");
define("_ALL_COUNTRIES","Alle Länder anzeigen");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","ALLE ZEITEN");
//already defined define("_NUMBER_OF_FLIGHTS","Anzahl Flüge");
define("_TOTAL_DISTANCE","Gesamt Distanz");
define("_TOTAL_DURATION","Gesamt Flugdauer");
define("_BEST_OPEN_DISTANCE","Beste Distanz");
define("_TOTAL_OLC_DISTANCE","Gesamt DHV-XC (International) Distanz");
//already defined define("_TOTAL_OLC_SCORE","Gesamt DHV-XC (International) Punkte");
//already defined define("_BEST_OLC_SCORE","Best DHV-XC (International) score");
//already defined define("_MEAN_DURATION","Durchschnittliche Flugdauer");
define("_MEAN_DISTANCE","Durchschnittliche Distanz");
define("_PILOT_STATISTICS_SORT_BY","Piloten - sortiert nach");
define("_CATEGORY_FLIGHT_NUMBER","Kategorie 'FastJoe' - Anzahl der Flüge");
define("_CATEGORY_TOTAL_DURATION","Kategorie 'DURACELL' - Gesamt Flugdauer aller Flüge");
define("_CATEGORY_OPEN_DISTANCE","Kategorie 'Offene Distanz'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","Keine Piloten vorhanden !");


//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","Der Flug wurde gelöscht");
define("_RETURN","Zurück");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","Vorsicht - Möchtest Du den Flug wirklich löschen ?");
define("_THE_DATE","Datum ");
define("_YES","JA");
define("_NO","NEIN");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Rank");
define("_N_BEST_FLIGHTS"," beste Flüge");
define("_OLC","DHV-XC (International)");
define("_OLC_TOTAL_SCORE","DHV-XC Gesamtpunkte");
define("_KILOMETERS","Kilometer");
define("_TOTAL_ALTITUDE_GAIN","Gesamt Höhengewinn");
//already defined define("_TOTAL_KM","Gesamt Kilometer");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","gleich");
define("_IS_NOT","ungleich");
define("_OR","oder");
define("_AND","und");
define("_FILTER_PAGE_TITLE","Flüge Filtern");
define("_RETURN_TO_FLIGHTS","Zurück zu den Flügen");
define("_THE_FILTER_IS_ACTIVE","Der Filter ist aktiv");
define("_THE_FILTER_IS_INACTIVE","Der Filter ist inaktiv");
define("_SELECT_DATE","Datum auswählen");
define("_SHOW_FLIGHTS","Flüge anzeigen");
define("_ALL2","ALLE");
define("_WITH_YEAR","mit Jahr");
define("_MONTH","Monat");
define("_YEAR","Jahr");
define("_FROM","Von");
define("_from","von");
define("_TO","bis");
define("_SELECT_PILOT","Pilot auswählen");
define("_THE_PILOT","Der Pilot");
define("_THE_TAKEOFF","Der Startplatz");
define("_SELECT_TAKEOFF","Start auswählen");
define("_SELECT_CLUB","Verein auswählen");
define("_THE_CLUB","Verein");

define("_THE_COUNTRY","Das Land");
define("_COUNTRY","Land*");
define("_SELECT_COUNTRY","Land auswählen");
define("_OTHER_FILTERS","Andere Filter");
define("_LINEAR_DISTANCE_SHOULD_BE","Die Luftlinie sollte ... sein");
define("_OLC_DISTANCE_SHOULD_BE","Die DHV-XC (International) Distanz sollte ... sein");
define("_OLC_SCORE_SHOULD_BE","Die DHV-XC (International) Punktzahl sollte ... sein");
define("_DURATION_SHOULD_BE","Die Flugdauer sollte ... sein");
define("_ACTIVATE_CHANGE_FILTER","Filter Aktivieren / Ändern");
define("_DEACTIVATE_FILTER","Filter deaktivieren");
define("_HOURS","Stunden");
define("_MINUTES","Minuten");
define("_Today_is","Heute ist");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Flug einreichen");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","Nur Flüge ab 10.10.2006 werden in der Wertung angezeigt.<br>Flug Einreichfrist: 14 Tage.<br>(nur das IGC File wird benötigt)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","Übertrage das<br>IGC File des Fluges");
define("_NOTE_TAKEOFF_NAME","Bitte beachte den Namen des Startplatzes /-gebietes und das Land");
define("_COMMENTS_FOR_THE_FLIGHT","Kommentare zum Flug");
define("_PHOTO","Foto");
define("_PHOTOS_GUIDELINES","Fotos sollten im jpg Format und kleiner als ");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Hier klicken um den Flug einzureichen");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","Möchtest Du mehrere Flüge auf einmal einreichen ?");
define("_PRESS_HERE","Hier klicken");

define("_IS_PRIVATE","Nicht öffentlich machen");
define("_MAKE_THIS_FLIGHT_PRIVATE","Nicht öffentlich machen");
define("_INSERT_FLIGHT_AS_USER_ID","Flug als User ID einfügen");
define("_FLIGHT_IS_PRIVATE","Dieser Flug ist nicht öffentlich");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Flug Daten ändern");
define("_IGC_FILE_OF_THE_FLIGHT","IGC Datei des Fluges");
define("_DELETE_PHOTO","Löschen");
define("_NEW_PHOTO","neues Foto");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","Um die Flug Daten zu ändern bitte hier klicken");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","Die Änderungen wurden berücksichtigt");
define("_RETURN_TO_FLIGHT","Zurück zum Flug");

//--------------------------------------------
// olc
//--------------------------------------------
//already defined define("_RETURN_TO_FLIGHT","Zurück zum Flug");
define("_READY_FOR_SUBMISSION","Fertig zur Übertragung");
define("_SUBMIT_TO_OLC","Übertragung zum FAI");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","Der Flug wurde erfolgreich zum FAI übertragen");
define("_THE_OLC_REFERENCE_NUMBER_IS","Die FAI Referenz Nummer ist");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","Es ist ein Problem bei der Übertragung zum FAI augetreten");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Bitte schaue nach unten für die mögliche Ursache des Problems");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","Der Flug wurde erfolgreich vom FAI gelöscht");
define("_FLIGHT_NOT_SCORED","Der Flug hat keine DHV-XC (International) Punktzahl und kann daher nicht eingereicht werden");
define("_TOO_LATE","Der Abgabetermin ist überschritten, daher kann der Flug nicht eingereicht werden");
define("_CANNOT_BE_SUBMITTED","Der Abgabetermin für diesen Flug ist überschritten");
define("_NO_PILOT_OLC_DATA","<p><strong>Keine FAI Daten für diesen Piloten</strong><br>
  <br>
<b>Was ist OLC / Wofür sind die entsprechenden Felder ?</b><br><br>
	Für eine gültige Übertragung an FAI muss der Pilot im FAI System registriert sein.</p>
<p> Dies kannst Du auf dieser<a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
   Webseite</a> tun. Dort must Du Dein Land auswählen und dann 'Contest Registration'<br>
</p>
<p>Wenn die Registrierung abgeschlossen ist, musst Du auf 'Pilot Profile'->'Edit FAI info' gehen um dort Deine Informationen EXCAKT so einzugeben wie bei der FAI Registrierung.
</p>
<ul>
	<li><div align=left>Vorname</div>
	<li><div align=left>Nachname</div>
	<li><div align=left>Geburtsdatum</div>
	<li> <div align=left>Dein Rufsignal</div>
	<li><div align=left>Wenn Du bereits Flüge beim FAI eingereicht hast, dann hier die 4 Buchstaben die Du für die IGC Dateien verwendest</div>
</ul>");
define("_OLC_MAP","Karte");
define("_OLC_BARO","Luftdruck");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Piloten Profil");
define("_back_to_flights","zurück zu den Flügen");
define("_pilot_stats","Piloten Status");
define("_edit_profile","Profil bearbeiten");
define("_flights_stats","Flug Statistiken");
define("_View_Profile","Profil anzeigen");

define("_Personal_Stuff","Persönliche Angaben - bitte nur echte Namen verwenden.<br>Anmeldungen mit Nicknames werden vom Administrator gelöscht.");
define("_First_Name"," Vorname*");
define("_Last_Name","Nachname*");
define("_Birthdate","Geburtstag*");
define("_dd_mm_yy","jjjj-mm-tt");
define("_Sign","Rufsignal");
define("_Sponsor","Sponsor");

define("_pilot_email","Email Adresse");
define("_pilot_password","Kennwort");

define("_hidden","************");
define("_Club","Verein");
define("_Select_CLub","Verein auswählen");
define("_Select_Club","Verein auswählen");
define("_Close_window","Schliessen");


define("_Marital_Status","Familienstand");
define("_Occupation","Beruf");
define("_Web_Page","Webseite");
define("_N_A","N/A");
define("_Other_Interests","Andere Interessen");
define("_Photo","Foto");

define("_Flying_Stuff","Fliegerische Angaben");
define("_note_place_and_date","falls zutreffend bitte Ort und Datum eintragen");
define("_Flying_Since","Fliegen seit");
define("_Pilot_Licence","Piloten Lizenz");
define("_Paragliding_training","Paragliding Training");
define("_Favorite_Location","Lieblings Fluggebiet");
define("_Usual_Location","Häufigstes Fluggebiet");
define("_Best_Flying_Memory","Bester Flugmoment");
define("_Worst_Flying_Memory","Schlimmster Flugmoment");
define("_Personal_Distance_Record","Persönlicher Streckenrekord");
define("_Personal_Height_Record","Persönlicher Höhen Rekord");
define("_Hours_Flown","Anzahl Flugstunden");
define("_Hours_Per_Year","Flugstunden pro Jahr");

define("_Equipment_Stuff","Angaben zur Ausrüstung");
define("_Glider","Hersteller/Gerät");
define("_Harness","Gurtzeug");
define("_Reserve_chute","Rettungsschirm");
define("_compulsory_entries","Beachte bitte das Felder, die mit einem * gekennzeichnet sind, Pflichteingaben sind.");

define("_Camera","Kamera");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Helm");
define("_Camcorder","Camcorder");

define("_Manouveur_Stuff","Flugfiguren Angaben");
define("_note_max_descent_rate", "falls gemessen, max erreichtes Sinken");
define("_Spiral", "Spirale");
define("_Bline", "B-Stall");
define("_Full_Stall", "Full Stall");
define("_Other_Manouveurs_Acro", "andere Acro Figuren");
define("_Sat", "SAT");
define("_Asymmetric_Spiral", "Asymmetrische Spirale");
define("_Spin", "Spin");

define("_General_Stuff","Allgemeine Angaben");
define("_Favorite_Singer","Lieblingssänger");
define("_Favorite_Movie","Lieblingsfilm");
define("_Favorite_Internet_Site","Lieblings<br>Internet Seite");
define("_Favorite_Book","Lieblingsbuch");
define("_Favorite_Actor","Lieblingsschauspieler");


//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Neues Foto hochladen oder bisheriges ersetzen");
define("_Delete_Photo","Foto löschen");
define("_Your_profile_has_been_updated","Dein Profil wurde aktualisiert");
define("_Submit_Change_Data","Daten übertragen - aktualisieren");


//--------------------------------------------
// Added by Martin Jursa, 26.04.2007 for pilot_profile and pilot_profile_edit
//--------------------------------------------
define('_Sex', 'Geschlecht');
define('_Login_Stuff', 'Login-Daten ändern');
define('_PASSWORD_CONFIRMATION', 'Bestätigung des Kennwortes');
define('_EnterPasswordOnlyToChange', 'Kennwort hier nur eingeben, wenn es geändert werden soll:');

define('_PwdAndConfDontMatch', 'Kennwort und Bestätigung stimmen nicht überein.');
define('_PwdTooShort', 'Das Kennwort ist zu kurz. Es muss mindestens $passwordMinLength Zeichen lang sein.');
define('_PwdConfEmpty', 'Das Kennwort wurde nicht bestätigt.');
define('_PwdChanged', 'Das Kennwort wurde geändert.');
define('_PwdNotChanged', 'Das Kennwort wurde NICHT geändert.');
define('_PwdChangeProblem', 'Es ist ein Problem beim Ändern des Kennwortes aufgetreten.');

define('_EmailEmpty', 'Die Email Adresse darf nicht leer sein.');
define('_EmailInvalid', 'Die Email Adresse ist ungültig.');
define('_EmailSaved', 'Die Email Adresse wurde gespeichert');
define('_EmailNotSaved', 'Die Email Adresse wurde nicht gespeichert.');
define('_EmailSaveProblem', 'Es ist ein Problem beim Speichern der Email Adresse aufgetreten.');

// End 26.04.2007



//--------------------------------------------
// pilot_ïlc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","FAI Info anpassen");
define("_OLC_information","FAI Information");
define("_callsign","Rufsignal");
define("_filename_suffix","Dateikennung");
define("_OLC_Pilot_Info","FAI Piloten Info");
define("_OLC_EXPLAINED","<b>Was ist FAI / Wofür sind die entsprechenden Felder ?</b><br><br>
	Für eine gültige Übertragung an FAI muss der Pilot im FAI System registriert sein.</p>
<p> Dies kannst Du auf dieser<a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
   Webseite</a> tun. Dort must Du Dein Land auswählen und dann 'Contest Registration'<br>
</p>
<p>Wenn die Registrierung abgeschlossen ist, musst Du auf 'Pilot Profile'->'Edit FAI info' gehen um dort Deine Informationen EXACKT so einzugeben wie bei der FAI Registrierung.
</p>
<ul>
	<li><div align=left>Vorname</div>
	<li><div align=left>Nachname</div>
	<li><div align=left>Geburtsdatum</div>
	<li> <div align=left>Dein Rufsignal</div>
	<li><div align=left>Wenn Du bereits Flüge beim FAI eingereicht hast, dann hier die 4 Buchstaben die Du für die IGC Dateien verwendest</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>Was ist eine 'Dateikennung?'</b><br>Dies ist eine 4 Buchstabenkennung die einen Piloten oder Gleitschirm eindeutig identifiziert.
Wenn Du wirklich nicht weisst was Du hier eintragen sollst, dann findest Du hier ein paar Tips:<p>
<ul>
<li>Leite 4 Buchstaben von Deinem Vor- und Nachnamen ab.
<li>Versuche eine ungewöhnliche Kombination zu finden. Dies verringert die Möglichkeit dass Deine Kennung die selbe ist wie die anderer Piloten.
<li>Solltest Du Probleme haben Deinen Flug über Leonardo beim FAI einzureichen, könnte dies an Deiner Kennung liegen. Ändere die Kennung und dann versuche es nochmal.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","hh:mm");

define("_Totals","Gesamtaufstellung");
define("_First_flight_logged","Erster aufgezeichneter Flug");
define("_Last_flight_logged","Letzter aufgezeichneter Flug");
define("_Flying_period_covered","Zeitraum");
define("_Total_Distance","Gesamt Distanz");
define("_Total_OLC_Score","Gesamt DHV-XC (International) Punktzahl");
define("_Total_Hours_Flown","Gesamt Flugstunden");
define("_Total_num_of_flights","Gesamt Anzahl Flüge ");

define("_Personal_Bests","Persönliche Bestleistungen");
define("_Best_Open_Distance","Beste Offene Distanz");
define("_Best_FAI_Triangle","Bestes FAI Dreieck");
define("_Best_Free_Triangle","Bestes Freies Dreieck");
define("_Longest_Flight","Längster Flug");
define("_Best_OLC_score","Beste DHV-XC (International) Punktzahl");

define("_Absolute_Height_Record","Absoluter Höhen Rekord");
define("_Altitute_gain_Record","Höhengewinn Rekord");
define("_Mean_values","Durchschnittswerte");
define("_Mean_distance_per_flight","Durchschnittliche Distanz pro Flug");
define("_Mean_flights_per_Month","Durchscnittliche Anzahl Flüge pro Monat");
define("_Mean_distance_per_Month","Durchschnittliche Distanz pro Monat");
define("_Mean_duration_per_Month","Durchschnittliche Flugdauer pro Monat");
define("_Mean_duration_per_flight","Durchschnittliche Flugdauer pro Flug");
define("_Mean_flights_per_Year","Durchschnittliche Anzahl Flüge pro Jahr");
define("_Mean_distance_per_Year","Durchschnittliche Distanz pro Jahr");
define("_Mean_duration_per_Year","Durchschnittliche Flugdauer pro Jahr");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Flüge in der Nähe dieses Punktes anzeigen");
define("_Waypoint_Name","Wegepunkt Name");
define("_Navigate_with_Google_Earth","Mit Google Earth navigieren");
define("_See_it_in_Google_Maps","In Google Map anzeigen");
define("_See_it_in_MapQuest","In MapQuest anzeigen");
define("_COORDINATES","Koordinaten");
define("_FLIGHTS","Flüge");
define("_SITE_RECORD","Fluggebietsrekord");
define("_SITE_INFO","Fluggebietsinformation");
define("_SITE_REGION","Region");
define("_SITE_LINK","Link für mehr Information");
define("_SITE_DESCR","Fluggebiets/Startplatz Beschreibung");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","Mehr Details anzeigen");
define("_KML_file_made_by","KML File erstellt durch");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Startplatz registrieren");
define("_WAYPOINT_ADDED","Startplatz wurde registriert");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","Fluggebietsrekord<br>(offene Distanz)");

//--------------------------------------------
// glider types
//--------------------------------------------

define("_GLIDER_TYPE","Fluggerätetyp");
function setGliderCats() {
	global  $CONF_glider_types,$gliderCatList;
	$gliderCatList=array(1=>'Gleitschirm',2=>'Flex wing FAI1',4=>'Starflügler FAI5',8=>'Drachen');
	foreach ($CONF_glider_types as $gId=>$gName) if (!$gliderCatList[$gId]) $gliderCatList[$gId]=$gName;
}
setGliderCats();


//--------------------------------------------
// class types
//--------------------------------------------
function setClassList() {
	$CONF_TEMP['gliderClasses'][1]['classes']=array(1=>"Sport",2=>"Open",3=>"Tandem");
	$CONF_TEMP['gliderClasses'][2]['classes']=array(1=>"Kingpost",2=>"Topless");
	global $CONF;
	foreach($CONF['gliderClasses'] as $i=>$gClass) {
		foreach($gClass['classes'] as $j=>$n) {
			if ( $CONF_TEMP['gliderClasses'][$i]['classes'][$j] ) {
				$CONF['gliderClasses'][$i]['classes'][$j] =$CONF_TEMP['gliderClasses'][$i]['classes'][$j] ;
			}
		}
	}
}
setClassList(); 
//--------------------------------------------
// xc types
//--------------------------------------------
function setXCtypesList() {
	global  $CONF_xc_types,$xcTypesList;
	$xcTypesList=array(1=>"3 Turnpoints XC",2=>"Open Triangle",4=>"Closed Triangle");
	foreach ($CONF_xc_types as $gId=>$gName) if (!$xcTypesList[$gId]) $xcTypesList[$gId]=$gName;
}
setXCtypesList(); 
//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","Deine Einstellungen wurden aktualisiert");

define("_THEME","Theme");
define("_LANGUAGE","Sprache");
define("_VIEW_CATEGORY","Kategorie anzeigen");
define("_VIEW_COUNTRY","Land anzeigen");
define("_UNITS_SYSTEM" ,"Masssystem");
define("_METRIC_SYSTEM","Metrisches System (km,m)");
define("_IMPERIAL_SYSTEM","Britisches System (miles,feet)");
define("_ITEMS_PER_PAGE","Elemente pro Seite");

define("_MI","mi");
define("_KM","km");
define("_FT","ft");
define("_M","m");
define("_MPH","mph");
define("_KM_PER_HR","km/h");
define("_FPM","fpm");
define("_M_PER_SEC","m/sec");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","Weltweit");
define("_National_XC_Leagues_for","Nationale XC Wertungen für");
define("_Flights_per_Country","Flüge je Land");
define("_Takeoffs_per_Country","Starts je Land");
define("_INDEX_HEADER","Willkommen zur DHV-XC");
define("_INDEX_MESSAGE","Du kannst das Hauptmenu zur Navigation nutzen oder die unten angezeigten Favoriten.");
define("_INDEX_HELP","<b>Kurzanleitung zur Registrierung und zum Login beim DHV-XC Server.</b><br>
<br>
<b>Registrierung:</b><br>
Unter dem Menü-Punkt  ´Piloten´ auf  ´Registrieren´ gehen <br>
Akzeptiere bitte die Teilnehmerbedingungen um zur Eingabseite zu gelangen<br>
Gib bitte Deinen Namen, Deine Email Adresse und ein Kennwort ein. Deine Email Adresse wird benötigt, um Dein Konto zu aktivieren<br>
Bestätige bitte den Registrierungs Code und klick auf ´Absenden´<br>
Ein Aktivierungs-Email wird an die angegebene Email Adresse versandt. Ruf bitte dieses Email auf und klick auf den Link der darin enthalten ist<br>
Deine Konto Aktivierung wird bestätigt<br>
<br>
<b>Login:</b><br>
Unter Menü-Punkt ´Piloten´ auf ´Login´ gehen
Gib bitte Deinen Namen und Dein Kennwort ein um einzuloggen<br>
Als erstes erscheint Dein aktuelles Piloten Profil (das am Anfang leer ist!)<br>
Klick bitte rechts oben auf ´Profil bearbeiten´ um die Felder auszufüllen<br>
Beachte bitte, dass die Felder, die mit einem * gekennzeichnet sind, Pflichteingaben sind<br>
Alle registrierte Piloten werden automatisch an der weltweiten XC Wertung teilnehmen<br>
Wenn Du an der Deutschen Streckenflugmeisterschaft (German National Scoring) teilnehmen willst, lies bitte weiter, ansonsten kannst Du jetzt schon Deine Flüge hochladen<br>
<br>
<b>Teilnahme an der Deutschen Streckenflugmeisterschaft</b><br>
Vorraussetzung:<br>
Erstens musst Du Mitglied des DHV sein<br>
Zweitens musst Du im DHV Admin Portal registriert sein<br>
Über das Admin Portal bietet der DHV seinen Mitglieder zunehmend viele Dienstleistungen an, z.B. die Verwaltung der eigenen Mitgliederdaten, privilegierten Zugang zum Forum etc..  <br>
Um an der Deutschen Streckenflugmeisterschaft teilzunehmen, muss in Deinem Piloten Profil unter dem Punkt ´Mitglied von´  den DHV auswählen<br>
Danach bitte auf den Link ´Mitgliedsnummer automatisch holen´ klicken<br>
Es öffnet sich  ein Fenster, in dem Du Deinen Admin Portal Benutzernamen und Dein Kennwort eingeben  musst<br>
Solltest Du noch keinen Admin Portal Benutzernamen und kein Kennwort haben, kannst Du Dich hier im DHV Admin Portal registrieren<br>
Wichtig - der Benutzername und das Kennwort für das Admin Portal ist nicht notwendigerweise gleich  mit dem Benuzternamen und dem Kennwort  des DHV Forums<br>
Nach erfolgreicher Überprüfung Deines Admin Portal Benutzernamens und Deines Kennworts, wird Deine DHV Mitgliedsnummer eingetragen, und Du bist Teilnahmer an der  Deutschen Streckenflugmeisterschaft <br>
<br>
<b>Flüge einreichen</b><br>
Jetzt kannst Du einzelne Flüge ab den 10.10.2006 in dem Menü-Punkt ´Piloten´  unter ´Flüge einreichen´ hochladen<br>
oder mehrere Flüge in einer ZIP Datei in dem Menü-Punkt  ´Piloten´ unter ´Flüge mittels ZIP einreichen´ hochladen<br>
<br>
Für Fragen bezüglich der Auswertung, kontaktiere bitte das Auswerter Team unter auswerter@xc.dhv.de<br>
Für Fragen bezüglich technische Probleme kontaktiere bitte den Administrator unter admin@xc.dhv.de<br>

");

define("_INDEX_NEWS","<b>News</b><br><br>
<b>Start 1.03.2007</b><br>
<b>Update 10.03.2007</b><br>

Folgende Modules sind Online und Funktionsfähig:<br>
Allgemeine Anmeldung<br>
Piloten Profil<br>
DHV Streckenflugmeisterschaft Anmeldung<br>
Tagesflugbuch<br>
Internationale Wertung (6 Flüge Weltweit)<br>
Deutsche Wertung (3 Flüge innerhalb Europa, davon ein Start in Deutschland)<br>
Leonardo Startplatzführer<br>
Leonardo Statistik<br>
Leonardo RSS Feed<br>
Google Maps<br>
Google Earth Export<br>
Language Auswahl<br>
Doppel Meldungen Verhindern<br>
G-Record Validierung<br>
Vereinsmeldung<br>
Vereinswertung<br>
Ausschreibung aktualisiert<br>
ÖAEC Drachenflieger Anmeldung<br>
ÖAEC Drachenflieger Wertung<br>
<br>
<b>Im Bearbeitung</b><br>
Damenwertung<br>
Juniorwertung<br>
Newcomerwertung<br>
Bundesliga Wertung<br>
<br>
<b>Anmerkung</b><br>
Leonardo arbeitet nur mit roh-Daten (igc Dateien) und nicht mit optimierten-Daten (olc Dateien).<br>
Alle Flüge werden nach dem Optimierungsschema von Leonardo ausgewertet .<br>
Um die Serverlast gering zu halten, haben wir uns am Anfang für eine einfache und schnelle Optimierung entschieden.
Aufwendigere Optimierungssoftware (z.B. SeeYou, CompeGPS oder MaxPunkte) wird daher möglicherweise zum unterschiedlichen Ergebnissen führen.
<br>
G-Record Validierung wird für die Bereits eingereichten Flüge nachgeholt. Validierung wird über nacht laufen, um Serverlast während des Tages gering zu halten.<br>

Um igc Rohdaten herunterzuladen, benutze bitte den Kontext Menu *Link Speichern unter* im Browser. Die jetzige Textausgabe ist für schnelle Problem Identifizierung gedacht.<br>
<br>
Bitte trägt im Piloten Profil die Verein oder National Aero Club Mitgliedschaft ein um in den Vereins- bzw. Österreichische Drachenwertung zu erscheinen.<br>
");

define("_Best_flights_for","Besten Flüge für ");

define("_Latest_flights","Neusten Flüge");
define("_FLIGHTS_STATS","Flugstatistik");


//--------------------------------------------
// NEW
//--------------------------------------------
define("_MENU_SUMMARY_PAGE","Zusammenfassung");
define("_Display_ALL","Alle Anzeigen");
define("_Display_NONE","Keine Anzeigen");
define("_Reset_to_default_view","Standardeinstellungen wiederherstellen");
define("_No_Club","Kein Verein");
define("_This_is_the_URL_of_this_page","Zur Favoriten hinzufügen");
define("_All_glider_types","Alle Geräte");

define("_MENU_SITES_GUIDE","Startplatz Fuhrer");
define("_Site_Guide","Startplatz Fuhrer");

define("_Search_Options","Suchoptionen");
define("_Below_is_the_list_of_selected_sites","Ausgewählte Startplätze");
define("_Clear_this_list","Liste löschen");
define("_See_the_selected_sites_in_Google_Earth","Ausgewählte Sites in Google Earth ansehen");
define("_Available_Takeoffs","Verfügbare Startplätze");
define("_Search_site_by_name","Startplatz Suche");
define("_give_at_least_2_letters","mind. 2 Buchstäbe!");
define("_takeoff_move_instructions_1","Alle Startplätze zum Auswahl-Liste mit >> oder einzeln Startpläte mit > ");
define("_Takeoff_Details","Startplatz Details");


define("_Takeoff_Info","Startplatz Info");
define("_XC_Info","DHV-XC Info");
define("_Flight_Info","Flug Info");

define("_MENU_LOGOUT","Logout");
define("_MENU_LOGIN","Login");
define("_MENU_REGISTER","Registrieren");


define("_Africa","Africa");
define("_Europe","Europe");
define("_Asia","Asia");
define("_Australia","Australia");
define("_North_Central_America","North/Central America");
define("_South_America","South America");

define("_Recent","Recent");

define("_Unknown_takeoff","Unbekannter Startplatz");
define("_Display_on_Google_Earth","Mit Google Earth anzeigen");
define("_Use_Man_s_Module","Berechnen mit Man's Module?");
define("_Line_Color","Trackfarbe");
define("_Line_width","Trackbreite");
define("_unknown_takeoff_tooltip_1","Unbekannter Startplatz");
define("_unknown_takeoff_tooltip_2","Falls Startplatz bekannt, bitte Ausfullen!");
define("_EDIT_WAYPOINT","Startplatz Info editieren");
define("_DELETE_WAYPOINT","Startplatz löschen");
define("_SUBMISION_DATE","Hochgeladen an"); // the date a flight was submited to leonardo
define("_TIMES_VIEWED","Anzahl Aufrufe"); // the times that this flight havs been viewed


define("_takeoff_add_help_1","Falls Startplatz bekannt, bitte Ausfullen, sonst kann diese Fenster geschlossen werden.");
define("_takeoff_add_help_2","Falls richtige Startplatz Angeziege, bitte diese Fenster schliessen - es mus nicht nochmal eingetragen werden.");
define("_takeoff_add_help_3","Falls der Startplatzname unten erscheint, kann es per Mausklick ausgewählt und übernommen werden.");
define("_Takeoff_Name","Startplatzname");
define("_In_Local_Language","Startplatzname (Ortssprache)");
define("_In_English","Startplatzname (englisch)");

// New on 2007/02/20 - login screen
define("_ENTER_PASSWORD","Einloggen mit Benutzername und Kennwort.");
define("_SEND_PASSWORD","Ich habe mein Kennwort vergessen");
define("_ERROR_LOGIN","Benutzername und/oder Kennwort falsch.");
define("_AUTO_LOGIN","Automatische Benutzeranmeldung");
define("_USERNAME","Benutzername");
define("_PASSWORD","Kennwort");
define("_PROBLEMS_HELP","Bei Anmeldeproblemen bitte den Administrator kontaktieren");

define("_LOGIN_TRY_AGAIN","%sHier%s klicken zum nochmal probieren.");
define("_LOGIN_RETURN","%sHier%s klicken für den Startseite");
// end 2007/02/20

define("_Category","Category");
define("_MEMBER_OF","Mitglied von");
define("_MemberID","Mitgliedsnummer");
define("_EnterID","Mitgliedsnummer automatisch holen");
define("_Clubs_Leagues","Vereine / Wertung");
define("_Pilot_Statistics","Pilot Statistik");
define("_National_Rankings","National Wertung");


// New on 2007/05/18 (alternative GUI_filter)
define('_Filter_NoSelection', 'Keine Auswahl getroffen');
define('_Filter_CurrentlySelected', 'Aktuelle Auswahl');
define('_Filter_DialogMultiSelectInfo', 'Für Mehrfachauswahl Strg-Taste gedrückt halten.');

define('_Filter_FilterTitleIncluding', 'Nur bestimmte [items]');
// Note to translators: use the placeholder [items] in your translation as it is, don't translate it
define('_Filter_FilterTitleExcluding', '[items] ausschließen');
define('_Filter_DialogTitleIncluding', '[items] wählen');
define('_Filter_DialogTitleExcluding', '[items] wählen');

define('_Filter_Items_pilot', 'Piloten');
define('_Filter_Items_nacclub', 'Vereine');
define('_Filter_Items_country', 'Länder');
define('_Filter_Items_takeoff', 'Startplätze');

define('_Filter_Button_Select', 'Auswählen');
define('_Filter_Button_Delete', 'Löschen');
define('_Filter_Button_Accept', 'Auswahl übernehmen');
define('_Filter_Button_Cancel', 'Abbrechen');

# menu bar
define("_MENU_FILTER_NEW","Filter **NEUE VERSION**");

// end 2007/05/18


// New on 2007/05/23
// second menu NACCclub selection
define('_ALL_NACCLUBS', 'Alle Vereine');
// Note to translators: use the placeholder [nacname] in your translation as it is, don't translate it
define('_SELECT_NACCLUB', '[nacname]-Verein wählen');

// pilot profile
define('_FirstOlcYear', 'Erste Saison einer Online-XC-Teilnahme Teilnahme');
define('_FirstOlcYearComment', 'Die Saison der ersten Teilnahme an irgendeinem Online-XC/OLC ist gemeint. <br/>Dieses Feld ist relevant für die Newcomer-Wertung.');

//end 2007/05/23

// new on 2007/03/08
define("_Select_Club","Select Club");
define("_Close_window","Close window");
define("_EnterID","Enter ID");
define("_Club","Club");
define("_Sponsor","Sponsor");


// new on 2007/03/13
define('_Go_To_Current_Month','Gehe zu aktuellem Monat');
define('_Today_is','Heute ist');
define('_Wk','KW');
define('_Click_to_scroll_to_previous_month','Klicken um zum vorigen Monat zu gelangen. Gedruckt halten, um automatisch weiter zu scrollen.');
define('_Click_to_scroll_to_next_month','Klicken um zum nachsten Monat zu gelangen. Gedruckt halten, um automatisch weiter zu scrollen.');
define('_Click_to_select_a_month','Klicken um Monat auszuwahlen');
define('_Click_to_select_a_year','Klicken um Jahr auszuwahlen');
define('_Select_date_as_date.','Wahle [date] als Datum.'); // do not replace [date], it will be replaced by date.

// end 2007/03/13

// New on 2007/11/06

define('_Explanation_AddToBookmarks_IE', 'Diese Filtereinstellungen zu den Favoriten hinzufügen');
define('_Msg_AddToBookmarks_IE', 'Klicke auf diesen Link, um die Filtereinstellungen zu Deinen Favoriten hinzuzufügen.');
define('_Explanation_AddToBookmarks_nonIE', '(Diesen Link in den Lesezeichen speichern.)');
define('_Msg_AddToBookmarks_nonIE', 'Um diesen Link zu Deinen Lesezeichen hinzuzufügen, verwende die entsprechende Funktion Deines Browsers.');

define('_PROJECT_HELP','Hilfe');
define('_PROJECT_NEWS','News');
define('_PROJECT_RULES','Ausschreibung 2007');
define('_PROJECT_RULES2','Ausschreibung 2008');

define('_MEAN_SPEED1','Durchschnitts');
//end 2007/11/06

//--------------------------------------------------------
//--------------------------------------------------------
// Missing defines , autoreplaced values from 'english'
//--------------------------------------------------------
define("_NOTE_TAKEOFF_NAME","Please note the takeoff name location and country");
define("_Select_Brand","Hersteller wählen");
define("_All_Brands","Alle Hersteller");
define("_DAY","DAY");
define("_Glider_Brand","Hersteller");
define("_Or_Select_from_previous","Oder von vorigem Flug wählen");
define("_External_Entry","External Entry"); //??
define("_Altitude","Höhe");
define("_Speed","Speed");
define("_Distance_from_takeoff","Abstand vom Startplatz");
define("_LAST_DIGIT","last digit");
define("_Filter_Items_nationality","Nationalität");
define("_Filter_Items_server","server");
define("_Ext_text1","Dieser Flug ist ursprünglich eingereicht worden bei ");
define("_Ext_text2","Link zu ausführlichen Karten und Grafiken");//??
define("_Ext_text3","Link zum Ursprungsflug");//??

//--------------------------------------------------------
//--------------------------------------------------------
// Missing defines , autoreplaced values from 'english'
//--------------------------------------------------------
define("_Male_short","M");
define("_Female_short","F");
define("_Male","Mann");
define("_Female","Frau");
define("_Altitude_Short","Höhe");
define("_Vario_Short","Vario");
define("_Time_Short","Zeit");
define("_Info","Info");
define("_Control","Control");
define("_Zoom_to_flight","Zoom auf den Flug");
define("_Follow_Glider","Dem Gerät folgen");
define("_Show_Task","Task<br>zeigen");
define("_Show_Airspace","Lufträume anzeigen");
define("_Show_Optimization_details","Optimierungsdetails zeigen");

//New on 2008/05/17
define('_MemberID_Missing', 'Die Mitgliedsnummer fehlt');
define('_MemberID_NotNumeric', 'Die Mitgliedsnummer muss eine Zahl sein');

define('_FLIGHTADD_CONFIRMATIONTEXT', 'Mit dem Abschicken dieser Daten bestätige ich, dass ich die für den eingereichten Flug geltenden luftrechtlichen Bestimmungen eingehalten habe.');

define('_FLIGHTADD_IGC_MISSING', 'Bitte igc-Datei angeben');
define('_FLIGHTADD_IGCZIP_MISSING', 'Bitte das zip-Archiv mit der igc-Datei angeben');
define('_FLIGHTADD_CATEGORY_MISSING', 'Bitte die Klasse wählen');
define('_FLIGHTADD_BRAND_MISSING', 'Bitte Gerätehersteller wählen');
define('_FLIGHTADD_GLIDER_MISSING', 'Bitte Gerät eingeben');
define('_YOU_HAVENT_ENTERED_GLIDER', 'Du hast vergessen den Gerätehersteller oder das Gerät anzugeben');

define('_BRAND_NOT_IN_LIST', 'Hersteller nicht gelistet');

//--------------------------------------------------------
//--------------------------------------------------------
// Missing defines , autoreplaced values from 'english' 
//--------------------------------------------------------
define("_Thermals","Thermals"); 
define("_MENU_SEARCH_PILOTS","Search"); 
define("_Email_new_password","<p align='justify'>The server have sent a email to the pilot with the new password and activation key</p> <p align='justify'>Please, check your email box and follow the procedures in the email body</p>"); 
define("_informed_user_not_found","This user was not found in the database"); 
define("_impossible_to_gen_new_pass","<p align='justify'>We are sorry to inform you that is not possible to generate a new password for you at this time, there is already a request that will expire in <b>%s</b>. Only after the expiration time you can do a new request.</p><p align='justify'>If you do not have access to the email contact the server admin</p>"); 
define("_Password_subject_confirm","Confirmation email (new password)"); 
define("_request_key_not_found","the request key that you have provided was not found!"); 
define("_request_key_invalid","request key that you have provided is invalid!"); 
define("_Email_allready_yours","The provided email is allready yours, nothing to do"); 
define("_Email_allready_have_request","There is already an request for changing to this email, nothing to do"); 
define("_Email_used_by_other","This email is used by another pilot, nothing to do"); 
define("_Email_used_by_other_request","This email is used by another pilot in a pending request"); 
define("_Email_canot_change_quickly","You can not change your email right now, wait for the expiring time: %s"); 
define("_Email_sent_with_confirm","A confirmation email is send, please check you mailbox so that you can confirm the changing of email"); 
define("_Email_subject_confirm","Confirmation email (new email)"); 
define("_Email_AndConfDontMatch","Email and confirmation are different."); 
define("_ChangingEmailForm"," Changing Email Form"); 
define("_Email_current","Current Email"); 
define("_New_email","New Email Address"); 
define("_New_email_confirm","Confirm New Email"); 
define("_MENU_CHANGE_PASSWORD","Change my password"); 
define("_MENU_CHANGE_EMAIL","Change my email"); 
define("_New_Password","New Password"); 
define("_ChangePasswordForm","Change Password Form"); 
define("_lost_password","Lost Password Form"); 
define("_PASSWORD_RECOVERY_TOOL","Password Recovery Form"); 
define("_PASSWORD_RECOVERY_TOOL_MESSAGE","The Server will search in his entire database for the inserted text in the textbox, if and when the server find the user, email, or civlid, A mail will be sended for the registered email address with a new password and activation link.<br><br> note: only after activation of the new password through activation link inside mail body, the new password will be valid.<br><br>"); 
define("_username_civlid_email","Please fill with: CIVLID or User Name or Email Address"); 
define("_Recover_my_pass","Recover my Password"); 
define("_You_are_not_login","<BR><BR><center><br>You are not logged in. <br><br>Please Login<BR><BR></center>"); 
define("_Requirements","Requeriments"); 
define("_Mandatory_CIVLID","Is mandatory tho have an valid <b>CIVLID</b>"); 
define("_Mandatory_valid_EMAIL","Is mandatory to provide a <b>Valid Email</b> for further comunications with admin server"); 
define("_Email_periodic","Periodically we will send you a confirmation e-mail to the provided e-mail address, if not answered, your registration account will be blocked"); 
define("_Email_asking_conf","We will send a confirmation e-mail to the provided email address"); 
define("_Email_time_conf","You will have only <b>3 hours </b> after the finishing the pre-registration to answer the email"); 
define("_After_conf_time"," After that time, your pre-registration will be <b>removed</b> from our database"); 
define("_Only_after_time","<b>And only after we remove your pre-registration, you can do the pre registration again</b>"); 
define("_Disable_Anti_Spam","<b>ATTENTION!! Disable</b> the anti spam for emails originated from <b>%s</b>"); 
define("_If_you_agree","If you agree with this requirements please go further."); 
define("_Search_civl_by_name","%sSearch for your name in the CIVL database%s . When you click at this left link will be opened a new window , please fill only 3 letters from your First name or Last Name, then the CIVL will return your CIVLID, Name and FAI Nationality."); 
define("_Register_civl_as_new_pilot","If you are not registered in the CIVL database, please  %sREGISTER-ME AS A NEW PILOT%s"); 
define("_NICK_NAME","Nick Name"); 
define("_LOCAL_PWD","Local Password"); 
define("_LOCAL_PWD_2","Repeat Local Password"); 
define("_CONFIRM","Confirm"); 
define("_REQUIRED_FIELD","Mandatory Fields"); 
define("_Registration_Form","Registration Form at %s (Leonardo)"); 
define("_MANDATORY_NAME","Is Mandatory to provide your name"); 
define("_MANDATORY_FAI_NATION","Is Mandatory to provide your FAI NATION"); 
define("_MANDATORY_GENDER","Please provide your Sex"); 
define("_MANDATORY_BIRTH_DATE_INVALID","Birth Date Invalid"); 
define("_MANDATORY_CIVL_ID","Please provide your CIVLID"); 
define("_Attention_mandatory_to_have_civlid","ATENTION!! For now one is Mandatory to have CIVLID in the %s database"); 
define("_Email_confirm_success","Your registration was successfully confirmed!"); 
define("_Success_login_civl_or_user","Success, now you can login using your CIVLID as username, or continue with your old username"); 
define("_Server_did_not_found_registration","Registration not found, please copy and paste in your browser address field the link provided in the email that was send to you, or maybe your registration time has expired"); 
define("_Pilot_already_registered","Pilot already registered with CIVLID %s and name %s"); 
define("_User_already_registered","User already registered with this email or name"); 
define("_Pilot_civlid_email_pre_registration","Hi %s This Civl ID and email is already used in a pre-registration"); 
define("_Pilot_have_pre_registration"," You already have a pre registration, but have not answered our mail, we resend the confirmation email for you, you have 3 hours after now to answer the email, if not you will be removed from pre registration. please read the email and follow the procedures described inside, thank you"); 
define("_Pre_registration_founded","We already have a pre-registration with this civlID and Email,wait for finishing the period of 3 hours until then this registration will be removed, in no hipotisis confirm the email that was send  because will be generated an double registration, and your old flights will not be transfered for the new user"); 
define("_Civlid_already_in_use","This CIVLID is used for another pilot, we can not have double CIVLID!"); 
define("_Pilot_email_used_in_reg_dif_civlid","Hi %s This Email is used in another register with different CIVLID"); 
define("_Pilot_civlid_used_in_reg_dif_email","Hi %s This CIVLID is used in another register with different EMAIL"); 
define("_Pilot_email_used_in_pre_reg_dif_civlid","Hi %s This Email is used in another pre-register with different CIVLID"); 
define("_Pilot_civlid_used_in_pre_reg_dif_email","Hi %s This CIVLID is used in another pre-register with different EMAIL"); 
define("_Server_send_conf_email","The server have sended to the %s an email asking for confirmation, you have 3 hours from now to confirm your registration by clicking or copying and pasting the link that are in the email body in your browser addres"); 
define("_Pilot_confirm_subscription","===================================

%s Leonardo new user
                
Hi %s,

This is a verification email sent from %s
 
To finally create your account, you will need to click on link below to verify your email address:

http://%s?op=register&rkey=%s 

Regards,

--------
Note: This is auto-response. Do not send any email to this email address
--------"); 
define("_Pilot_confirm_change_email","===================================

%s Leonardo user
                
Hi %s,

This is a verification email sent from %s
 
To finally change your email address, you will need to click on link below to verify your email address:

http://%s?op=chem&rkey=%s

Regards,

--------
Note: This is auto-response. Do not send any email to this email address
--------"); 
define("_Password_recovery_email","===================================

%s (Leonardo) user
                
Hi %s,

This is a verification email sent from %s
                
With Password recovery for you
                
Username:%s
                
CIVLID:%s
                
NewPassword:%s
 
To activate your new password, you will need to click on link below to verify your email address:

http://%s?op=send_password&rkey=%s 

Regards,

--------
Note: This is auto-response. Do not send any email to this email address
--------"); 
define("_MENU_AREA_GUIDE","Area Guide"); 
define("_All_XC_types","All XC types"); 
define("_xctype","XC type"); 
define("_Flying_Areas","Flying Areas"); 
define("_Name_of_Area","Name of Area"); 
define("_See_area_details","See the details and takeoffs for this area"); 
define("_choose_ge_module","Please choose the module to use<BR>for Google Earth Display"); 
define("_ge_module_advanced_1","(Most detailed, bigger size)"); 
define("_ge_module_advanced_2","(Many details, big size) "); 
define("_ge_module_Simple","Simple (Only Task, very small)"); 
define("_Pilot_search_instructions","Enter at least 3 letters of the First or Last Name"); 
define("_All_classes","All classes"); 
define("_Class","Class"); 
define("_Photos_filter_off","With/without photos"); 
define("_Photos_filter_on","With photos only"); 
define("_You_are_already_logged_in","You are already logged in"); 
define("_See_The_filter","See the filter"); 
define("_PilotBirthdate","Pilot Birthdate"); 
define("_Start_Type","Start Type"); 
define("_GLIDER_CERT","Glider Certification"); 
define("_MENU_BROWSER","Browse in Google Maps"); 
define("_FLIGHT_BROSWER","Search the flights and takeoff database with Google Maps"); 
define("_Load_Thermals","Load Thermals"); 
define("_Loading_thermals","Loading Thermals"); 
define("_Layers","Layers"); 
define("_Select_Area","Select Area"); 
define("_Leave_a_comment","Leave a comment"); 
define("_Reply","Reply"); 
define("_Translate","Translate"); 
define("_Translate_to","Translate to"); 
define("_Submit_Comment","Submit Comment"); 
define("_Logged_in_as","Logged in as:"); 
define("_Name","Name"); 
define("_Email","Email"); 
define("_Will_not_be_displayed","(Will not be displayed)"); 
define("_Please_type_something","Please type something"); 
define("_Please_enter_your_name","Please enter your name / nickname"); 
define("_Please_give_your_email","Please give your email, it will not be displayed at any times"); 
define("_RSS_for_the_comments","This is the RSS link for this flight\'s comments<BR>Copy Paste it into your RSS reader"); 
define("_Comments_are_enabled_by_default_for_new_flights","Comments are enabled by default for new flights"); 
define("_Comments_Enabled","Comments Enabled"); 
define("_Comments_are_enabled_for_this_flight","Comments are enabled for this flight"); 
define("_Comments_are_disabled_for_this_flight","Comments are disabled for this flight"); 
define("_ERROR_in_setting_the_comments_status","ERROR in setting the comments status"); 
define("_Save_changes","Save changes"); 
define("_Cancel","Cancel"); 
define("_Are_you_sure_you_want_to_delete_this_comment","Are you sure you want to delete this comment?"); 
define("_RSS_feed_for_comments","RSS feed for comments"); 
define("_RSS_feed_for_flights","RSS feed for flights"); 
define("_RSS_of_pilots_flights","RSS of pilot\'s flights"); 
define("_You_have_a_new_comment","You have a new comment on %s"); 
define("_New_comment_email_body","You have a new comment on $s<BR><BR><a href="%s">Click here to read all comments</a><hr>%s"); 

?>