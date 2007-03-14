<?php
/**************************************************************************/
/*  German language translation by                                        */
/*  Torsen (www.paraglider365.com                                         */
/*  Reviewed at 2007/02/21 from Peter Wild (peter@die-wilden.net)         */
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

define("_SUBMIT_FLIGHT_ERROR","Bei der �bermittlung des Fluges ist ein Fehler aufgetreten");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pilot");
define("_NUMBER_OF_FLIGHTS","Anzahl Fl�ge");
define("_BEST_DISTANCE","Beste Distanz");
define("_MEAN_KM","Durchschnittliche # Kilometer pro Flug");
define("_TOTAL_KM","Summe Flugkilometer");
define("_TOTAL_DURATION_OF_FLIGHTS","Summe Flugstunden");
define("_MEAN_DURATION","Durschnittliche Flugstunden");
define("_TOTAL_OLC_KM","Summe OLC Distanz");
define("_TOTAL_OLC_SCORE","Summe OLC Punktzahl");
define("_BEST_OLC_SCORE","Beste OLC Punktzahl");
define("_From","von");

// list_flights()
define("_DURATION_HOURS_MIN","Dauer (h:m)");
define("_SHOW","Anzeigen");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","Der Flug wird in 1-2 Minuten aktiviert. ");
define("_TRY_AGAIN","Bitte versuche es sp�ter noch einmal");

define("_TAKEOFF_LOCATION","Startplatz");
define("_TAKEOFF_TIME","Startzeitpunkt");
define("_LANDING_LOCATION","Landeplatz");
define("_LANDING_TIME","Landezeitpunkt");
define("_OPEN_DISTANCE","Luftlinie");
define("_MAX_DISTANCE","Maximale Distanz");
define("_OLC_SCORE_TYPE","OLC Punkte Typ");
define("_OLC_DISTANCE","OLC Distanz");
define("_OLC_SCORING","OLC Punkte");
define("_MAX_SPEED","Maximale Geschwindigkeit");
define("_MAX_VARIO","Maximales Steigen");
define("_MEAN_SPEED","Durchschnittliche Geschwindkeit");
define("_MIN_VARIO","Maximales Sinken");
define("_MAX_ALTITUDE","Gr�sste H�he (�ber NN)");
define("_TAKEOFF_ALTITUDE","Start H�he (�ber NN)");
define("_MIN_ALTITUDE","Minimale H�he (ner NN)");
define("_ALTITUDE_GAIN","H�hen Zugewinn");
define("_FLIGHT_FILE","Flug Datei");
define("_COMMENTS","Kommentare");
define("_RELEVANT_PAGE","relevante Webseiten URL");
define("_GLIDER","Ger�t"); 
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
define("_RETURN_TO_TOP","Zur�ck nach oben");
// list flight
define("_PILOT_FLIGHTS","Fl�ge des Piloten");

define("_DATE_SORT","Datum");
define("_PILOT_NAME","Name des Piloten");
define("_TAKEOFF","Startplatz");
define("_DURATION","Dauer");
define("_LINEAR_DISTANCE","Luftlinie");
define("_OLC_KM","OLC Kilometer");
define("_OLC_SCORE","OLC Punkte");
define("_DATE_ADDED","Letzte �bermittlungen");

define("_SORTED_BY","Sortiert nach:");
define("_ALL_YEARS","Alle Jahre");
define("_SELECT_YEAR_MONTH","Jahr (und Monat) ausw�hlen");
define("_ALL","Alle");
define("_ALL_PILOTS","Alle Piloten anzeigen");
define("_ALL_TAKEOFFS","Alle Starts anzeigen");
define("_ALL_THE_YEAR","Alle Jahre anzeigen");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Du hast keine Datei angegeben");
define("_NO_SUCH_FILE","Die angegebene Datei kann nicht gefunden werden");
define("_FILE_DOESNT_END_IN_IGC","Die angegebene Datei hat keine .igc Endung");
define("_THIS_ISNT_A_VALID_IGC_FILE","Keine g�ltige .igc Datei");
define("_THERE_IS_SAME_DATE_FLIGHT","Eine Datei mit dem selben Datum und Uhrzeit existiert bereits");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Wenn Du diese Datei ersetzen m�chtest, sollte Du zuerst");
define("_DELETE_THE_OLD_ONE","die Alte l�schen");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Eine Datei mit dem selben Nahmen exisitiert bereits");
define("_CHANGE_THE_FILENAME","Sollte dieser Flug unterschiedlich sein, dann �ndere bitte den Dateinamen und versuche es noch einmal");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","Dein Flug wurde eingereicht");
define("_PRESS_HERE_TO_VIEW_IT","Zum ansehen hier clicken");
define("_WILL_BE_ACTIVATED_SOON","(er wird in 1-2 Minuten aktiviert)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Mehrere Fl�ge einreichen");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Es werden nur IGC Datei verarbeitet");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","�bertrage die ZIP Datei<br>die die Fl�ge beinhaltet");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","Zum Einreichen der Fl�ge hier clicken");

