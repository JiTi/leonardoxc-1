<? if (0){?><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251"></head><? } ?><?php
/**************************************************************************/
/*  Russian language translation by                                       */
/*  Andrei Orehov   (nd@large.ru)                                         */
/**************************************************************************/

/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
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
	global  $monthList;
	$monthList=array('������','�������','����','������','���','����',
					'����','������','��������','�������','������','�������');
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","����� �� ���������");
define("_FREE_TRIANGLE","��������� �����������");
define("_FAI_TRIANGLE","����������� FAI");

define("_SUBMIT_FLIGHT_ERROR","��� ���������� ������ �������� ��������");

// list_pilots()
define("_NUM","#");
define("_PILOT","�����");
define("_NUMBER_OF_FLIGHTS","����� �������");
define("_BEST_DISTANCE","������ ���������");
define("_MEAN_KM","������� ���������");
define("_TOTAL_KM","��������� ���������");
define("_TOTAL_DURATION_OF_FLIGHTS","��������� �����");
define("_MEAN_DURATION","������� ����������������� ������");
define("_TOTAL_OLC_KM","��������� �������� ��������� OLC");
define("_TOTAL_OLC_SCORE","��������� ���� OLC");
define("_BEST_OLC_SCORE","������ ���� OLC");
define("_From","�");

// list_flights()
define("_DURATION_HOURS_MIN","����� (�:�)");
define("_SHOW","����������");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","����� ����� ����������� ����� 1-2 ������. ");
define("_TRY_AGAIN","����������, ���������� �������");

define("_TAKEOFF_LOCATION","����� ������");
define("_TAKEOFF_TIME","����� ������");
define("_LANDING_LOCATION","����� �������");
define("_LANDING_TIME","����� �������");
define("_OPEN_DISTANCE","�������� ���������");
define("_MAX_DISTANCE","����. ���������");
define("_OLC_SCORE_TYPE","��� � OLC");
define("_OLC_DISTANCE","��������� � OLC");
define("_OLC_SCORING","����� OLC");
define("_MAX_SPEED","����. ��������");
define("_MAX_VARIO","����. �����");
define("_MEAN_SPEED","������� ��������");
define("_MIN_VARIO","���. �����");
define("_MAX_ALTITUDE","����. ������ (ASL)");
define("_TAKEOFF_ALTITUDE","������ ������ (ASL)");
define("_MIN_ALTITUDE","���. ������ (ASL)");
define("_ALTITUDE_GAIN","����� ������");
define("_FLIGHT_FILE","���� � �������");
define("_COMMENTS","�����������");
define("_RELEVANT_PAGE","������ �� ��������");
define("_GLIDER","����������� �������");
define("_PHOTOS","����������");
define("_MORE_INFO","�������������");
define("_UPDATE_DATA","�������� ������");
define("_UPDATE_MAP","�������� �����");
define("_UPDATE_3D_MAP","�������� 3D-�����");
define("_UPDATE_GRAPHS","�������� �������");
define("_UPDATE_SCORE","�������� �����");

define("_TAKEOFF_COORDS","���������� ������:");
define("_NO_KNOWN_LOCATIONS","��� ����� �� ��������!");
define("_FLYING_AREA_INFO","�������� � �������");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","���������� ������ Leonardo");
define("_RETURN_TO_TOP","������");
// list flight
define("_PILOT_FLIGHTS","������ ������");

define("_DATE_SORT","����");
define("_PILOT_NAME","�����");
define("_TAKEOFF","�����");
define("_DURATION","������������");
define("_LINEAR_DISTANCE","�������� ���������");
define("_OLC_KM","��������� OLC");
define("_OLC_SCORE","����� OLC");
define("_DATE_ADDED","������� ����������");

define("_SORTED_BY","���������� ��:");
define("_ALL_YEARS","��� ����");
define("_SELECT_YEAR_MONTH","������� ��� (� �����)");
define("_ALL","���");
define("_ALL_PILOTS","�������� ���� �������");
define("_ALL_TAKEOFFS","�������� ��� ������");
define("_ALL_THE_YEAR","���� ���");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","�� �� ������� ���� � ������");
define("_NO_SUCH_FILE","��������� ���� ���� �� ������ �� �������");
define("_FILE_DOESNT_END_IN_IGC","���� �� ����� ���������� .igc");
define("_THIS_ISNT_A_VALID_IGC_FILE","��� �� ���� .igc");
define("_THERE_IS_SAME_DATE_FLIGHT","��� ���� ���� � ������ �� ����� � ��������");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","���� ������ �������� ���, �������");
define("_DELETE_THE_OLD_ONE","������� ������");
define("_THERE_IS_SAME_FILENAME_FLIGHT","��� ���� ���� � ����� �� ������");
define("_CHANGE_THE_FILENAME","���� ��� ������ �����, ���������� ������������ ���");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","��� ����� ������ � ����");
define("_PRESS_HERE_TO_VIEW_IT","������� ���� ��� ��� ���������");
define("_WILL_BE_ACTIVATED_SOON","(�� ����� ����������� ����� 1-2 ������)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","�������� ��������� �������");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","����� ���������� ������ ����� IGC");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","������� ��� ZIP-�����<br>� ��������");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","������� ���� ��� ������� �����");

