<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php
session_start();
if (!$_SESSION['logged_in']) {
  header('Location: http://www.casaverde.us/e_docs.php');
  exit;
}
?>

  <head>
    <title>E-Docs</title>
  
    <meta http-equiv="Content-Type"
      content="text/html; charset=iso-8859-1" />
  
    <!-- link href="style.css" rel="stylesheet" type="text/css" / -->

    <style>

 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1107305727 0 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
a:link, span.MsoHyperlink
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	text-decoration:underline;
	text-underline:single;}
p.MsoPlainText, li.MsoPlainText, div.MsoPlainText
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Plain Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:10.5pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p
	{mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.PlainTextChar
	{mso-style-name:"Plain Text Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Plain Text";
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:10.5pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.style1, li.style1, div.style1
	{mso-style-name:style1;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	color:blue;
	font-weight:bold;}
p.style2, li.style2, div.style2
	{mso-style-name:style2;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
p.style3, li.style3, div.style3
	{mso-style-name:style3;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
p.style5, li.style5, div.style5
	{mso-style-name:style5;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
p.style7, li.style7, div.style7
	{mso-style-name:style7;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	color:white;}
p.style8, li.style8, div.style8
	{mso-style-name:style8;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	color:white;
	font-weight:bold;}
span.style21
	{mso-style-name:style21;
	mso-style-unhide:no;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;}
span.style11
	{mso-style-name:style11;
	mso-style-unhide:no;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	color:blue;
	font-weight:bold;}
span.style31
	{mso-style-name:style31;
	mso-style-unhide:no;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;}
span.style81
	{mso-style-name:style81;
	mso-style-unhide:no;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	color:white;
	font-weight:bold;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}

    </style>

  </head>

  <body bgcolor=white lang=EN-US link=blue vlink=purple 
    style='tab-interval:.5in'>

    <div class="new_section">
<BR/>
<a href="bod_minutes_2015_01_08.pdf">
Minutes of the Board of Directors meeting held on Jan. 8th, 2015</a><BR/>
<BR/>
<a href="bod_minutes_2014.pdf">
Consolidated Minutes of all Board of Directors meetings held in 2014
</a><BR/>
<a href="bod_docs_2014.pdf">
Supporting documents for all Board of Directors meetings held in 2014
</a><BR/>
<BR/>
<BR/>
    </div>

    <div class=WordSection1>

      <table class=MsoNormalTable border=1 cellpadding=0 width=571 
        style=
'width:428.25pt; mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'
      >
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td style='background:#3300CC;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span class=style11><span style='mso-fareast-font-family:
  "Times New Roman";color:white;mso-themecolor:background1'>Community Documents
  </span></span><span style='font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:253.5pt'>
  <td width=561 style='width:420.75pt;background:#FFFF99;padding:.75pt .75pt .75pt .75pt;
  height:253.5pt'>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="meal_schedule_2015_01.pdf" target="_blank">Meal Rotation Schedule</a>
  </span></span><span style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="casaverderoster.pdf" target="_blank">Community Roster</a> or <a
  href="walletsizeroster.pdf" target="_blank">Wallet Phone List</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="owners_roster_2014_12_17.pdf" target="_blank">Owners Roster</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="team_roster_2014_12_17.pdf" target="_blank">Team Roster</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_Maint_Notes_Consol.pdf" target="_blank">Unit Maintenance Notes</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_CompostingInst_063007.pdf" target="_blank">Composting Instructions</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_Trash_Recycle.pdf" target="_blank">Trash/Recycle Instructions</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="http://www.consensus.net/ocac1.html" target="_blank">Consensus Building
  Article Link</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_WebPhotoPage_100213.pdf" target="_blank">Resident Photos</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_History_071912.pdf" target="_blank">Casa Verde History</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="BLT%20History.doc" target="_blank">BLT History</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CSCC_Voucher_Form.pdf" target="_blank">Colorado Springs Cohousing
  Community (CSCC) Payment Voucher</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_Site_2011A.pdf" target="_blank">Casa Verde Site Map</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCEY.pdf" target="_blank">Casa Verde Extended Yard Map</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVC_Vicinity_Map.pdf" target="_blank">Casa Verde Vicinity Map </a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CasaVerdeResidentManual.pdf" target="_blank">Casa Verde Resident Manual
  </a><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="ProcessManual.pdf" target="_blank">Casa Verde Process Manual</a></span></span><span
  style='font-family:"Arial","sans-serif"'>&nbsp;<o:p></o:p></span></p>
  <p><strong><span style='font-family:"Arial","sans-serif"'>CVCC Financial
  Documents </span><o:p></o:p></strong></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="CSCC__Budget2010to2013.pdf" target="_blank">2013 Community Budget</a></span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="CSCC2012Budget.pdf" target="_blank">2012 Community Budget</a></span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="CSCC%202011%20Budget.pdf" target="_blank">2011 Community Budget</a></span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="CVCA2010Budget.pdf" target="_blank">2010 Community Budget</a></span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="CVCA2009BudgetFinal.pdf" target="_blank">2009 Community Budget</a></span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>&nbsp;
<o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellpadding=0 width=570 style='width:427.5pt;
 mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td style='background:#3300CC;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal><span class=style81><span style='mso-fareast-font-family:
  "Times New Roman"'>CVCA Documents</span></span><span style='font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=536 style='width:402.0pt;background:#FFFF99;padding:.75pt .75pt .75pt .75pt'>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="Coh_CVCA_Bylaws.pdf" target="_blank">CVCA Bylaws</a> </span></span><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Declaration.pdf" target="_blank" title="CVCA Declaration">CVCA
  Declaration</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Declaration_Changes.pdf" target="_blank"
  title="CVCA Declaration Changes">CVCA Declaration Changes</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_CVCACertificateInsurance2014.pdf" target="_blank">2014 Certificate
  of Insurance</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_CVCA%20Annual%20Disclosure.pdf" target="_blank">Annual Disclosure
  to Owners</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA_ArticlesIncorp.pdf" target="_blank">CVCA Articles of Incorporation</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA_Voucher_Form.pdf" target="_blank">Casa Verde Condominium
  Association (CVCA) Payment Voucher</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_ModReqForm.pdf" target="_blank">Casa Verde Condominium Association
  (CVCA) Modification Request</a> <o:p></o:p></span></p>
  <p class=style3><span class=style31><span style='font-family:"Arial","sans-serif"'><a
  href="ANSI_AHRI%20Standard%20275.pdf" target="_blank">ANSI/AHRI Standard 275
  (for air conditioner noise calculations (PDF Doc)</a></span><o:p></o:p></span></p>
  <p><span class=style31><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><a
  href="Coh_CVCA_Consolidated_Policies_Jan2014.pdf" target="_blank">CVCA
  Consolidated Policies and Resolutions (PDF Doc)</a><o:p></o:p></span></span></p>
  <p><strong><span style='font-family:"Arial","sans-serif"'>CVCA Financial
  Documents </span><o:p></o:p></strong></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2014:</span></b><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>

  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2014%20CVCA%20Budget%20as%20approved%20by%20owners%2016%20Dec%202013.pdf"
  target="_blank">CVCA 2014 Budget</a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2013:</span></b><span
  style='font-family:"Arial","sans-serif"'><o:p></o:p></span></p>

  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202013%20%20P%20&amp;%20L%20(9%20Feb%202014%20final).pdf"
  target="_blank">CVCA 2013 P&amp;L</a></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202013%20%20Balance%20Sheet%20(9%20Feb%202014%20final).pdf"
  target="_blank">CVCA 2013 Balance Sheet</a></span></p>

  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2013%20CVCA%20Approved%20Budget.pdf" target="_blank">CVCA 2013 Budget</a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2012:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2012%20CVCA%20Final%20Profit%20&amp;%20Loss%20(19%20Mar%202013).pdf"
  target="_blank">CVCA 2012 Profit and Loss</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2012%20Final%20CVCA%20Balance%20Sheet%20(19%20Mar%202013).pdf"
  target="_blank">CVCA 2012 Balance Sheet</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2012%20CVCA%20Budget%20Without%20Work%20or%20Pay.pdf" target="_blank">CVCA
  2012 Budget</a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2011:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2011%20CVCA%20Final%20Profit%20&amp;%20Loss%20(19%20Mar%202013).pdf"
  target="_blank">CVCA 2011 Profit and Loss</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2011%20CVCA%20Final%20Balance%20Sheet%20(19%20Mar%202013).pdf"
  target="_blank">CVCA 2011 Balance Sheet</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2011%20CVCA%20Budget%20Working.numbers.pdf" target="_blank">CVCA 2011
  Budget</a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2010:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2010%20Balance%20Sheet-Final.pdf" target="_blank">CVCA 2010 Profit and
  Loss </a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2010%20P%20&amp;%20L-Final.pdf" target="_blank">CVCA 2010 Balance Sheet
  </a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2009:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2009%20P&amp;L%20Statement-CVCA.pdf" target="_blank">CVCA 2009 Profit
  and Loss</a><o:p></o:p></span></p>
  <p class=MsoNormal><span class=style31><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><a
  href="2009%20Balance%20Sheet-CVCA.pdf" target="_blank">CVCA 2009 Balance
  Sheet</a></span></span><span style='font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2009%20Budget.pdf" target="_blank">CVCA 2009 Budget</a><o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2008:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202008%20Profit%20and%20Loss.pdf" target="_blank">CVCA 2008 Profit
  and Loss</a><o:p></o:p></span></p>
  <p class=MsoNormal><span class=style31><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman"'><a
  href="CVCA%202008%20Balance%20Sheet.pdf" target="_blank">CVCA 2008 Balance
  Sheet</a></span></span><span style='font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'> <o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2007:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Profit%20&amp;%20Loss%20by%20Budget%202007%20final.pdf" target="_blank">CVCA
  2007 Profit and Loss </a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Balance%20Sheet%202007%20Final.pdf" target="_blank">CVCA 2007 Balance
  Sheet</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_Print%202007%20Budget.pdf" target="_blank">CVCA 2007 Budget</a> <o:p></o:p></span></p>
  <p class=style3><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif"'>2006:<o:p></o:p></span></b></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202006%20Balance%20Sheet.pdf" target="_blank">CVCA 2006 Balance
  Sheet</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202006%20Income%20Stmt.-P_L.pdf" target="_blank">CVCA 2006 Profit
  and Loss</a> <o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202006%20P_L%20Budget.pdf" target="_blank">CVCA 2006 Profit and
  Loss Actual <span class=SpellE>vs</span> Budget</a><o:p></o:p></span></p>
  <p class=style3><strong><span style='font-family:"Arial","sans-serif"'>Board and
  Owners Meeting Minutes </span><o:p></o:p></strong></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2013%20Consolidated%20BOD%20Meeting%20Minutes.pdf" target="_blank">CVCA
  2013 Board and Owners Meeting Minutes</a></span><o:p></o:p></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2012%20CVCA%20Board%20and%20Owner%20Meeting%20Minutes.pdf"
  target="_blank">CVCA 2012 Board and Owners Meeting Minutes</a></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2011%20CVCA%20Board%20of%20Directors%20Minutes.pdf" target="_blank">CVCA
  2011 Board and Owners Meeting Minutes</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="2010%20CVCA%20Board%20of%20Directors%20Minutes.pdf" target="_blank">CVCA
  2010 Board and Owners Meeting Minutes</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202009%20Board%20&amp;%20Owners%20Meeting%20Minutes.pdf"
  target="_blank">CVCA 2009 Board and Owners Meeting Minutes</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA%202008%20Board%20&amp;%20Owners%20Meeting%20Minutes.pdf"
  target="_blank">CVCA 2008 Board and Owners Meeting Minutes</a><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="Coh_Print%202007%20Budget.pdf" target="_blank">CVCA 2007 Board and
  Owners Meeting Minutes</a><o:p></o:p></span></p>
  <p class=style3><span class=style31><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA_Board&amp;OwnersMeetingMinutes_2006.pdf" target="_blank">CVCA 2006
  Board &amp; Owners Meeting Minutes </a></span></span><span style='font-family:
  "Arial","sans-serif"'><o:p></o:p></span></p>
  <p class=style3><span style='font-family:"Arial","sans-serif"'><a
  href="CVCA_Board&amp;OwnersMeetingMinutes_2002-2005.pdf" target="_blank">CVCA
  2002-2005 Board &amp; Owners Meeting Minutes</a><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>&nbsp;
<o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellpadding=0 width=574 style='width:430.5pt;
 mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'
 height=121>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:19.5pt'>
  <td style='background:#3300CC;padding:.75pt .75pt .75pt .75pt;height:19.5pt'>
  <p class=MsoNormal><b><span style='font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:white'>Community Meeting
  Notes<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:23.25pt'>
  <td width=540 style='width:405.0pt;background:#FFFF99;padding:.75pt .75pt .75pt .75pt;
  height:23.25pt'>
  <p><span class=style21><span style='font-size:9.0pt'><a
  href="edocsindex-2009communitymin.html" target="_blank">2009 Minute Archive</a></span></span><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style21><span style='font-size:9.0pt'><a
  href="edocsindex-2007-8communitymin.html" target="_blank">2007-8 Minute
  Archive</a></span></span><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  <p><span class=style21><span style='font-size:9.0pt'><a
  href="edocsindex-2006communitymin.html" target="_blank">2006 Minute Archive</a></span></span><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
      </table>

<p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

    </div>

  </body>

</html>