define("_FILE_DOESNT_END_IN_ZIP","Die angebene Datei hat keine .zip Endung");
define("_ADDING_FILE","Datei wird �bertragen");
define("_ADDED_SUCESSFULLY","�bertragung erfolgreich");
define("_PROBLEM","Problem");
define("_TOTAL","Ingesamt wurden ");
define("_IGC_FILES_PROCESSED","Fl�ge wurden verarbeitet");
define("_IGC_FILES_SUBMITED","Fl�ge wurden �bertragen");

// info
define("_DEVELOPMENT","Entwicklung");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","Projekt Webseite");
define("_VERSION","Version");
define("_MAP_CREATION","Karten Erstellung");
define("_PROJECT_INFO","Projekt Info");

// menu bar 
define("_MENU_MAIN_MENU","Piloten");
define("_MENU_DATE","Datum ausw�hlen");
define("_MENU_COUNTRY","Land ausw�hlen");
define("_MENU_XCLEAGUE","Wertung");
define("_MENU_ADMIN","Admin");

define("_MENU_COMPETITION_LEAGUE","League - Alle Kategorien");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","Offene Distanz");
define("_MENU_DURATION","Dauer");
define("_MENU_ALL_FLIGHTS","Alle Fl�ge anzeigen");
define("_MENU_FLIGHTS","Fl�ge");
define("_MENU_TAKEOFFS","Startplatz");
define("_MENU_FILTER","Filter");
define("_MENU_MY_FLIGHTS","Meine Fl�ge");
define("_MENU_MY_PROFILE","Mein Profil");
define("_MENU_MY_STATS","Meine Statistik"); 
define("_MENU_MY_SETTINGS","Meine Einstellungen"); 
define("_MENU_SUBMIT_FLIGHT","Fl�ge einreichen");
define("_MENU_SUBMIT_FROM_ZIP","Fl�ge mittels ZIP einreichen");
define("_MENU_SHOW_PILOTS","Statistik");
define("_MENU_SHOW_LAST_ADDED","Letzte Einreichungen anzeigen");

