<?php
  $ographySrc = "";
  $result = null;
  $ographyLookUpID = null;
  $ographyPreFix = "";
  $ographyID = "";

  $ographyLookUpID = explode (":", $_GET['data-ref']);
  $ographyPreFix = $ographyLookUpID[0];       // echo($ographyPreFix . "<br>");
  $ographyID = $ographyLookUpID[1];           // echo($ographyID . "<br>");

  $xmlDoc = new DOMDocument;

  function retrieveOgraphyRecord($ographySrc, $xpathPhrase,$xmlDoc){
    //$xml = new SimpleXMLElement(file_get_contents());
    $xmlDoc->load($ographySrc);
    $xpath = new DOMXPath($xmlDoc);
    $xpath->registerNamespace('t', 'http://www.tei-c.org/ns/1.0');
    $itemlist = $xpath->query($xpathPhrase);
    return $itemlist;
  }

  switch($ographyPreFix){
    case "pla":
      // echo "in the PLACES OGRPAPHY FILE<br>";
      $ographySrc = "http://rclinddev.lib.rochester.edu/islandora/object/maybragdon%3Aroot/datastream/PLACES/view";
      $xpathPhrase = '//t:place[@xml:id="' . $ographyID . '"]';
      $result = retrieveOgraphyRecord($ographySrc, $xpathPhrase,$xmlDoc);
      //$record = retrieveOgraphyRecord($ographySrc, $xpathPhrase);
      //$result = "<h2>" . $record[0]->placeName[1] . "</h2><i>" . $record[0]->placeName[0]->address->addrLine . $record[0]->note;
      break;
    case "psn":
      // echo "in the PERSON OGRAPHY FILE<br>";
      $ographySrc = "http://rclinddev.lib.rochester.edu/islandora/object/maybragdon%3Aroot/datastream/PERSONS/view";
      $xpathPhrase = '//t:person[@xml:id="' . $ographyID . '"]';
      $result = retrieveOgraphyRecord($ographySrc, $xpathPhrase,$xmlDoc);
      //$record = retrieveOgraphyRecord($ographySrc, $xpathPhrase);
      // $result = array('name' => $record[0]->persName[1], 'note' => $record[0]->note);
      //$result = "<h2>" . $record[0]->persName[1] . "</h2><i>" . $record[0]->note;
      break;
    case "evn":
      // echo "in the EVENTS OGRAPHY FILE<br>";
      $ographySrc = "http://rclinddev.lib.rochester.edu/islandora/object/maybragdon%3Aroot/datastream/EVENTS/view";
      $xpathPhrase = '//t:event[@xml:id="' . $ographyID . '"]';
      $result = retrieveOgraphyRecord($ographySrc, $xpathPhrase,$xmlDoc);
      //$record = retrieveOgraphyRecord($ographySrc, $xpathPhrase);
      //$result = "<h2>" . $record[0]->label[1] . "</h2><i>" . $record[0]->note;
      break;
    case "nam":
      // echo "in the NAMES OGRAPHY FILE<br>";
      $ographySrc = "http://rclinddev.lib.rochester.edu/islandora/object/maybragdon%3Aroot/datastream/NAMES/view";
      $xpathPhrase = '//t:name[@xml:id="' . $ographyID . '"]';
      $result = retrieveOgraphyRecord($ographySrc, $xpathPhrase,$xmlDoc);
      break;
  }

echo $xmlDoc->saveXML($result->item(0));



//
//
//
// <!---------------------------------------------------------------------------------------------------------------------->
//
//  <!-- Large modal -->
//  <!-- <span class="persName" data-toggle="modal" data-target=".bs-example-modal-lg" data-ref="psn:DAVf_105">Frank Davis</span> -->
//  <!-- Translated TEI looks like this:  <span class="persName" data-ref="psn:STUm_251">Mae W.</span>
//       1*) add 'data-toggle="modal" data-target=".bs-example-modal-sm"' after every instance of 'class="persName"'
//       3*) figure out how to read in the data-ref value and pass as argument to php
//       5) figure out how to dynamically embed/overwrite the modal box template into the tei content-->
//
// <!---------------------------------------------------------------------------------------------------------------------->
//
// <!-- PERSONS:
// $psn = 'DAVf_105';
// $xmlData = file_get_contents($ographySrc);
// $xml = new SimpleXMLElement($xmlData);
// $xpathPhrase = '//t:person[@xml:id="' . $ographyID . '"]';
// echo $result[0]->persName[1];
// echo $result[0]->note;-->
//
// <!-- EVENTS:
//
// <event xml:id="EARt_2" from="1908-12-28">
// <label type="primary">Earthquake</label>
// <label type="display">Earthquake (Sicily, It., 12/28/1908)</label>
// <label type="index">Earthquake (Sicily, It., 12/28/1908)</label>
// <desc type="place">
// <settlement>Sicily</settlement>
// </desc>
// <note>
// A powerful earthquake and subsequent tsunami killed at least 120,000 people, destroyed Messina and surrounding cities and towns and
// left thousands more displaced. Katherine Bement Davis earned international acclaim for her work organizing self-help relief programs.
// </note>
// </event -->
//
// <!---------------------------------------------------------------------------------------------------------------------->
// <!-- NAMES:
//
// <name xml:id="ARBu_17">
// <name type="primary">Arbutus</name>
// <name type="display">Arbutus</name>
// <name type="index">Arbutus</name>
// <note>Dr. Andrews' horse in Dansville.</note>
// </name> -->
//
// <!---------------------------------------------------------------------------------------------------------------------->
// <!-- PLACES:
//
// <place xml:id="BAKe_3">
// <placeName type="primary">
// Baker Theatre
// <address>
// <addrLine>20 N. Fitzhugh Street</addrLine>
// </address>
// </placeName>
// <placeName type="display">Baker Theatre (Rochester, N.Y.)</placeName>
// <placeName type="index">Baker Theatre (Rochester, N.Y.)</placeName>
// <placeName type="alternate" n="1">Baker's</placeName>
// <settlement>Rochester</settlement>
// <region>N.Y.</region>
// <country>United States</country>
// <note>
// A part of the Schubert organization, the Baker opened in 1899.
// </note>
// </place>
?>
