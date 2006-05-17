<? if (1==2) { ?>
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"></head>
<? } ?>
<?php
/**************************************************************************/
/* Turkish language translation by Ali Yucer   (yucer_ali@hotmail.com)    */
/**************************************************************************/


/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr 											*/
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/*                                                                        */
/* You need to change the second quoted phrase, not the capital one!      */
/*                                                                        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* And, if you use HTML code, please double check it.                     */
/**************************************************************************/


function setMonths() {
	global  $monthList;
	$monthList=array('Ocak','�ubat','Mart','Nisan','May�s','Haziran',
				'Temmuz','A�ustos','Eyl�l','Ekim','Kas�m','Aral�k');
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Serbest u�u�");
define("_FREE_TRIANGLE","Serbest ��gen u�u�u");
define("_FAI_TRIANGLE","FAI ��gen u�u�u");

define("_SUBMIT_FLIGHT_ERROR","U�u� bilgilerini g�nderirken hata olu�tu");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pilot");
define("_NUMBER_OF_FLIGHTS","U�u� Say�s�");
define("_BEST_DISTANCE","En iyi mesafe");
define("_MEAN_KM","U�u� ba��na ortalama kilometre");
define("_TOTAL_KM","Toplam U�u� km");
define("_TOTAL_DURATION_OF_FLIGHTS","Toplam U�u� S�resi");
define("_MEAN_DURATION","Ortalama U�u� S�resi");
define("_TOTAL_OLC_KM","Toplam OLC mesafesi");
define("_TOTAL_OLC_SCORE","Toplam OLC puan�");
define("_BEST_OLC_SCORE","En iyi OLC puan�");
define("_From","de");

// list_flights()
define("_DURATION_HOURS_MIN","S�re (ss:dd)");
define("_SHOW","G�ster");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","U�u� 1-2 dakika i�inde aktif 
olacakt�r. ");
define("_TRY_AGAIN","L�tfen az sonra tekrar deneyin");

define("_TAKEOFF_LOCATION","Kalk��");
define("_TAKEOFF_TIME","Kalk�� Zaman�");
define("_LANDING_LOCATION","�ni�");
define("_LANDING_TIME","�ni� Zaman�");
define("_OPEN_DISTANCE","Do�rusal Mesafe");
define("_MAX_DISTANCE","Maksimum Mesafe");
define("_OLC_SCORE_TYPE","OLC puan �e�idi");
define("_OLC_DISTANCE","OLC mesafe");
define("_OLC_SCORING","OLC puan");
define("_MAX_SPEED","Maksimum h�z");
define("_MAX_VARIO","Maksimum vario");
define("_MEAN_SPEED","Ortalama h�z");
define("_MIN_VARIO","Minimum vario");
define("_MAX_ALTITUDE","��k�lan En y�ksek irtifa");
define("_TAKEOFF_ALTITUDE","Kalk�� Pistinin Deniz Seviyesinden Y�ksekli�i");
define("_MIN_ALTITUDE","En d���k irtifa ");
define("_ALTITUDE_GAIN","Kazan�lan irtifa");
define("_FLIGHT_FILE","U�u� dosyas�");
define("_COMMENTS","Yorumlar");
define("_RELEVANT_PAGE","�lgili adres");
define("_GLIDER","Kanat");
define("_PHOTOS","Foto�raf");
define("_MORE_INFO","Ekstra");
define("_UPDATE_DATA","Veriyi G�ncelle");
define("_UPDATE_MAP","Haritay� g�ncelle");
define("_UPDATE_3D_MAP","3D haritay� g�ncelle");
define("_UPDATE_GRAPHS","Grafikleri G�ncelle");
define("_UPDATE_SCORE","Puan� g�ncelle");

define("_TAKEOFF_COORDS","Kalk�� Pisti koordinatlar�:");
define("_NO_KNOWN_LOCATIONS","U�u� b�lgeleri bilinmemekte!");
define("_FLYING_AREA_INFO","Flying area info");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Leonardo XC server");
define("_RETURN_TO_TOP","En �ste d�n");
// list flight
define("_PILOT_FLIGHTS","Pilot'un u�u�lar�");

define("_DATE_SORT","Tarih");
define("_PILOT_NAME","Pilot ismi");
define("_TAKEOFF","Kalk�� Pisti");
define("_DURATION","S�re");
define("_LINEAR_DISTANCE","A��k Mesafe");
define("_OLC_KM","OLC km.");
define("_OLC_SCORE","OLC puan");
define("_DATE_ADDED","En son Kaydedilen ucuslar");

define("_SORTED_BY","S�ralama Bi�imi:");
define("_ALL_YEARS","T�m Y�llar");
define("_SELECT_YEAR_MONTH","Y�l / ay se�");
define("_ALL","Hepsi");
define("_ALL_PILOTS","T�m Pilotlar� g�ster");
define("_ALL_TAKEOFFS","T�m kalk�� pistlerini g�ster");
define("_ALL_THE_YEAR","T�m y�l");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Bir ucus dosyasi 
gondermediniz");
define("_NO_SUCH_FILE","gonderdiginiz dosya serverda bulunamiyor");
define("_FILE_DOESNT_END_IN_IGC","dosya IGC uzantili degil");
define("_THIS_ISNT_A_VALID_IGC_FILE","Bu gecerli bir IGC dosyasi degil");
define("_THERE_IS_SAME_DATE_FLIGHT","Ayni gun ve tarihte zaten baska bir 
ucus kay�tl�");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","degistirmek istiyorsaniz once 
eskisini silmelisiniz");
define("_DELETE_THE_OLD_ONE","Eski bir tane sil");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Tayni isimde zaten baska bir dosya 
var");
define("_CHANGE_THE_FILENAME","bu ucus baska bir ucus ise ltf dosya ismini 
degistirerek tekrar deneyin");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","U�u� kayd�n�z g�nderildi");
define("_PRESS_HERE_TO_VIEW_IT","Izlemek icin buraya basin");
define("_WILL_BE_ACTIVATED_SOON","(u�u� kayd�n�z 1-2 dakika i�inde aktif 
olacakt�r)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Birden fazla u�u� kayd� g�nder");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED",".zip dosyas�n�n i�indeki 
sadece .igc dosyalar� i�lenir.");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","U�u�lar� i�eren<br>zip 
dosyas� g�nder");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","G�ndermek ��in T�klay�n");

define("_FILE_DOESNT_END_IN_ZIP","yuklediginiz dosya ZIP uzantisi degil");
define("_ADDING_FILE","Dosya g�nderiliyor");
define("_ADDED_SUCESSFULLY","Ba�ar�yla g�nderildi");
define("_PROBLEM","Problem");
define("_TOTAL","Toplam da ");
define("_IGC_FILES_PROCESSED","U�u�lar ��leniyor");
define("_IGC_FILES_SUBMITED","U�u�lar g�nderildi");

// info
define("_DEVELOPMENT","Geli�tirme");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","Proje sayfas�");
define("_VERSION","Versiyon");
define("_MAP_CREATION","Harita yap�m�");
define("_PROJECT_INFO","Proje bilgisi");

// menu bar
define("_MENU_MAIN_MENU","Ana Men�");
define("_MENU_DATE","Tarih Se�");
define("_MENU_COUNTRY","�lke Se�");
define("_MENU_XCLEAGUE","XC Lig");
define("_MENU_ADMIN","Admin");

define("_MENU_COMPETITION_LEAGUE","XC Lig - T�m Kategoriler");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","A��k Mesafe");
define("_MENU_DURATION","S�re");
define("_MENU_ALL_FLIGHTS","T�m U�u�lar");
define("_MENU_FLIGHTS","U�u�lar");
define("_MENU_TAKEOFFS","Kalk�� Pistleri");
define("_MENU_FILTER","S�zge�");
define("_MENU_MY_FLIGHTS","U�u�lar�m");
define("_MENU_MY_PROFILE","Pilot Profilim");
define("_MENU_MY_STATS","�statistiklerim");
define("_MENU_MY_SETTINGS","My settings"); 
define("_MENU_SUBMIT_FLIGHT","U�u� Kayd� G�nder");
define("_MENU_SUBMIT_FROM_ZIP","ZIP dosyas�yla g�nder");
define("_MENU_SHOW_PILOTS","Pilotlar");
define("_MENU_SHOW_LAST_ADDED","En Son Y�klenenler");
define("_FLIGHTS_STATS","Flights Stats");

define("_SELECT_YEAR","Y�l Se�");
define("_SELECT_MONTH","Ay Se�");
define("_ALL_COUNTRIES","T�m �lkeleri G�ster");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","T�m Zamanlar");
define("_NUMBER_OF_FLIGHTS","U�u� Say�s�");
define("_TOTAL_DISTANCE","Toplam Mesafe");
define("_TOTAL_DURATION","Toplam S�re");
define("_BEST_OPEN_DISTANCE","En iyi mesafe");
define("_TOTAL_OLC_DISTANCE","Toplam OLC mesafesi");
define("_TOTAL_OLC_SCORE","Toplam OLC puna�e");
define("_BEST_OLC_SCORE","En iyi OLC puna�");
define("_MEAN_DURATION","Ortamala S�re");
define("_MEAN_DISTANCE","Ortalama Mesafe");
define("_PILOT_STATISTICS_SORT_BY","Pilotlar - S�rala");
define("_CATEGORY_FLIGHT_NUMBER","Kategori 'FastJoe' - U�u� Say�s�");
define("_CATEGORY_TOTAL_DURATION","Kategori 'DURACELL' - Ucu�lar�n toplam 
s�resi");
define("_CATEGORY_OPEN_DISTANCE","Kategori'A��k Mesafe'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","G�sterilecek pilot yok");


//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","U�u� kayd� silindi");
define("_RETURN","Geri D�n");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","DIKKAT - Bu ucus kaydini 
silmek uzeresiniz");
define("_THE_DATE","Tarih ");
define("_YES","EVET");
define("_NO","HAYIR");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Lig Sonu�lar�");
define("_N_BEST_FLIGHTS","En iyi U�u�");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","OLC toplam puan");
define("_KILOMETERS","Kilometreler");
define("_TOTAL_ALTITUDE_GAIN","Toplam Irtifa Kazanc�");
define("_TOTAL_KM","Toplam Km");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","is");
define("_IS_NOT","is not");
define("_OR","veya");
define("_AND","ve");
define("_FILTER_PAGE_TITLE","U�u�lar� filtrele");
define("_RETURN_TO_FLIGHTS","U�u�lara d�n");
define("_THE_FILTER_IS_ACTIVE","Filtre a��k");
define("_THE_FILTER_IS_INACTIVE","Filtre kapal�");
define("_SELECT_DATE","Tarih se�");
define("_SHOW_FLIGHTS","U�u�lar� g�ster");
define("_ALL2","HEPSI");
define("_WITH_YEAR","Y�l ile");
define("_MONTH","Ay");
define("_YEAR","Y�l");
define("_FROM","From");
define("_from","from");
define("_TO","biti�");
define("_SELECT_PILOT","Pilot Se�");
define("_THE_PILOT","Pilot");
define("_THE_TAKEOFF","Kalk�� pisti");
define("_SELECT_TAKEOFF","Kalk�� pisti se�");
define("_THE_COUNTRY","�lke");
define("_COUNTRY","�lke");
define("_SELECT_COUNTRY","�lke Se�");
define("_OTHER_FILTERS","Di�er filtreler");
define("_LINEAR_DISTANCE_SHOULD_BE","Ku� U�u�u Mesafe");
define("_OLC_DISTANCE_SHOULD_BE","Ku� U�u�u Mesafe");
define("_OLC_SCORE_SHOULD_BE","OLC Puani");
define("_DURATION_SHOULD_BE","Mesafe");
define("_ACTIVATE_CHANGE_FILTER","Aktif / filtre de�i�tir");
define("_DEACTIVATE_FILTER","Filtre kapal�");
define("_HOURS","saatler");
define("_MINUTES","dakika");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","U�u� Kayd� G�nder");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(Sadece .IGC dosyas� gerekli , di�er
alanlar bo� b�rak�labilir<br><b> .igc dosyas� olu�turmakla ilgili rehber
yaz�y� okumak i�in <a href=http://www.ypforum.com/viewtopic.php?t=226
target=_blank >T�klay�n</a></b>)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","IGC dosyas�n� se�iniz");
define("_NOTE_TAKEOFF_NAME","<font size=1>Kalk�� Pistinin ad�n� veya �lkeyi
yazabilirsiniz</font>");
define("_COMMENTS_FOR_THE_FLIGHT","U�u� yorumlar�");
define("_PHOTO","Foto�raf");
define("_PHOTOS_GUIDELINES","Foto�raflar JPG ve 100kb den k���k olmal�.");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Kayd� G�nder");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","Birden fazla ucus kaydi 
girmek istiyormusunuz ?");
define("_PRESS_HERE","Buraya t�klay�n");

define("_IS_PRIVATE","Herkese a��k olmas�n");
define("_MAKE_THIS_FLIGHT_PRIVATE","Herkese a��k olmas�n");
define("_INSERT_FLIGHT_AS_USER_ID","Ucusu kullanici ID (kimligi) olarak 
gir");
define("_FLIGHT_IS_PRIVATE","Bu u�u� �zeldir");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","U�u� kayd�n� d�zenle");
define("_IGC_FILE_OF_THE_FLIGHT","Ucusun IGC dosyas�");
define("_DELETE_PHOTO","Sil");
define("_NEW_PHOTO","Yeni foto�raf");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","U�u� bilgilerini de�i�tirmek i�in 
buraya t�klay�n�z");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","De�i�iklikler kaydedildi");
define("_RETURN_TO_FLIGHT","U�u�a d�n");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","U�u�a d�n");
define("_READY_FOR_SUBMISSION","G�nderime haz�r");
define("_SUBMIT_TO_OLC","OLC'ye g�nder");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","Ucusunuz 
basari ile OLC'ye kayit edilmistir");
define("_THE_OLC_REFERENCE_NUMBER_IS","OLC referans numarasi");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","OLC kaydinda bir sorun 
olustu");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Sorunun sebebi icin 
asagiya bakiniz");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","Ucusunuz basari ile OLC'den 
silindi");
define("_FLIGHT_NOT_SCORED","Ucusunuz OLC Puan'i yoktur, o sebepten kayit 
edilemiyor");
define("_TOO_LATE","Ucusunuzun en son kayit edilme tarihi gecmistir, bu 
sebepten kayit edilemiyor");
define("_CANNOT_BE_SUBMITTED","ucusunuzun son kayit tarihi gecmistir");
define("_NO_PILOT_OLC_DATA","<p><strong>Bu Pilot uzerine OLC bilgisi
yoktur</strong><br>
  <br>
		OLC ye gecerli bir kayit yapabilmek icin Pilotun OLC ye uye
olmus<br>olmasi gerekmektedir.</p>
<p> bu kayit icin <a
href='http://www2.onlinecontest.org/olcphp/2005/anm_teilnehmer.php?olc=holc-gr&spr=en'
target='_blank'>Buraya
</a> tiklayiniz.<br>
</p>
<p>kayit yapildiktan sonra server yoneticisi ile <a
href='mailto:andread@thenet.gr'>temasa</a>
ge�iniz<br>
Luften Eposta mesajinizda belirtiniz :<br>
</p>
<ul>
	<li><div align=left>Ad</div>
	<li><div align=left>Soyad</div>
	<li><div align=left>Dogum Gunu</div>
	<li> <div align=left>Cagri Isaretiniz</div>
	<li><div align=left>OLC ye ucu�lar�n�z� zaten kaydetmi� iseniz, IGC dosya 
isminizde kulland�g�n�z 4 harf.</div>
	<li><div align=left>Eger sistemimizin u�u�lar�n�z� otomatik olarak OLC yede 
kaydetmesini istiyorsan�z, kaydetmek istedi�iniz minimum OLC skoru ne 
olmal�d�r</div>
</ul>
");
define("_OLC_MAP","Harita");
define("_OLC_BARO","BAROMETRE");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Pilot Profil");
define("_back_to_flights","U�u�lara d�n");
define("_pilot_stats","pilot istatistikleri");
define("_edit_profile","Profili d�zenle");
define("_flights_stats","U�u�lar�n istatistikleri");
define("_View_Profile","Profil g�r�nt�le");

define("_Personal_Stuff","Ki�isel Bilgiler");
define("_First_Name"," Ad");
define("_Last_Name","Soyad");
define("_Birthdate","Do�um Tarihi");
define("_dd_mm_yy","gg.aa.yy");
define("_Sign","Bur�");
define("_Marital_Status","Evlilik Durumu");
define("_Occupation","Meslek");
define("_Web_Page","Web Sayfas�");
define("_N_A","N/A");
define("_Other_Interests","Di�er ilgi alanlar�");
define("_Photo","Foto�raf");

define("_Flying_Stuff","U�u� Bilgileri");
define("_note_place_and_date","yazabildi�iniz kadar doldurunuz");
define("_Flying_Since","U�u�a Ba�lang�� Y�l�");
define("_Pilot_Licence","Pilot Lisans�");
define("_Paragliding_training","E�itim al�nan yer");
define("_Favorite_Location","En sevdi�i u�u� b�lgesi");
define("_Usual_Location","Genelde u�tu�u yer");
define("_Best_Flying_Memory","En iyi u�u� hat�ras�");
define("_Worst_Flying_Memory","En k�t� u�u� hat�ras�");
define("_Personal_Distance_Record","Ki�isel Mesafe Rekoru");
define("_Personal_Height_Record","Ki�isel Y�kseklik rekoru");
define("_Hours_Flown","U�ulan saatler (genelde)");
define("_Hours_Per_Year","Senelik u�ulan saat ortalamasi");

define("_Equipment_Stuff","Malzeme Bilgileri");
define("_Glider","Kanat");
define("_Harness","Harnes");
define("_Reserve_chute","Yedek Para��t");
define("_Camera","Foto�raf Makinas�");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Kask");
define("_Camcorder","Video Kamera");

define("_Manouveur_Stuff","SIV Bilgileri");
define("_note_max_descent_rate","yap�ld� / yap�lmad� �eklinde yaz�n�z ");
define("_Spiral","Spiral");
define("_Bline","B-line");
define("_Full_Stall","Full Stall");
define("_Other_Manouveurs_Acro","Di�er Akrobasi hareketleri");
define("_Sat","Sat");
define("_Asymmetric_Spiral","Asimetrik Spiral");
define("_Spin","Spin");

define("_General_Stuff","Genel Bilgiler");
define("_Favorite_Singer","Favori �ark�c�s�");
define("_Favorite_Movie","Favori Filmi");
define("_Favorite_Internet_Site","Favori<br>Internet Sitesi");
define("_Favorite_Book","Favori Kitab�");
define("_Favorite_Actor","Favori Akt�r�");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Yeni bir foto�raf ekle veya 
de�i�tir");
define("_Delete_Photo","Foto�raf� sil");
define("_Your_profile_has_been_updated","Profiliniz g�ncellendi");
define("_Submit_Change_Data","G�nder - Bilgi de�i�tir");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","OLC bilgisini de�i�tir");
define("_OLC_information","OLC bilgisi");
define("_callsign","�a�r� ��areti");
define("_filename_suffix","Dosya kodu");
define("_OLC_Pilot_Info","OLC Pilot bilgisi");
define("_OLC_EXPLAINED","<b>OLC Nedir / Bu bosluklar (alanlarin kullanimi) 
ne icindir ?</b><br><br>
	OLC ye gecerli bir kay�t yapabilmek icin (Leonardo dan), pilotun �nceden 
OLC sistemine ayr�eten kay�t olmu� olmas� gerekmektedir.</p>
<p>Bu islem <a 
href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' 
target='_blank'> bu sayfadan</a> yapilabilmektedir, once ulkenizi sonrada 
Contest Registration=Yarisma Kaydi n� se�meniz gerekmektedir
  <br>
</p>
<p>Kayit i�lemi bittikten sonra, OLC ye kay�t olurken verdi�iniz bilgilerin 
AYNISINI burayada yuklemelisiniz
</p>
<ul>
	<li><div align=left>Ad</div>
	<li><div align=left>Soyad</div>
	<li><div align=left>Do�um Tarihi</div>
	<li> <div align=left>Cagri Isaretiniz</div>
	<li><div align=left>OLC ye ucuslar�n�z� zaten kaydetmis iseniz, IGC dosya 
isminizde kulland���n�z 4 harf.</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>Filename Suffix</b> nedir ? Bir pilotu 
veya yama�para��t�n� di�erlerinden ay�rt eden 4 hafli bir �ifredir 
(koddur)'<br>.
Buraya ne yazman�z konusunda emin de�ilseniz, sizler i�in bir tak�m 
ipu�lar�:<p>
<ul>
<li>Isminizden/Soyad�n�zdan ��kard���n�z 4 adet harfi kullan�n�z
<li>Kula�a garip gelen bir kombinasyon bulmaya �al���n. Bu diger bir pilot 
ile ayn� koda sahip olma durumunu engelleyebilir.
<li>Eger u�u�unuzu Leonardo sistemi ile OLC ye kay�t etmekte bir sorun 
��karsa, sorun bu suffix (kod) dan dolay� olabilir. Kod unuzu de�istirip 
tekrardan u�u�unuzu gondermeyi deneyin.
</ul>");

//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","ss:dd");

define("_Totals","Toplamlar");
define("_First_flight_logged","�lk U�u� Kayd�");
define("_Last_flight_logged","Son u�u� kayd�");
define("_Flying_period_covered","Ucus d�nemi dahildir ");
define("_Total_Distance","Toplam Mesafe");
define("_Total_OLC_Score","Toplam OLC puan");
define("_Total_Hours_Flown","Toplam u�u� saati");
define("_Total_num_of_flights","Toplam u�u� say�s� ");

define("_Personal_Bests","Ki�isel 'En iyi' leri");
define("_Best_Open_Distance","En iyi a��k mesafe");
define("_Best_FAI_Triangle","En iyi FAI ��gen u�u�u");
define("_Best_Free_Triangle","En iyi serbest ��gen u�u�u");
define("_Longest_Flight","En uzun U�u�");
define("_Best_OLC_score","En iyi OLC puan�");

define("_Absolute_Height_Record","En Yuksek ��k�lan Irtifa Rekoru");
define("_Altitute_gain_Record","En fazla kazan�lan irtifa rekoru");
define("_Mean_values","Ortalama De�erler");
define("_Mean_distance_per_flight","U�u� Ba��na Ortalama Mesafe");
define("_Mean_flights_per_Month","Ay ba��na u�ulan ortalama mesafe");
define("_Mean_distance_per_Month","Ay ba��na u�ulan ortalama mesafe");
define("_Mean_duration_per_Month","Ay ba��na u�ulan ortalama mesafe");
define("_Mean_duration_per_flight","U�u� Ba��na ortalama s�re");
define("_Mean_flights_per_Year","Senelik ortalama u�u� say�s�");
define("_Mean_distance_per_Year","Senelik ortalama u�ulan mesafe");
define("_Mean_duration_per_Year","Senelik ortalama u�ulan s�re");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Bu b�lgeye yak�n u�u�lara bak�n�z");
define("_Waypoint_Name","Waypoint ismi");
define("_Navigate_with_Google_Earth","Google Earth ile U�u�unuzu Izleyiniz");
define("_See_it_in_Google_Maps","Google Maps ile U�tu�unuz yere bak�n�z");
define("_See_it_in_MapQuest","MapQuest ile U�tu�unuz yere bak�n�z");
define("_COORDINATES","Koordinatlar");
define("_FLIGHTS","U�u�lar");
define("_SITE_RECORD","B�lge Rekoru");
define("_SITE_INFO","B�lge Bilgileri");
define("_SITE_REGION","B�lge");
define("_SITE_LINK","Daha fazla bilgi i�in link");
define("_SITE_DESCR","B�lge/Kalk�� Pisti A��klamas�");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","See more details");
define("_KML_file_made_by","KML file made by");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Kalk�� Pistini Kay�t Et");
define("_WAYPOINT_ADDED","Kalk�� Pisti kay�t edildi");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","En iyi Mesafesi<br>(A��k Mesafe)");

//--------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","U�u� arac�");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'Yama�para��t�',2=>'YelkenKanat (esnek tip)',4=>'YelkenKanat (sert tip)',8=>'Plan�r'); 
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","Your settings have been updated");

define("_THEME","Theme");
define("_LANGUAGE","Language");
define("_VIEW_CATEGORY","View category");
define("_VIEW_COUNTRY","View country");
define("_UNITS_SYSTEM" ,"Units system");
define("_METRIC_SYSTEM","Metric (km,m)");
define("_IMPERIAL_SYSTEM","Imperial (miles,feet)");
define("_ITEMS_PER_PAGE","Items per page");

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

define("_WORLD_WIDE","World Wide");
define("_National_XC_Leagues_for","National XC Leagues for");
define("_Flights_per_Country","Flights per Country");
define("_Takeoffs_per_Country","Takeoffs per Country");
define("_INDEX_HEADER","Welcome to Leonardo XC League");
define("_INDEX_MESSAGE","You can use the &quot;Main menu&quot; to navigate or use the most common choices presented below.");

//--------------------------------------------
// NEW 
//--------------------------------------------
define("_MENU_SUMMARY_PAGE","First (Summary) Page");
define("_Display_ALL","Display ALL");
define("_Display_NONE","Display NONE");
define("_Reset_to_default_view","Reset to default view");
define("_No_Club","No Club");
define("_This_is_the_URL_of_this_page","This is the URL of this page");
define("_All_glider_types","All glider types");

?>