define("_SELECT_YEAR","Jahr ausw�hlen");
define("_SELECT_MONTH","Monat ausw�hlen");
define("_ALL_COUNTRIES","Alle L�nder anzeigen");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","ALLE ZEITEN");
define("_NUMBER_OF_FLIGHTS","Anzahl Fl�ge");
define("_TOTAL_DISTANCE","Gesamt Distanz");
define("_TOTAL_DURATION","Gesamt Flugdauer");
define("_BEST_OPEN_DISTANCE","Beste Distanz");
define("_TOTAL_OLC_DISTANCE","Gesamt OLC Distanz");
define("_TOTAL_OLC_SCORE","Gesamt OLC Punkte");
define("_BEST_OLC_SCORE","Best OLC score");
define("_MEAN_DURATION","Durchschnittliche Flugdauer");
define("_MEAN_DISTANCE","Durchschnittliche Distanz");
define("_PILOT_STATISTICS_SORT_BY","Piloten - sortiert nach");
define("_CATEGORY_FLIGHT_NUMBER","Kategorie 'FastJoe' - Anzahl der Fl�ge");
define("_CATEGORY_TOTAL_DURATION","Kategorie 'DURACELL' - Gesamt Flugdauer aller Fl�ge");
define("_CATEGORY_OPEN_DISTANCE","Kategorie 'Offene Distanz'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","Keine Piloten vorhanden !");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","Der Flug wurde gel�scht");
define("_RETURN","Zur�ck");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","Vorsicht - M�chtest Du den Flug wirklich l�schen ?");
define("_THE_DATE","Datum ");
define("_YES","JA");
define("_NO","NEIN");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Rank");
define("_N_BEST_FLIGHTS"," beste Fl�ge");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","OLC Gesamtpunkte");
define("_KILOMETERS","Kilometer");
define("_TOTAL_ALTITUDE_GAIN","Gesamt H�hengewinn");
define("_TOTAL_KM","Gesamt Kilometer");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","gleich");
define("_IS_NOT","ungleich");
define("_OR","oder");
define("_AND","und");
define("_FILTER_PAGE_TITLE","Fl�ge Filtern");
define("_RETURN_TO_FLIGHTS","Zur�ck zu den Fl�gen");
define("_THE_FILTER_IS_ACTIVE","Der Filter ist aktiv");
define("_THE_FILTER_IS_INACTIVE","Der Filter ist inaktiv");
define("_SELECT_DATE","Datum ausw�hlen");
define("_SHOW_FLIGHTS","Fl�ge anzeigen");
define("_ALL2","ALLE");
define("_WITH_YEAR","mit Jahr");
define("_MONTH","Monat");
define("_YEAR","Jahr");
define("_FROM","Von");
define("_from","von");
define("_TO","bis");
define("_SELECT_PILOT","Pilot ausw�hlen");
define("_THE_PILOT","Der Pilot");
define("_THE_TAKEOFF","Der Startplatz");
define("_SELECT_TAKEOFF","Start ausw�hlen");
define("_THE_COUNTRY","Das Land");
define("_COUNTRY","Land");
define("_SELECT_COUNTRY","Land ausw�hlen");
define("_OTHER_FILTERS","Andere Filter");
define("_LINEAR_DISTANCE_SHOULD_BE","Die Luftlinie sollte ... sein");
define("_OLC_DISTANCE_SHOULD_BE","Die OLC Distanz sollte ... sein");
define("_OLC_SCORE_SHOULD_BE","Die OLC Punktzahl sollte ... sein");
define("_DURATION_SHOULD_BE","Die Flugdauer sollte ... sein");
define("_ACTIVATE_CHANGE_FILTER","Filter Aktivieren / �ndern");
define("_DEACTIVATE_FILTER","Filter deaktivieren");
define("_HOURS","Stunden");
define("_MINUTES","Minuten");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Flug einreichen");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(nur das IGC File wird ben�tigt)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","�bertrage das<br>IGC File des Fluges");
define("_NOTE_TAKEOFF_NAME","Bitte beachte den Namen des Startplatzes /-gebietes und das Land");
define("_COMMENTS_FOR_THE_FLIGHT","Kommentare zum Flug");
define("_PHOTO","Foto");
define("_PHOTOS_GUIDELINES","Fotos sollten im jpg Format und kleiner als  sein");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Hier clicken um den Flug einzureichen");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","M�chtest Du mehrere Fl�ge auf einmal einreichen ?");
define("_PRESS_HERE","Hier clicken");

define("_IS_PRIVATE","Nicht �ffentlich machen");
define("_MAKE_THIS_FLIGHT_PRIVATE","Nicht �ffentlich machen");
define("_INSERT_FLIGHT_AS_USER_ID","Flug als User ID einf�gen");
define("_FLIGHT_IS_PRIVATE","Dieser Flug ist nicht �ffentlich");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Flug Daten �ndern");
define("_IGC_FILE_OF_THE_FLIGHT","IGC Datei des Fluges");
define("_DELETE_PHOTO","L�schen");
define("_NEW_PHOTO","neues Foto");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","Um die Flug Daten zu �ndern bitte hier clicken");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","Die �nderungen wurden ber�cksichtigt");
define("_RETURN_TO_FLIGHT","Zur�ck zum Flug");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","Zur�ck zum Flug");
define("_READY_FOR_SUBMISSION","Fertig zur �bertragung");
define("_OLC_MAP","Karte");
define("_OLC_BARO","Luftdruck");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Piloten Profil");
define("_back_to_flights","zur�ck zu den Fl�gen");
define("_pilot_stats","Piloten Status");
define("_edit_profile","Proil bearbeiten");
define("_flights_stats","Flug Statistiken");
define("_View_Profile","Profil anzeigen");