define("_FILE_DOESNT_END_IN_ZIP","���� �� ����� ���������� .zip");
define("_ADDING_FILE","�������� �����");
define("_ADDED_SUCESSFULLY","���� ������� ��������");
define("_PROBLEM","��������");
define("_TOTAL","����� ");
define("_IGC_FILES_PROCESSED","������� ����������");
define("_IGC_FILES_SUBMITED","������� ���������");

// info
define("_DEVELOPMENT","����������");
define("_ANDREADAKIS_MANOLIS","������� �����������");
define("_PROJECT_URL","�������� �������");
define("_VERSION","������");
define("_MAP_CREATION","�������� ����");
define("_PROJECT_INFO","���������� � �������");

// menu bar 
define("_MENU_MAIN_MENU","������� ����");
define("_MENU_DATE","������");
define("_MENU_COUNTRY","������");
define("_MENU_XCLEAGUE","���������� ����");
define("_MENU_ADMIN","�����");

define("_MENU_COMPETITION_LEAGUE","���� - ��� ���������");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","�������� ���������");
define("_MENU_DURATION","�����");
define("_MENU_ALL_FLIGHTS","�������� ��� ������");
define("_MENU_FLIGHTS","������");
define("_MENU_TAKEOFFS","�����");
define("_MENU_FILTER","������");
define("_MENU_MY_FLIGHTS","��� ������");
define("_MENU_MY_PROFILE","��� �������");
define("_MENU_MY_STATS","��� ����������"); 
define("_MENU_MY_SETTINGS","��� ���������"); 
define("_MENU_SUBMIT_FLIGHT","�������� �����");
define("_MENU_SUBMIT_FROM_ZIP","�������� zip-���� � ��������");
define("_MENU_SHOW_PILOTS","������");
define("_MENU_SHOW_LAST_ADDED","������� ����������");
define("_FLIGHTS_STATS","���������� �������");

