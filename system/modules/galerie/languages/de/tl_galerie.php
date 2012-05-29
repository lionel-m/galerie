<?php
/**
 * TL_ROOT/system/modules/galerie/languages/de/tl_galerie.php 
 * 
 * Contao extension: galerie 1.4.0 stable 
 * German translation file 
 * 
 * Copyright : Lionel Maccaud 
 * License   : MIT 
 * Author    : Lionel Maccaud (lionel), http://www.synergie-consulting.com/ 
 * Translator: Carolina Koehn (lucina), http://kikmedia.de 
 * 
 * This file was created automatically be the Contao extension repository translation module.
 * Do not edit this file manually. Contact the author or translator for this module to establish 
 * permanent text corrections which are update-safe. 
 */
 
$GLOBALS['TL_LANG']['tl_galerie']['title']['0'] = "Titel";
$GLOBALS['TL_LANG']['tl_galerie']['title']['1'] = "Bitte geben Sie einen Titel für die Galerie ein.";
$GLOBALS['TL_LANG']['tl_galerie']['alias']['0'] = "Alias";
$GLOBALS['TL_LANG']['tl_galerie']['alias']['1'] = "Dieser Alias ist eine eindeutige Referenz zur Galerie und kann anstelle der numerischen ID benutzt werden.";
$GLOBALS['TL_LANG']['tl_galerie']['published']['0'] = "Veröffentlichen";
$GLOBALS['TL_LANG']['tl_galerie']['published']['1'] = "Die Galerie auf der Webseite veröffentlichen.";
$GLOBALS['TL_LANG']['tl_galerie']['themesSRC']['0'] = "Themes";
$GLOBALS['TL_LANG']['tl_galerie']['themesSRC']['1'] = "Bitte wählen Sie ein Theme für die Galerie aus. Der Pfad ist tl_files/galleria/themes/).";
$GLOBALS['TL_LANG']['tl_galerie']['minifiedJS']['0'] = "Minifiziertes JavaScript benutzen";
$GLOBALS['TL_LANG']['tl_galerie']['minifiedJS']['1'] = "Wenn möglich nutzt Galleria ein minifiziertes JavaScript.";
$GLOBALS['TL_LANG']['tl_galerie']['width']['0'] = "Breite";
$GLOBALS['TL_LANG']['tl_galerie']['width']['1'] = "In der Voreinstellung berechnet Galleria die Breite aus dem umgebenden Element. Mit dieser Option kann die Breite der Galerie manuell angegeben werden.";
$GLOBALS['TL_LANG']['tl_galerie']['height']['0'] = "Höhe";
$GLOBALS['TL_LANG']['tl_galerie']['height']['1'] = "Gallerie benötigt eine Wert für die Höhe, um ordnungsgemäß zu arbeiten. Mit dieser Option kann eine Höhe manuell gesetzt werden. Wenn keine Höhe gesetzt ist, dann versucht Galleria, die Höhe aufgrund des umgebenden Container-Elementes zu bestimmen. Die Eingabe eines exakten Wertes (zum Beispiel 200) wendet diesen Wert an und erzeugt eine Galerie mit der Höhe von 200 Pixeln. Außerdem ist es möglich, ein Seitenverhältnis zu setzen - ein gültiger Wert dafür ist jede Zahl kleiner als 2. Wenn gesetzt, wird die Galeriehöhe berechnet, indem der Wert mit dem angegebenen Wert für eine Skalierung multipliziert wird. Diese Option ist nützlich für 'responsive'-Layouts.";
$GLOBALS['TL_LANG']['tl_galerie']['transition']['0'] = "Übergang";
$GLOBALS['TL_LANG']['tl_galerie']['transition']['1'] = "Übergangseffekt, der bei der Anzeige benutzt wird.";
$GLOBALS['TL_LANG']['tl_galerie']['initialTransition']['0'] = "Erster Übergang";
$GLOBALS['TL_LANG']['tl_galerie']['initialTransition']['1'] = "Definiert einen Übergangseffekt, der für das erste Bild benutzt wird. Beispielsweise kann man in der gesamten Galerie Slide-Effekte nutzen, das erste Bild aber einen Fade-Effekt. Der zu setzende Wert ist dann 'fade'.";
$GLOBALS['TL_LANG']['tl_galerie']['transitionSpeed']['0'] = "Geschwindigkeit";
$GLOBALS['TL_LANG']['tl_galerie']['transitionSpeed']['1'] = "Wert in Millisekunden für den Übergangseffekt. Je höher die Zahl, desto langsamer die Übergang.";
$GLOBALS['TL_LANG']['tl_galerie']['easing']['0'] = "Easing";
$GLOBALS['TL_LANG']['tl_galerie']['easing']['1'] = "Übergangseffekte aus dem jQuery-Easing-Plugin.";
$GLOBALS['TL_LANG']['tl_galerie']['clicknext']['0'] = "Weiter per Klick";
$GLOBALS['TL_LANG']['tl_galerie']['clicknext']['1'] = "Diese Option fügt die Option zum Weiterscollen per klickEvent hinzu. Nützlich für mobile Browser und andere einfache Einsatzgebiete. Achtung: diese Einstellung deaktiviert alle anderen Links, die eventuell dem Bild in den individuellen Bildeinstellungen mitgegeben wurden.";
$GLOBALS['TL_LANG']['tl_galerie']['swipe']['0'] = "Wischen";
$GLOBALS['TL_LANG']['tl_galerie']['swipe']['1'] = "Aktiviert die Möglichkeit, mit einer Wischgeste durch die Galerie zu navigieren.";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenDoubleTap']['0'] = "Doppel-Tippen für Fullscreen";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenDoubleTap']['1'] = "Bei einem Doppel-Tippen zwischen Normal- und Fullscreen-Modus wechseln.";
$GLOBALS['TL_LANG']['tl_galerie']['popupLinks']['0'] = "Neue Links im Popup";
$GLOBALS['TL_LANG']['tl_galerie']['popupLinks']['1'] = "Nach Aktivierung öffnen alle Bildlinks in einem neuen Fenster. Die Bildlinks können über das 'longdesc'-Attribut gesetzt werden, alternativ sind andere Einstellungen mittels 'data_config' möglich.";
$GLOBALS['TL_LANG']['tl_galerie']['gShow']['0'] = "Erstes Bild";
$GLOBALS['TL_LANG']['tl_galerie']['gShow']['1'] = "Definiert welches Bild zuerst angezeigt werden soll. Wenn das jQuery-History-Plugin genutzt wird wird diese Einstellung überschrieben.";
$GLOBALS['TL_LANG']['tl_galerie']['showInfo']['0'] = "Info (Caption) anzeigen";
$GLOBALS['TL_LANG']['tl_galerie']['showInfo']['1'] = "Auf 'false' setzen, wenn die Caption nicht angezeigt werden soll.";
$GLOBALS['TL_LANG']['tl_galerie']['showImagenav']['0'] = "Bildnavigation anzeigen";
$GLOBALS['TL_LANG']['tl_galerie']['showImagenav']['1'] = "Aktivieren, wenn die Bildnavigation angezeigt werden soll (Pfeile für 'nächstes / vorheriges Bild).";
$GLOBALS['TL_LANG']['tl_galerie']['showCounter']['0'] = "Bilderzahl anzeigen";
$GLOBALS['TL_LANG']['tl_galerie']['showCounter']['1'] = "Aktivieren, um die Bilderzahl anzuzeigen.";
$GLOBALS['TL_LANG']['tl_galerie']['lightbox']['0'] = "Lightbox";
$GLOBALS['TL_LANG']['tl_galerie']['lightbox']['1'] = "Diese Option ist eine Hilfsfunktion um eine Lightbox zu ermöglichen. Wenn für das Bild ein Link definiert wurde, dann hat dieser Link Vorrang vor dieser Einstellung.";
$GLOBALS['TL_LANG']['tl_galerie']['lightboxFadeSpeed']['0'] = "Lightbox-Überblendgeschwindigkeit";
$GLOBALS['TL_LANG']['tl_galerie']['lightboxFadeSpeed']['1'] = "Die Lightbox überblendet die Bilder und Captions. Dieser Wert kontrolliert die Geschwindigkeit dafür in Millisekunden.";
$GLOBALS['TL_LANG']['tl_galerie']['lightboxTransitionSpeed']['0'] = "Lightbox-Übergangsgeschwindigkeit";
$GLOBALS['TL_LANG']['tl_galerie']['lightboxTransitionSpeed']['1'] = "Das Lightbox-Script animiert die Box vor der Anzeige des Bildes. Dieser Wert legt fest, wie schnell diese Animation erfolgt.";
$GLOBALS['TL_LANG']['tl_galerie']['overlayBackground']['0'] = "Hintergund des Overlays";
$GLOBALS['TL_LANG']['tl_galerie']['overlayBackground']['1'] = "Definiert die Farbe des Overlay-Hintergundes.";
$GLOBALS['TL_LANG']['tl_galerie']['overlayOpacity']['0'] = "Opazität des Overlays";
$GLOBALS['TL_LANG']['tl_galerie']['overlayOpacity']['1'] = "Definiert 'opacity' für den Hintergrund.";
$GLOBALS['TL_LANG']['tl_galerie']['imageCrop']['0'] = "Bildbeschneidung";
$GLOBALS['TL_LANG']['tl_galerie']['imageCrop']['1'] = "Definert wie das Bild innerhalb des Containers beschnitten wird.<br />'Ja' bedeutet dass alle Bilder die Bühne ausfüllen, zentriert und beschnitten werden.<br/>'Nein' bedeutet, dass die Bilder so akliert werden dass sie in die Bühne passen.<br />'Höhe' skaliert die Bilder so dass sie die Höhe der Bühne ausfüllen.<br />'Breite' skaliert die Bilder so dass sie die Breite der Bühne ausfüllen.";
$GLOBALS['TL_LANG']['tl_galerie']['imageMargin']['0'] = "Bild-Margin";
$GLOBALS['TL_LANG']['tl_galerie']['imageMargin']['1'] = "Wenn Bilder auf die Größe der Bühne skaliert werden kann es nützlich sein, einen 'margin'-Wert zu definieren, der zwischen Bild und Bühne eingehalten wird. Die Einheit ist 'Px'.";
$GLOBALS['TL_LANG']['tl_galerie']['imagePosition']['0'] = "Bildposition";
$GLOBALS['TL_LANG']['tl_galerie']['imagePosition']['1'] = "Defniniert die Position der Bilder innerhalb der Bühne. Diese Einstellung funktioniert analog der CSS-Eigenschaft 'background-position' (beispielsweise mittels 'top right' oder '20% 100%). Der erste Wert ist für die horizontale Position, der zweite für die vertikale. Mögliche Einheiten: keywords, Prozent, Pixel.";
$GLOBALS['TL_LANG']['tl_galerie']['imagePan']['0'] = "Verschiebeeffekt (ImagePan)";
$GLOBALS['TL_LANG']['tl_galerie']['imagePan']['1'] = "Galleria besitzt einen eingebauten Verschiebeeffekt. Dieser Effekt ist nützlich wenn Bilder beschnitten werden, die Nutzer aber trotzdem die ganzen Bilder sehen sollen können. Ein setzen auf 'true' gibt die Möglichkeit, mittels einer Mausbewegung verborgene Bildteile anzuzeigen. dieser Effekt ist beispielsweise nützlich um freie Bereich nach Bildskalierung zu vermeiden und dabei trotzdem den gesamten Bildinhalt für den Nutzer zugänglich zu machen. Wenn der Effekt zu langsam dargestellt wird können Feineinstellungen im Bereich 'Sanftheit des Verschiebeeffektes' vorgenommen werden.";
$GLOBALS['TL_LANG']['tl_galerie']['imagePanSmoothness']['0'] = "Sanftheit des Verschiebeeffektes";
$GLOBALS['TL_LANG']['tl_galerie']['imagePanSmoothness']['1'] = "Dieser Wert bestimmt, wie flüssig der Verschiebeeffekt abläuft. Je höher der Wert, desto sanfter die Animation und die Belastung der CPU / Grafik.";
$GLOBALS['TL_LANG']['tl_galerie']['minScaleRatio']['0'] = "Minimales Skalierungsverhältnis";
$GLOBALS['TL_LANG']['tl_galerie']['minScaleRatio']['1'] = "Legt das minimale Skalierungsverhältnis für Bilder fest. Um beispielsweise zu verhindern dass Bilder herunterskaliert werden setzt man den Wert auf '1'. Ein Wert von '0' erlaubt jede Skalierung.";
$GLOBALS['TL_LANG']['tl_galerie']['maxScaleRatio']['0'] = "Maximales Skalierungsverhältnis";
$GLOBALS['TL_LANG']['tl_galerie']['maxScaleRatio']['1'] = "Legt das maxmale Skalierungsverhältnis für Bilder fest. Um beispielsweise zu verhindern dass Bilder heraufskaliert werden setzt man den Wert auf '1'. Ein Wert von '0' erlaubt jede Skalierung.";
$GLOBALS['TL_LANG']['tl_galerie']['autoplay']['0'] = "Autoplay";
$GLOBALS['TL_LANG']['tl_galerie']['autoplay']['1'] = "Wenn aktiviert wird die Slideshow mit dem vorgegebenen Intervall von 5 Sekunden gestartet.";
$GLOBALS['TL_LANG']['tl_galerie']['autoplayInterval']['0'] = "Intervall Autoplay";
$GLOBALS['TL_LANG']['tl_galerie']['autoplayInterval']['1'] = "Wert in Millisekunden für die Autoplay-Funktion (beispielsweise 4000 = 4 Sekunden).";
$GLOBALS['TL_LANG']['tl_galerie']['carousel']['0'] = "Karussell";
$GLOBALS['TL_LANG']['tl_galerie']['carousel']['1'] = "Galleria verfügt über eine eingebaute Karussellfunktion, mit der eine 'endlose' Galerie erzeugt werden kann. Diese Option aktiviert / deaktiviert diesen Modus. Falls 'true' gesetzt ist wird sie angewendet, sobald mehr Thumbnails vorhanden sind als in den Container passen. Nach einer Größenveränderung wird neu berechnet. Mit 'false' wird dieses Verhalten deaktiviert.";
$GLOBALS['TL_LANG']['tl_galerie']['carouselFollow']['0'] = "Karussell folgt";
$GLOBALS['TL_LANG']['tl_galerie']['carouselFollow']['1'] = "Diese Option legt fest ob das Thumbnails-Karussell dem aktiven Bild folgt. Die Geschwindigkeit der Animation ist einstellbar. Bitte beachten, dass es abhängig von der Thumbnailgröße dabei zu Performanceveränderungen in der Hauptanimantion kommen kann - wenn das Hauptbild nur verzögert angezeigt wird ist es möglicherweise sinnvoll, hier 'false' zu setzen.";
$GLOBALS['TL_LANG']['tl_galerie']['carouselSpeed']['0'] = "Karussell-Geschwindigkeit";
$GLOBALS['TL_LANG']['tl_galerie']['carouselSpeed']['1'] = "Diese Option kontrolliert die Geschwindigkeit der Animation für die Karussel-Funktion. Die Karrussel-Animation wird sowohl beim Sliden als auch beim Folgen beeinflusst.";
$GLOBALS['TL_LANG']['tl_galerie']['carouselSteps']['0'] = "Karussell-Schritte";
$GLOBALS['TL_LANG']['tl_galerie']['carouselSteps']['1'] = "Legt die Zahl der Schritte fest in denen das Karussell beim Navigieren fortschreitet. Die Geschwindigkeit der Animation wird dabei durch den Wert für die Karussell-Geschwindigkeit festgelegt. Ein Wert 'auto' lässt das Karussell so viele Bilder wie es sichtbare Thumbnails gibt fortschreiten.";
$GLOBALS['TL_LANG']['tl_galerie']['pauseOnInteraction']['0'] = "Pause bei Benutzeraktion";
$GLOBALS['TL_LANG']['tl_galerie']['pauseOnInteraction']['1'] = "Bei der Wiedergabe Galleria stoppen, wenn der Benutzer Navigationselemente benutzt oder berührt. Ist dieses Verhalten icht erwünscht 'false' setzen.";
$GLOBALS['TL_LANG']['tl_galerie']['thumbnails']['0'] = "Thumbnails";
$GLOBALS['TL_LANG']['tl_galerie']['thumbnails']['1'] = "Bestimmt ob Thumbnails generiert werden. Wenn 'false' eingestellt werden keine Thumbnails und kein Karussell erzeugt. Wenn die Einstellung 'empty' ist wird Galleria leere <span>-Elemente zwischen den Thumbnails generieren. Die Einstellung 'numbers' bewirkt die Erstellung von leeren <span>-Elementen und Zahlen anstelle der Thumbnails.";
$GLOBALS['TL_LANG']['tl_galerie']['thumbCrop']['0'] = "Thumbnail-Beschneidung";
$GLOBALS['TL_LANG']['tl_galerie']['thumbCrop']['1'] = "Bestimmt ob und wie Thumbnails auf die Größe ihres Containers beschnitten werden. Mögliche Werte:<br />\n'Ja' - Thumbnails füllen die Bühne, werden zentriert und beschnitten.<br />\n'Nein' skaliert den Thuumbnail so dass er passt<br />\n'Höhe' und 'Breite' skalieren entsprechend.";
$GLOBALS['TL_LANG']['tl_galerie']['thumbMargin']['0'] = "Thumbnail-Margin";
$GLOBALS['TL_LANG']['tl_galerie']['thumbMargin']['1'] = "Pixelwert, um den Thumbnails einen 'margin' hinzuzufügen.";
$GLOBALS['TL_LANG']['tl_galerie']['thumbFit']['0'] = "Thumbnail-Anpassung";
$GLOBALS['TL_LANG']['tl_galerie']['thumbFit']['1'] = "Wenn 'true' werden alle Thumbnail-Container auf die Größe des Thumbnails angepasst. Diese Option ist nützlich, wenn Thumbnails in verschiedenen Größen vorhanden sind und nebeneinander dargestellt werden sollen. Die einzig sinnvolle Option für die Beschneidung ist dann 'true'. Wenn alle Thumbnails in einen Container fest vorgegebener Größe passen sollen muss die Einstellung 'false' lauten.";
$GLOBALS['TL_LANG']['tl_galerie']['thumbQuality']['0'] = "Qualität der Thumbnails";
$GLOBALS['TL_LANG']['tl_galerie']['thumbQuality']['1'] = "Legt fest, ob der Internet Explorer bikubisches Rendering benutzen soll. Optionen: 'Yes' (ja), 'No' (nein), 'auto' (benutzt 'Yes' bei geringen Skalierungen)";
$GLOBALS['TL_LANG']['tl_galerie']['extend']['0'] = "Erweitern";
$GLOBALS['TL_LANG']['tl_galerie']['extend']['1'] = "Dokumentation unter <a href=\"http://galleria.io/docs/options/extend/\">http://galleria.io/docs/options/extend/</a>. Diese Funktion wird benutzt um die Standardfunktionen des Themes zu erweitern. Es besteht voller Zugriff auf die API. Argument ist ein 'cascaded options object', dass immer auf die jeweilige Instanz von Galleria angewendet wird. Dise Option kann benutzt werden um an einem bestehenden Theme Anpassungen vorzunehmen.";
$GLOBALS['TL_LANG']['tl_galerie']['preload']['0'] = "Vorausladen";
$GLOBALS['TL_LANG']['tl_galerie']['preload']['1'] = "Bestimmt wie viele Bilder Galleria vorausladen soll. Diese Einstellung hat nur Auswirkungen, wenn separate Dateien für Thumbnails benutzt werden sollen, da Galleria prinzipiell alle Bilddaten cached.<br />\nOptionen:<br />\n'2' lädt die nächsten 2 Bilder vorab<br />\n'all' lädt alle Bilder vorab<br />\n'0' verhindert das Preloading.";
$GLOBALS['TL_LANG']['tl_galerie']['debug']['0'] = "Debug";
$GLOBALS['TL_LANG']['tl_galerie']['debug']['1'] = "Aktiviert den Debug Modus. Standardmäßig schreibt Galleria damit eventuelle Fehlermeldungen in den Galerie-Container. Zur Verwendung auf einer produktiven Webseite sollte dies abgeschaltet sein.";
$GLOBALS['TL_LANG']['tl_galerie']['queue']['0'] = "Klicks zwischenspeichern";
$GLOBALS['TL_LANG']['tl_galerie']['queue']['1'] = "Galleria speichert bei Aktivierung dieser Aktion Klicks zwischen. Man kann das sehen, indem man sehr schnell hintereinander den 'Next'-Button klickt. Die Animationen können verlangsamt ablaufen wenn Klicks ziwschengespeichert werden.";
$GLOBALS['TL_LANG']['tl_galerie']['layerFollow']['0'] = "Layer-Follow";
$GLOBALS['TL_LANG']['tl_galerie']['layerFollow']['1'] = "By default, the layer follows the image size on the stage, even if crop is set. This means that the HTML layer will stretch according to the active image. If you want the layer to fill the stage regardless of cropping settings, set this to false.";
$GLOBALS['TL_LANG']['tl_galerie']['dummy']['0'] = "Dummy-Bild";
$GLOBALS['TL_LANG']['tl_galerie']['dummy']['1'] = "Diese Option ermöglicht es, ein Standardbild festzulegen, das angezeigt wird, wenn Galleria das eigentlich vorgesehene Bild nicht finden kann. Wie eine #404-Fehlerseite für Galleria ... ;-)";
$GLOBALS['TL_LANG']['tl_galerie']['imageTimeout']['0'] = "Timeout";
$GLOBALS['TL_LANG']['tl_galerie']['imageTimeout']['1'] = "Diese Option bestimmt, wie lange Galleria nach einem Bild sucht, bevor es einen #404 (not found)-Fehler zurückgibt. Der Standardwert beträgt 30000, also 30 Sekunden.";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenCrop']['0'] = "Fullscreen-Bildbeschneidung";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenCrop']['1'] = "Bestimmt wie Bilder im Fullscreen-Modus beschnitten werden.";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenTransition']['0'] = "Fullscreen-Bildübergangsefekt";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenTransition']['1'] = "Definiert unterschiedliche Übergangseffekte für den Fullscreen-Modus. Im Fullscreen-Modus laufen einige Übergangseffekte weniger sanft ab. Daher kann es sinnvoll sein,hier andere Einstellungen zu wählen.";
$GLOBALS['TL_LANG']['tl_galerie']['touchTransition']['0'] = "Touch-Bildübergangseffekt";
$GLOBALS['TL_LANG']['tl_galerie']['touchTransition']['1'] = "Definiert unterschiedliche Übergangseffekte für den Touchscreen-Modus.";
$GLOBALS['TL_LANG']['tl_galerie']['dataConfig']['0'] = "'Data'-Konfiguration";
$GLOBALS['TL_LANG']['tl_galerie']['dataConfig']['1'] = "Dokumentation unter <a href=\"http://galleria.io/docs/options/dataConfig/\">http://galleria.io/docs/options/dataConfig/</a>. Diese Optionen bestimmen, wie Daten aus der Quelle extrahiert werden. Gibt ein Objekt zurück dass zu den Standardeinstellungen vereinigt wird.";
$GLOBALS['TL_LANG']['tl_galerie']['dailymotion']['0'] = "Dailymotion";
$GLOBALS['TL_LANG']['tl_galerie']['dailymotion']['1'] = "Die Konfiguration des Dailymotion-Players ist durch die entsprechenden Optionen möglich, die beim Erstellen des <embed>-Codes sichtbar sind.";
$GLOBALS['TL_LANG']['tl_galerie']['vimeo']['0'] = "Vimeo";
$GLOBALS['TL_LANG']['tl_galerie']['vimeo']['1'] = "Die Konfiguration des Vimeo-Players ist durch die entsprechenden Optionen möglich, die unter <a href=\"http://vimeo.com/api/docs/player#universal-params\">http://vimeo.com/api/docs/player#universal-params</a> zu finden sind.";
$GLOBALS['TL_LANG']['tl_galerie']['youtube']['0'] = "YouTube";
$GLOBALS['TL_LANG']['tl_galerie']['youtube']['1'] = "Die Konfiguration des Youtube-Players ist durch die entsprechenden Optionen möglich, die unter <a href=\"http://code.google.com/apis/youtube/player_parameters.html \">http://code.google.com/apis/youtube/player_parameters.html</a> zu finden sind.";
$GLOBALS['TL_LANG']['tl_galerie']['trueFullscreen']['0'] = "True Fullscreen";
$GLOBALS['TL_LANG']['tl_galerie']['trueFullscreen']['1'] = "Galleria unterstützt den True-Fullscreen.Modus wo immer der Browser das ebenfalls unterstützt. Zur Zeit einsetzbar u.a. in Firefox 10+, Safari 5.1+, Chrome 15+).<br />Galleria aktiviert dann den nativen Fullscreen-Modus des Betriebssystems. Abschalten über 'false'.";
$GLOBALS['TL_LANG']['tl_galerie']['wait']['0'] = "Wartezeit";
$GLOBALS['TL_LANG']['tl_galerie']['wait']['1'] = "Legt die Zeit fest innerhalb derer Galleria die benötigte Bildgröße anhand der Containergröße bestimmt. Mit 'true' unendlich verlängern.";
$GLOBALS['TL_LANG']['tl_galerie']['responsive']['0'] = "Responsive-Modus";
$GLOBALS['TL_LANG']['tl_galerie']['responsive']['1'] = "Diese Option versetzt Galleria in den 'Responsive'-Modus. Das bedeutet dass der jeweilige Container dynamisch in der Größe angepasst wird wennd as Seitenlayout responsiv ist. Mit anderen Worten: Über @media-Queries oder dynamische Proportionen innerhalb des verwendeten CSS ist es möglich, dass sich die Galerie diesen Größenänderungen anpasst sobald sich die Fenstergröße ändert.";
$GLOBALS['TL_LANG']['tl_galerie']['dataSource']['0'] = "Datenquelle";
$GLOBALS['TL_LANG']['tl_galerie']['dataSource']['1'] = "Bestimmt wo nach benötigten Daten gesucht wird. Standardmäßig sucht Galleria im Zielselektor, aber dieses Verhalten kann auch verändert werden indem man andere Datenquellen angibt. Wennn man mit JSON arbeitet, dann können damit JSON-Arrays in die Galeria importiert werden.";
$GLOBALS['TL_LANG']['tl_galerie']['dataSelector']['0'] = "Data-Selektor";
$GLOBALS['TL_LANG']['tl_galerie']['dataSelector']['1'] = "Der Selektor, den Galleria im HTML-code sucht. Wenn andere Elemente ausser <img> benutzt werden sollen kann dies hier angepasst werden, damit Galleria nach den richtigen Elementen sucht.";
$GLOBALS['TL_LANG']['tl_galerie']['keepSource']['0'] = "Code des Containers behalten";
$GLOBALS['TL_LANG']['tl_galerie']['keepSource']['1'] = "Standardmäßig leert Galleria den  Quellcontainer beim rendern der Galerie. Wenn man beispielsweise aber die Galerie in einem anderen Element (vielleicht einer Lightbox) anzeigen lassen möchte ist der Erhalt der Thumbnails wünschenswert. Mit der Option 'true' wird das HTML nicht verändert, zusätzlich werden Klick-Events im Quellcontainer ermöglicht, um die Thumbnails bedienbar zu erhalten. Diese Einstellung ist nützlich um angepasste Thumbnails zu benutzen während die Galerie selbst weiterhin navigierbar bleibt.";
$GLOBALS['TL_LANG']['tl_galerie']['json']['0'] = "JSON";
$GLOBALS['TL_LANG']['tl_galerie']['json']['1'] = "Eine weitere Möglichkeit, Galleria mit Daten zu versorgen ist die Übergabe eines JSON-Arrays. Mit dieser Option gibt es mehr Kontrollmöglichkeiten über das Verhalten von Galleria - man kann bestimmen, welche Daten zu welchem Zeitpunkt an Galleria übergeben werden. Falls man auf diesem Wege HTML an Galleria übergibt kann die Performance eingeschränkt sein, da in diesem Fall möglicherweise alle Bilder auf einmal geladen werden müssen.";
$GLOBALS['TL_LANG']['tl_galerie']['idleMode']['0'] = "Idle-Modus";
$GLOBALS['TL_LANG']['tl_galerie']['idleMode']['1'] = "Globale Einstellung um den Idle-Modus an- oder abzuschalten.";
$GLOBALS['TL_LANG']['tl_galerie']['idleTime']['0'] = "Zeit bis Idle-Modus";
$GLOBALS['TL_LANG']['tl_galerie']['idleTime']['1'] = "If you are adding elements into idle mode using the .addIdleState() method, you can control the delay before Galleria falls into Idle mode using this option. idleTime is set using milliseconds, so 3000 equals 3 full seconds.";
$GLOBALS['TL_LANG']['tl_galerie']['idleSpeed']['0'] = "Idle-Geschwindigkeit";
$GLOBALS['TL_LANG']['tl_galerie']['idleSpeed']['1'] = "If you are adding elements into idle mode using the addIdleState() method, you can control the animation speed of the idle elements. idleSpeed is set using milliseconds.";
$GLOBALS['TL_LANG']['tl_galerie']['flickr']['0'] = "Flickr";
$GLOBALS['TL_LANG']['tl_galerie']['flickr']['1'] = "Die Galerie unter Nutzung der Flickr-API benutzen.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethods']['0'] = "Suchmethoden";
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethods']['1'] = "Die Suchmethode für das Finden von Bildern auswählen.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethodsValue']['0'] = "Wert für Suchmethode";
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethodsValue']['1'] = "Den Parameter für die ausgewählte Suchmethode angeben.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptMax']['0'] = "Maximalanzahl";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptMax']['1'] = "Maximalanzahl der Bilder, die geladen werden. Der Maximalwert für diese Option ist 100.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptImageSize']['0'] = "Bildgröße";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptImageSize']['1'] = "Bestimmt die Größe des zu ladenden Hauptbildes. Je größer das Bild, desto langsamer sind Download und Animation. diese Option ermöglicht es, zum jeweiligen Galleria-Layout passende Bilder zu finden.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptThumbSize']['0'] = "Thumbnail-Größe";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptThumbSize']['1'] = "Bestimmt die Größe des zu ladenden Thumbnail-Bildes. image. Je größer das Bild, desto langsamer sind Download und Animation. diese Option ermöglicht es, zum jeweiligen Galleria-Layout passende Thumbnail-Bilder zu finden.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptSort']['0'] = "Sortierung";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptSort']['1'] = "Bestimmt in welcher Reihenfolge die Bilder angezeigt werden.";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptDescription']['0'] = "Beschreibung";
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptDescription']['1'] = "Standardmäßig benutzt Galleria den Bildtitel. Mit dieser Option (true) ist es möglich, die Bildbeschreibung zu nutzen.";
$GLOBALS['TL_LANG']['tl_galerie']['picasa']['0'] = "Picasa";
$GLOBALS['TL_LANG']['tl_galerie']['picasa']['1'] = "Die Galerie mit der Picasa-API benutzen.";
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethods']['0'] = "Suchmethode";
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethods']['1'] = "Die Suchmethode für das Finden von Bildern auswählen.";
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethodsValue']['0'] = "Wert für Suchmethode";
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethodsValue']['1'] = "Den Parameter für die ausgewählte Suchmethode angeben.";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptMax']['0'] = "Maximalanzahl";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptMax']['1'] = "Maximalanzahl der Bilder, die geladen werden. Der Maximalwert für diese Option ist 100.";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptImageSize']['0'] = "Bildgröße";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptImageSize']['1'] = "Bestimmt die Größe des zu ladenden Hauptbildes. Je größer das Bild, desto langsamer sind Download und Animation. diese Option ermöglicht es, zum jeweiligen Galleria-Layout passende Bilder zu finden. Es kann hier eine beliebige Zahl angegeben werde - aufgrund der großen Zahl an von Picasa generierten Bildgrößen ist es meist möglich, ein Bild in der Zielgröße zu finden.\n\nYou can apply any number here, and the plugin will fetch the closest match. And since Picasa has many different sizes cached, it will most often be a very close match.";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptThumbSize']['0'] = "Thumbnail-Größe";
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptThumbSize']['1'] = "Bestimmt die Größe des zu ladenden Thumbnail-Bildes. image. Je größer das Bild, desto langsamer sind Download und Animation. diese Option ermöglicht es, zum jeweiligen Galleria-Layout passende Thumbnail-Bilder zu finden.";
$GLOBALS['TL_LANG']['tl_galerie']['history']['0'] = "History";
$GLOBALS['TL_LANG']['tl_galerie']['history']['1'] = "Das Galleria-History-Plugin erweitert die Galerie um #Hashtags für Permalinks und einen vollständig funktionierenden 'Zurück'-Button im Browser. Diese Option ist im Fullscreen-Modus besonders nützlich. Das Plugin fügt der URL ein Element '<a>#/[id]</a> hinzu und übergibt einen für den Browser notwednigen Code für die 'Zurück'-Funktion. Zudem ermöglicht diese Funktion Permalinks nach dem Muster http://mygalleria.com/#/4 - bei dessen Aufruf dann das 5. Bild einer Galerie gezeigt wird (die erste ID ist #0 ...)";
$GLOBALS['TL_LANG']['tl_galerie']['undefined'] = "Nicht definiert.";
$GLOBALS['TL_LANG']['tl_galerie']['fade'] = "Überblenden";
$GLOBALS['TL_LANG']['tl_galerie']['flash'] = "Überblendet zwischen den Einzelbildern zur Hintergundfarbe";
$GLOBALS['TL_LANG']['tl_galerie']['pulse'] = "Entfernt das Bild schnell und blendet dann zum nächsten Bild über.";
$GLOBALS['TL_LANG']['tl_galerie']['slide'] = "Verschiebt das Bild in Abhängigkeit zur Bildposition (Slide-Effekt)";
$GLOBALS['TL_LANG']['tl_galerie']['fadeslide'] = "Blendet das aktuelle Bild aus und gleichzeitig das nächste ein.";
$GLOBALS['TL_LANG']['tl_galerie']['doorslide'] = "Verschiebt die Bilder in Gegenrichtung (Slide-Effekt)";
$GLOBALS['TL_LANG']['tl_galerie']['false'] = "Nein";
$GLOBALS['TL_LANG']['tl_galerie']['true'] = "Ja";
$GLOBALS['TL_LANG']['tl_galerie']['empty'] = "Leer";
$GLOBALS['TL_LANG']['tl_galerie']['numbers'] = "Zahlen";
$GLOBALS['TL_LANG']['tl_galerie']['auto'] = "Automatisch";
$GLOBALS['TL_LANG']['tl_galerie']['landscape'] = "Querformat (landscape)";
$GLOBALS['TL_LANG']['tl_galerie']['portrait'] = "Hochformat (portrait)";
$GLOBALS['TL_LANG']['tl_galerie']['search'] = "Suche";
$GLOBALS['TL_LANG']['tl_galerie']['tags'] = "Tags";
$GLOBALS['TL_LANG']['tl_galerie']['user'] = "Benutzer";
$GLOBALS['TL_LANG']['tl_galerie']['set'] = "Satz";
$GLOBALS['TL_LANG']['tl_galerie']['gallery'] = "Galerie";
$GLOBALS['TL_LANG']['tl_galerie']['groupsearch'] = "Gruppen-Suche";
$GLOBALS['TL_LANG']['tl_galerie']['group'] = "Gruppe";
$GLOBALS['TL_LANG']['tl_galerie']['small'] = "klein";
$GLOBALS['TL_LANG']['tl_galerie']['thumb'] = "Thumbnail";
$GLOBALS['TL_LANG']['tl_galerie']['medium'] = "Mittel";
$GLOBALS['TL_LANG']['tl_galerie']['big'] = "Groß";
$GLOBALS['TL_LANG']['tl_galerie']['original'] = "Original";
$GLOBALS['TL_LANG']['tl_galerie']['date-posted-asc'] = "Aufsteigend nach Datum des Postings";
$GLOBALS['TL_LANG']['tl_galerie']['date-posted-desc'] = "Absteigend nach Datum des Postings";
$GLOBALS['TL_LANG']['tl_galerie']['date-taken-asc'] = "Aufsteigend nach Datum der Aufnahme";
$GLOBALS['TL_LANG']['tl_galerie']['date-taken-desc'] = "Absteigend nach Datum der Aufnahme";
$GLOBALS['TL_LANG']['tl_galerie']['interestingness-desc'] = "Interestingness (absteigend)";
$GLOBALS['TL_LANG']['tl_galerie']['interestingness-asc'] = "Interestingness (aufsteigend)";
$GLOBALS['TL_LANG']['tl_galerie']['relevance'] = "Relevanz";
$GLOBALS['TL_LANG']['tl_galerie']['useralbum'] = "User-Album";
$GLOBALS['TL_LANG']['tl_galerie']['vimeo_options'] = "{ title: 0, byline: 0, portrait: 0, color: 'aaaaaa'}";
$GLOBALS['TL_LANG']['tl_galerie']['youtube_options'] = "{ modestbranding: 1, autohide: 1, color: 'white', hd: 1, rel: 0, showinfo: 0}";
$GLOBALS['TL_LANG']['tl_galerie']['dailymotion_options'] = "{ foreground: '#EEEEEE', highlight: '#5BCEC5', background: '#222222', logo: 0, hideInfos: 1}";
$GLOBALS['TL_LANG']['tl_galerie']['label_datas'] = "Elemente";
$GLOBALS['TL_LANG']['tl_galerie']['label_data'] = "Element";
$GLOBALS['TL_LANG']['tl_galerie']['label_image'] = "Bild";
$GLOBALS['TL_LANG']['tl_galerie']['label_images'] = "Bilder";
$GLOBALS['TL_LANG']['tl_galerie']['label_video'] = "Video";
$GLOBALS['TL_LANG']['tl_galerie']['label_videos'] = "Videos";
$GLOBALS['TL_LANG']['tl_galerie']['label_iframe'] = "Iframe";
$GLOBALS['TL_LANG']['tl_galerie']['label_iframes'] = "Iframes";
$GLOBALS['TL_LANG']['tl_galerie']['title_legend'] = "Titel und Alias";
$GLOBALS['TL_LANG']['tl_galerie']['themes_legend'] = "Themes";
$GLOBALS['TL_LANG']['tl_galerie']['dimensions_legend'] = "Größen";
$GLOBALS['TL_LANG']['tl_galerie']['effects_legend'] = "Effekte";
$GLOBALS['TL_LANG']['tl_galerie']['navigation_legend'] = "Navigation";
$GLOBALS['TL_LANG']['tl_galerie']['publish_legend'] = "Veröffentlichen";
$GLOBALS['TL_LANG']['tl_galerie']['lightbox_legend'] = "Lightbox";
$GLOBALS['TL_LANG']['tl_galerie']['images_legend'] = "Bildeinstellungen";
$GLOBALS['TL_LANG']['tl_galerie']['autoplay_legend'] = "Slideshow";
$GLOBALS['TL_LANG']['tl_galerie']['carousel_legend'] = "Karussell";
$GLOBALS['TL_LANG']['tl_galerie']['show_legend'] = "Anzeige";
$GLOBALS['TL_LANG']['tl_galerie']['thumbnails_legend'] = "Vorschaubilder (Thumbnails)";
$GLOBALS['TL_LANG']['tl_galerie']['extend_legend'] = "Experteneinstellungen";
$GLOBALS['TL_LANG']['tl_galerie']['flickr_legend'] = "Flickr";
$GLOBALS['TL_LANG']['tl_galerie']['history_legend'] = "History-Plugin";
$GLOBALS['TL_LANG']['tl_galerie']['error_legend'] = "Fehlerbehandlung";
$GLOBALS['TL_LANG']['tl_galerie']['fullscreen_legend'] = "Fullscreen-Unterstützung";
$GLOBALS['TL_LANG']['tl_galerie']['picasa_legend'] = "Picasa";
$GLOBALS['TL_LANG']['tl_galerie']['video_legend'] = "Video";
$GLOBALS['TL_LANG']['tl_galerie']['idle_legend'] = "Idle-Modus";
$GLOBALS['TL_LANG']['tl_galerie']['new']['0'] = "Neue Galerie";
$GLOBALS['TL_LANG']['tl_galerie']['new']['1'] = "Eine neue Galerie erstellen";
$GLOBALS['TL_LANG']['tl_galerie']['edit']['0'] = "Bilder dieser Galerie bearbeiten";
$GLOBALS['TL_LANG']['tl_galerie']['edit']['1'] = "Bilder der Galerie mit der ID %s bearbeiten";
$GLOBALS['TL_LANG']['tl_galerie']['editheader']['0'] = "Einstellungen dieser Galerie bearbeiten";
$GLOBALS['TL_LANG']['tl_galerie']['editheader']['1'] = "Einstellungen der Galerie mit der ID %s bearbeiten";
$GLOBALS['TL_LANG']['tl_galerie']['copy']['0'] = "Kopieren";
$GLOBALS['TL_LANG']['tl_galerie']['copy']['1'] = "Die Galerie mit der ID %s kopieren";
$GLOBALS['TL_LANG']['tl_galerie']['delete']['0'] = "Löschen";
$GLOBALS['TL_LANG']['tl_galerie']['delete']['1'] = "Die Galerie mit der ID %s löschen";
$GLOBALS['TL_LANG']['tl_galerie']['toggle']['0'] = "Veröffentlichen / Verbergen";
$GLOBALS['TL_LANG']['tl_galerie']['toggle']['1'] = "Die Galerie mit der ID %s veröffentlichen / verbergen";
$GLOBALS['TL_LANG']['tl_galerie']['show']['0'] = "Galerie-Details";
$GLOBALS['TL_LANG']['tl_galerie']['show']['1'] = "Die Details der Galerie mit der ID %s anzeigen";
 
?>