define("_Personal_Stuff","Pers�nliche Angaben");
define("_First_Name"," Vorname");
define("_Last_Name","Nachname");
define("_Birthdate","Geburtstag");
define("_dd_mm_yy","tt.mm.jj");
define("_Sign","Rufsignal");
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
define("_Usual_Location","H�ufigstes Fluggebiet");
define("_Best_Flying_Memory","Bester Flugmoment");
define("_Worst_Flying_Memory","Schlimmster Flugmoment");
define("_Personal_Distance_Record","Pers�nlicher Streckenrekord");
define("_Personal_Height_Record","Pers�nlicher H�hen Rekord");
define("_Hours_Flown","Anzahl Flugstunden");
define("_Hours_Per_Year","Flugstunden pro Jahr");

define("_Equipment_Stuff","Ausr�stungsangaben");
define("_Glider","Ger�t"); 
define("_Harness","Gurtzeug");
define("_Reserve_chute","Rettungsschirm");
define("_Camera","Kamera");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Helm");
define("_Camcorder","Camcorder");

define("_Manouveur_Stuff","Flugfiguren Angaben");
define("_note_max_descent_rate","falls gemessen, max erreichtes Sinken");
define("_Spiral","Spirale");
define("_Bline","B-Stall");
define("_Full_Stall","Full Stall");
define("_Other_Manouveurs_Acro","andere Acro Figuren");
define("_Sat","SAT");
define("_Asymmetric_Spiral","Asymmetrische Spirale");
define("_Spin","Spin");

define("_General_Stuff","Allgemeine Angabe");
define("_Favorite_Singer","Lieblingss�nger");
define("_Favorite_Movie","Lieblingsfilm");
define("_Favorite_Internet_Site","Lieblings<br>Internet Seite");
define("_Favorite_Book","Lieblingsbuch");
define("_Favorite_Actor","Lieblingsschauspieler");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Neues Foto hochladen oder bisheriges ersetzen");
define("_Delete_Photo","Foto l�schen");
define("_Your_profile_has_been_updated","Dein Profil wurde aktualisiert");
define("_Submit_Change_Data","Daten �bertragen - aktualisieren");

//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","hh:mm");

define("_Totals","Gesamtaufstellung");
define("_First_flight_logged","Erster aufgezeichneter Flug");
define("_Last_flight_logged","Letzter aufgezeichneter Flug");
define("_Flying_period_covered","Zeitraum");
define("_Total_Distance","Gesamt Distanz");
define("_Total_OLC_Score","Gesamt OLC Punktzahl");
define("_Total_Hours_Flown","Gesamt Flugstunden");
define("_Total_num_of_flights","Gesamt Anzahl Fl�ge ");

define("_Personal_Bests","Pers�nliche Bestleistungen");
define("_Best_Open_Distance","Beste Offene Distanz");
define("_Best_FAI_Triangle","Bestes FAI Dreieck");
define("_Best_Free_Triangle","Bestes Freies Dreieck");
define("_Longest_Flight","L�ngster Flug");
define("_Best_OLC_score","Beste OLC Punktzahl");

define("_Absolute_Height_Record","Absoluter H�hen Rekord");
define("_Altitute_gain_Record","H�hengewinn Rekord");
define("_Mean_values","Durchschnittswerte");
define("_Mean_distance_per_flight","Durchschnittliche Distanz pro Flug");
define("_Mean_flights_per_Month","Durchscnittliche Anzahl Fl�ge pro Monat");
define("_Mean_distance_per_Month","Durchschnittliche Distanz pro Monat");
define("_Mean_duration_per_Month","Durchschnittliche Flugdauer pro Monat");
define("_Mean_duration_per_flight","Durchschnittliche Flugdauer pro Flug");
define("_Mean_flights_per_Year","Durchschnittliche Anzahl Fl�ge pro Jahr");
define("_Mean_distance_per_Year","Durchschnittliche Distanz pro Jahr");
define("_Mean_duration_per_Year","Durchschnittliche Flugdauer pro Jahr");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Fl�ge in der N�he dieses Punktes anzeigen");
define("_Waypoint_Name","Wegepunkt Name");
define("_Navigate_with_Google_Earth","Mit Google Earth navigieren");
define("_See_it_in_Google_Maps","In Google Map anzeigen");
define("_See_it_in_MapQuest","In MapQuest anzeigen");
define("_COORDINATES","Koordinaten");
define("_FLIGHTS","Fl�ge");
define("_SITE_RECORD","Fluggebietsrekord");
define("_SITE_INFO","Fluggebietsinformation");
define("_SITE_REGION","Region");
define("_SITE_LINK","Link f�r mehr Information");
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