define("_SELECT_YEAR","������� ���");
define("_SELECT_MONTH","������� �����");
define("_ALL_COUNTRIES","�������� ��� ������");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","��� �����");
define("_NUMBER_OF_FLIGHTS","���-�� �������");
define("_TOTAL_DISTANCE","��������� ���������");
define("_TOTAL_DURATION","��������� �����");
define("_BEST_OPEN_DISTANCE","������ �������� ���������");
define("_TOTAL_OLC_DISTANCE","��������� ��������� OLC");
define("_TOTAL_OLC_SCORE","��������� ���� OLC");
define("_BEST_OLC_SCORE","������ ���� OLC");
define("_MEAN_DURATION","������� �����");
define("_MEAN_DISTANCE","������� ���������");
define("_PILOT_STATISTICS_SORT_BY","������ - ���������� ��");
define("_CATEGORY_FLIGHT_NUMBER","��������� '����������������' - ���������� �������");
define("_CATEGORY_TOTAL_DURATION","��������� 'DURACELL' - ��������� ����� � �������");
define("_CATEGORY_OPEN_DISTANCE","��������� '�������� ���������'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","�� ������ ������!");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","����� ������");
define("_RETURN","�����");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","�������� - �� ������ ������� ���� �����");
define("_THE_DATE","���� ");
define("_YES","��");
define("_NO","���");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","���������� � ����");
define("_N_BEST_FLIGHTS"," ������ �������");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","��������� ���� OLC");
define("_KILOMETERS","���������");
define("_TOTAL_ALTITUDE_GAIN","��������� ����� ������");
define("_TOTAL_KM","����� ��");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","");
define("_IS_NOT","��");
define("_OR","���");
define("_AND","�");
define("_FILTER_PAGE_TITLE","������������� ������");
define("_RETURN_TO_FLIGHTS","��������� � �������");
define("_THE_FILTER_IS_ACTIVE","������ �������");
define("_THE_FILTER_IS_INACTIVE","������ ���������");
define("_SELECT_DATE","������� ����");
define("_SHOW_FLIGHTS","�������� ������");
define("_ALL2","���");
define("_WITH_YEAR","���");
define("_MONTH","�����");
define("_YEAR","���");
define("_FROM","�");
define("_from","��");
define("_TO","��");
define("_SELECT_PILOT","������� ������");
define("_THE_PILOT","�����");
define("_THE_TAKEOFF","�����");
define("_SELECT_TAKEOFF","������� �����");
define("_THE_COUNTRY","������");
define("_COUNTRY","������");
define("_SELECT_COUNTRY","������� ������");
define("_OTHER_FILTERS","������ �������");
define("_LINEAR_DISTANCE_SHOULD_BE","�������� ���������");
define("_OLC_DISTANCE_SHOULD_BE","��������� OLC");
define("_OLC_SCORE_SHOULD_BE","���� OLC");
define("_DURATION_SHOULD_BE","�����������������");
define("_ACTIVATE_CHANGE_FILTER","������������ / �������� ������");
define("_DEACTIVATE_FILTER","�������������� ������");
define("_HOURS","�����");
define("_MINUTES","�����");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","�������� �����");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(����� ������ ���� IGC)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","������� ���<br>����� IGC");
define("_NOTE_TAKEOFF_NAME","����������, ������� �������� ������ � ������");
define("_COMMENTS_FOR_THE_FLIGHT","����������� � ������");
define("_PHOTO","����");
define("_PHOTOS_GUIDELINES","���������� ������ ���� � ������� jpg � ������ 100 ��");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","������� ���� ��� �������� ������");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","�� ������ �������� ����� ��������� �������?");
define("_PRESS_HERE","������� ����");