define("_GLIDER_TYPE","Flugger�tetyp"); 
function setGliderCats() {
	global  $CONF_glider_types,$gliderCatList;
	$gliderCatList=array(1=>'Gleitschirm',2=>'Flex wing FAI1',4=>'Starfl�gler FAI5',8=>'Drachen'); 
	foreach ($CONF_glider_types as $gId=>$gName) if (!$gliderCatList[$gId]) $gliderCatList[$gId]=$gName;
}
setGliderCats();

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
define("_National_XC_Leagues_for","Nationale XC Ligen f�r");
define("_Flights_per_Country","Fl�ge je Land");
define("_Takeoffs_per_Country","Starts je Land");
define("_INDEX_HEADER","Willkommen zur Leonardo XC Liga");
define("_INDEX_MESSAGE","Du kannst das Hauptmenu zur Navigation nutzen oder die unten angezeigten Favoriten.");

define("_Best_flights_for","Besten Fl�ge f�r ");

define("_Latest_flights","Latest flights");
define("_FLIGHTS_STATS","Flugstatistik"); 


//--------------------------------------------
// NEW 
//--------------------------------------------
define("_MENU_SUMMARY_PAGE","Zusammenfassung");
define("_Display_ALL","Alle Anzeigen");
define("_Display_NONE","Keine Anzeigen");
define("_Reset_to_default_view","Standardeinstellungen wiederherstellen");
define("_No_Club","Kein Club");
define("_This_is_the_URL_of_this_page","Zur Favoriten hinzuf�gen");
define("_All_glider_types","Alle Ger�te");

define("_MENU_SITES_GUIDE","Startplatz Fuhrer");
define("_Site_Guide","Startplatz Fuhrer");

define("_Search_Options","Suchoptionen");
define("_Below_is_the_list_of_selected_sites","Ausgew�hlte Startpl�tze");
define("_Clear_this_list","Liste l�schen");
define("_See_the_selected_sites_in_Google_Earth","Ausgew�hlte Sites in Google Earth ansehen");
define("_Available_Takeoffs","Verf�gbare Startpl�tze");
define("_Search_site_by_name","Startplatz Suche");
define("_give_at_least_2_letters","mind. 2 Buchst�be!");
define("_takeoff_move_instructions_1","Alle Startpl�tze zum Auswahl-Liste mit >> oder einzeln Startpl�te mit > ");
define("_Takeoff_Details","Startplatz Details");


define("_Takeoff_Info","Startplatz Info");
define("_XC_Info","XC Info");
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

define("_Unknown_takeoff","Unbekannte Startplatz");
define("_Display_on_Google_Earth","Mit Google Earth anzeigen");
define("_Use_Man_s_Module","Berechnen mit Man's Module?");
define("_Line_Color","Trackfarbe");
define("_Line_width","Trackbreite");
define("_unknown_takeoff_tooltip_1","Unbekannte Startplatz");
define("_unknown_takeoff_tooltip_2","Falls Startplatz bekannt, bitte Ausfullen!");
define("_EDIT_WAYPOINT","Startplatz Info editieren");
define("_DELETE_WAYPOINT","Startplatz l�schen");
define("_SUBMISION_DATE","Hochgeladen an"); // the date a flight was submited to leonardo
define("_TIMES_VIEWED","Anzahl Aufrufe"); // the times that this flight havs been viewed


define("_takeoff_add_help_1","Falls Startplatz bekannt, bitte Ausfullen, sonst kann diese Fenster geschlossen werden.");
define("_takeoff_add_help_2","Falls richtige Startplatz Angeziege, bitte diese Fenster schliessen - es mus nicht nochmal eingetragen werden.");
define("_takeoff_add_help_3","Falls der Startplatzname unten erscheint, kann es per Mausklick ausgew�hlt und �bernommen werden.");
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
define("_PROBLEMS_HELP","Bei Anmeldeprobleme, bitte Kontaktaufnahme mit dem Administrator");

define("_LOGIN_TRY_AGAIN","%sHier%s klicken zum nochmal probieren.");
define("_LOGIN_RETURN","%sHier%s klicken f�r den Startseite");
// end 2007/02/20

define("_Category","Category");
define("_MEMBER_OF","Mitglied von");
define("_MemberID","Mitgliedsnummer");
define("_EnterID","Mitgliedsnummer automatisch holen");
define("_Clubs_Leagues","Vereine / Leagues");
define("_Pilot_Statistics","Pilot Statistik");
define("_National_Rankings","National Wertung");



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
?>