define("_IS_PRIVATE","������ �� ����������");
define("_MAKE_THIS_FLIGHT_PRIVATE","������ �� ����������");
define("_INSERT_FLIGHT_AS_USER_ID","�������� ����� ��� ������������");
define("_FLIGHT_IS_PRIVATE","���� ����� �� ��� ���������� ���������");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","�������� ������ � ������");
define("_IGC_FILE_OF_THE_FLIGHT","���� IGC");
define("_DELETE_PHOTO","�������");
define("_NEW_PHOTO","��� ����");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","������� ���� ��� ��������� ������ � ������");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","��������� ���������");
define("_RETURN_TO_FLIGHT","��������� � ������");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","��������� � ������");
define("_READY_FOR_SUBMISSION","��� ������ ��� ���������");
define("_SUBMIT_TO_OLC","�������� ���� � OLC");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","����� ������� � OLC");
define("_THE_OLC_REFERENCE_NUMBER_IS","����� ������ � OLC");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","�� ���������� �������� ����� � OLC");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","������� �������� ����");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","����� ������� ������ �� OLC");
define("_FLIGHT_NOT_SCORED","������ �� �������� �������� ���� OLC");
define("_TOO_LATE","������ ����, � ������� �������� ���� ����� ��� ���� ������� � OLC");
define("_CANNOT_BE_SUBMITTED","������ ����, � ������� �������� ���� ����� ��� ���� ������� � OLC");
define("_NO_PILOT_OLC_DATA","<p><strong>��� ������ � ������, ����������� ��� OLC</strong><br>
  <br>
<b>��� ����� OLC / ����� ��� ���� ?</b><br><br>
	OLC - On-Line Contest - ���������� ������������.</p>
	��� ��������� ����� � OLC ����� ������ ���� ��� ��������������� � ������� OLC.</p>
 ��� ����� ������� <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
 �����</a>, ��� �� ������ ������� ���� ������ � ����� 'Contest Registration'<br>
</p>
<p>����� ����������� ����� ����� � 'Pilot Profile'->'Edit OLC info' � ������ ��� ���� ���������� � �������� ��� ��, ��� ��� ����������� � OLC
</p>
<ul>
	<li><div align=left>���</div>
	<li><div align=left>�������</div>
	<li><div align=left>���� ��������</div>
	<li> <div align=left>��������</div>
	<li><div align=left>���� �� ��� ������� ������ � OLC, 4 �����, ������� �� ����������� ��� ����� IGC �����</div>
</ul>");
define("_OLC_MAP","�����");
define("_OLC_BARO","��������");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","������� ������");
define("_back_to_flights","����� � �������");
define("_pilot_stats","���������� ������");
define("_edit_profile","������������� �������");
define("_flights_stats","���������� �������");
define("_View_Profile","�������� �������");

define("_Personal_Stuff","������ ������");
define("_First_Name","���");
define("_Last_Name","�������");
define("_Birthdate","���� ��������");
define("_dd_mm_yy","��.��.��");
define("_Sign","���� �������");
define("_Marital_Status","�������� ���������");
define("_Occupation","�������");
define("_Web_Page","���-��������");
define("_N_A","��� ����������");
define("_Other_Interests","������ ��������");
define("_Photo","����");

define("_Flying_Stuff","�������� ������");
define("_note_place_and_date","��� �������, ������� ����� (������) � ����");
define("_Flying_Since","����� �");
define("_Pilot_Licence","�������� ������");
define("_Paragliding_training","��������");
define("_Favorite_Location","������� ����� �������");
define("_Usual_Location","������� ����� �������");
define("_Best_Flying_Memory","������ ������������ � ������");
define("_Worst_Flying_Memory","������ ������������ � ������");
define("_Personal_Distance_Record","������ ������ ���������");
define("_Personal_Height_Record","������ ������ ������");
define("_Hours_Flown","����� � �����");
define("_Hours_Per_Year","������� �����");

define("_Equipment_Stuff","������ � ����������");
define("_Glider","����������� �������");
define("_Harness","��������");
define("_Reserve_chute","�������");
define("_Camera","����������");
define("_Vario","�����");
define("_GPS","GPS");
define("_Helmet","����");
define("_Camcorder","�����������");

define("_Manouveur_Stuff","������ � ��������");
define("_note_max_descent_rate","��� �������, ������� ����. �������� ��������");
define("_Spiral","�������");
define("_Bline","B-����");
define("_Full_Stall","������ ����");
define("_Other_Manouveurs_Acro","������ ����-�������");
define("_Sat","���");
define("_Asymmetric_Spiral","������������� �������");
define("_Spin","���������� �������");

define("_General_Stuff","������");
define("_Favorite_Singer","������� ����� (������)");
define("_Favorite_Movie","������� �����");
define("_Favorite_Internet_Site","������� ���-����");
define("_Favorite_Book","������� �����");
define("_Favorite_Actor","������� ������(��)");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","��������� ����� ���� ��� �������� ������");
define("_Delete_Photo","������� ����");
define("_Your_profile_has_been_updated","��� ������� ��������");
define("_Submit_Change_Data","��������� ������");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","������������� ������ OLC");
define("_OLC_information","���������� OLC");
define("_callsign","��������");
define("_filename_suffix","���������� ������");
define("_OLC_Pilot_Info","���������� � ������ OLC");
define("_OLC_EXPLAINED","<b>��� ����� OLC / ����� ��� ����?</b><br><br>
	��� ����������� ������� � OLC ����� ������ ���� ��� ��������������� � ������� OLC.</p>
<p> ��� ����� ���� ������� <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  �� ���� ��������</a>, ��� �� ������ ������� ���� ������ � ����� ������� 'Contest Registration'<br>
</p>
<p>����� ����������� �� ������ ������ ����� ���� ������ ����� ��� ��, ��� �� �� ����� ��� ����������� � OLC
</p>
<ul>
	<li><div align=left>���</div>
	<li><div align=left>�������</div>
	<li><div align=left>���� ��������</div>
	<li> <div align=left>��� ��������</div>
	<li><div align=left>���� �� ��� �������������� ������ � OLC, 4 �����, ������� �� ����������� ��� ������ IGC</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>��� ����� '���������� �����'?</b><br>��� ���������������� �������������, ������� ���������� �������������� ������ ��� ��������. 
���� �� ������ �� ������, ��� ������, ��� ��� ��������� �������:<p>
<ul>
<li>����������� 4 ����� ������ �����/�������
<li>���������� ��������� ���������� ��������� ����������. ��� ������ ����������� ����, ��� ���� ���������� �������� � ����-�� ���
<li>���� � ��� ��������� �������� � ������������ ������� � OLC ����� Leonardo, ���� ����� ���� � ����������. ���������� �������� ��� � ������� ����� ��� ���.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","��:��");

define("_Totals","�����");
define("_First_flight_logged","������ ������������������ �����");
define("_Last_flight_logged","������� ������������������ �����");
define("_Flying_period_covered","���������� ������ �������");
define("_Total_Distance","��������� ���������");
define("_Total_OLC_Score","��������� ���� OLC");
define("_Total_Hours_Flown","��������� �����");
define("_Total_num_of_flights","��������� ���������� ������� ");

define("_Personal_Bests","������ �������");
define("_Best_Open_Distance","������ �������� ���������");
define("_Best_FAI_Triangle","������ ����������� FAI");
define("_Best_Free_Triangle","������ ��������� �����������");
define("_Longest_Flight","����� ������ �����");
define("_Best_OLC_score","������ ���� OLC");
define("_Absolute_Height_Record","���������� ������ ������");
define("_Altitute_gain_Record","������ ������ ������");

define("_Mean_values","������� ��������");
define("_Mean_distance_per_flight","������� ��������� ������");
define("_Mean_flights_per_Month","� ������� ������� � �����");
define("_Mean_distance_per_Month","������� ��������� � �����");
define("_Mean_duration_per_Month","������� ����� � �����");
define("_Mean_duration_per_flight","������� ������������ ������");
define("_Mean_flights_per_Year","� ������� ������� � ���");
define("_Mean_distance_per_Year","������� ��������� � ���");
define("_Mean_duration_per_Year","������� ����� � ���");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","�������� ������ ����� � ���� ������");
define("_Waypoint_Name","��� �����");
define("_Navigate_with_Google_Earth","���������� � Google Earth");
define("_See_it_in_Google_Maps","���������� � Google Maps");
define("_See_it_in_MapQuest","���������� �  MapQuest");
define("_COORDINATES","����������");
define("_FLIGHTS","������");
define("_SITE_RECORD","������ �����");
define("_SITE_INFO","���������� � �����");
define("_SITE_REGION","������");
define("_SITE_LINK","������ �� �����������");
define("_SITE_DESCR","�������� ����� (������)");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","��� �����������");
define("_KML_file_made_by","KML file ���� ������");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","������ ����� ����� (�����)");
define("_WAYPOINT_ADDED","����� ���������������");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","������ �����<br>(�������� ���������)");
	
//--------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","��� ��");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'��������',2=>'���������� FAI1',4=>'������� ����� FAI5',8=>'������');
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","���� ��������� ���������");

define("_THEME","����");
define("_LANGUAGE","����");
define("_VIEW_CATEGORY","�������� ���������");
define("_VIEW_COUNTRY","�������� ������");
define("_UNITS_SYSTEM" ,"������� ���");
define("_METRIC_SYSTEM","����������� (��, �)");
define("_IMPERIAL_SYSTEM","�������� (����, ����)");
define("_ITEMS_PER_PAGE","������� �� ��������");

define("_MI","mi");
define("_KM","��");
define("_FT","ft");
define("_M","�");
define("_MPH","mph");
define("_KM_PER_HR","��/�");
define("_FPM","fpm");
define("_M_PER_SEC","�/�");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","���� ���");
define("_National_XC_Leagues_for","������������ ���������� ���� ��");
define("_Flights_per_Country","������ �� �������");
define("_Takeoffs_per_Country","������ ����� �� �������");
define("_INDEX_HEADER","����� ���������� � ���������� ���� Leonardo");
define("_INDEX_MESSAGE","����������� &quot;������� ����&quot; ��� ��������� ��� ����������� �������� ���������� ������ �����.");

?>